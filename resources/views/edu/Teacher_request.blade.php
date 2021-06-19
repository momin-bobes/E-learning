@extends('layouts.app3')

@section('content')

@if($user->Type=="admin")

    <!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>




<div class="container "style="margin-top: 100px;  ">
    @if(count($Teachers)>0)

        <h2 style="color: #6ebca8; margin-top: 10px " >Teachers Requests</h2>
        <table class="table" style="width:900px;" >
            <thead>
            <tr >
                <th  style="color: #6ebca8; margin-top: 120px margin-left:200px">Firstname</th>  &nbsp;   &nbsp;
                <th  style="color: #6ebca8; margin-top: 10px margin-left:200px">Email</th>   &nbsp;   &nbsp;
                <th  style="color: #6ebca8; margin-top: 10px  margin-left:200px">Your CV</th>   &nbsp;   &nbsp;
            </tr>
            </thead>
            <tbody>
            @foreach($Teachers as $Teacher)

                <tr  class="info">

                    <td >{{$Teacher->name}}</td>
                    <td >{{$Teacher->email}}</td>
                    <td ><object data="files/{{$Teacher->cv_fisdle}}" type="application/pdf" width="800" height="200">
                            <a href="files/{{$Teacher->cv_file}}">{{$Teacher->cv_file}}</a>


                        </object></td>

                    <td>
                        {!! Form::open(['action' => 'teacher_req@store','method'=>'POST','files' => true] ) !!}
                        <input type="hidden" value="{{ $Teacher->id }}" name="teacher_id">

                        <button class="btn btn-info" type="submit">
                            {{ __('Accept Teacher') }}
                        </button>





                        <a class="btn btn-info" href="/E-learningProject/E-learning/blog/public/teacher_req/destroy/{{$Teacher->id}}">Remove Teacher</a>

                        {!! Form::close() !!}



                    </td>
                </tr >

            @endforeach

            </tbody>

        </table>
</div>



@endif



@else
    <script>
        // your "Imaginary javascript"
        window.location.href = '{{url("/home")}}';
        // or

    </script>

@endif


</body>
</html>

@endsection
