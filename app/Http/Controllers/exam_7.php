<?php

namespace App\Http\Controllers;

use App\exam_titles;
use http\Message\Body;
use Illuminate\Http\Request;
use function GuzzleHttp\Psr7\copy_to_string;
use function MongoDB\BSON\toJSON;

class exam_7 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {
        $Teachers= \App\teacher_req::where('Type','=','teacher')->get();

        $exams=\App\exam_7::where('category','=',$name)->get();
        $exam_title=exam_titles::where('key','=',$name)->get();
        return view('edu.Exams.test')->with('exams',$exams)->with('exam_title',$exam_title);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = array(
            'status' => 'success',
            'msg' => $request->radioValue,

        );

        $test=response()->json(($response));








        return response()->json($response);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
