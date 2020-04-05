<!DOCTYPE html>
<html>
<title>Social network</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="profile.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family:'Arial', Helvetica, sans-serif}
</style>
<body class="w3-light-grey">

 <div class="pageHeader">
   <a href=""><img class="pageLogo" src="defaultpicture.png"></a>
    <p class="pageName">Social network</p>
    <!--<a href=""><h5 class="btn">Odhlásiť sa</h5></a>-->



  </div>

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-black w3-card-4">
        <div class="w3-display-container">
          <a href="defaultpicture.png"><img src="defaultpicture.png" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black"></a>
            
          </div>
          <!--<h2>Meno Priezvisko</h2>-->
         <h2> <?php echo 'swerus' ?></h2>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-red"></i>Praca</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-red"></i>Bydlisko</p>
          <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-large w3-text-red"></i>datum narodenia</p>
          <p><i class="fa fa-user fa-fw w3-margin-right w3-large w3-text-red"></i>Muz zena</p>
          
          <hr>

         <a href=""><p class="w3-large"><b><i class="fa fa-users fa-fw w3-margin-right w3-text-red"></i>Priatelia</b></p></a>
         <a href="options.html"><p class="w3-large"><b><i class="fa fa-cog fa-fw w3-margin-right w3-text-red"></i>Nastavenia</b></p></a>
         <a href="scripts/logout.php"><p class="w3-large"><b><i class="fa fa-sign-out fa-fw w3-margin-right w3-text-red"></i>Odhlásiť sa</b></p></a>
          
         
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <input type="text" placeholder="Search..">
        <hr>
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-clone fa-fw w3-margin-right w3-xxlarge w3-text-red"></i>Príspevky</h2>

       

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!--<footer class="w3-container w3-red w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  
</footer>-->

</body>
</html>
