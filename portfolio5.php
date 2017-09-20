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

#AboutGroup {
  background: url(gambar3.jpg);
  background-size:cover;
  background-position:center center;
  background-attachment:fixed;

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

.btn {
  white-space: normal;
  word-break: normal;
}

#mainMenu a:hover {
  background-color: #5CB85C; 
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
	<!-- Navbar-->

<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-header">
      <a href="#Hd" class="navbar-brand"><img src="#" height="50" width="64" id="logo" alt="logo">Cosmics Group</a>
      </div>
      <div id="mainMenu" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="#Home">Home</a></li>
          <li><a href="#AboutGroup">About Group</a></li>
          <li><a href="#" data-toggle="modal" data-target='#modal'>Contacts</a></li>
          <li class='dropdown'>
            <a href="#" class='dropdown-toggle' data-toggle='dropdown'>Portfolio </li>
              </ul>
           </li>
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
</body>
</html>