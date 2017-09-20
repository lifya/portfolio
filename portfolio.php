<!DOCTYPE html>
<html>
<head>
  <title>Portfolio</title>
  <meta charset="UTF-8">
  <title>Portfolio</title>
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

  video, img {
  height:100%; width:100%;
  border-radius: 5px;
  }
video {background-color: black;}

button:focus, a:focus {
  outline:none!important;
  }
button:active {opacity:0.5;}
section {
  min-height: 250px!important;
  position: relative;
  background-attachment: fixed;
  background-repeat: no repeat;
  background-position: top center;
  background-size: cover;
  padding-top: 1px;
  background-image: url('http://oky.16mb.com/MYpublic/Web/12blur1.jpg') ;
  }

section:nth-of-type(2) {
  background-image: url('http://oky.16mb.com/MYpublic/Web/12.jpg')}


h1,p, h2 {
  padding:15px 15px 15px 40px;
  }
 
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

#mainMenu a:hover {
  background-color: #5CB85C; 
  border-radius: 5px}

.dropdown-menu a:hover {
  background-color: rgba(0, 0, 0, 0.2)!important; 
  border-radius: 0!important;
  }

#buttons button {margin: 2px;}

/*Joombotron */
#jumbOut {margin-bottom:-30px}
.jumbotron {
  background-color: rgba(0, 0, 0, 0.7)!important;
  margin: 0 100px 0 100px;
  padding:50px 0 50px;
  }
 

 #jumbIn {background-color: white; border-radius: 5px} 
  
/* Jumbotron img */

#my img {
  height:175px; width:175px; 
  margin: 20px 30px 10px 40px; 
  box-shadow:  0px 0px 50px black;
  padding:10px;
}

/*portfolio*/

#portfolio {
  padding-top: 50px;
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

/*footer */
.row-centered {
  text-align: center;
}
.fixed {
  position: fixed; bottom:0; left:0; 
  border-radius: 0  30px 0 0!important;
}
/* Medium Devices, Desktops /-md-/*/
@media only screen and (max-width : 992px) {
.jumbotron {margin: 0  auto;}
#rowPortf { margin:0 auto;}
}

/* Small Devices, Tablets /-sm-/*/
@media only screen and (max-width : 768px) {
.img-zoom-out {margin: 40px!important}
#Hd {margin: 50px 0 50px 0; padding: 0 0 50px 0;}
#rowPortf { margin:0 0px  0 auto; overflow: hidden}
}

/* Extra Small Devices, Phones /-xs-/ */
@media only screen and (max-width : 480px) {
#my img {margin: 30px 70px 30px 90px;}
.jumbotron {padding: 20px 0 20px 0;}
.desktop, .mobile {display:none;}
.tablet {top:0; left:8%}
.carousel-indicators {left:27%!important;}
.carousel-indicators>li, .carousel-indicators>.active {
  width:2em!important; height:2em!important; border-radius: 50%!important;
}
.devices {height:422px;}
#rowPortf { margin:0 auto;}
#rowPortf h2{margin-left: -50px}
}

/* Custom, iPhone Retina */
@media only screen and (max-width : 320px) {
.tablet {top:0; left:5%}
.carousel-indicators {left:24%;}
#rowPortf h2{margin-left: -70px}
}

</style>
</head>
<body>
  <!-- navbar -->
     <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-header">
      <a href="#Hd" class="navbar-brand"><img src="http://oky.16mb.com/MYpublic/Web/okyLogGr.png" height="50" width="64" id="logo" alt="logo">Cosmics</a>
         <button class="navbar-toggle" data-target="#mainMenu" data-toggle="collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div id="mainMenu" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="#About">About me</a></li>
          <li><a href="#" data-toggle="modal" data-target='#modal'>Contacts</a></li>
          <li class='dropdown'>
            <a href="#" class='dropdown-toggle' data-toggle='dropdown'>Portfolio 
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#portfolio">portfolio slider</a></li>
                <li class="divider hidden-xs"></li>
                <li><a href="http://oky.16mb.com/MYpublic/maxima-template-1/" target="_blank">Maxima-white</a></li>
                 <li><a href="http://oky.16mb.com/MYpublic/maxima-main/" target="_blank">Maxima</a></li>
                 <li><a href="http://oky.16mb.com/MYpublic/games/" target="_blank">Games</a></li>
                <li><a href="http://oky.16mb.com/MYpublic/boot/" target="_blank">Category</a></li>
                <li><a href="https://s.codepen.io/oky/debug/OMBGow" target="_blank">Twitch tv in material design</a></li>
                <li><a href="http://oky.16mb.com/MYpublic/yellow/" target="_blank">Yellow</a></li>
                <li><a href="https://codepen.io/oky/details/KVvMVo/" target="_blank">Local weather App</a></li>
                <li><a href="https://codepen.io/oky/full/GoGBeG" target="_blank">Search: Wiki,Flickr,Youtube</a></li>
                <li><a href="https://codepen.io/oky/full/gPMWxZ/" target="_blank">Calculator</a></li>
                <li><a href="https://codepen.io/oky/full/RroLzJ/" target="_blank">Pomodoro Clock</a></li>
                <li><a href="https://codepen.io/oky/full/QEZmyE" target="_blank">Tic-tac-toe game</a></li>
                <li><a href="https://s.codepen.io/oky/full/PGoBAo" target="_blank">Simon game</a></li>
                <li><a href="https://codepen.io/oky/full/WrGRPp/" target="_blank">Randome Quotes</a></li>
                <li><a href="https://codepen.io/oky/full/PZOQPd" target="_blank">Camp news</a></li>
                <li> <a href="http://oky.16mb.com" target="_blank">Shi-tsu</a></li>
              </ul>
           </li>
         </ul>
      </div>
    </div>
