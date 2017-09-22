<!DOCTYPE html>
<html>
<head>
	<title>Cosmics Group</title>
  <meta http-equiv="X-UA-Compatible" content='IE=edge'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--   <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
<style type="text/css">
   body,html {
  height:100%;
  margin:0;
  background:black;
  font-family: sans-serif!important;
  font-size: 16px;
  }

#Home {
  background: url(gambar6.jpg);
  background-size: cover;
  background-position: center center;
  background-attachment: fixed;
  height: 100%;
  color: black;
  text-align: center;
  padding: auto;
  padding-top: 10%;
  position: relative;
}
#AboutGroup {
  background: url(gambar3.jpg);
  background-size:cover;
  background-position:center center;
  background-attachment:fixed;

}
section {
  min-height: 250px!important;
  position: relative;
  background-attachment: fixed;
  background-repeat: no repeat;
  background-position: top center;
  background-size: cover;
  padding-top: 1px;
  }

video, img {
  height:100%; width:100%;
  border-radius: 5px;
  }
video {background-color: black;}

/*logo*/
#logo {
  height:50px; width:60px; 
  float:left; margin:-15px 25px 0 -15px; 
  }

#logo:hover {
  background-color: rgba(255, 255, 255, 0.05); 
  border-radius: 10px
  }

/*nav menu */
#Hd {
  margin: 100px 100px 50px 100px;
  padding: 50px;
  }

.Hd {
  color:#fff; background-color: rgba(0, 0, 0, 0.7);
  border-radius: 5px;
  }

.btn {
  white-space: normal;
  word-break: normal;
  color: #CD853F ;
}

#mainMenu a:hover {
  background-color: #CD853F; 
  border-radius: 5px}

.dropdown-menu a:hover {
  background-color: rgba(0, 0, 0, 0.2)!important; 
  border-radius: 0!important;
  }

#buttons button {margin: 2px;}
.frosted {
  background-color: rgba(256,256,256,0.8);
  width: 75%;
  height: auto;
  margin: auto;
  border-radius: 15px;
  margin-top: 30px;
  padding: 20px;
  overflow: auto;
}

.xy {
  margin-top: 15px;
}
.xy > a {
  font-weight: 700;
  padding: 5px 25px;
}

.rd {
  width: 40%;
  float: right;
  display: inline;
  height: 100%;
  line-height: 400px;
}
#recent_work {
  padding-top: 50px;
  background-image: url(gambar4.jpg);
}

#rowPortf {
  margin: 0 100px 0 100px; 
  padding-bottom: 25px;
}

#carousel {
  width: 700px;
  margin: 0 auto;
  padding-top: 20px;
}

.devices {
  position: relative;
  height: 575px;
  overflow: hidden;
}

