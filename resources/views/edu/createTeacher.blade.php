

    {!! Form::open(['action' => 'TeachersController@store','method'=>'POST','files' => true] ) !!}
    <html>
    <head>
        <link href="/E-learningProject/E-learning/blog/public/css/style.css" rel="stylesheet">
    </head>
    <body>


    <div class="contact-form3">
        <h2 class="crateH2"> Join us</h2>
        @csrf
        <form action="">
            <p>   {{ __('Name') }}</p>

            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror


            <p>  {{ __('E-Mail Address') }}</p>

            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror

            <p> {{ __('Password') }}</p>


            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror



            <p> {{ __('Confirm Password') }}</p>


            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">



            <p> {{ __('Upload your cv ') }}</p>





            <input  id = "image" type="file" class="chosefile" name="image">








            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </form>
        {!! Form::close() !!}
    </div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        </div>
    </body>
    </html>
