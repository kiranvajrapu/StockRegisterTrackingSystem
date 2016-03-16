<!DOCTYPE html>
  <html>
    <head>
	<title>STOCK:REGISTER</title>
	<!--import load.css-->
	<link href="load.css" rel="stylesheet">
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="fonts/font-awesome.min.css" type="text/css" media="screen">
    <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
    <link href="css/material.min.css" rel="stylesheet">
    <link href="css/ripples.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
	<link href="css/materialize.min.css" type="text/css" rel="stylesheet">
	<link type="text/css" href="../google.css" rel="stylesheet">
   
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body class="brown lighten-2 body">
	<header>
	<nav class="top-nav #3e2723 brown " id="top1">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo"> 
  <img src="images/logo1.jpg" alt="no-display" style="border-radius:100px" width=20%></img>
  STOCK IT EASY</a>

      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#!" class="waves-effect waves-light  modal-trigger" id="login">LOGIN</a></li>
        <li><a href="#!" onclick="loadDoc()" id="project">ABOUT PROJECT</a></li>
        <li><a id="dev" href="#developer">ABOUT DEVELOPERS</a></li>
      </ul>
    </div>
  </nav>
  
  </header>
  
  
  <main>
  
  <div class="row">
  <div class="col s12 m4 l3 ">
  <!--<p> side nav</p>-->
  
  
  <ul class="collapsible" data-collapsible="accordion">
   
   <li class="bold">
      <div id="category" class="collapsible-header waves-effect waves-#3e2723 brown"><span class="white-text text-darken-2">CATEGORIES</span></div>
      <div class="collapsible-body">
	 <ul>
    <li class="bold">
      <div class="btn-flat waves-effect waves-#424242 orange  ">
      <a href="#!" onclick="loadElectronics()">ELECTRONICS</a></div>
    </li>
    <li class="bold">
      <div class="btn-flat  waves-effect waves-#424242 white ">
      <a href="#!" onclick="loadPaper()">PAPER PRODUCTS</a></div>
    </li>
    <li class="bold">
      <div class="collapsible-header waves-effect waves-#424242 green  ">
      <a href="#!" onclick="loadWrite()">WRITING INTRUMENTS</a></div>
    </li>
  </ul>
  </div>
    </li><br>
	
    <li class="bold">
      <div id="contact" class="collapsible-header waves-effect waves-#3e2723 brown"><p class="white-text text-darken-2">CONTACT US</p></div>
      <div class="collapsible-body">
	  <ul><li class="blue-text text-darken-2"><b>GOPIPRASANTH:8498011066</b></li>
	      <li class="blue-text text-darken-2"><b>KIRAN:9700946356</b></li>
		  <li class="blue-text text-darken-2"><b>PREETHAM:9000288212</b></li>
		  <li class="blue-text text-darken-2"><b>HARISH:8179966817</b></li>
	  </ul>	  
	  </div>
    </li><br>
    <li class="bold">
      <div id="source" class="collapsible-header waves-effect waves-#3e2723 brown"><p class="white-text text-darken-2">DOWNLOADSOURCE</p></div>
      <div class="collapsible-body"></div>
    </li>
  </ul>
        
  
  </div>
  
  <!--main centered body-->
  <div class="col s12 m8 l9" id="contentdisplay">
  
  <!--BACK GROUND IMAGE-->
	<img class="responsive" width=100% height=200% src="images/images6.jpg"/>
  
  
  </div>
 
 <!--LOG IN MODEL-->
 <!-- Modal Structure -->
  <div id="logincontent" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h5>LOGIN PAGE</h5>
	  <div class="row">
      <form class="col s12">
	    <div class="row">
        <div class="input-field col s6">
          <input  id="username" type="text" class="validate">
          <label for="username">USER NAME</label>
        </div>
        <div class="input-field col s6">
          <input id="password" type="password" class="validate">
          <label for="password">PASSWORD</label>
        </div>
      </div>
     <button class="btn waves-effect waves-#3e2723 brown  btn-flat" type="submit" name="action">LOGIN
  <i class="material-icons right">send</i></button>
	  
	  </form>
	  
	  </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-#3e2723 brown btn-flat" id="close-button">CLOSE</a>
    </div>
  </div>
  </div>
 
 </div>

 
 <!-- ABOUT DEVELOPERS-->
 
   
  <div class="row">         