.mobile {
  background: url(http://i41.tinypic.com/332846d.png) no-repeat -278px -479px;
  position: absolute;
  width: 130px;
  height: 251px;
  top: 330px;
  left: 520px;
  z-index: 3;
}

.mobile img {
  position: absolute;
  width: 108px;
  height: 162px;
  top: 41px;
  left: 11px;
  
}

.tablet {
  background: url(http://i41.tinypic.com/332846d.png) no-repeat 0 -470px;
  width: 264px;
  height: 348px;
  z-index: 2;
  position: absolute;
  top: 227px;
  overflow: hidden;
}
.tablet img {
 width: 212px;
  height: 290px;
  position: absolute;
  top: 30px;
  left:25px;
}

.desktop {
  position: absolute;
  width: 594px;
  height: 457px;
  background: url(http://i41.tinypic.com/332846d.png) no-repeat 0 0;
  top: 0px;
  left: 100px;
  overflow: hidden;
}
.desktop img {
  position: absolute;
  width: 549px;
  height: 315px;
  left:20px;
  top:22px;
}
.carousel-control:hover {
  background-color: rgba(255,255,255,0.5)
}

.row-centerd {
  text-align: center;
}
.fixed {
  position: fixed;bottom: 0;left: 0;
  border-radius: 0, 30px 0 0!important;
}

@media only screen and (max-width :992px) {
  .jumbotron {margin: 0 auto;}
  #rowPortf {margin: 0 auto}
}
@media only screen and (max-width: 768px) {
  .img-zoom-out {
    margin: 30px 70px 30px 90px;
  }
  #Hd {
    margin: 50px,0 50px 0 ;
    padding: 0 0 50px; 0
  }
  #rowPortf {
    margin: 0 0px 0 auto; overflow: hidden;
  }
}
</style>
</head>
<body>
	<!-- Navbar-->

<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-header">
      <a href="#Hd" class="navbar-brand"><img src="#" height="50" width="64" id="logo" alt="logo">Cosmics Group</a>
      </div>
      <div id="mainMenu" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="#Home">Home</a></li>
          <li><a href="#AboutGroup">About Group</a></li>
          <li><a href="#recent_work">Product</a></li>
          <li><a href="#">Tugas Besar</a></li>
          <li><a href="#" data-toggle="modal" data-target='#modal'>Contacts</a></li>
         </ul>
      </div>
</div>
    <!-- Navbar-->
   <section id="Home">
   		<div class="jumbotron frosted">
   			<h1>Web Design & Development</h1>
   			<h2>We are Cosmic Group</h2>
   		</div>
   		<div class="xy">
   			<a type="button" class="btn btn-default" href="#" target="_blank">Facebook</a>
   			<a type="button" class="btn btn-default" href="#" target="_blank">Github</a>
   			<a type="button" class="btn btn-default" href="#" target="_blank">Twitter</a>
   		</div>
   </section>

<!--About-->
   <section id="AboutGroup">
   		<div class="jumbotron frosted">
   			<div class="Id">
   				<h2>Andrea Kulbaba</h2>
        <p>A pastry chef by trade, I decided to learn a new skill: web development!</p>
        <p>Based in the north of England, I try to get involved with the web development community when my schedule allows it.</p>
        <p>I'm currently expanding my skillset by diving more in depth with JavaScript.</p>
   			</div>
   			<div class="rd">
          <img id="biopic" src="#"/>
        </div>
   		</div>
   </section>
<!--About--> 

<!--Recent Work-->
     <section id="recent_work">
        <div class="container" id="Portf">
            <div class="row Hd" id="rowPortf">
                <div class="col-lg-12 text-center">
                    <h1>Some of Our Recent Work</h1>
                      <!--carousel-->
                      <div id="carousel" class="carousel slide">
                      <!-- carousel indicators-->
                          <ol class="carousel-indicators">
                            <li class='active' data-target="#carousel" data-slide-to="0"></li>
                            <li data-target="#carousel" data-slide-to="1"></li>
                            <li data-target="#carousel" data-slide-to="2"></li>
                            <li data-target="#carousel" data-slide-to="3"></li>
                            <li data-target="#carousel" data-slide-to="4"></li>
                          </ol>
                      <div class="carousel-inner">
                        <!--item active-->
                             <div class="devices item active">
                              <div class="desktop">
                                  <a href="#" target="_blank">
                                     <img src="gambar5.jpg"   alt="Calculator">
                                 </a>
                              </div>
                              <div class="tablet">
                                 <a href="#" target="_blank">
                                     <img src="gambar5.jpg"   alt="Calculator">
                                 </a>
                              </div>
                              <div class="mobile">
                                 <a href="#" target="_blank">
                                     <img src="gambar5.jpg"   alt="Calculator">
                                 </a>
                              </div>
                            </div>
                          <!--item active-->
                          <!--item2-->
                          <div class="devices item">
                              <div class="desktop">
                                    <a href="http://oky.16mb.com/MYpublic/yellow/" target="_blank">
                                      <img src="http://oky.16mb.com/MYpublic/yellow.jpg"  alt="yellow">
                                   </a>
                                </div>
                                <div class="tablet">
                                   <a href="http://oky.16mb.com/MYpublic/yellow/" target="_blank">
                                     <img src="http://oky.16mb.com/MYpublic/yellow.jpg"  alt="yellow">
                                  </a>
                                </div>
                                <div class="mobile">
                                   <a href="http://oky.16mb.com/MYpublic/yellow/" target="_blank">
                                      <img src="http://oky.16mb.com/MYpublic/yellow.jpg"  alt="yellow">
                                  </a>
                                </div>
                              </div>
                            <!--item2-->
                            <!--item3-->
                            <div class="devices item">
                              <div class="desktop">
                                  <a href="https://codepen.io/oky/full/RroLzJ/" target="_blank">
                                      <img src="http://oky.16mb.com/MYpublic/Web/Pomodoro_Clock.jpg" alt="shi">
                                  </a>
                              </div>
                              <div class="tablet">
                                  <a href="https://codepen.io/oky/full/RroLzJ/" target="_blank">
                                    <img src="http://oky.16mb.com/MYpublic/Web/Pomodoro_Clock.jpg" alt="shi">
                                  </a>
                              </div>
                              <div class="mobile">
                                 <a href="https://codepen.io/oky/full/RroLzJ/" target="_blank">
                                    <img src="http://oky.16mb.com/MYpublic/Web/Pomodoro_Clock.jpg" alt="shi">
                                  </a>
                              </div>
                            </div>
                            <!--item3-->
                            <!--item4-->
                             <div class="devices item">
                              <div class="desktop">
                                  <a href="#" target="_blank">
                                     <img src="gambar3.jpg"   alt="Calculator">
                                 </a>
                              </div>
                              <div class="tablet">
                                 <a href="#" target="_blank">
                                     <img src="gambar1.jpg"   alt="Calculator">
                                 </a>
                              </div>
                              <div class="mobile">
                                 <a href="#" target="_blank">
                                     <img src="gambar2.jpg"   alt="Calculator">
                                 </a>
                              </div>
                            </div>
                        <!--item4-->
                        
                       </div><!--carousel inner-->
                       <!--control-->
                       <a href="#carousel" class="carousel-control left" data-slide="prev">
                        <span class="gluphicon gluphicon-chevron-left"></span></a>
                        <a href="#carousel" class="carousel-control right" data-slide="next">
                        <span class="gluphicon gluphicon-chevron-right"></span></a>
                  </div>
            </div>
         </div>
    </section>
<!--contact-->
<div id="modal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button data-dismiss="modal" class='pull-right'><i class="fa fa-close"></i></button>
           <h4 class='modal-title'>Contact information:</h4>
      </div>
      <div class="modal-body">
         <video  src="http://oky.16mb.com/MYpublic/videoplayback2.ogg" type="video/ogg"  autoplay loop></video>
         <div class="carousel-caption">
            <h3>idline: @153jkl</h3>
            <p>Email: cosmics@gmail.com</p>
        </div>
      </div>
      <div class="modal-footer">
      <button class="btn btn-success " data-dismiss="modal">Close</button></div>
    </div>
  </div>
</div>
<button id="fixedButton" class="btn btn-success fixed" data-toggle="modal" data-target='#modal'>Contacts</button>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>