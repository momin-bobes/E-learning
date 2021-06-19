<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <!---<title>Animated Sidebar Menu | CodingLab</title>--->
    <link rel="stylesheet" href="/E-learningProject/E-learning/blog/public/css/lessons/style.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>

<div class="wrapper">
    <input type="checkbox" id="btn" hidden>
    <label for="btn" class="menu-btn">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
    </label>
    <nav id="sidebar">
        <div class="title">Side Menu</div>
        <ul class="list-items">
            <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="http://localhost/E-learningProject/E-learning/blog/public/Classes/view/{{$class->classname}}/{{$class->classnum}}/obj"><i class="fas fa-sliders-h"></i>الأهداف</a></li>
            <li><a href="http://localhost/E-learningProject/E-learning/blog/public/Classes/view/{{$class->classname}}/{{$class->classnum}}/images"><i class="fa fa-file-image-o"></i>صور</a></li>
            <li><a href="http://localhost/E-learningProject/E-learning/blog/public/Classes/view/{{$class->classname}}/{{$class->classnum}}/video"><i class="fa fa-fast-backward"></i>فيديو</a></li>

            <li><a href="http://localhost/E-learningProject/E-learning/blog/public/Classes/view/{{$class->classname}}/{{$class->classnum}}/paper"><i class="fa fa-file-pdf-o" ></i>أوراق عمل </a></li>
            <li><a href="http://localhost/E-learningProject/E-learning/blog/public/Classes/view/{{$class->classname}}/{{$class->classnum}}/think"><i class="fas fa-user"></i>استنتج</a></li>
            <li><a href="#"><i class="fas fa-globe-asia"></i>جلسة عملي </a></li>
            <li><a href="http://localhost/E-learningProject/E-learning/blog/public/Classes/view/{{$class->classname}}/{{$class->classnum}}/learn"><i class="fa fa-text-height"></i> تعلمت </a></li>
            <li><a href="http://localhost/E-learningProject/E-learning/blog/public/Classes/view/{{$class->classname}}/{{$class->classnum}}/try"><i class="fa fa-text-height"></i> اختبر نفسي  </a></li>

        </ul>
    </nav>
</div>

<!-- title -->
<div class="container " style="background: url(http://localhost/E-learningProject/E-learning/blog/public/images/Classes/v1.jpg);">
    <div class="fade-in">
        <span class="text1">{{$class->classtitle}}</span>
        <span class="text2"> {{$class->classsubtitle}}   </span>
    </div>

</div>
<!-- ///////////////end/////////////// -->
<!-- ///////////background star/////////////// -->
<section>
    <div class="set">
        <div> <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/star3.png">  </div>
        <div> <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/star2.png">  </div>


        <div> <img src=" http://localhost/E-learningProject/E-learning/blog/public/images/Classes/star2.png">  </div>

    </div>
    <div class="set set2">
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
        <div> <img src=" http://localhost/E-learningProject/E-learning/blog/public/images/Classes/star2.png">  </div>


    </div>
</section>
</body>
</html>