<h3 class="white-text">.<hr>.</h3>
	<!--KIRAN VAJRAPU--> 
 <div id="developer"> 
 <h3 class="white-text">ABOUT US</h3>

 <div class="col s3"> 
   <div class="row">
        <div class="col s12 m12 l12">
          <div class="card">
            <div class="card-image">
              <img src="images/kiran.jpg">
              <span class="card-title orange-text">KIRAN VAJRAPU</span>
            </div>
            <div class="card-content">
              <p>iam a student of mvgr college of enhineering. 
			  iam also hacktiwist at swecha.</p>
            </div>
            <div class="card-action">
              <a href="#!">visit my profile</a>
            </div>
          </div>
        </div>
      </div>
</div>	  
  	  
    <!--HARISH PALAVALASA-->
    <div class="col s3">	
      <div class="row">
        <div class="col s12 m12 l12">
          <div class="card">
            <div class="card-image">
              <img src="images/harish.jpg">
              <span class="card-title white-text">HARISH PALAVALASA</span>
            </div>
            <div class="card-content">
              <p>iam a student of mvgr college of enhineering. 
			  i am a techie imterested in research.</p>
            </div>
            <div class="card-action">
              <a href="#!">visit my profile</a>
            </div>
          </div>
        </div>
      </div>
	</div>
</div>

<!--PREETHAM THALLURI-->
  
   <div class="col s3">
       <div class="row">
        <div class="col s12 m12 l12">
          <div class="card">
            <div class="card-image">
              <img src="images/preetham.jpg">
              <span class="card-title white-text">PREETHAM THALLURI</span>
            </div>
            <div class="card-content">
              <p>iam a student of mvgr college of enhineering. 
			  iam a film editor,and also interested in making films.</p>
            </div>
            <div class="card-action">
              <a href="#!">visit my profile</a>
            </div>
          </div>
        </div>
      </div> 
	 </div>
  
  <!--gopiprasanth potipireddy-->
      <div class="col s3">
	  <div class="row">
        <div class="col s12 m12 l12">
          <div class="card">
            <div class="card-image">
              <img src="images/prasanth.jpg" >
              <span class="card-title green-text">GOPIPRASANTH POTIPIREDDY</span>
            </div>
            <div class="card-content">
              <p>iam a student of mvgr college of enhineering. 
			  iam also hacktiwist at swecha.</p>
            </div>
            <div class="card-action">
              <a href="#!">visit my profile</a>
            </div>
          </div>
        </div>
      </div>
	  </div>
</div>

  




</main>	
  
	<!--PAGE FOOTER-->
	 <footer class="page-footer #3e2723 brown">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">WE ARE ON WEB</h5>
                <p class="grey-text text-lighten-4">DEVELOPED BY MVGR CSE-B</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">WEB ACTIVITIES</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">FACEBOOK</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">GOOGLE+</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">TWITTER</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">TELEGRAM</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            <p class="blue-text text-darken-2"> © 2016 COPYLEFT</p>
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
      </footer>
 		
 
	<script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ripples.min.js"></script>
    <script src="js/material.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.mmenu.min.all.js"></script> 
    <script src="js/count-to.js"></script>   
    <script src="js/jquery.inview.min.js"></script>     
    <script src="js/main.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/jquery.nav.js"></script>      
    <script src="js/smooth-on-scroll.js"></script>
    <script src="js/smooth-scroll.js"></script>
	
	<script src="jquery-1.11.3.min.js" type="text/javascript"></script>
	
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	 
	 <!--OWN SCRIPT--> 
	  
	  <script>
	  $(document).ready(function(){
		  $("#login").click(function(){
               $('#logincontent').openModal();
           });
		
			//$("#load").addClass('loading');
		
		  
	  });
	  
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("contentdisplay").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "about.html", true);
  xhttp.send();
}
function loadElectronics() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("contentdisplay").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "electronics.php", true);
  xhttp.send();
}
function loadPaper() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("contentdisplay").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "paperproducts.php", true);
  xhttp.send();
}
function loadWrite() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("contentdisplay").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "officestationary.php", true);
  xhttp.send();
}

</script>
    </body>
  </html>
        