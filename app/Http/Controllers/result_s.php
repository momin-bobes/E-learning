<?php

namespace App\Http\Controllers;

use App\student_avg;
use App\Student_progress;
use App\student_progresses;
use App\User;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;
use Illuminate\Support\Str;


class result_s extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {

        $myString = $name;
        $myArray = explode('&', $myString);



        $this->saveResult($myArray[0],$myArray[1]);

        return view('edu.Exams.result');
    }
    public function getmobileresult($name,$name2)
    {

        $myString = $name;
        $myArray = explode('&', $myString);



        $this->saveResult($myArray[0],$myArray[1]);

        return view('edu.Exams.result');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

    public function saveResult($percentage,$title)
    {
        $user = \Auth::user();
        if ($user!==null) {

            $users = $user->name;
            $mark=\App\result_s::where([['title','=',$title],['name','=',$user->name]])->get();
            if(count($mark)!=0)
            {
                if ($percentage>=50) {
                    $res = 'success';
                    if(Str::contains($title, 'final_'))
                    {
                        $newclass=$user->class+1;
                        user::where('id', $user->id)
                            ->update(['class' => $newclass,

                                ]
                            );


                    }




                }
                else
                    $res='failed';

                $mark->mark=$percentage;
                $results = \App\result_s::where('title','=', $title)
                    ->where('name','=',$user->name)
                    ->update([
                        'mark' =>$percentage,
                        'result'=>$res
                    ]);



            }
            else
            {
                $res=0;
                if ($percentage>50) {
                    $res = 'success';
                    if(Str::contains($title, 'final_'))
                    {
                        $newclass=$user->class+1;
                        user::where('id', $user->id)
                            ->update(['class' => $newclass,

                                ]
                            );


                    }





                }
                else
                    $res='failed';


               \App\result_s::create([
                   'user_id'=>$user->id,
                    'name' => $user->name,
                    'title' => $title,
                    'mark' =>  $percentage,
                   'result'=>$res

                ]);
            }

        }
        $results=\App\result_s::all();
        $marks=0;
        $number=0;
        foreach ($results as $result)
        {
            if ($result->name==$user->name)
            {
                $marks=$marks+$result->mark;
                $number=$number+1;
        }
        }
        $resultss=$marks/$number;
    /// calu student avg
        $student_avgs=\App\student_avg::where('name','=', $user->name)->get();
        if (student_avg::where('name', '=', $user->name)->count() == 0)
        {
            \App\student_avg::create([
                'name' => $user->name,
                'avgMark' => $resultss

            ]);
        }
        else
        {

            student_avg::where('name', $user->name)
                ->update(['avgMark' =>  $resultss]
                );
        }


        // calc Student progress
        if ($percentage>50) {
            if (student_progresses::where('name', '=', $user->name)->count() == 0) {
                \App\student_progresses::create([
                    'name' => $user->name,
                    'seven_p' => '35',
                    'eighth_p' => '0',
                    'ninth_p' => '0',


                ]);
            } else {
                if ($title==='seventh_1' or $title==='seventh_2' or $title==='seventh_3')
                {
                    $markss=\App\student_progresses::where('name','=', $user->name)->first();

                    student_progresses::where('name', $user->name)
                        ->update(['seven_p' =>$markss->sevem_p+(35)]
                        );

                }


            }
        }


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
