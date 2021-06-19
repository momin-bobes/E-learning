@extends('layouts.app3')

@section('content')



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
                        {!! Form::open(['action' => 'ContactController@store','method'=>'POST']) !!}

                        <div class="contact_form-container">
                            <div>

                                <div>
                                    <input id="name" type="name" name="name" placeholder="Name">
                                </div>
                                <div>
                                    <input id="email" type="email" name="email" placeholder="Email">
                                </div>
                                <div>
                                    <input id="phone_number" type="phone_number"  name="phone_number" placeholder="Phone Number">
                                </div>
                                <div class="mt-5">
                                    <input id="messages" type="messages"  name="messages" placeholder="Message">
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


@endsection

