
<!-- carousel starts here -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

 	 
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="<?php bloginfo('template_directory')?>/assets/images/carousel.png" alt="Los Angeles" style="width:100%; height: 600px;">
        <div class="carousel-caption">
          <h3 style="font-family: pattaya; font-size: 38px">Let’s make your stay memorable</h3>
          <!-- <p>LA is always so much fun!</p> -->
        </div>
      </div>

      <div class="item">
        <img src="<?php bloginfo('template_directory')?>/assets/images/carousel1.jpg" alt="Chicago" style="width:100%; height: 600px;">
        <div class="carousel-caption">
           <h3 style="font-family: pattaya; font-size: 38px">Let’s make your stay memorable</h3>
          <!-- <p>Thank you, Chicago!</p> -->
        </div>
      </div>
    
      <div class="item">
        <img src="<?php bloginfo('template_directory')?>/assets/images/carousel2.jpg" alt="New York" style="width:100%; height: 600px";>
        <div class="carousel-caption">
            <h3 style="font-family: pattaya; font-size: 38px">Let’s make your stay memorable</h3>
         <!--  <p>We love the Big Apple!</p> -->
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!-- Carousel ends here -->