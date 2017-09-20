<!DOCTYPE html>
<html>
<head>
	<title> Landing Page</title>
    <meta http-equiv="X-UA-Compatible" content='IE=edge'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--   <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
  <style type="text/css">
  	html, body {
  height: 100%;
  min-height: 100%;
}

#about, #portfolio, #contact{
  padding: auto;
  padding-top: 5%;
  padding-bottom: 5%;
  min-height: 100%;
  overflow: auto;

}

#home {
  background: url(gambar1.jpg);
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


#about {
  background: url(gambar2.jpg);
  background-size:cover;
  background-position:center center;
  background-attachment:fixed;

}

#portfolio {
  background: url(gambar3.jpg);
  background-size:cover;
  background-position:center center;
  background-attachment:fixed;
}

#contact {
  background: url(gambar4.jpg);
  background-size:cover;
  background-position:center center;
  background-attachment:fixed;
}

.rd img {
  width: 100%;
  height: auto;
  border-radius: 50%;
  vertical-align: middle;
}

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

#custom-bootstrap-menu.navbar-default .navbar-brand {
    color: rgba(119, 119, 119, 1);
}
#custom-bootstrap-menu.navbar-default {
    font-size: 14px;
    background-color: rgba(248, 248, 248, 1);
    background: -webkit-linear-gradient(top, rgba(194, 194, 194, 0.9) 0%, rgba(248, 248, 248, 01) 100%);
    background: linear-gradient(to bottom, rgba(194, 194, 194, 0.9) 0%, rgba(248, 248, 248, 1) 100%);
    border-bottom-width: 1px;
}
#custom-bootstrap-menu.navbar-default .navbar-nav>li>a {
    color: rgba(119, 119, 119, 1);
    background-color: rgba(248, 248, 248, 0);
}
#custom-bootstrap-menu.navbar-default .navbar-nav>li>a:hover,
#custom-bootstrap-menu.navbar-default .navbar-nav>li>a:focus {
    color: rgba(51, 51, 51, 1);
    background-color: rgba(252, 252, 252, 1);
    background: -webkit-linear-gradient(top, rgba(248, 248, 248, 0) 0%, rgba(252, 252, 252, 1) 100%);
    background: linear-gradient(to bottom, rgba(248, 248, 248, 0) 0%, rgba(252, 252, 252, 1) 100%);
}
#custom-bootstrap-menu.navbar-default .navbar-nav>.active>a,
#custom-bootstrap-menu.navbar-default .navbar-nav>.active>a:hover,
#custom-bootstrap-menu.navbar-default .navbar-nav>.active>a:focus {
    color: rgba(85, 85, 85, 1);
    background-color: rgba(250, 250, 250, 1);
    background: -webkit-linear-gradient(top, rgba(227, 227, 227, 1) 0%, rgba(250, 250, 250, 1) 100%);
    background: linear-gradient(to bottom, rgba(227, 227, 227, 1) 0%, rgba(250, 250, 250, 1) 100%);
}
#custom-bootstrap-menu.navbar-default .navbar-toggle {
    border-color: #fafafa;
}
#custom-bootstrap-menu.navbar-default .navbar-toggle:hover,
#custom-bootstrap-menu.navbar-default .navbar-toggle:focus {
    background-color: #fafafa;
}
#custom-bootstrap-menu.navbar-default .navbar-toggle .icon-bar {
    background-color: #fafafa;
}
#custom-bootstrap-menu.navbar-default .navbar-toggle:hover .icon-bar,
#custom-bootstrap-menu.navbar-default .navbar-toggle:focus .icon-bar {
    background-color: #f8f8f8;
}

.ld {
  width: 55%;
  height: 100%;
  float: left;
}

.rd {
  width: 40%;
  float: right;
  display: inline;
  height: 100%;
  line-height: 400px;
}

.btn {
  white-space: normal;
  word-break: normal;
}

.row {
  padding: 10px;
}

.portthumb {
  display: block;
  max-width: 100%;
  margin: auto;
  margin-bottom: 5px;
}



  
  </style>
