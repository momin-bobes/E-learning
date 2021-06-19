<?php

namespace App\Http\Controllers;

use App\Classconc;
use App\Classes_content;
use App\Classimages;
use App\Classobj;
use App\exam_titles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Response;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();




        return view('edu.Classes.viewClasses')->with('user',$user);
    }
    public function index2($name)
    {
        $user = \Auth::user();

        $Teachers= Classes_content::where('classname','=',$name)->get();

        $Teachers2= exam_titles::where('key','like','seventh%')->get();


        return view('edu.Classes.pageVeiwLesson.viewclasses')->with('Teachers',$Teachers)->with('Teachers2',$Teachers2);
    }

    public function viewclass($name,$name2)
    {
        $user = \Auth::user();


        $class=Classes_content::where([['classname','=',$name],['classnum','=',$name2]])->First();

//        $class= Classes_content::where('classname','=',$name)->get();



        return view('edu.Classes.lesson.index')->with('user',$user)->with('class',$class);
    }

    public function viewobj($name,$name2)
    {
        $user = \Auth::user();

        $class=Classes_content::where([['classname','=',$name],['classnum','=',$name2]])->First();
        $obj= Classobj::where('classname','=',$class->obj)->First();




        return view('edu.Classes.lesson.objectives')->with('user',$user)->with('obj',$obj);
    }

    public function viewimages($name,$name2)
    {
        $user = \Auth::user();

        $class=Classes_content::where([['classname','=',$name],['classnum','=',$name2]])->First();
        $images= Classimages::where('classname','=',$class->images)->First();


        return view('edu.Classes.lesson.images')->with('user',$user)->with('images',$images);
    }

    public function viewvideo($name,$name2)
    {
        $user = \Auth::user();

        $class=Classes_content::where([['classname','=',$name],['classnum','=',$name2]])->First();
//        $video= Classimages::where('classname','=',$class->video)->First();



        return view('edu.Classes.lesson.video')->with('user',$user)->with('class',$class);
    }

    public function viewpaper($name,$name2)
    {
        $class=Classes_content::where([['classname','=',$name],['classnum','=',$name2]])->First();

        $filename = $class->paper;
        $path = storage_path($filename);
        return Response::make(file_get_contents($path), 200, [
            'Content-Type'        => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
        return Response::make(file_get_contents($path), 200, [ 'Content-Type' => 'application/pdf', 'Content-Disposition' => 'inline; filename="'.$filename.'"' ]);




//        return view('edu.Classes.lesson.paper')->with('user',$user);
    }

    public function viewthink($name,$name2)
    {
        $user = \Auth::user();

        $class=Classes_content::where([['classname','=',$name],['classnum','=',$name2]])->First();
        $conc= Classconc::where('classname','=',$class->conclude)->First();



        return view('edu.Classes.lesson.conclude')->with('user',$user)->with('conc',$conc);
    }

    public function viewwork($name,$name2)
    {
        $user = \Auth::user();




        return view('edu.Classes.lesson.objectives')->with('user',$user);
    }

    public function viewlearn($name,$name2)
    {
        $user = \Auth::user();

        $class=Classes_content::where([['classname','=',$name],['classnum','=',$name2]])->First();
        $conc= Classconc::where('classname','=',$class->learn)->First();



        return view('edu.Classes.lesson.learn')->with('class',$class)->with('conc',$conc);
    }

    public function viewtry($name,$name2)
    {
        $user = \Auth::user();


        $class=Classes_content::where([['classname','=',$name],['classnum','=',$name2]])->First();
        $conc= Classconc::where('classname','=',$class->exams)->First();



        return view('edu.Classes.lesson.exam')->with('user',$user)->with('class',$class);
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
        //
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
