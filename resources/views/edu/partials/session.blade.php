@if(session('msg'))
    <div class="alert alert-success" role="alert">
        {{session('msg')}}
    </div>
@elseif(session('err'))
    <div class="alert alert-danger" role="alert">
        {{session('err')}}
    </div>
@endif