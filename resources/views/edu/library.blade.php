


<!doctype html>

<html>
<head>
    <meta charset="utf-8">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>

    <script type="text/javascript">
        swfobject.embedSWF("flashes/7.swf", "flash-content", "100%", "100%", "9.0.0", '', null, {wmode: 'transparent'});
    </script>

    <style type="text/css">
        body {
            background-color: #191c1f;
            margin: 0;
        }
        #container {
            width: 400px; /* Fixed width according to page template */
            height: auto; /* Container height should adapt to the content, we do not want to set a fixed height here */
            position: absolute;
            top: 0;
            left: 0;
        }
        #flash-content {
            width: 1200px; /* Fill the width of the parent, could be fixed but ideally 100% */
            height: 600px; /* We want the height of the flash object/flash content to scale according to the aspect ratio of the swf, we do not want to set a fixed height here */
        }

        /* This is what we really want */
        #what-we {
            width: 400px;
            height: auto;
            background-color: pink;
            position: absolute;
            top: 0;
            right: 0;
        }
        #really-want {
            width: 100%;
            height: 400px; /* This is what we really want, but without setting this height fixed */
            background-color: yellow;
        }
    </style>
</head>
<body>
<div id="container">
    <div class="videoWrapper">
        <div id="flash-content"></div>

    </div>
</div>
</body>
</html>
