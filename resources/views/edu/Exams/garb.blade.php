{{ Form::label('answer', $answer->question) }}

{{Form::radio('result', $answer->is_correct) }}
{{ Form::label('answer', $answer->choice_1) }}
{{Form::radio('result', $answer->is_correct) }}
{{ Form::label('answer', $answer->choice_2) }}
{{Form::radio('result', $answer->is_correct) }}
{{ Form::label('answer', $answer->choice_3) }}



<div class="container">
    <div class="row">
        @foreach($exams as $question)
            {!! Form::open( ['class' => 'crud-submit']) !!}
            <div class="jumbotron">

                <h4>
                    Question {{ $answer->id }}
                </h4>
                <h3>
                    {{ $question->question }}
                </h3>
                <h5>
                    &emsp;<input type="radio" name="answer" class="form-check-input"  value="{{ $question->option_a }}">{{ $question->option_a }}<br>
                    &emsp;<input type="radio" name="answer" class="form-check-input" value="{{ $question->option_b }}">{{ $question->option_b }}<br>
                    &emsp;<input type="radio" name="answer" class="form-check-input" value="{{ $question->option_c }}">{{ $question->option_c }}<br>
                    &emsp;<input type="radio" name="answer" class="form-check-input" value="{{ $question->option_d }}">{{ $question->option_d }}<br>
                </h5>
            </div>
            {!! Form::close() !!}
        @endforeach
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>

for in script type
<script>
    $.each(data.msg, function (i, member) {
        for (var i in member) {

            console.log("your choies: " + member[i]);
        }
    });

    $.each(rightanswer, function (i, member) {
        for (var i in member) {

            console.log("answer : " + member[i]);
        }
    });

    var url_string = window.location.href
    var url = new URL(url_string);
    var result = url.searchParams.get("Data1");
    var mistake = url.searchParams.get("Data2");
    window.location.href = "/E-learningProject/E-learning/blog/public/result?Data1=" + result+"&Data2="+mistake;

    window.location.href = "/E-learningProject/E-learning/blog/public/result";

</script>


<!-- EXAM SYSTEm
 1-INSERT QUES WITH CATEGORY LIKE SEVEN_1 on exam_7 table
 1.1 add the title with key value on to Title examinations table
 2-JUST DECLARE EXAM BUTTOM WITH  THE SAME NAME OF CATEGPRY IN DATABASE
 LIKE THAT
  <li><a href="http://localhost/E-learningProject/E-learning/blog/public/exam/seventh_1" class="smoothScroll">Make Exam seventh_1</a></li>
   <li><a href="http://localhost/E-learningProject/E-learning/blog/public/exam/seventh_2" class="smoothScroll">Make Exam seventh_2</a></li>

 -->
