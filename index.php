<html>
<head>
	  <title>Students' Alumni Cell &middot; IIT Kharagpur</title>
	  <link rel="stylesheet" href="css/materialize.min.css">
	  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	  <script src="js/materialize.min.js"></script>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
	  $(document).ready(function(){
      // $('.slider').slider({full_width: true});
      // $('.parallax').parallax();
      // $('.slider').css('height','580px');
      // $('.slides').css('height','580px');
      // var height=$('._footer').height();
      // $('._wrapper').css('margin-bottom',height);
      function initialize() {
       var mapProp = {
        center:new google.maps.LatLng(51.508742, -0.120850),
        zoom: 7,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
      google.maps.event.addDomListener(window, 'load', initialize);  
    }

    });

	  </script>
</head>
<body>
<div class="_wrapper">
<?php include 'navbar.php';?> 
<!--slider-->
<div class="slider">
    <ul class="slides">
      <li>
        <img src="img/bb.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="img/bb.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="img/bb.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="img/bb.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
  <!--sliderover-->
<div class="container" style="width:100%;">
  <div class="heading">
    <center>
      <h class="subheading"><b>What</b> We Do</h>
    </center>
  </div>
<div class="row" style="margin:auto;width:90%;">
<div class="col l4 s12 m4">
<div class="card z-depth-0 _card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" width="300px" src="img/alumni.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">For Alumni<i class="material-icons right">more_vert</i></span>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">For Alumni<i class="material-icons right">close</i></span>
      <p>The Students’ Alumni Cell works towards ensuring mutual benefit of the Students as well as the Alumni. The cell helps the alumni in staying connected to the institute. Through regular interactions with the next generation of KGPians, the alumni too get to learn a lot as learning is a continuous process and each generation has their own set of skills to boast of.</p>
    </div>
  </div>
</div>
<div class="col l4 s12 m4">
<div class="card z-depth-0 _card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="img/insti.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">For Institute<i class="material-icons right">more_vert</i></span>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">For Institute<i class="material-icons right">close</i></span>
      <p>The alumni of an institute are always interested in its workings and the prevalent conditions. Students' Alumni Cell reconnects the institute and alumni, providing the alumni with an avenue to give back to their alma mater. The Institution Development Program (IDP) aims to promote the institute's domestic ranking while simultaneously improving the international stature.</p>
    </div>
  </div>
</div>
<div class="col l4 s12 m4">
<div class="card z-depth-0 _card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="img/students.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">For Students<i class="material-icons right">more_vert</i></span>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">For Students<i class="material-icons right">close</i></span>
      <p>Students' Alumni Cell works in conjunction with the student administration bodies and is therefore constantly in touch with the needs and wants of the students. It connects the students with the alumni, giving them a chance to interact with some of the most eminent personalities in all fields of work..</p>
    </div>
  </div>
</div>
</div>
</div>
<div>

  <div class="row">
    <div class="heading">
      <center>
        <h class="subheading"><b>About</b> Us</h>
      </center>
    </div>
    <div class="parallax-container col l6 m6 s6 _about">
      <div class="parallax"><img src="img/camera.jpg"></div>
    </div>
    <div class="info col l6 m6 s6 _about">
      <p>The Students' Alumni Cell, IIT Kharagpur is a voluntary student body working under the aegis 
      of the Office of Alumni Affairs and International Relations. 
      It strives to bridge the gap between IIT Kharagpur and its esteemed alumni community
      . Over the course of past few years, the Students' Alumni Cell has emerged as a key organ of the Office of Alumni Affairs and International Relations in executing its yearlong events and activities. The Students' Alumni Cell continuously endeavours to strengthen the relations of the alumni of this institute and their alma mater. Formed as and operating under the Dean, Alumni Affairs and International Relations, the Students' Alumni Cell has been instrumental in organising the Annual Alumni Meet, publishing the quarterly alumni newsletter (KGPian), the annual literary magazine (Yearnings of Yore) and the Annual Yearbook (Colours Of Life) and among other things like organising regular guest lectures by distinguished alumni in the campus. The Students' Alumni Cell also operates the Student - Alumni Mentorship Programme, My Imprint (Giving Back - Alumni contribution) and organises Alvida (the annual farewell dinner). We look forward to taking up more initiatives and organizing more such events to foster the bond between the institute and the alumni.
       For any queries/information, do write to us: aao@hijli.iitkgp.ernet.in</p>
    </div>
  </div>
<div class="heading">
  <center>
    <h class="subheading"><b>Latest</b> Programs</h>
  </center>
</div>
<div class="row">
<div class="col l3 s6 m6">
<div class="card z-depth-0">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="img/bb.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Class Gift of 2015<i class="material-icons right">more_vert</i></span>
      <p><a href="#">Campus Benches</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Class Gift of 2015<i class="material-icons right">close</i></span>
      <p>The Senior Class Gift, an initiative under the My Imprint Program saw a large number of graduating students signing up for the program. The program gives an opportunity to the graduating batch to give something back to the institute, the moment they are about to leave the institute.</p>
    </div>
  </div>
</div>
<div class="col l3 s6 m6">
<div class="card z-depth-0">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="img/bb.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Mentorship Programme<i class="material-icons right">more_vert</i></span>
      <p><a href="#">Phase 1</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Mentorship Programme<i class="material-icons right">close</i></span>
      <p>The Students’ Alumni Cell will begin the second phase of this year’s Student Alumni Mentorship Programme, one of its most successful initiatives, in October.The SAMP Program saw a participation of more t han 700 student and 300 alumni in its previous phase.</p>
    </div>
  </div>
</div>
<div class="col l3 s6 m6">
<div class="card z-depth-0">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="img/bb.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Guest Lecture<i class="material-icons right">more_vert</i></span>
      <p><a href="#">& E-Guest Lectures</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Guest Lecture<i class="material-icons right">close</i></span>
      <p>Continuing with its yearlong series of Guest Lectures by eminent alumni, the Students Alumni Cell recently hostel Mr. Veerendra Jaitltey, an alumnus of the ECE department, 1979. He delivered a motivational lecture with the theme ‘We Can, We Can’.</p>
    </div>
  </div>
</div>
<div class="col l3 s6 m6">
<div class="card z-depth-0">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="img/bb.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Yearbook<i class="material-icons right">more_vert</i></span>
      <p><a href="#">2015</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Yearbook<i class="material-icons right">close</i></span>
      <p>Continuing with its yearlong series of Guest Lectures by eminent alumni, the Students Alumni Cell recently hostel Mr. Veerendra Jaitltey, an alumnus of the ECE department, 1979. He delivered a motivational lecture with the theme ‘We Can, We Can’. </p>
    </div>
  </div>
</div>
</div>
</div>
<div id="googleMap" style="width:100%;height:90%;background:white;"></div>
</div>
<?php include 'footer.php';?>
</body>
<script type="text/javascript" src="js/style.js"></script>
</html>