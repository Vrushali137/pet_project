<!-- <div class="col-12">
    <div class="row my-5 ">
        <div class="col-md-5">
            <div class="card card-outline card-navy rounded-0 shadow">
                <div class="card-header">
                    <h4 class="card-title">Contact</h4>
                </div>
                <div class="card-body rounded-0">
                    <dl>
                        <dt class="text-muted"><i class="fa fa-envelope"></i> Email</dt>
                        <dd class="pl-4"><?= $_settings->info('email') ?></dd>
                        <dt class="text-muted"><i class="fa fa-phone"></i> Contact #</dt>
                        <dd class="pl-4"><?= $_settings->info('contact') ?></dd>
                        <dt class="text-muted"><i class="fa fa-map-marked-alt"></i> Location</dt>
                        <dd class="pl-4"><?= $_settings->info('address') ?></dd>
                        <dt class="text-muted"><i class="fa fa-clock"></i> Daily Schedule</dt>
                        <dd class="pl-4"><?= $_settings->info('clinic_schedule') ?></dd>
                        <dt class="text-muted"><i class="fa fa-paw"></i> Maximum Daily Appointments</dt>
                        <dd class="pl-4"><?= $_settings->info('max_appointment') ?></dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card rounded-0 card-outline card-navy shadow" >
                <div class="card-body rounded-0">
                    <h2 class="text-center">About</h2>
                    <center><hr class="bg-navy border-navy w-25 border-2"></center>
                    <div>
                    <?= file_get_contents("about_us.html") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>About us</title>
      <meta charset="utf-8">
	    <link rel="stylesheet" href="styles.css"/>
      <style>
   html {

  font-size: 10px;
}

body 
{ 
 
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto",
    "Helvetica Neue", Arial, sans-serif;
  font-size: 1.6rem;
  line-height: 1.5;
  text-align: center;
  color: lightgray;
  margin: 0;
}

h1 {
  font-size: 4rem;
  margin-bottom: 0;
}

@media (max-width: 460px) {
  h1 {
    font-size: 3.5rem;
    line-height: 1.2;
  }
}

h1 + p {
  color: #0c0a06;
}

h2 {
  font-size: 3.25rem;
}

a {
  color: #efb21e;
}

a:visited {
  color: #efb21e;
}

#main {
  margin: 0;
  padding: 15px;
  border-radius: 5px;
  background: rgb(31, 146, 157);
}

@media (max-width: 460px) {
  #main {
    margin: 0;
  }
}

img {
  max-width: 100%;
  display: block;
  height: auto;
  margin: 0 auto;
}

#img-div {
  background: white;
  padding: 10px;
  margin: auto;
  max-width: 600px;
}

#img-caption {
  margin: 15px 0 5px 0;
  font-size: 20px;
  color: rgb(65, 63, 63);
}

@media (max-width: 460px) {
  #img-caption {
    font-size: 1.4rem;
  }
}

#headline {
  margin: 50px 0;
  text-align: center;
  font-size: 30px;
  color: black;
}

ul {
  max-width: 550px;
  margin: 0 auto 50px auto;
  text-align: left;
  line-height: 1.6;
}

li {
  margin: 16px 0;
  font-size: 20px;
}

blockquote {
  font-style: italic;
  max-width: 545px;
  margin: 0 auto 50px auto;
  text-align: left;
}
body
{
 overflow: scroll;
}
#aa{
    color: black;
}

</style>
</head>
<body>
  <div>
  <?php include("inc/header.php");?>
  </div>
  <br><br>
  <!-- <div ng-controller="about1ctrl"> -->
   
	  <br><br><br>
      <main id="main">
			  <center><h1 id="title" style="color: black;">About Us</h1>
			    <p style="font-size: 25px;">Preserving Local History</p></center>
			      <figure id="img-div">
			        <img id="image" src="./images/p9.jpg" alt="#" />
			          <figcaption id="img-caption">
				            Choosing a new veterinary clinic is an important decision so if you would like to meet Dr.Dilip Kashiwar or our terrific team or tour our veterinary clinic give us a call and we would love to answer any questions and meet you and your pet.
			          </figcaption>
			      </figure>
			
        <section id="tribute-info">
			    <h3 id="headline">We Are Purva Pet Care:</h3>
			      <ul>
				        <li style="color: black;">
                  <strong id="aa">Our focus is to provide quality veterinary care throughout the life of your pet. Our team and facilities provide preventive health care as well as early detection and treatment.We are locally owned and operated. Our veterinary clinic is a full-service hospital. Services we provide include dentistry and dental digital imagining, spays and neuters, general and orthopedic surgery, digital imaging and ultrasonography, pain control, pharmacy-prescriptions and vaccinations. Evening, emergency and Saturday appointments available.</strong>
                </li>
            </ul>    
				</section>
		  </main>
    
      
  </div>
    <div>
      <?php include("inc/footer.php");?> 
    </div>
  </body>
</html>