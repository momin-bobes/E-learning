@extends('layouts.app3')

@section('content')

    <html>

<head>
    <link href="/E-learningProject/E-learning/blog/public/css/viewClasses.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="css/templatemo-style.css"> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>

<body >
<br>
<br>
<section class="preloader">
    <div class="spinner">

        <span class="spinner-rotate"></span>

    </div>
</section>
<section id="cd-timeline" class="cd-container">
    @php
        $names = []
    @endphp


    @foreach ($Teachers2 as $Teacher2)
        @php $names[] = $Teacher2->key
            @endphp
    @endforeach

    @php
        $counter=0;
        $counter2=0;
        $exams=0;
        $lessons=1;

    @endphp
    @foreach($Teachers as $Teacher)
        @if($counter==0)
            @php
                $counter=$counter+1;
                $counter2=$counter2+1;

            @endphp

            <div class="cd-timeline-block" data-aos="fade-up">
        <div class="cd-timeline-img cd-picture">
            <!--<img src="</?php echo URLROOT ?>/public/img/gradeone/cd-icon-picture.svg" alt="Picture">-->
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content content1 info-left" data-aos="fade-right">
            <h3 class="am1">{{$Teacher->classtitle}}</h3> </br>
            <h4 class="am">
                <strong>{{$Teacher->classsubtitle}}</strong>
                </br> </br>
                {{$Teacher->titles}}
            </h4>
            <form action="http://localhost/E-learningProject/E-learning/blog/public/Classes/view/seven/{{$lessons}}" method="get">
                </br>
                <input type="submit" value="إبدأ الدرس" class="lessonbutton1">

            </form>
        </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->
        @php
            $lessons=$lessons+1;

        @endphp
            @if($counter2==4)
                @if($names[$exams]!=null)
                @php
                    $counter2=0;

                @endphp
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-movie">
                            <!--<img src="</?php echo URLROOT ?>/public/img/gradeone/cd-icon-movie.svg" alt="Location">-->
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content content2 info-right"data-aos="fade-up-left">
                            <h3  class=" am1">الإختبار الأول</h3> </br>

                            <h4>هيا بنا نختبر معرفتك في الدروس الثلاث السابقة والانتقال معا للمستوى التالي</h4>
                            <form action="http://localhost/E-learningProject/E-learning/blog/public/exam/{{$names[$exams]}}" method="get">
                                </br>
                                <input type="submit" value="إبدأ الإختبار" class="lessonbutton1" >
                            </form>
                            <!--<span class="cd-date">Feb 14</span>-->
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->
                @php
                $exams=$exams+1;
                @endphp
                @endif
            @endif
        @elseif($counter==1)
            @php
                $counter=$counter+1;
                $counter2=$counter2+1;

            @endphp
            <div class="cd-timeline-block" data-aos="fade-up">
                <div class="cd-timeline-img cd-location">
                    <!--<img src="</?php echo URLROOT ?>/public/img/gradeone/cd-icon-picture.svg" alt="Picture">-->
                </div> <!-- cd-timeline-img -->

                <div class="cd-timeline-content content3 info-left" data-aos="fade-right">
                    <h3 class="am1">{{$Teacher->classtitle}}</h3> </br>
                    <h4 class="am">
                        <strong>{{$Teacher->classsubtitle}}</strong>
                        </br> </br>
                        {{$Teacher->titles}}
                    </h4>
                    <form action="http://localhost/E-learningProject/E-learning/blog/public/Classes/view/seven/{{$lessons}}" method="get">
                        </br>
                        <input type="submit" value="إبدأ الدرس" class="lessonbutton1">

                    </form>
                </div> <!-- cd-timeline-content -->
            </div> <!-- cd-timeline-block -->
            @php
                $lessons=$lessons+1;

            @endphp
            @if($counter2==4)
                @if($names[$exams]!=null)
                    @php
                        $counter2=0;

                    @endphp
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-movie">
                            <!--<img src="</?php echo URLROOT ?>/public/img/gradeone/cd-icon-movie.svg" alt="Location">-->
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content content2 info-right"data-aos="fade-up-left">
                            <h3  class=" am1">الإختبار الأول</h3> </br>

                            <h4>هيا بنا نختبر معرفتك في الدروس الثلاث السابقة والانتقال معا للمستوى التالي</h4>
                            <form action="http://localhost/E-learningProject/E-learning/blog/public/exam/{{$names[$exams]}}" method="get">
                                </br>
                                <input type="submit" value="إبدأ الإختبار" class="lessonbutton1" >
                            </form>
                            <!--<span class="cd-date">Feb 14</span>-->
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->
                    @php
                        $exams=$exams+1;
                    @endphp
                @endif
            @endif
        @elseif($counter==2)
            @php
                $counter=0;
                $counter2=$counter2+1;

            @endphp
            <div class="cd-timeline-block" data-aos="fade-up">
                <div class="cd-timeline-img cd-movie">
                    <!--<img src="</?php echo URLROOT ?>/public/img/gradeone/cd-icon-picture.svg" alt="Picture">-->
                </div> <!-- cd-timeline-img -->

                <div class="cd-timeline-content content2 info-left" data-aos="fade-right">
                    <h3 class="am1">{{$Teacher->classtitle}}</h3> </br>
                    <h4 class="am">
                        <strong>{{$Teacher->classsubtitle}}</strong>
                        </br> </br>
                        {{$Teacher->titles}}
                    </h4>
                    <form action="http://localhost/E-learningProject/E-learning/blog/public/Classes/view/seven/{{$lessons}}" method="get">
                        </br>
                        <input type="submit" value="إبدأ الدرس" class="lessonbutton1">

                    </form>
                </div> <!-- cd-timeline-content -->
            </div> <!-- cd-timeline-block -->
            @php
                $lessons=$lessons+1;

            @endphp
            @if($counter2==4)
                @if($names[$exams]!=null)
                    @php
                        $counter2=0;

                    @endphp
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-movie">
                            <!--<img src="</?php echo URLROOT ?>/public/img/gradeone/cd-icon-movie.svg" alt="Location">-->
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content content2 info-right"data-aos="fade-up-left">
                            <h3  class=" am1">الإختبار الأول</h3> </br>

                            <h4>هيا بنا نختبر معرفتك في الدروس الثلاث السابقة والانتقال معا للمستوى التالي</h4>
                            <form action="http://localhost/E-learningProject/E-learning/blog/public/exam/{{$names[$exams]}}" method="get">
                                </br>
                                <input type="submit" value="إبدأ الإختبار" class="lessonbutton1" >
                            </form>
                            <!--<span class="cd-date">Feb 14</span>-->
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->
                    @php
                        $exams=$exams+1;
                    @endphp
                @endif
            @endif


        @endif

    @endforeach
{{--    <div class="cd-timeline-block">--}}
{{--        <div class="cd-timeline-img cd-movie">--}}
{{--            <!--<img class="img_style" src="</?php echo URLROOT ?>/public/img/gradeone/cd-icon-movie.svg" alt="Movie">-->--}}
{{--        </div> <!-- cd-timeline-img -->--}}

