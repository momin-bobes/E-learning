@extends('layouts.app3')

@section('content')

    
    <div id="quiz-wrapper">
    <h1> welcome to our exam</h1>
    <legend> Quiz Of welcome to our exam</legend>


    <div class="container "style="
    background: floralwhite;
    margin-top: 200px;

    margin-left: 450px;  ">
        <div class="row">

           @foreach($exam_title as $exam_titles)
                <h1>{{$exam_titles->value}}</h1>
                &emsp;<input type="hidden" class="hidden" name="answer" value="{{$exam_titles->key}}" >

            @endforeach




               @php
               $counter=1;
               @endphp



        @foreach($exams as $answer)

                <form method="POST" action="{{ url('/store') }}" class="crud-submit" id="quiz_module">

                <div class="jumbotron">

                <h4>Question {{ $counter }}</h4>
                    @php
                        $counter=$counter+1;
                    @endphp

                    <h3>{{ $answer->question }}</h3>
                    <H5>
                        <div class="radio">
                    &emsp;<input type="radio" name="answer" class="form-check-input"  value="{{ $answer->choice_1 }}">{{ $answer->choice_1}}<br>
                    &emsp;<input type="radio" name="answer" class="form-check-input"  value="{{ $answer->choice_2 }}">{{ $answer->choice_2}}<br>
                    &emsp;<input type="radio" name="answer" class="form-check-input"  value="{{ $answer->choice_3 }}">{{ $answer->choice_3}}<br>
                            &emsp;<input type="radio" name="answer"class="form-check-input" value="{{111}}" checked="checked" >Idont know<br>


                            <!-- <link rel="stylesheet" href="css/templatemo-style.css"> -->
                        </div>
                        {{$t=request()->input('answer')}}
                        &emsp;<input type="hidden" name="right" class="checkbox"  value="{{ $answer->right_answer }}"><br>
                        &emsp;<input type="hidden" name="id" class="card-deck"  value="{{ $answer->Title }}"><br>






                    </H5>
                </div>
                </form>
            @endforeach
        </div>
            {{Form::submit('Submit answer') }}

    </div>

</div>



<meta name="csrf-token" content="{{ csrf_token() }}" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>

<script type="text/javascript">
    $(document).ready(function()
    {
        $("input[type='submit']").click(function()
        {

            var insert=[];
            var rightanswer=[];
            var title=[];
            var tit=[];
            $('.form-check-input').each(function(){
                if($(this).is(":checked"))
                {
                    insert.push($(this).attr('value'));

                }



            });

            $('.hidden').each(function(){

                    tit.push($(this).attr('value'));





            });

            $('.checkbox').each(function(){

                rightanswer.push($(this).attr('value'));


            });

            $('.card-deck').each(function(){

                title.push($(this).attr('value'));


            });




                    var radioValue = $("input[name='answer']:checked").val();
            //$(".crud-submit").click(function (e) {
            // e.preventDefault();
            var form_action = $("#quiz_module").find("form").attr("action");
            //var radioValue = $("input[name='answer']:checked").val();

            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: 'http://localhost/E-learningProject/E-learning/blog/public/store',
                data: { radioValue: insert },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    console.log(data.msg);
                    $(".writeinfo").append(data.msg);



                    var result=0;
                    var mistake=[];
                    var counter=0;
                    var percentage=0;

                    for (var i = 0, j=0; i<data.msg.length,j<rightanswer.length; i++,j++) {
                        console.log("your choies: " + data.msg[i]);
                        console.log("answer : " + rightanswer[i]);
                        counter=counter+1;


                        // Check if we have nested arrays
                        if (data.msg[i]===rightanswer[j])
                        {
                            result=result+1;

                        }
                        else
                        {
                            mistake.push(title[i]);


                        }



                    }
                    console.log("your mistake : " + mistake);
                    console.log("your result : " + result);

                    percentage=(result/counter)*100;

                    localStorage.setItem('result', result);
                    localStorage.setItem('percentage', percentage);
                    localStorage.setItem('Number_of_questions', counter);

                    localStorage.setItem('mistake', mistake);
                    localStorage.setItem('title', tit);

                    var myItem = localStorage.getItem('myItem');



                    window.location.href = "/E-learningProject/E-learning/blog/public/result/"+percentage+"&"+tit;





                }

            });
            //});


        }
        );
    });
</script>

@endsection
