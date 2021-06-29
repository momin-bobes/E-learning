<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class profile extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        $certs2= \App\result_s::where('user_id','=',$user->id)->get();

        $certs=\App\result_s::where([['user_id','=',$user->id],['result','=','success']])->get();



        return view('edu.profiles.profile')->with('user',$user)->with('certs',$certs);
    }
    public function index2($email)
    {
        $user= \App\User::where('email','=',$email)->First();

//        $certs2= \App\result_s::where('user_id','=',$user->id)->get();
//
//        $certs=\App\result_s::where([['user_id','=',$user->id],['result','=','success']])->get();



        return $user;
    }
    public function progress($name)
    {
        $user= \App\student_progresses::where('name','=',$name)->First();

//        $certs2= \App\result_s::where('user_id','=',$user->id)->get();
//
//        $certs=\App\result_s::where([['user_id','=',$user->id],['result','=','success']])->get();



        return $user;
    }
    public function getresult($key1,$key2)
    {
        $user=\App\result_s::where([['name','=',$key2],['title','like','%'.$key1.'%']])->get();


        return $user;
    }
    public function editProfile()
    {
        $user = \Auth::user();
        $certs2= \App\result_s::where('user_id','=',$user->id)->get();

        $certs=\App\result_s::where([['user_id','=',$user->id],['result','=','success']])->get();



        return view('edu.profiles.editprofile')->with('user',$user)->with('certs',$certs);
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
        return 123;
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
    public function edit(Request $request)
    {
        $user = \Auth::user();
        if ($request->input("name")!=null)
            $user->name=$request->input("name");
        if ($request->input("email")!=null)
            $user->email=$request->input("email");
        if ($request->input("password")!=null)
            $user->password=Hash::make($request->input("password"));



        if($files=$request->file('file')){
            $name=$files->getClientOriginalName();
            $files->move('C:\xamppp\htdocs\E-learningProject\E-learning\blog\public\images\profiles',$name);

            user::where('id', $user->id)
                ->update(['name' => $user->name,
                        'email'=>$user->email,
                        'password'=>$user->password,
                        'image'=>$name]
                );
        }
        else {
            user::where('id', $user->id)
                ->update(['name' => $user->name,
                        'email'=>$user->email,
                        'password'=>$user->password]
                );
        }


        return view('edu.profiles.profile')->with('user', $user);



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
