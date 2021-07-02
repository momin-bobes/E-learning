

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="session_id" content="{{ $session->id }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/website.css')}}">
    <title>Practical Session</title>
</head>
<body>
    <div class="container mb-5 mt-5">
        <div class="card">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center mb-5"> Practical Session {{ $session->title }} </h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                        <video width="650" height="300" controls>
                                        <source src="{{$session->attachments()->where('name', 'session_video')->first()->url}}" type="video/mp4">
                                        Your browser does not support the video tag.
                                        </video>
                            </div>
                            <div class="col-md-4">
                                    <div class="container images-preview">
                                        @foreach($session->attachments->where('name', 'session_attached_file') as $item)
                                            <img src="{{$item->url}}" alt="" class="img-preview">
                                        @endforeach
                                    </div>

                            </div>
                        </div>
                        <div class="row images-previews">
                        @foreach($session->attachments->where('name', 'session_featured_image') as $item)
                                            <div class="col-md-3">
                                            <img src="{{$item->url}}" alt="" class="img-preview">
                                            </div>
                                        @endforeach
                        </div>
                    </div>
                    <h4 class="text-center mb-5"> Discussion </h4>
                    <div class="row">
                        <div class="col-md-12" id="comments">

                        </div>
                    </div>
                </div>
            </div>
            <form action="{{route('comments.store')}}" method="POST" id="post-comment-form">
                @csrf
                <div class="container margin-content">
                    <div class="input-group mb-3">
                            <input type="text" name="content" class="form-control" placeholder="type a comment...">
                            <input type="text" hidden value="{{$session->id}}" name="practical_id">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">comment</button>
                            </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('js/partical.js')}}"></script>
</body>
</html>
