<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
/*use scss*/

@import url('https://fonts.googleapis.com/css?family=Work+Sans:300,600');

:root {
  --background: rgba(0, 104, 200, .55);
}

/*css reset*/
/*psuedo elements*/

*, *::before, *::after {
  box-sizing: border-box;
}

body {
	margin: 0;
	background: rgb(253, 251, 251);
	font-family: Arial;
	font-weight: 200;
}

.content {
  height: 100%;
  background-image: url('resources/assets/images/background.jpg');
  background-color: rgb(100, 102, 104);
  background-blend-mode: multiply;
  background-size: cover;
  display: grid;
  place-items: center;
  color:white;
}

/* navigation styles start here */
/*fixed header logo*/
header {
  background: var(--background);
  text-align: center;
  position: fixed;
  z-index: 999;
  width: 100%;
}

/* changed this from the tutorial video to
   allow it to gain focus, making it tabbable */
.nav-toggle {
  position: absolute !important;
  top: -9999px !important;
  left: -9999px !important;
}

.nav-toggle:focus ~ .nav-toggle-label {
  outline: 3px solid rgba(lightblue, .75);
}

/*Set hamburger meuu position*/

.nav-toggle-label {
  position: absolute;
  top: 0;
  left: 0;
  margin-left: 1em;
  height: 100%;
  display: flex;
  align-items: center;
}

/*hamburger menu style*/

.nav-toggle-label span,
.nav-toggle-label span::before,
.nav-toggle-label span::after {
  display: block;
  background: white;
  height: 2px;
  width: 2em;
  border-radius: 2px;
  position: relative;
}

.nav-toggle-label span::before,
.nav-toggle-label span::after {
  content: '';
  position: absolute;
}



.nav-toggle-label span::before {
  bottom: 8px;
}

.nav-toggle-label span::after {
  top: 8px;
}

/*set position the nav bar*/

nav {
  position: absolute;
  text-align: left;
  top: 100%;
  left: 0;
  background: var(--background);
  width: 100%;
  transform: scale(1, 0);
  transform-origin: top;
  transition: transform 400ms ease-in-out;
}

nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

nav li {
  margin-bottom: 2em;
  margin-left: 1em;
}

nav a {
  color: white;
  text-decoration: none;
  font-size: 1.2rem;
  text-transform: uppercase;
  opacity: 0;
  transition: opacity 250ms ease-in-out;
}

nav a:hover {
  color: #000;
}

/*check whether nav after nav-toggle is checked*/

.nav-toggle:checked ~ nav {
  /*expand the hamburger menu*/
  transform: scale(1,1);
}

.nav-toggle:checked ~ nav a {
  opacity: 1;
  /*fade in*/
  transition: opacity 250ms ease-in-out 250ms;
}

/*Desktop version*/

@media screen and (min-width: 800px) {
  .nav-toggle-label {
    display: none;
  }

  header {
    display: grid;
    /*4 columns layout*/
    /*logo is in the 2nd columns and nav bar is in the 3rd columns*/
    grid-template-columns: 1fr auto minmax(600px, 3fr) 1fr;
  }
  
  .logo {
    grid-column: 2 / 3;
    padding: 20px;
    
  }
  
  nav {
    
    /*reset style before*/
    
    
    all: unset; 
    
   
    position: relative;
    text-align: left;
    transition: none;
    transform: scale(1,1);
    background: none;
    top: initial;
    left: initial;
    
    grid-column: 3 / 4;
    display: flex;
    justify-content: flex-end;
    align-items: center;
  }
  
  nav ul {
    display: flex;
  }
  
  nav li {
    margin-left: 3em;
    margin-bottom: 0;
  }
  
  nav a {
    opacity: 1;
    position: relative;
    font-size: 15px;
  }
  
  nav a::before {
    content: '';
    display: block;
    height: 2px;
    background: white;
    position: absolute;
    bottom: -.25em;
    left: 0;
    right: 0;
    transform-origin:right;
    transform: scale(0, 1);
    transition: transform ease-in-out 150ms;
  }
  
  nav a:hover::before {
    transform: scale(1,1);
  }
}

