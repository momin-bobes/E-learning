@extends('layouts.app3')

@section('content')


@if($user->Type=="admin")

    <!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/E-learningProject/E-learning/blog/public/css/teacherStyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .table_responsive {
            max-width: 800px;
            border: 1px solid rgb(101, 104, 245);
            background-color: #efefef33;
            padding: 15px;
            overflow: auto;
            margin: auto;
            margin-top: 10%;
            border-radius: 4px;
        }
    </style>
</head>

<body>




<div class="table_responsive">
    @if(count($Teachers)>0)


        <table>
            <thead>
            <tr>
                <th>Firstname</th>
                <th>Email</th>
                <th>Remove Teacher</th>
            </tr>
            </thead>
            <tbody>
            @foreach($Teachers as $Teacher)
                @if(($Teacher->id)%2!=0)
                    <tr>

                        <td>{{$Teacher->name}}</td>
                        <td>{{$Teacher->email}}</td>
                        <td>
                            <a class="button button1" href="/E-learningProject/E-learning/blog/public/Teachers/destroy/{{$Teacher->id}}">Remove Teacher</a>


                        </td>

                    </tr >
                    <tr>

                        <td>{{$Teacher->name}}</td>
                        <td>{{$Teacher->email}}</td>
                        <td>
                            <a class="button button1" href="/E-learningProject/E-learning/blog/public/Teachers/destroy/{{$Teacher->id}}">Remove Teacher</a>


                        </td>


                    </tr >
                @endif
                @if(($Teacher->id)%2==0)
                    <tr>

                        <td>{{$Teacher->name}}</td>
                        <td>{{$Teacher->email}}</td>
                        <td>
                            <a class="button button1" href="/E-learningProject/E-learning/blog/public/Teachers/destroy/{{$Teacher->id}}">Remove Teacher</a>


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
