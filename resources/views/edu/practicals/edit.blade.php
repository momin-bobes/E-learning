@extends('layouts.app4')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Edit Practical Session') }}
                    <button class="btn" id="add-attachment"><i class="fa fa-plus-circle"></i>{{ __('New Attachment') }}</button>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <form method="POST" action="{{ route('practicals.update', ['practical' => $practical->id]) }}" enctype='multipart/form-data'>
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-group row">
                                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                                    <div class="col-md-6">
                                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $practical->title }}" required autocomplete="title" autofocus>

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
                                        <input id="overview" type="text" class="form-control @error('overview') is-invalid @enderror" name="overview" value="{{ $practical->overview }}" required autocomplete="overview">

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
                                        <input id="explaination" type="text" class="form-control @error('explaination') is-invalid @enderror" name="explaination" value="{{ $practical->explaination }}" required autocomplete="explaination">

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
                                                <option value="{{$lesson->id}}" {{ $lesson->id == $practical->lesson_id ? 'selected' : '' }}>{{$lesson->title}}</option>
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
                                            {{ __('Update') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                @foreach($practical->attachments as $item)
                                    <div class="card card-margin">
                                        <div class="card-header">
                                            {{$item->name}}
                                        </div>
                                        <div class="card-body">
                                            @if(strpos($item->name, 'video') !== false)
                                                <video width="320" height="240" controls class="img-preview">
                                                    <source src="{{$item->url}}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            @else
                                                <img src="{{asset($item->url)}}" alt="" class="img-preview">
                                            @endif
                                        </div>
                                        <div class="card-footer">
                                            <div class="container">
                                                <form action="{{route('attachments.destroy', ['attachment' => $item->id])}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{asset('js/custom.js')}}"></script>
@endSection
