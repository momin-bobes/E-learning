<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="/E-learningProject/E-learning/blog/public/css/lessons/style.css" />
</head>

<body style="background-image: url(http://localhost/E-learningProject/E-learning/blog/public/images/Classes/v1.jpg); background-size: cover;">
  <div class="timeline-container">
    <div class="event">
      <div class="event-date">Num 01</div>
      <h2>conclude </h2>
      <div class="timeline-content">
        <div class="fade-in">
          <h4>
              {{$conc->conc1}}

          </h4>
        </div>

      </div>
    </div>

    <div class="event">
      <div class="event-date">Num 02</div>
      <h2>conclude</h2>
      <div class="timeline-content">
        <div class="fade-in">
          <h4>
              {{$conc->conc2}}

          </h4>
        </div>

      </div>
    </div>

    <div class="event">
      <div class="event-date">Num 03</div>
      <h2>conclude</h2>
      <div class="timeline-content">
        <div class=" fade-in">
          <h4>              {{$conc->conc3}}


          </h4>
        </div>

      </div>
    </div>
    <div class="event">
      <div class="event-date">Num 04</div>
      <h2>conclude</h2>
      <div class="timeline-content">
        <div class="fade-in">
            <h4>{{$conc->conc4}} </h4>

        </div>

      </div>

    </div>
 <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js">
  // GENERAL SETTING
window.sr = ScrollReveal({ reset: true });

// Custom Settings
sr.reveal('.event', { duration: 200 });

sr.reveal('.event', {
  origin: 'right',
  duration: 2000
});

sr.reveal('.event', {
  rotate: { x: 100, y: 100, z: 0 },
  duration: 1000
});

sr.reveal('.event', {
  viewFactor: 0.5
});

sr.reveal('.event', {
  duration: 200
});

 </script>

</body>

</html>
