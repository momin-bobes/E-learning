<h1>RESULT</h1>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>

<script>




    var result = localStorage.getItem('result');
    var percentage = localStorage.getItem('percentage');
    var Number_of_questions = localStorage.getItem('Number_of_questions');
    var mistake = localStorage.getItem('mistake');

    console.log(result);
    console.log(mistake);


    function Result() {
        p = document.createElement("p");
        p.innerHTML = "Your correct answers are "+result+" of "+Number_of_questions;
        document.body.appendChild(p);
    }
    function percentages()
    {
        p = document.createElement("p");
        p.innerHTML = "Your percentage is "+percentage+"%";
        // if (percentage>=50)
        //      window.location.href = "/E-learningProject/E-learning/blog/public/cert/";

        document.body.appendChild(p);

    }

    function Mistake() {

        if (mistake !== "") {
            var res = mistake.split(",");

            p = document.createElement("p");

            p.innerHTML = ": الرجاء اعدادة قراءة   " ;
            document.body.appendChild(p);
            for (var i = 0; i < res.length; i++)
            {
                p = document.createElement("p");

                p.innerHTML =  res[i] + "";
                document.body.appendChild(p);


            }

    }

    }



</script>



<html>
<head>

</head>

</html>

<body>

<h1>your  ressult is </h1>
<script>
    Result();
</script>
<h1>your  percentage is </h1>
<script>
    percentages();
</script>
<br>
<br>

<script>

    Mistake();
</script>



</body>

<h1></h1>
