<?php

namespace App\Http\Controllers;

use App\Classes_content;
use App\Models\Practical;
use App\Models\Attachment;
use App\Services\FilesHandlingService;
use App\Models\Lesson;
use App\User;
use Illuminate\Http\Request;

class PracticalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $user=Practical::all();
        return view('edu.practicals.index', ['practicals' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $class=Classes_content::all();
        return view('edu.practicals.create')->with('class',$class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param FilesHandlingService $fileHandlingService
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, FilesHandlingService $fileHandlingService)
    {
        $request->validate([
            // 16
            'title' => ['required', 'string', 'max:128', 'min:2'],
            // 32
            'overview' => ['required', 'string', 'max:512', 'min:2'],
            // 64
            'explaination' => ['required', 'string', 'max:4096', 'min:2'],
            'attachments' => ['nullable', 'array'],
            'attachments.*' => ['nullable', 'array'],
            'attachments.*.uploaded' => ['nullable', 'file'],
            'attachments.*.name' => ['nullable', 'string', 'in:'. implode(",", Attachment::$types) ],
            'files_names' => ['nullable', 'array'],
            'files_names.*' => ['nullable', 'string'],
        ]);
        $data = $request->all();
        unset($data['attachments']);
        $practical = Practical::create($data);
        if($request->has('attachments')) {
            $fileHandlingService->setPractical($practical);
            foreach($request->attachments as $item) {
                $file = array_key_exists('uploaded', $item) ? $item['uploaded'] : null;
                $name = array_key_exists('name', $item) ? $item['name'] : null;
                $fileHandlingService->storeFile($file, $name);
            }
        }
        return redirect()->route('practicals.index')->with(['msg' => 'Practical session created successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Practical  $practical
     * @return \Illuminate\Http\Response
     */
    public function show(Practical $practical)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Practical  $practical
     * @return \Illuminate\Http\Response
     */
    public function edit(Practical $practical)
    {
        $class=Classes_content::all();
        $user=Practical::Where('id','=',$practical->id)->First();


        return view('edu.practicals.edit')->with('practical',$user)->with('class',$class);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Practical  $practical
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Practical $practical, FilesHandlingService $fileHandlingService)
    {
        $request->validate([
            'title' => ['nullable', 'string', 'max:128', 'min:2'],
            'overview' => ['nullable', 'string', 'max:512', 'min:2'],
            'explaination' => ['nullable', 'string', 'max:4096', 'min:2'],
            'attachments' => ['nullable', 'array'],
            'attachments.*' => ['nullable', 'array'],
            'attachments.*.uploaded' => ['nullable', 'file'],
            'attachments.*.name' => ['nullable', 'string'],
            'files_names' => ['nullable', 'array'],
            'files_names.*' => ['nullable', 'string'],
        ]);
        $data = $request->all();
        unset($data['attachments']);
        $practical->update($data);
        if($request->has('attachments')) {
            $fileHandlingService->setPractical($practical);
            foreach($request->attachments as $item) {
                $file = array_key_exists('uploaded', $item) ? $item['uploaded'] : null;
                $name = array_key_exists('name', $item) ? $item['name'] : null;
                $fileHandlingService->storeFile($file, $name);
            }
        }
        return redirect()->route('practicals.index')->with(['msg' => 'Practical session updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Practical  $practical
     * @return \Illuminate\Http\Response
     */
    public function destroy(Practical $practical)
    {
        foreach($practical->attachments as $attachment) {
            $attachment->deleteWithFile();
        }
        $practical->delete();
        // handling attachments
        return redirect()->route('practicals.index')->with(['msg' => 'Practical session deleted successfully.']);
    }
}
