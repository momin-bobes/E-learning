<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Horizontal Timeline Responsive</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'><link rel="stylesheet" href="/E-learningProject/E-learning/blog/public/css/lessons/style1.css">
 <style>

 </style>
</head>
<body style="background-size: cover; background-image: url(http://localhost/E-learningProject/E-learning/blog/public/images/Classes/v1.jpg);">
<!-- partial:index.partial.html -->
<section class="ps-timeline-sec" style="background-size: cover; background-image: url(http://localhost/E-learningProject/E-learning/blog/public/images/Classes/v1.jpg);">
        <div class="container" >
            <ol class="ps-timeline">
                <li>
                    <div class="img-handler-top">
                        <img src="http://www.physology.co.uk/wp-content/uploads/2016/02/ps-elem_03.png" alt=""/>
                    </div>
                    <div class="ps-bot">
                        <h4 style="text-shadow: 2px 2px rgb(214, 101, 236)   ">{{$obj->obj1}}</h4>
                    </div>
                    <span class="ps-sp-top">01</span>
                </li>
                <li>
                    <div class="img-handler-bot">
                        <img src="http://www.physology.co.uk/wp-content/uploads/2016/02/ps-elem_13.png" alt=""/>
                    </div>
                    <div class="ps-top">
                        <h4 style="margin-left: 12px; text-shadow: 2px 2px rgb(214, 101, 236); ">{{$obj->obj2}}</h4>

                    </div>
                    <span class="ps-sp-bot">02</span>
                </li>
                <li>
                    <div class="img-handler-top">
                        <img src="http://www.physology.co.uk/wp-content/uploads/2016/02/ps-elem_03.png" alt=""/>
                    </div>
                    <div class="ps-bot">
                        <h4  style= "margin-left: 30px; text-shadow: 2px 2px rgb(214, 101, 236) ">
                            {{$obj->obj3}}
                        </h4>
                    </div>
                    <span class="ps-sp-top">03</span>
                </li>
                <li>
                    <div class="img-handler-bot">
                        <img src="http://www.physology.co.uk/wp-content/uploads/2016/02/ps-elem_13.png" alt=""/>
                    </div>
                    <div class="ps-top">
                        <h4 style= "margin-left: 30px; text-shadow: 2px 2px rgb(214, 101, 236) ">
                            {{$obj->obj4}}
                        </h4>
                    </div>
                    <span class="ps-sp-bot">04</span>
                </li>
            </ol>
        </div>
    </section>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
</body>
</html>
