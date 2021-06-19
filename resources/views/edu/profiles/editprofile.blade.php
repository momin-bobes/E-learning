<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="/E-learningProject/E-learning/blog/public/css/profile.css">

<!------ Include the above in your HEAD tag ---------->
{!! Form::open(['action' => 'profile@edit','method'=>'POST','files' => true]) !!}
<div class="container emp-profile">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="http://localhost/E-learningProject/E-learning/blog/public/images/profiles/{{$user->image}}" alt=""/>
                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <div><input  id = "image" type="file" class="form-control" name="file"> </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                        {{$user->name}}
                    </h5>
                    <h6>
                        {{$user->Type}}
                    </h6>
                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                        {{--                        <li class="nav-item">--}}
                        {{--                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>--}}
                        {{--                        </li>--}}
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <a class="profile-edit-btn" href="http://localhost/E-learningProject/E-learning/blog/public/profile/edit">Edit Profile</a><br>

            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p>Links</p>
                    <a href="http://localhost/E-learningProject/E-learning/blog/public/cert">Certifications</a><br>
                    <a href="http://localhost/E-learningProject/E-learning/blog/public/home">home</a><br>
                    <a href="http://localhost/E-learningProject/E-learning/blog/public/contact">contact us</a><br>

                    <a href="">Bootply Profile</a>
                    <p>SKILLS</p>
                    <a href="">Web Designer</a><br/>
                    <a href="">Web Developer</a><br/>
                    <a href="">WordPress</a><br/>
                    <a href="">WooCommerce</a><br/>
                    <a href="">PHP, .Net</a><br/>
                </div>
            </div>

            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">


                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>User Name</label>
                            </div>
                            <div class="col-md-6">
                                <input id="name" type="name" name="name" placeholder="{{$user->name}}">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <input id="name" type="email" name="email" placeholder="{{$user->email}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Password</label>
                            </div>
                            <div class="col-md-6">
                                <input id="name" type="password" name="password" placeholder="Enter new password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Confirm Password</label>
                            </div>
                            <div class="col-md-6">
                                <input id="name" type="password" name="confirm" placeholder="Confirm password">
                            </div>
                        </div>

                    </div>
                    <div class="mt-5">
                        <button type="submit">
                            send
                        </button>
                    </div>

                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Experience</label>
                            </div>
                            <div class="col-md-6">
                                <p>Expert</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Hourly Rate</label>
                            </div>
                            <div class="col-md-6">
                                <p>10$/hr</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Total Projects</label>
                            </div>
                            <div class="col-md-6">
                                <p>230</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>English Level</label>
                            </div>
                            <div class="col-md-6">
                                <p>Expert</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Availability</label>
                            </div>
                            <div class="col-md-6">
                                <p>6 months</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Your Bio</label><br/>
                                <p>Your detail description</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>
{!! Form::close() !!}
