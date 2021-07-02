@extends('layouts.app3')

@section('content')
    <html>
    <head>
{{--        <script src="http://localhost/E-learningProject/E-learning/blog/public/js/partical.js" type="application/javascript">--}}


{{--        </script>--}}
        <script src="http://localhost/E-learningProject/E-learning/blog/public/js/partical.js" type="application/javascript" defer data-deferred="1"></script>
        <herf sec="https://unpkg.com/popper.js/dist/umd/popper.min.js.map"></herf>
        <title>aa</title>

    </head>
    <body  >
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('New Practical Session') }}
                    <button class="btn" id="add-attachment"><i class="fa fa-plus-circle"></i>{{ __('New Attachment') }}</button>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('practicals.store') }}" enctype='multipart/form-data'>
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="overview" class="col-md-4 col-form-label text-md-right">{{ __('Overview') }}</label>

                            <div class="col-md-6">
                                <input id="overview" type="text" class="form-control @error('overview') is-invalid @enderror" name="overview" value="{{ old('overview') }}" required autocomplete="overview">

                                @error('overview')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="explaination" class="col-md-4 col-form-label text-md-right">{{ __('explaination') }}</label>

                            <div class="col-md-6">
                                <input id="explaination" type="text" class="form-control @error('explaination') is-invalid @enderror" name="explaination" value="{{ old('overview') }}" required autocomplete="explaination">

                                @error('explaination')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lesson" class="col-md-4 col-form-label text-md-right">{{ __('Lesson') }}</label>

                            <div class="col-md-6">
                                <select id="lesson" class="form-control" name="lesson_id" required>
                                    <option value="">Choose a lesson</option>
                                    @foreach($class as $lesson)
                                        {{$lesson->id}}
                                        <option value="{{$lesson->classnum}}">{{$lesson->classname.'_'.$lesson->classnum}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row" id="attachments">
                            <div class="row attachments-class" id="attachment-row-1">
                                <label for="lesson" class="col-md-4 col-form-label text-md-right">{{ __('Attachment') }}</label>
                                <div class="col-md-4">
                                    <select name="attachments[][name]" id="" class="form-control @error('attachment') is-invalid @enderror">
                                        @foreach(App\Models\Attachment::$types as $type)
                                            <option value="{{$type}}"> {{$type}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <input id="" type="file" class="@error('attachment') is-invalid @enderror" name="attachments[][uploaded]" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Store') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </body>

@endsection
    </html>
@section('js')
    <script src="http://localhost/E-learningProject/E-learning/blog/public/js/partical.js"></script>

@endSection