<!-- navbar -->
<!--social-->
<section>
<div class="container">
  <div class="row row-centered Hd" id="Hd">
    <div class="col-lg-12">
            <h3>Welcome to my life. My name is Kostya</h3>
            <p> Here you can find information about my recent work.</p>
            <div class="row" id="buttons">
              <a class="btn btn-success" href="https://github.com/oky1/Web" target="_blank">Github</a>
              <a class="btn btn-success" href="https://www.facebook.com/konstantin.okulich" target="_blank">Facebook</a>
              <a class="btn btn-success" href="https://www.freecodecamp.com/oky1" target="_blank">FreeCodeCamp</a>
            </div>
         </div>
      </div>
    </div>
<!--social-->
</section>
<section>
<a name="About"></a>
<div class="container">
  <div class="row">
    <div class="col-lg-12" id="jumbOut">
      <div class="jumbotron">
      <div id="jumbIn">
      <div id="my"><img class="pull-left" src="http://oky.16mb.com/MYpublic/Web/foto.jpg" height="543" width="642" alt=""></div>
        <h2>Hello there. We are Computer Science Informatics Groups.</h2>
        <p> I design and develop beautiful websites for local and international clients both small and large scale. I develop interactive front-ends with the latest libraries of JavaScript, Html5, CSS3 and MVC frameworks. Some of my favorit: AngularJs, NodeJs, jQuery, Bootstrap.</p>
      </div>
      </div>
    </div>
  </div>
</div>
</section>
<!--tabs-->
<!--portfolio-->
     <section id="portfolio">
        <div class="container" id="Portf">
            <div class="row Hd" id="rowPortf">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <h3>Some of my recent work.</h3>
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
                                  <a href="https://codepen.io/oky/pen/KVvMVo" target="_blank">
                                     <img src="http://oky.16mb.com/MYpublic/Local_weather_app.jpg"   alt="Calculator">
                                 </a>
                              </div>
                              <div class="tablet">
                                 <a href="https://codepen.io/oky/pen/KVvMVo" target="_blank">
                                     <img src="http://oky.16mb.com/MYpublic/Local_weather_app.jpg"   alt="Calculator">
                                 </a>
                              </div>
                              <div class="mobile">
                                 <a href="https://codepen.io/oky/pen/KVvMVo" target="_blank">
                                     <img src="http://oky.16mb.com/MYpublic/Local_weather_app.jpg"   alt="Calculator">
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
                                  <a href="https://codepen.io/oky/full/gPMWxZ/" target="_blank">
                                     <img src="http://oky.16mb.com/MYpublic/Calculator.png"   alt="Calculator">
                                 </a>
                              </div>
                              <div class="tablet">
                                 <a href="https://codepen.io/oky/full/gPMWxZ/" target="_blank">
                                     <img src="http://oky.16mb.com/MYpublic/Calculator.png"   alt="Calculator">
                                 </a>
                              </div>
                              <div class="mobile">
                                 <a href="https://codepen.io/oky/full/gPMWxZ/" target="_blank">
                                     <img src="http://oky.16mb.com/MYpublic/Calculator.png"   alt="Calculator">
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
<!--portfolio-->
<!--modal-->
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
            <h3>Skype: OkylichKostya</h3>
            <p>mail: Okylich@tut.by</p>
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
