@extends('layouts.app3')

@section('content')


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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    @if(count($students)>0)

        <h2 style="color: #6ebca8; margin-top: 10px " >Top Student</h2>
        <table class="table" style="width:900px;" >
            <thead>
            <tr >
                <th  style="color: #6ebca8; margin-top: 120px margin-left:200px">Rank</th>  &nbsp;   &nbsp;
                <th  style="color: #6ebca8; margin-top: 120px margin-left:200px">Firstname</th>  &nbsp;   &nbsp;
                <th  style="color: #6ebca8; margin-top: 10px  margin-left:200px">Marks rate</th>   &nbsp;   &nbsp;
            </tr>
            </thead>
            <tbody>
            @php
                $counter=0;
            @endphp
            @foreach($students as $student)
                @php
                    $counter=$counter+1;
                @endphp
                <tr  class="info">

                    <td >{{$counter}}</td>


                    <td >{{$student->name}}</td>
                    <td >{{$student->avgMark}}</td>


                </tr >

            @endforeach

            </tbody>

        </table>
</div>



@endif




</body>
</html>

@endsection