/* for middle .content */
html {
  font-family: sans-serif;
  box-sizing: border-box;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

.text-center {
  text-align: center;
}

.color-white {
  color: #fff;
}

.box-container {
  /* align-items: center; */
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  padding: 25px 10px;
  width: 100%;
 
  
}

@media screen and (min-width: 1380px) {
  .box-container {
    flex-direction: row;
  }
}

.box-item {
  position: relative;
  /* -webkit-backface-visibility: hidden; */
  width: 355px;
  margin-bottom: 25px;
  margin-left:-5px;
  margin-right:10px
  max-width: 100%;
}

.flip-box {
  -ms-transform-style: preserve-3d;
  transform-style: preserve-3d;
  -webkit-transform-style: preserve-3d;
  perspective: 1000px;
  -webkit-perspective: 1000px;
}

.flip-box-front,
.flip-box-back {
  background-size: cover;
  background-position: center;
  border-radius: 8px;
  min-height: 475px;
  -ms-transition: transform 0.7s cubic-bezier(0.4, 0.2, 0.2, 1);
  transition: transform 0.7s cubic-bezier(0.4, 0.2, 0.2, 1);
  -webkit-transition: transform 0.7s cubic-bezier(0.4, 0.2, 0.2, 1);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-front {
  -ms-transform: rotateY(0deg);
  -webkit-transform: rotateY(0deg);
  transform: rotateY(0deg);
  -webkit-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-front {
  -ms-transform: rotateY(-180deg);
  -webkit-transform: rotateY(-180deg);
  transform: rotateY(-180deg);
  -webkit-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

.flip-box-back {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;

  -ms-transform: rotateY(180deg);
  -webkit-transform: rotateY(180deg);
  transform: rotateY(180deg);
  -webkit-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-back {
  -ms-transform: rotateY(0deg);
  -webkit-transform: rotateY(0deg);
  transform: rotateY(0deg);
  -webkit-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

.flip-box .inner {
  position: absolute;
  left: 0;
  width: 100%;
  padding: 60px;
  outline: 1px solid transparent;
  -webkit-perspective: inherit;
  perspective: inherit;
  z-index: 2;

  transform: translateY(-50%) translateZ(60px) scale(0.94);
  -webkit-transform: translateY(-50%) translateZ(60px) scale(0.94);
  -ms-transform: translateY(-50%) translateZ(60px) scale(0.94);
  top: 50%;
}

.flip-box-header {
  font-size: 34px;
}

.flip-box p {
  font-size: 20px;
  line-height: 1.5em;
}

.flip-box-img {
  margin-top: 25px;
}

.flip-box-button {
  background-color: transparent;
  border: 2px solid #fff;
  border-radius: 2px;
  color: #fff;
  cursor: pointer;
  font-size: 20px;
  font-weight: bold;
  margin-top: 25px;
  padding: 15px 20px;
  text-transform: uppercase;
}

 </style>
</head>

  <body>
    <div ng-controller="homeCtrl">
      <div>
        <?php include("inc/header.php");?>
      </div>
        <center><h1 class="text-white"><strong>___WHAT WE DO___</strong> </h1></center>
      <center>
        <table>
          <tr>
            <td>
            <div class="box-container">
        <div class="row">
          <div class="col-sm-4">
        <div class="box-item">
          <div class="flip-box">
            <div class="flip-box-front text-center" style="background-image: url('./images/1.jpg');">
              <div class="inner color-white">
                <h3 class="flip-box-header" style="color: black;">Surgeries</h3>
                <!-- <p style="color: black;">Major & Minor surgery</p> -->
                <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
              </div>
            </div>
            <div class="flip-box-back text-center" style="background-image: url('./images/2.jpg');">
              <div class="inner color-white">
                <h3 class="flip-box-header" style="color: black;">Surgeries</h3>
                <!-- <p style="color: black;">Major & Minor surgery</p> -->
                <!-- <button class="flip-box-button">Learn More</button> -->
              </div>
            </div>
          </div>
        </div>
      </div>
            </td>&nbsp;&nbsp;&nbsp;
            <td>
            <div class="col-sm-4">
        <div class="box-item">
          <div class="flip-box">
            <div class="flip-box-front text-center" style="background-image: url('./images/3.jpg');">
              <div class="inner color-white">
                <h3 class="flip-box-header"  style="color: black;">Vaccinations</h3>
                <!-- <p style="color: black;">All types of vaccinations</p> -->
                <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
              </div>
            </div>
            <div class="flip-box-back text-center" style="background-image: url('./images/4.jpg');">
              <div class="inner color-white">
                <h3 class="flip-box-header"  style="color: black;">Vaccinations</h3>
                <!-- <p style="color: black;">All types of vaccinations</p> -->
                <!-- <button class="flip-box-button">Learn More</button> -->
              </div>
            </div>
          </div>
        </div>
      </div>
            </td>
            <td style="cellspacing: 20px;">
            <div class="col-sm-4">
        <div class="box-item">
          <div class="flip-box">
            <div class="flip-box-front text-center filter-" style="background-image: url('./images/5.jpg');">
              <div class="inner color-white">
                <h3 class="flip-box-header" style="color: black;">Allergy Testing</h3>
                <!-- <p style="color: black;">Pet's General Check Up<br> -->

                </p>
                <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
              </div>
            </div>
            <div class="flip-box-back text-center" style="background-image: url('./images/6.png');">
              <div class="inner color-white">
                <h3 class="flip-box-header" style="color: rgb(6, 6, 6);">Allergy Testing</h3>
                <!-- <p >Pet's General Check Up</p> -->
                <!-- <button class="flip-box-button">Learn More</button> -->
              </div>
            </div>
          </div>
        </div>
      </div>
            </td>
          </tr>
        </table>
        </center>
      
      
    </div>
  
    </body>
   
</html>