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




<div class="container "style="margin-top: 100px">
    @if(count($Teachers)>0)

        <h2 style="color: #6ebca8;">Teachers</h2>
        <table class="table">
            <thead>
            <tr>
                <th>Firstname</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($Teachers as $Teacher)
                @if(($Teacher->id)%2!=0)
                    <tr  class="info">

                        <td>{{$Teacher->name}}</td>
                        <td>{{$Teacher->email}}</td>
                        <td>
                            <a class="btn btn-info" href="/E-learningProject/E-learning/blog/public/Teachers/destroy/{{$Teacher->id}}">Remove Teacher</a>


                        </td>

                    </tr >
                @endif
                @if(($Teacher->id)%2==0)
                    <tr  class="info">

                        <td>{{$Teacher->name}}</td>
                        <td>{{$Teacher->email}}</td>
                        <td>
                            <a class="btn btn-info" href="/E-learningProject/E-learning/blog/public/Teachers/destroy/{{$Teacher->id}}">Remove Teacher</a>


                        </td>

                    </tr >
                @endif
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
