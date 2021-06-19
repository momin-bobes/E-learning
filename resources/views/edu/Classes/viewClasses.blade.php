
    <br>
<br>
<br>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <meta thhp-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="/E-learningProject/E-learning/blog/public/css/classes.css" rel="stylesheet">
</head>

<body class="sclasses"
      <div class="container"
      style="


 background-image: url('images/aa.png');
background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 95%;">
@if($user->class==='7')

<div class="container">
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
    <br>


    <div class="row" style="height: 76vh;">
        <div class="col-md-6 mx-auto">
            <div class="card border-dark card-body text-white bg-primary mt-5">
                <h2  class="d-flex justify-content-center hh oblique" style="text-align:center">الصفوف</h2>
                <p  class="d-flex justify-content-center oblique " style="text-align:center">اختر الصف الذي تريده</p>
                <form action="#">
                    <div class="row">

                        <div class="col container-classes100-form-btn">


                            <input type="submit" value="الصف السابع" class="classbutton oblique">


                </form>
            </div>

        </div>
    </div>
    <form action="#">
        <div class="row">

            <div class="col container-classes100-form-btn bb">



                <input type="submit" value="الصف الثامن" class="classbutton oblique" disabled>
            </div>
        </div>

    </form>
    <form action="">
        <div class="row">

            <div class="col container-classes100-form-btn bb">

                <input type="submit" value="الصف التاسع" class="classbutton oblique "disabled>
            </div>


        </div>
    </form>
    <!--

</div>
</div> -->
</div>
@elseif($user->class==='8')

    <div class="container">
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
        <br>


        <div class="row" style="height: 76vh;">
            <div class="col-md-6 mx-auto">
                <div class="card border-dark card-body text-white bg-primary mt-5">
                    <h2  class="d-flex justify-content-center hh oblique" style="text-align:center">الصفوف</h2>
                    <p  class="d-flex justify-content-center oblique " style="text-align:center">اختر الصف الذي تريده</p>
                    <form action="#">
                        <div class="row">

                            <div class="col container-classes100-form-btn">


                                <input type="submit" value="الصف السابع" class="classbutton oblique">


                    </form>
                </div>

            </div>
        </div>
        <form action="#">
            <div class="row">

                <div class="col container-classes100-form-btn bb">



                    <input type="submit" value="الصف الثامن" class="classbutton oblique" >
                </div>
            </div>

        </form>
        <form action="">
            <div class="row">

                <div class="col container-classes100-form-btn bb">

                    <input type="submit" value="الصف التاسع" class="classbutton oblique"disabled>
                </div>


            </div>
        </form>
        <!--

    </div>
    </div> -->
    </div>
@elseif($user->class==='9'||$user->class==='max')

    <div class="container">
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
        <br>


        <div class="row" style="height: 76vh;">
            <div class="col-md-6 mx-auto">
                <div class="card border-dark card-body text-white bg-primary mt-5">
                    <h2  class="d-flex justify-content-center hh oblique" style="text-align:center">الصفوف</h2>
                    <p  class="d-flex justify-content-center oblique " style="text-align:center">اختر الصف الذي تريده</p>
                    <form action="#">
                        <div class="row">

                            <div class="col container-classes100-form-btn">


                                <input type="submit" value="الصف السابع" class="classbutton oblique">


                    </form>
                </div>

            </div>
        </div>
        <form action="#">
            <div class="row">

                <div class="col container-classes100-form-btn bb">



                    <input type="submit" value="الصف الثامن" class="classbutton oblique" >
                </div>
            </div>

        </form>
        <form action="">
            <div class="row">

                <div class="col container-classes100-form-btn bb">

                    <input type="submit" value="الصف التاسع" class="classbutton oblique">
                </div>


            </div>
        </form>
        <!--

    </div>
    </div> -->
    </div>
@endif





</body>
</html>
