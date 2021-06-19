<?php

namespace App\Http\Controllers;

use App\teacher_req;
use App\teacherreq;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Scalar\String_;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Teachers= User::where('Type','=','Teacher')->get();
        $user = \Auth::user();
     return view('edu.teacher')->with('user',$user)->with('Teachers',$Teachers);
    }
    public function test()
    {
        return 12;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('edu.createTeacher');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


       $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
           'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
$s='teacherreq';

        if($files=$request->file('image')){
            $name=$files->getClientOriginalName();
            $files->move('C:\xamppp\htdocs\E-learningProject\E-learning\blog\public\files',$name);
        }
        teacher_req::create([
            'name' => $request->input()['name'],
            'email' => $request->input()['email'],
            'password' => Hash::make($request->input(['password'])),
            'Type'=>'teacher',

            'cv_file'=>$name,

        ]);



        return redirect('Teachers/create')->with('success','Thank you for your Request We will Answer You On Your Email Within 24 Hours');

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
        $Teachers= User::where('id','=',$id)->delete();
        return redirect('/Teachers');

    }
}