{{--        <div class="cd-timeline-content content2 info-right" data-aos="fade-left">--}}
{{--            <h3 class="am1"> الدرس الثاني</h3> </br>--}}
{{--            <h4 class="am">--}}
{{--                <strong>المحاليل الحمضية </strong> </br>--}}
{{--                </br>--}}
{{--                عدد الوظائف الحمضية - حمض قوي - حمض ضعيف  </br>--}}

{{--            </h4>--}}
{{--            <form>--}}
{{--                </br>--}}
{{--                <input type="submit" value="إبدأ الدرس" class="lessonbutton1">--}}

{{--            </form>--}}
{{--        </div> <!-- cd-timeline-content -->--}}
{{--    </div> <!-- cd-timeline-block -->--}}

{{--    <div class="cd-timeline-block">--}}
{{--        <div class="cd-timeline-img cd-location">--}}
{{--            <!--<img src="</?php echo URLROOT ?>/public/img/gradeone/cd-icon-location.svg" alt="Picture">-->--}}
{{--        </div> <!-- cd-timeline-img -->--}}

{{--        <div class="cd-timeline-content content3 info-left" data-aos="fade-right">--}}
{{--            <h3 class="am1">الدرس الثالث</h3> </br>--}}
{{--            <h4 class="am">--}}
{{--                <strong> المحاليل الأساسية </strong> </br>--}}
{{--                </br>--}}
{{--                عدد الوظائف الاساسية - أساس قوي -أساس ضعيف </br>--}}

{{--            </h4>--}}
{{--            <form>--}}
{{--                </br>--}}
{{--                <input type="submit" value="إبدأ الدرس" class="lessonbutton1">--}}