</head>
<body>
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
<section id="home">
      <div class="jumbotron frosted">
  
         <h1>Web Design & Development</h1>
         <h2>I like to tinker.</h2>
      </div>
      <div class="xy">
        <a type="button" class="btn btn-default" href="andreakulbaba.wordpress.com" target="_blank">Blog</a>
        <a type="button" class="btn btn-default" href="https://github.com/akulbaba" target="_blank">Github</a>
        <a type="button" class="btn btn-default" href="https://twitter.com/AKulbaba" target="_blank">Twitter</a>
        <a type="button" class="btn btn-default" href="https://freecodecamp.com/akulbaba" target="_blank">FreeCodeCamp</a>
  </div>

    </section>
  
  <section id="about">
    <div class="jumbotron frosted">
      <div class ="ld">
        <h2>Andrea Kulbaba</h2>
        <p>A pastry chef by trade, I decided to learn a new skill: web development!</p>
        <p>Based in the north of England, I try to get involved with the web development community when my schedule allows it.</p>
        <p>I'm currently expanding my skillset by diving more in depth with JavaScript.</p>
      </div>
      <div class="rd">
          <img id="biopic" src="https://41.media.tumblr.com/e0a658b458ef9980df36122acb7a005d/tumblr_nvqw33hrR11uhejxlo1_540.jpg" />
        </div>
    </div>
  </section>
  
  <section id="portfolio">
    <div class="jumbotron frosted">
      <h2>Portfolio</h2>
      <h3>For the Odin Project</h3>
      <div class="row">
        <div class="col-xs-4">
          <a class="btn btn-default btn-block" href="https://github.com/akulbaba/blogger" target="_blank"><img src="https://41.media.tumblr.com/30928b7a022797edb53c22243e53639b/tumblr_nvwov2RzYN1uhejxlo2_250.jpg" class="portthumb"/>Blogger Project</a>
    </div>
        <div class="col-xs-4">
          <a class="btn btn-default btn-block" href="https://github.com/akulbaba/Eloquent_JavaScript_Exercises" target="_blank"><img src="https://41.media.tumblr.com/30928b7a022797edb53c22243e53639b/tumblr_nvwov2RzYN1uhejxlo2_250.jpg" class="portthumb"/>Eloquent Javascript Exercises</a>
        </div>
        <div class="col-xs-4">
          <a class="btn btn-default btn-block" href="https://github.com/akulbaba/etch-a-sketch" target="_blank"><img src="https://36.media.tumblr.com/16054bcc7934ee3e3be80c6e99e0eed5/tumblr_nvwov2RzYN1uhejxlo3_250.jpg" class="portthumb"/>Javascript Etch-a-Sketch</a>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <a class="btn btn-default btn-block" href="https://github.com/akulbaba/euler-solutions"><img src="https://40.media.tumblr.com/0f390708d56caaab91c8fe9f91d58e78/tumblr_nvwov2RzYN1uhejxlo6_250.jpg" class="portthumb"/>Project Euler Solutions</a>
    </div>
        <div class="col-xs-4">
          <a class="btn btn-default btn-block" href="https://github.com/akulbaba/google-homepage"><img src="https://41.media.tumblr.com/84012da3805d5d2beb1ec97db7ccde6b/tumblr_nvwov2RzYN1uhejxlo4_250.jpg" class="portthumb"/>Google Homepage (html & css only)</a>
        </div>
      </div>
      <h3>Personal Projects</h3>
      <div class="row">
        <div class="col-xs-6">
          <a class="btn btn-default btn-block" href="https://github.com/akulbaba/jadams" target="_blank"><img src="https://41.media.tumblr.com/06c19d3ba0f36e12b83abc56cf0bc10b/tumblr_nvwov2RzYN1uhejxlo5_250.jpg" class="portthumb"/>JAdams</a>
        </div>
        <div class="col-xs-6">
          <a class="btn btn-default btn-block" href="https://github.com/akulbaba/creative_canvas" target="_blank"><img src="https://41.media.tumblr.com/0faab80becc35e7680f50f762bd2ab36/tumblr_nvwov2RzYN1uhejxlo1_250.jpg" class="portthumb"/>Creative Canvas</a>
        </div>
      </div>
    </div>
  </section>
  
  <section id="contact">
    <div class="jumbotron frosted">
      <h2>Contact me!</h2>
      <p>If you see anything you like, or just want to say hello, <a href="#">drop me a line</a></p>
      <h2>Credits & Shout-Outs</h2>
      <p><b>Images</b> used for backgrounds courtesy of my amazing flatmate (the image of the cake) and morgue files- one of my favourite image resources, for the remainder!</p>
      <p><b>Coding help & inspiration</b> from various sources, but thanks specifically to <a href="https://codepen.io/dropside/pen/bxhke?editors=110" target="_blank">this fixed background pen</a>, and <a href="http://bootstrapdesigntools.com/tools/bootstrap-menu-builder/##" target="_blank">this custom bootstrap menu builder</a></p>
    </div>
  </section>
</body>
</html>