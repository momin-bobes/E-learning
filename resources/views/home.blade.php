@extends('layouts.app3')

@section('content')
    <html>
    <br>
    <br>
    <head>
        <link rel="stylesheet" href="css/home.css">
        <!-- <link rel="stylesheet" href="css/templatemo-style.css"> -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>
    <body class="in" id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

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
    <div class="service">
        <h1 style="text-align: center;">
            (-خدماتنا-)
        </h1>
    </div>

    <div class="mycontainer">
        <div class="card" style="background-color:palevioletred;">
            <div class="imgBxx">
                <img src="images/cours.png">
            </div>
            <div class="contant1">
                <h2> أولاً</h2>
                <p style="font-weight: bold;">
                    يحتوي الموقع على العديد من الصفوف للمرحلة الاعدادية, حيث يتم فصل محتويات كل فئة عن
                    الاخر(الصف السابع, الصف الثامن ,الصف التاسع).
                </p>
            </div>
        </div>


        <div class="card" style="background-color: #eea412;">
            <div class="imgBx">

                <img src="images/admission.png">
            </div>
            <div class="contant1">
                <h2> ثانياً</h2>
                <p style="font-weight: bold;">
                    هناك عدد من المستويات ولا يمكن للطالب الانتقال إلى مستوى أعلى إلا بعد اكتساب المهارات
                    من المستوى الحالي وما اكتسبه يتم اختباره من خلال إجراء اختبار له.
                </p>
            </div>
        </div>


        <div class="card" style="background-color: #6ebca8;">
            <div class="imgBx">
                <img src="images/why.png">
            </div>
            <div class="contant1">
                <h2> ثالثاً</h2>
                <p> يسمح التطبيق للمستخدم بإجراء اختبار في نهاية كل صف . </p>
            </div>
        </div>
    </div>
    <div class="mycontainer">
        <div class="card" style="background-color: palevioletred;">
            <div class="imgBxx">
                <img src="images/online.png">
            </div>
            <div class="contant1">
                <h2>رابعاً </h2>
                <p>يتيح التطبيق امكانية اضافة ملفات(صور, فيديو.....) من قبل الاستاذ في حال كان هناك افكار صعبة وبحاجة لشرح اضافي </p>
            </div>
        </div>


        <div class="card" style="background-color: #eea412;">
            <div class="imgBxx">
                <img src="images/determine.png">
            </div>
            <div class="contant1">
                <h2> خامساً</h2>
                <p> .يتيح التطبيق عرض محتويات المخبر الافتراضي من تجارب كيميائية وتفاعلات ويتيح للطلاب القيام بتجارب بشكل تفاعلي
                </p>
            </div>
        </div>


        <div class="card" style="background-color: #6ebca8;">
            <div class="imgBxx">
                <img src="images/about.png">
            </div>
            <div class="contant1">
                <h2> سادساً </h2>
                <p>
                    يمكن للأساتذة الإستافدة من الموقع وتسجيل حسابات لهم ليساعدهم الموقع في التعليم ومساعدة الطلاب
                </p>
            </div>
        </div>
    </div>

    <div class="parallex">

    </div>

    <div class="contant2">

        <h1 style="text-align: center;margin: 20px;
                            padding: 0;
                            color:palevioletred;
                            font-size: 3em;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            font-family: 'Bad Script', cursive;">

            (-نصائح لخلق بيئة تعليمية ناجحة-)
        </h1>
    </div>
    <!-- tips******************************************  -->


    <div class="container3">
        <div class="card1">
            <div class="imgBx1" data-text="space">
                <img src="images/s-2.jpg">

            </div>
            <div class="contant3">
                <div>
                    <h3>وفر مساحة للتعلم</h3>
                    <p> سيفعل الأطفال ما يطلب منهم إكماله بالكامل إذا كان لديهم مساحة تعلم جيدة مع جو مريح</p>
                </div>
            </div>
        </div>

        <div class="card1">
            <div class="imgBx1" data-text="work">
                <img src="images/s-1.jpg">

            </div>
            <div class="contant3">
                <div>
                    <h3>  شجع طفلك واحتفل بإنجازاته</h3>
                    <p>شجع طفلك على متابعة العمل الذي يخلق دافعًا إضافيًا للنجاح</p>
                </div>
            </div>
        </div>

        <div class="card1">
            <div class="imgBx1" data-text="sleep">
                <img src="images/sleep.jpg">

            </div>
            <div class="contant3">
                <div>
                    <h3>  التزم بروتين وقت النوم المعتاد</h3>
                    <p>في ضوء إغلاق المدارس ، قد نميل إلى تأخير وقت النوم المعتاد بساعة أو ساعتين ، في ضوء ذلك حاول الالتزام بالروتين اليومي المعتاد لنوم طفلك</p>
                </div>
            </div>
        </div>

        <div class="card1">
            <div class="imgBx1" data-text="school">

                <img src="images/space.jpg">
            </div>
            <div class="contant3">
                <div>
                    <h3> اجعل المكان يبدو وكأنه مدرسة صغيرة</h3>
                    <p> املأ المكان بالعناصر والمواد المتعلقة بالتعليم مثل الأقلام والكتب والدفاتر والألعاب التعليمية التفاعلية</p>
                </div>
            </div>
        </div>
    </div>

    </body>

    </html>
@endsection
