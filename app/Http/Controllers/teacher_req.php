<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class teacher_req extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Teachers= \App\teacher_req::where('Type','=','teacher')->get();
        $user = \Auth::user();
        return view('edu.Teacher_request')->with('user',$user)->with('Teachers',$Teachers);    }

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
        $Teacher_id=$request->input()['teacher_id'];

        $Teacher=\App\teacher_req::find($Teacher_id);


        \App\User::create([
            'id'=>$Teacher_id,
            'name' => $Teacher->name,
            'email' => $Teacher->email,
            'password' => $Teacher->password,
            'Type'=>'teacher',
            'class'=>'max',
            'image'=>'default123321.jpg'


        ]);
        $Teachers= \App\teacher_req::where('id','=',$Teacher_id)->delete();
        $Teachers= \App\teacher_req::where('Type','=','teacher')->get();
        $user = \Auth::user();

        return view('edu.Teacher_request')->with('user',$user)->with('Teachers',$Teachers);
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
        $Teachers= \App\teacher_req::where('id','=',$id)->delete();
        return redirect('/teacher_req');
    }
}
