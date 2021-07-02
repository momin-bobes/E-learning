{{--@extends('layouts.app3')--}}

{{--@section('content')--}}
@extends('layouts.appnew')

@section('content')
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./css/lessons/viewclassess.css" />



    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>View, Classes!</title>

</head>

<body style="background-image: url(./images/Classes/v1.jpg); background-size: cover; ">

@if($user->class==='7')

    <div class="timeline-container">
        <div class="event animate__animated animate__rubberBand">
            <div class="event-date animate__animated animate__rubberBand">Seventh grade</div>
            <h2 style="text-align: center;"class="fade-in">  الصف السابع  </h2>
            <div class="timeline-content ">
                <div class="content3">
                    <form action="./Classes/seven/" method="get">
                        </br>
                        <input type="submit" value=" start" class="lessonbutton1">

                    </form>
                </div>
            </div>
        </div>

        <div class="event animate__animated animate__bounceInDown">
            <div class="event-date animate__animated animate__bounceInDown"> Eighth grade</div>
            <h2 style="text-align: center;"class="fade-in"> الصف الثامن </h2>
            <div class="timeline-content  ">
                <div class="content3">
                    <form action="./Classes/eight/" method="get">
                        </br>
                        <input type="submit" value=" start" class="lessonbutton1" disabled>

                    </form>
                </div>
            </div>
        </div>

        <div class="event animate__animated animate__fadeInLeft ">
            <div class="event-date animate__animated animate__fadeInLeft">Ninth grade</div>
            <h2 style="text-align: center;"class="fade-in">الصف التاسع </h2>
            <div class="timeline-content ">
                <div class="content3">
                    <form action="./Classes/ninth/" method="get">
                        </br>
                        <input type="submit" value=" start" class="lessonbutton1" disabled>

                    </form>
                </div>
            </div>
        </div>
        @elseif($user->class==='8'))

        <div class="timeline-container">
            <div class="event animate__animated animate__rubberBand">
                <div class="event-date animate__animated animate__rubberBand">Seventh grade</div>
                <h2 style="text-align: center;"class="fade-in">  الصف السابع  </h2>
                <div class="timeline-content ">
                    <div class="content3">
                        <form action="./Classes/seven/" method="get">
                            </br>
                            <input type="submit" value=" start" class="lessonbutton1">

                        </form>
                    </div>
                </div>
            </div>

            <div class="event animate__animated animate__bounceInDown">
                <div class="event-date animate__animated animate__bounceInDown"> Eighth grade</div>
                <h2 style="text-align: center;"class="fade-in"> الصف الثامن </h2>
                <div class="timeline-content  ">
                    <div class="content3">
                        <form action="./Classes/eight/" method="get">
                            </br>
                            <input type="submit" value=" start" class="lessonbutton1">

                        </form>
                    </div>
                </div>
            </div>

            <div class="event animate__animated animate__fadeInLeft ">
                <div class="event-date animate__animated animate__fadeInLeft">Ninth grade </div>
                <h2 style="text-align: center;"class="fade-in">الصف التاسع </h2>
                <div class="timeline-content ">
                    <div class="content3">
                        <form action="./Classes/ninth/" method="get">
                            </br>
                            <input type="submit" value=" start" class="lessonbutton1" disabled>

                        </form>
                    </div>
                </div>
            </div>
            @elseif($user->class==='9' || $user->class==='max' || $user->class==='teacher')

                <div class="timeline-container">
                    <div class="event animate__animated animate__rubberBand">
                        <div class="event-date animate__animated animate__rubberBand">Seventh grade</div>
                        <h2 style="text-align: center;"class="fade-in">  الصف السابع  </h2>
                        <div class="timeline-content ">
                            <div class="content3">
                                <form action="./Classes/seven/" method="get">
                                    </br>
                                    <input type="submit" value=" start" class="lessonbutton1">

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="event animate__animated animate__bounceInDown">
                        <div class="event-date animate__animated animate__bounceInDown"> Eighth grade</div>
                        <h2 style="text-align: center;"class="fade-in"> الصف الثامن </h2>
                        <div class="timeline-content  ">
                            <div class="content3">
                                <form action="./Classes/eight/" method="get">
                                    </br>
                                    <input type="submit" value=" start" class="lessonbutton1">

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="event animate__animated animate__fadeInLeft ">
                        <div class="event-date animate__animated animate__fadeInLeft">Ninth grade</div>
                        <h2 style="text-align: center;"class="fade-in">الصف التاسع </h2>
                        <div class="timeline-content ">
                            <div class="content3">
                                <form action="./Classes/ninth/" method="get">
                                    </br>
                                    <input type="submit" value=" start" class="lessonbutton1">

                                </form>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Optional JavaScript; choose one of the two! -->

                    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
                    </script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
                    </script>

</body>

</html>
{{--@endsection--}}
@endsection
