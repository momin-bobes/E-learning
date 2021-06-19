@extends('layouts.app3')

@section('content')

    <html>
    <body>
    <div class="top_container">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
            </div>
        </header>
        <section class="hero_section ">
            <div class="hero-container container">
                <div class="hero_detail-box">
                    <h1>
                        Best way
                        to learn
                        chemistry
                    </h1>

                    <div class="hero_btn-continer">

                    </div>
                </div>
                <div class="hero_img-container">
                    <div>
                        <img src="images/3.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end header section -->

    <div class="common_style">

        <!-- about section -->
        <section class="about_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about_img-container">
                            <img src="images/about.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about_detail-box">
                            <h1>
                                مقارباتنا التعليمية
                            </h1>
                            <h4>
                                تقديم المحتوى التعليمي بطرق تفاعلية بسيطة تسهل التعلم وتساعد الطالب على فهم الدروس بشكل جيد وترسخ المعلومات في الذاكرة
                            </h4>
                            <div class="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- end about section -->

        <!-- admission section -->
        <section class="admission_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="admission_detail-box">
                            <h1>
                                تحسن مستمر
                            </h1>
                            <h4>
                                نحن نهتم بالتحسن المستمر  حيث هناك أسألة اختبار في كل أجزاء المنهج لقياس مدى
                                تقدم الطالب
                            </h4>
                            <div class="">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="admission_img-container">
                            <img src="images/admission.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- end admission section -->

        <!-- why section -->
        <section class="why_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="why_img-container">
                            <img src="images/why.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="why_detail-box">
                            <h1>
                                العديد من طرق التعلم
                            </h1>
                            <h4>
                                ادخال دور الانترنت التربوي لأن شاشات الكمبيوتر لابد أن تؤدي دورها المعرفي والتعليمي حيث ان الطلاب يتفاعلون بشكل أفضل وطريقة أسرع مع المواد العلمية عندما تقدم
                                بقالب مقاطع سمعية أو مرئية
                            </h4>

                            <div class="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- end why section -->

        <!-- determine section -->
        <section class="determine_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="determine_detail-box">
                            <h1>
                                فوائد التعليم الالكتروني
                            </h1>
                            <h4>
                                تقديم المادة العلمية بتدرج مناسب لقدرات الطلاب  حيث يمكننا توظيف التقنية الحديثة لخدمة العمل التربوي
                                و تطوير النظام التربوي باستخدام علمي مناسب الذي يساعد في تدريب أولياء الأمور على أساليب التنشئةالمبكرة للطالب في المنزل


                            </h4>
                            <div class="">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="determine_img-container">
                            <img src="images/determine.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- end determine section -->

    </div>

    <!-- contact section -->

    <section class="contact_section ">

        <div class="container">

            <div class="row">

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif


                <div class="col-md-6">
                    <div class="d-flex justify-content-center d-md-block">
                        <h2>
                            Contact Us
                        </h2>
                    </div>
                        {!! Form::open(['action' => 'About@store','method'=>'POST']) !!}

                        <div class="contact_form-container">
                            <div>
                                <div>
                                    <input id ="name" type="name" name="name" placeholder="Name">
                                </div>
                                <div>
                                    <input id="email" type="email" name="email" placeholder="Email">
                                </div>
                                <div>
                                    <input id="phone_number" type="phone_number" name="phone_number" placeholder="Phone Number">
                                </div>
                                <div class="mt-5">
                                    <input id="messages" type="messages" name="messages" placeholder="Message">
                                </div>
                                <div class="mt-5">
                                    <button type="submit">
                                        send
                                    </button>
                                </div>
                            </div>

                        </div>
                    {!! Form::close() !!}

                </div>
                <div class="col-md-6">
                    <div class="contact_img-box">
                        <img src="images/students.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->



    <!-- SCRIPTS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>


    </body>
    </html>

@endsection
