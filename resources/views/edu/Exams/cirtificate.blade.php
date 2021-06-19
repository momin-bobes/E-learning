<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="/E-learningProject/E-learning/blog/public/css/profile.css">

<div class="container emp-profile">
        <div class="row">
            <div class="col-md-4">
                @foreach($certs as $cert)
                    <div style="width:1024px; height:700px; padding:20px; text-align:center; border: 10px solid #787878">
                        <div style="width:950px; height:650px; padding:20px; text-align:center; border: 5px solid #787878">
                            <span style="font-size:50px; font-weight:bold">Certificate of Completion</span>
                            <br><br>
                            <span style="font-size:25px"><i>This is to certify that</i></span>
                            <br><br>
                            <span style="font-size:30px"><b>{{$cert->name}}</b></span><br/><br/>
                            <span style="font-size:25px"><i>has completed the course</i></span> <br/><br/>
                            <span style="font-size:30px">{{$cert->title}}</span> <br/><br/>
                            <span style="font-size:20px">with score of <b>{{$cert->mark}}%</b></span> <br/><br/><br/><br/>
                            <span style="font-size:25px"><i>date</i></span><br>
                            <span style="font-size:20px"> <b>{{$cert->created_at}}</b></span> <br/><br/><br/><br/>
                            <span style="font-size:25px  ;position:relative; left:250px; top:-75px;"><i>signature</i></span><br><br>
                            <img style="font-size:25px  ;position:relative; left:325px; top:-125px;"src="images/digital.png" alt="Trulli" width="150" height="75">
                            <img style="font-size:25px  ;position:relative; left:-375px; top:-200px;"src="images/wis.png" alt="Trulli" width="150" height="150">

                        </div>
                    </div>
                    <br>
                    <br>
                @endforeach
            </div>
        </div>
{{--<div class="container "style="--}}
{{--    background: floralwhite;--}}
{{--    margin-top: 200px;--}}

{{--    margin-left: 450px;  ">--}}
{{--    <div class="row">--}}
{{--        @foreach($certs as $cert)--}}
{{--            <div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">--}}
{{--                <div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">--}}
{{--                    <span style="font-size:50px; font-weight:bold">Certificate of Completion</span>--}}
{{--                    <br><br>--}}
{{--                    <span style="font-size:25px"><i>This is to certify that</i></span>--}}
{{--                    <br><br>--}}
{{--                    <span style="font-size:30px"><b>{{$cert->name}}</b></span><br/><br/>--}}
{{--                    <span style="font-size:25px"><i>has completed the course</i></span> <br/><br/>--}}
{{--                    <span style="font-size:30px">{{$cert->title}}</span> <br/><br/>--}}
{{--                    <span style="font-size:20px">with score of <b>{{$cert->mark}}%</b></span> <br/><br/><br/><br/>--}}
{{--                    <span style="font-size:25px"><i>date</i></span><br>--}}
{{--                    <span style="font-size:20px"> <b>{{$cert->created_at}}</b></span> <br/><br/><br/><br/>--}}
{{--                    <span style="font-size:25px  ;position:relative; left:250px; top:2px;"><i>signature</i></span><br><br>--}}
{{--                    <img style="font-size:25px  ;position:relative; left:300px; top:-80px;"src="images/digital.png" alt="Trulli" width="150" height="75">--}}
{{--                    <img style="font-size:25px  ;position:relative; left:-375px; top:-100px;"src="images/wis.png" alt="Trulli" width="150" height="150">--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <br>--}}
{{--            <br>--}}
{{--       @endforeach--}}

{{--    </div>--}}
{{--</div>--}}
{{--<div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">--}}
{{--    <div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">--}}
{{--        <span style="font-size:50px; font-weight:bold">Certificate of Completion</span>--}}
{{--        <br><br>--}}
{{--        <span style="font-size:25px"><i>This is to certify that</i></span>--}}
{{--        <br><br>--}}
{{--        <span style="font-size:30px"><b>$student.getFullName()</b></span><br/><br/>--}}
{{--        <span style="font-size:25px"><i>has completed the course</i></span> <br/><br/>--}}
{{--        <span style="font-size:30px">$course.getName()</span> <br/><br/>--}}
{{--        <span style="font-size:20px">with score of <b>$grade.getPoints()%</b></span> <br/><br/><br/><br/>--}}
{{--        <span style="font-size:25px"><i>dated</i></span><br>--}}
{{--        #set ($dt = $DateFormatter.getFormattedDate($grade.getAwardDate(), "MMMM dd, yyyy"))--}}
{{--        <span style="font-size:30px">$dt</span>--}}
{{--    </div>--}}
{{--</div>--}}
