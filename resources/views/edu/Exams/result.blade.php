@extends('layouts.app3')

@section('content')

    <div class ="container">
    <h2>النتيجة</h2>
</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    <script>




    var result = localStorage.getItem('result');
    var percentage = localStorage.getItem('percentage');
    var Number_of_questions = localStorage.getItem('Number_of_questions');
    var mistake = localStorage.getItem('mistake');

    console.log(result);
    console.log(mistake);


    function Result() {
        p = document.createElement("p");
        p.innerHTML = "عدد الاسألة الصحيحة هي  "+result+" من اصل  "+Number_of_questions;
        document.body.appendChild(p);
        p.className = "scriptfun";
    }
    function percentages()
    {
        p = document.createElement("p");
        p.innerHTML = "النسبة المؤية : % "+percentage+"";
        document.body.appendChild(p);
        p.className = "scriptfun";
    }

    function Mistake() {

        if (mistake !== "") {
            var res = mistake.split(",");

            p = document.createElement("p");

            document.body.appendChild(p);
            for (var i = 0; i < res.length; i++)
            {
                p = document.createElement("p");

                p.innerHTML =  res[i] + "";
                document.body.appendChild(p);
                p.className = "scriptfun";

            }

        }

    }



</script>



<html>
<head>
    <link rel="stylesheet" href="http://localhost/E-learningProject/E-learning/blog/public/css/res.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <style>
        body {
            font-family: "Trirong", serif;
        }
    </style>
</head>


<body>



<div class ="card1">
    <h2>إن نتيجتك هي</h2>
</div>
<script >
    Result();
</script>


<div class ="card1">
    <h2>النسبة المئوية </h2>
    <script>
        percentages();
    </script>
</div>
<br>



<div class ="card1">
    <h2>الرجاء اعادة قراءة </h2>
    <script>
        Mistake();
    </script>
</div>
<br>
<br>





</body>
</html>
<h1></h1>
@endsection
