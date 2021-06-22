<!DOCTYPE html>
<html lang="en">
<head>

    <title>Education </title>
    <!--

    Known Template

    https://templatemo.com/tm-516-known

    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="a{{ csrf_token() }}">




    <link rel="stylesheet" href="/E-learningProject/E-learning/blog/public/css/templatemo-style.css">
    <link rel="stylesheet" href="/E-learningProject/E-learning/blog/public/css/bootstrap.min.css">

    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->


    <script src="{{ asset('js/app.js') }}"></script>

    <!-- MAIN CSS -->


</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">

        <span class="spinner-rotate"></span>

    </div>
</section>


<!-- MENU -->
<div class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="#" class="navbar-brand">Known</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            @php($user = \Auth::user())

            <ul class="nav navbar-nav navbar-nav-first">
                <li><a href="./" class="smoothScroll">Home</a></li>
                <li><a href="./about" class="smoothScroll">About</a></li>
                @if($user!=null and $user->Type!==null)
                <li><a href="http://localhost/E-learningProject/E-learning/blog/public/Classes" class="smoothScroll">classes</a></li>
                @endif

                    <li><a href="http://localhost/E-learningProject/E-learning/blog/public/laboratory" class="smoothScroll">laboratory</a></li>
                <li><a href="http://localhost/E-learningProject/E-learning/blog/public/contact" class="smoothScroll">Contact us</a></li>
{{--                <li><a href="http://localhost/E-learningProject/E-learning/blog/public/Teachers/create" class="smoothScroll">Join Us</a></li>--}}
                <li><a href="http://localhost/E-learningProject/E-learning/blog/public/TopStudent" class="smoothScroll">TopStudent</a></li>

                <!-- TEST FOR CALLING AN EXAMS WITH NAME -->
{{--                <li><a href="http://localhost/E-learningProject/E-learning/blog/public/exam/seventh_1" class="smoothScroll">Make Exam seventh_1</a></li>--}}
{{--                <li><a href="http://localhost/E-learningProject/E-learning/blog/public/exam/seventh_2" class="smoothScroll">Make Exam seventh_2</a></li>--}}


                @if($user!=null and $user->Type=="admin")
                <li><a href="http://localhost/E-learningProject/E-learning/blog/public/teacher_req" class="smoothScroll">Teachers' requests</a></li>
                    <li><a href="http://localhost/E-learningProject/E-learning/blog/public/Teachers" class="smoothScroll">Our Teachers</a></li>

                @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>


                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>


                    <a class="dropdown-item" href="http://localhost/E-learningProject/E-learning/blog/public/profile">Profile</a>


        </div>



                    </li>

                @endguest
            </ul>
        </div>

    </div>
</div>
<main class="py-4">
    @yield('content')
    @include('edu.footer.fotter')

</main>

</body>
</html>
