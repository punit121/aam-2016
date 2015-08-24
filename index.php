<?php session_start(); ?>
<html>

<head>
  <title>13th Annual Alumni Meet &middot; Home</title>
  <?php include 'topHead.php'; ?>
	<style>
	.logo{margin:15px;}
	<!--#myCarousel{display:box;width:500px;height:175px;;margin-top:-75px;margin-left:-40px;}-->
	.item{margin-left:155px;}
	
.carousel-fade {

    .carousel-inner {
        .item {
            .opacity(0.4);
            .transition-property(opacity);
            //.transition-duration(.8s);
        }

        .active {
            .opacity(1);

            &.left,
            &.right {
                left: 0;
                .opacity(0);
                z-index: 1;
            }
        }

        .next.left,
        .prev.right {
            .opacity(1);
        }
    }

    .carousel-control {
        z-index: 2;
    }
}


@media all and (transform-3d), (-webkit-transform-3d) {

    .carousel-fade {

        .carousel-inner {

            > .item {
                &.next,
                &.prev,
                &.active.right,
                &.active.left {
                    .opacity(0);
                    .translate3d(0; 0; 0);
                }

                &.next.left,
                &.prev.right,
                &.active {
                    .opacity(1);
                    .translate3d(0; 0; 0);
                }
            }

        }

    }

}

 
	</style>
</head>

<body>
  <?php include "navbar.php"; ?>
  <!-- <hr> -->

  <div class="container">
    <div class="col-md-6" id="verticalLine">
      <img src="img/logo-square.jpg" alt="" class="logo" />
			
		
			
<div id="myCarousel" class="carousel carousel-fade" data-ride="carousel"><h2 align="center"><b>Sponsored by</b></h2>
  <!-- Indicators
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
		 <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
		 <li data-target="#myCarousel" data-slide-to="7"></li>
    <li data-target="#myCarousel" data-slide-to="8"></li>
    <li data-target="#myCarousel" data-slide-to="9"></li>
		<li data-target="#myCarousel" data-slide-to="10"></li>
    
  </ol> -->

  <!-- Wrapper for slides -->
	
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="img-responsive" src="img/spons/sponsor20/e3.png"width="148" height="148">
    </div>
		<div class="item">
      <img class="img-responsive" src="img/spons/sponsor20/e2.png"width="148" height="148">
    </div>
    <div class="item">
      <img class="img-responsive" src="img/spons/sponsor20/g11.png" width="250" height="300px">
    </div>
    <div class="item">
      <img class="img-responsive"src="img/spons/sponsor20/e5.png"width="148" height="148">
    </div>
		<div class="item">
      <img class="img-responsive"src="img/spons/sponsor20/luxuryhotelpartner.png"width="200" height="200">
    </div>
		<div class="item">
      <img class="img-responsive"src="img/spons/sponsor20/g8.png"width="148" height="148">
    </div>
		<div class="item">
      <img src="img/spons/sponsor20/strategic.png"width="148" height="180">
    </div>
		<div class="item">
      <img src="img/spons/sponsor20/g9.png"width="148" height="148">
    </div>
		<div class="item">
      <img class="img-responsive"src="img/spons/sponsor20/e7.png"width="200" height="400">
    </div>
		<div class="item">
      <img class="img-responsive"src="img/spons/sponsor20/e5.png"width="150" height="300">
    </div>
		<div class="item">
      <img class="img-responsive"src="img/spons/sponsor20/e4.png"width="148" height="148">
    </div>
		<br/>
		<br/>
		<br/>
	</div>
	</div>
	</div>

    

    <div class="col-md-6">
      <div class="form-group" id="form">
        <form action="signup.php" method="get">
          <div class="form-group">
            <input class="form-control" type="text" name="name" value="" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input class="form-control" type="email" name="email" value="" placeholder="Email ID">
          </div>
          <button type="submit" name="button" class="btn btn-success btn-block">REGISTER NOW</button>
        </form>
      </div>

      <div class="" align="justify">
        <img src="img/a.png" alt="" id="quotes" />
        <div class="container-fluid">
          <div align="center">
            <b>Back to the Roots</b>
          </div>
          <br> The years spent at KGP truly moulds and shapes our personality. The unconditional love we share for KGP, our obsession with Hall, Department and Society stays with us as we wander from personal to professional life even after graduating from
          our Alma Mater. Most importantly the numerous activities at KGP we were involved in and and the friends we made for life made our stay at KGP memorable.
          <br> We strongly believe that KGP has played an important role in helping us achieve our goals. Needless to say, whatever we are it is because of the support by our Alma Mater and connections we made here.It's time to reunite with your own KGP and
          relive the carefree times that were left behind.
          <br> Bathe in the surreal reincarnation of the impeccable past as your buddies from around the world join you in you ride to the past. So, let's board the train of memories in search of our roots - Back to the Roots and relive the good old but golden
          days.
          <br>
          <div align="center">
            Come let's find our roots!
          </div>
        </div>
        <img src="img/b.png" alt="" id="quotes" class="pull-right" />
        <!-- <div class="component"></div> -->
      </div>
    </div>
  </div>
</body>
<script src="js/typed.min.js"></script>
<script src="js/main.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/owl.carousel.min.js"></script>
</html>
