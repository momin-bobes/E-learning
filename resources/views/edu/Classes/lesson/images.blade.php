<!DOCTYPE html>
<html lang="en">
<head>
  <title>Image Gallery - Bootstrap 5</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="http://localhost/E-learningProject/E-learning/blog/public/css/lessons/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <link rel="stylesheet" type="text/css" href="/E-learningProject/E-learning/blog/public/css/lessons/style.css">
</head>
<body >


  <section class="gallery min-vh-100" style="background-size: cover; background-image: url(http://localhost/E-learningProject/E-learning/blog/public/images/Classes/v1.jpg);" >
     <div class="container-lg">
        <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
           <div class="col">
              <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/{{$images->image1}}" class="gallery-item" alt="gallery">
           </div>
           <div class="col">
              <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/{{$images->image2}}" class="gallery-item" alt="gallery">
           </div>
           <div class="col">
              <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/{{$images->image3}}" class="gallery-item" alt="gallery">
           </div>
           <div class="col">
              <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/{{$images->image4}}" class="gallery-item" alt="gallery">
           </div>
           <div class="col">
              <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/{{$images->image5}}" class="gallery-item" alt="gallery">
           </div>
           <div class="col">
              <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/{{$images->image6}}" class="gallery-item" alt="gallery">
           </div>
        </div>
     </div>
  </section>

<!-- Modal -->
<div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <img src="http://localhost/E-learningProject/E-learning/blog/public/images/Classes/1.jpg" class="modal-img" alt="modal img">
      </div>
    </div>
  </div>
</div>


<script src="http://localhost/E-learningProject/E-learning/blog/public/js/classes/bootstrap.bundle.min.js"></script>
<script src="http://localhost/E-learningProject/E-learning/blog/public/js/classes/main.js"></script>
</body>
</html>
