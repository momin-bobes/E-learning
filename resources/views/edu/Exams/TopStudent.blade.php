@extends('layouts.app3')

@section('content')


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
            max-width: 900px;
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

<section>
    <div class="set">
        <div> <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/star3.png">  </div>
        <div> <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/star2.png">  </div>


        <div> <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/star2.png">  </div>
        <div> <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/star3.png">  </div>
        <div> <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/star2.png">  </div>


        <div> <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/star2.png">  </div>
    </div>
    <div class="set set2">
        <div> <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/star.png">  </div>
        <div> <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/star2.png">  </div>
        <div> <img src=" http://localhost/E-learningProject/E-learning/blog/public/images/Classes/favorite.png">  </div>
        <div> <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/star.png">  </div>
        <div> <img src=" http://localhost/E-learningProject/E-learning/blog/public/images/Classes/star.png">  </div>
        <div> <img src=" http://localhost/E-learningProject/E-learning/blog/public/images/Classes/favorite.png">  </div>
        <div> <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/star.png">  </div>
        <div> <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/star2.png">  </div>
        <div> <img src=" http://localhost/E-learningProject/E-learning/blog/public/images/Classes/favorite.png">  </div>
        <div> <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/star.png">  </div>
        <div> <img src=" http://localhost/E-learningProject/E-learning/blog/public/images/Classes/star.png">  </div>
        <div> <img src=" http://localhost/E-learningProject/E-learning/blog/public/images/Classes/favorite.png">  </div>
    </div>
    <div class="set set3">
        <div> <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/star.png">  </div>
        <div> <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/star2.png">  </div>
        <div> <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/star2.png">  </div>
        <div> <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/star.png">  </div>
        <div> <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/star2.png">  </div>
        <div> <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/star2.png">  </div>

    </div>



    <div class="table_responsive">


        @if(count($students)>0)


            <table  >
                <thead>
                <tr >
                    <th >Rank</th>  &nbsp;   &nbsp;
                    <th >Firstname</th>  &nbsp;   &nbsp;
                    <th  >Marks rate</th>   &nbsp;   &nbsp;
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
                    <tr>

                        <td >{{$counter}}</td>


                        <td >{{$student->name}}</td>
                        <td >{{$student->avgMark}}</td>


                    </tr >

                @endforeach

                </tbody>

            </table>
    </div>



    @endif


</section>

</body>
</html>

@endsection