{{--            </form>--}}
{{--            <!--<span class="cd-date">Jan 24</span>-->--}}
{{--        </div> <!-- cd-timeline-content -->--}}
{{--    </div> <!-- cd-timeline-block -->--}}


{{--    </div>--}}
{{--    <div class="cd-timeline-block">--}}
{{--        <div class="cd-timeline-img cd-movie">--}}
{{--            <!--<img src="</?php echo URLROOT ?>/public/img/gradeone/cd-icon-movie.svg" alt="Location">-->--}}
{{--        </div> <!-- cd-timeline-img -->--}}

{{--        <div class="cd-timeline-content content2 info-left"data-aos="fade-left">--}}
{{--            <h3 class="am1">الدرس الرابع</h3>--}}

{{--            </br>--}}
{{--            <h4 class="am">--}}
{{--                <strong > أنواع التفاعلات الكيمائية </strong> </br>--}}

{{--                </br>--}}
{{--                تفاعلات التحاد - تفاعلات التفكك - تفاعلات الازاحة - تفاعلات التبادل الثنائي--}}
{{--            </h4>--}}
{{--            <form>--}}

{{--                <input type="submit" value="إبدأ الدرس" class="lessonbutton1">--}}
{{--            </form>--}}
{{--            <!-- <span class="cd-date">Feb 18</span>-->--}}
{{--        </div> <!-- cd-timeline-content -->--}}
{{--    </div> <!-- cd-timeline-block -->--}}
{{--    <div class="cd-timeline-block">--}}
{{--        <div class="cd-timeline-img cd-picture">--}}
{{--            <!--<img src="</?php echo URLROOT ?>/public/img/gradeone/cd-icon-picture.svg" alt="Picture">-->--}}
{{--        </div> <!-- cd-timeline-img -->--}}

{{--        <div class="cd-timeline-content content1 info-left"data-aos="fade-up-right">--}}
{{--            <h3 class="am1">الدرس الخامس</h3> </br>--}}
{{--            <h4 class="am1">--}}
{{--                <strong> الأملاح </strong> </br>--}}
{{--                </br>--}}
{{--                الملح - تركيب الملح - ذوبان الملح في الماء--}}
{{--            </h4>--}}
{{--            <form action="">--}}
{{--                </br>--}}
{{--                <input type="submit" value="إبدأ الدرس" class="lessonbutton1">--}}

{{--            </form>--}}
{{--        </div> <!-- cd-timeline-content -->--}}
{{--    </div> <!-- cd-timeline-block -->--}}



{{--    <div class="cd-timeline-block">--}}
{{--        <div class="cd-timeline-img cd-movie">--}}
{{--            <!--<img src="</?php echo URLROOT ?>/public/img/gradeone/cd-icon-movie.svg" alt="Location">-->--}}
{{--        </div> <!-- cd-timeline-img -->--}}

{{--        <div class="cd-timeline-content content2 info-right"data-aos="fade-up-left">--}}
{{--            <h3  class=" am1">الإختبار الأول</h3> </br>--}}

{{--            <h4>هيا بنا نختبر معرفتك في الدروس الثلاث السابقة والانتقال معا للمستوى التالي</h4>--}}
{{--            <form>--}}
{{--                </br>--}}
{{--                <input type="submit" value="إبدأ الإختبار" class="lessonbutton1" disabled>--}}
{{--            </form>--}}
{{--            <!--<span class="cd-date">Feb 14</span>-->--}}
{{--        </div> <!-- cd-timeline-content -->--}}
{{--    </div> <!-- cd-timeline-block -->--}}

{{--    <div class="cd-timeline-block">--}}
{{--        <div class="cd-timeline-img cd-picture">--}}
{{--            <!--<img src="</?php echo URLROOT ?>/public/img/gradeone/cd-icon-picture.svg" alt="Picture">-->--}}
{{--        </div> <!-- cd-timeline-img -->--}}

{{--        <div class="cd-timeline-content content1 info-left"data-aos="zoom-out-up">--}}
{{--            <h3 class="am1">الدرس السادس</h3> </br>--}}
{{--            <h4 class="am">--}}
{{--                <strong>  مدخل الى الكيمياء العضوية</strong> </br>--}}
{{--                </br>--}}
{{--                الكيمياء العضوية -  السلاسل الكربونية - الرايطة كربون - كربون--}}
{{--                </br>--}}

{{--            </h4>--}}
{{--            <form action="">--}}
{{--                </br>--}}
{{--                <input type="submit" value="إبدأ الدرس" class="lessonbutton1">--}}

{{--            </form>--}}
{{--        </div> <!-- cd-timeline-content -->--}}
{{--    </div> <!-- cd-timeline-block -->--}}

{{--    <div class="cd-timeline-block">--}}
{{--        <div class="cd-timeline-img cd-movie">--}}
{{--            <!--<img class="img_style" src="</?php echo URLROOT ?>/public/img/gradeone/cd-icon-movie.svg" alt="Movie">-->--}}
{{--        </div> <!-- cd-timeline-img -->--}}

{{--        <div class="cd-timeline-content content2 info-right"data-aos="zoom-out-down">--}}
{{--            <h3  class="am1">الدرس السابع</h3> </br>--}}
{{--            <h4 class="am">--}}
{{--                <strong>المركبات الهدروكربونية لبمشبعة الألكانات(البرافينات ) </strong> </br>--}}
{{--                </br>--}}
{{--                الكان - جذر الكيل -الصيغة العامة - الصيغة المجملة - الصيغة المنشورة - الصيغة النصف منشورة--}}


{{--            </h4>--}}
{{--            <form>--}}
{{--                </br>--}}
{{--                <input type="submit" value="إبدأ الدرس" class="lessonbutton1">--}}

{{--            </form>--}}
{{--        </div> <!-- cd-timeline-content -->--}}
{{--    </div> <!-- cd-timeline-block -->--}}

{{--    <div class="cd-timeline-block">--}}
{{--        <div class="cd-timeline-img cd-location">--}}
{{--            <!--<img src="</?php echo URLROOT ?>/public/img/gradeone/cd-icon-location.svg" alt="Picture">-->--}}
{{--        </div> <!-- cd-timeline-img -->--}}

{{--        <div class="cd-timeline-content content3 info-left" data-aos="zoom-out-right">--}}
{{--            <h3  class="am1">الدرس الثامن </h3> </br>--}}
{{--            <h4 class="am">  </br>--}}
{{--                <strong> المركبات الهيدروكربونيةغير مشبعة</strong> </br>--}}

{{--                </br>--}}
{{--                المركب الهدروكربوني غير مشبع - الألكن - الألكين--}}
{{--            </h4>--}}
{{--            <form>--}}
{{--                </br>--}}
{{--                <input type="submit" value="إبدأ الدرس" class="lessonbutton1">--}}

{{--            </form>--}}
{{--            <!--<span class="cd-date">Jan 24</span>-->--}}
{{--        </div> <!-- cd-timeline-content -->--}}
{{--    </div> <!-- cd-timeline-block -->--}}


{{--    </div>--}}



{{--    <div class="cd-timeline-block">--}}
{{--        <div class="cd-timeline-img cd-picture">--}}
{{--            <!--<img src="</?php echo URLROOT ?>/public/img/gradeone/cd-icon-picture.svg" alt="Location">-->--}}
{{--        </div> <!-- cd-timeline-img -->--}}

{{--        <div class="cd-timeline-content content1 info-right" data-aos="zoom-out-left">--}}
{{--            <h3 class="am1 ">الإختبار الثاني</h3 > </br>--}}
{{--            <h4 class="">هيا بنا نختبر معرفتك في الدروس  السابقة والانتقال معا للمستوى التالي</h4>--}}
{{--            <form>--}}
{{--                </br>--}}
{{--                <input type="submit" value="إبدأ الإختبار" class="lessonbutton1" disabled>--}}
{{--            </form>--}}
{{--            <!--<span class="cd-date">Feb 14</span>-->--}}
{{--        </div> <!-- cd-timeline-content -->--}}
{{--    </div> <!-- cd-timeline-block -->--}}
</section> <!-- cd-timeline -->
<script>
    AOS.init();
</script>
</body>

<!-- <script src="js/scrollreveal.min.js"></script>

<script>
  window.sr = ScrollReveal();
  sr.reveal('.info-left', {
    duration: 2000,
    origin: 'left',
    distance: '300px',
    viewFactor: 0.2
  });
  sr.reveal('.info-right', {
    duration: 2000,
    origin: 'right',
    distance: '300px',

    viewFactor: 0.2,

  });
</script> -->


<!-- <script>
  (function() {
    // Smooth Scrolling
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().left
          }, 1000);
          return false;
        }
      }
    });
  });
  </script> -->



</html>

@endsection
