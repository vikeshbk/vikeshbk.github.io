<html>
<head>
  <title>sass test</title>
  <meta name="viewport" content="initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="jquery.fullPage.css" />
    <script src="js/jquery.min.js"></script>
    <script src="vendors/jquery.easings.min.js"></script>
    <script type="text/javascript" src="jquery.fullPage.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
      <link rel="stylesheet" type="text/css" href="css/main.css" />

</head>
<body>
  <header class="container-fluid">
    <div class="container">
      <div class="logo">
        <img src="images/logo.png" alt="">
      </div>
      <nav>
        <div class="menu">
          <span></span>
          <ul>
            <li><a href="#page1">HOME</a></li>
            <li><a href="#page2">PARTNERS</a></li>
            <li><a href="#page3">PORTFOLIO</a></li>
            <li><a href="#page4">CONTACT</a></li>
          </ul>
        </div>

      </nav>
    </div>

  </header>
  <div id="fullpage">
    <?php include 'home.php'; ?>

    <?php include 'client.php'; ?>

    <?php include 'partners.php'; ?>

    <?php include 'contact.php' ?>


  </div>


  <script type="text/javascript">
  $( document ).ready(function() {
    console.log("hai");
      $('.menu').click(function(){
        $('.menu').toggleClass('active');
      });
  });
  </script>

  <script type="text/javascript">
  $( document ).ready(function() {
    console.log("hai");
      $('.menu').click(function(){
        $('.menu').toggleClass('active');
      });
  });
  </script>
  <script>
  $(document).ready(function() {
    $('#fullpage').fullpage({
    'verticalCentered': true,
    'css3': true,
    'navigation': true,
    'navigationPosition': 'right',
    'navigationTooltips': ['fullPage.js', 'Powerful', 'Amazing', 'Simple']
  });
});
  </script>
  <script type="text/javascript">
  $(document).ready(function() {
    $(".switch-btn").click(function(){
      $(".contact-details").toggleClass("active");
      $(".contact_form").toggleClass("active");

    });
  });

  </script>
  <script>
        function initMap() {
          var uluru = {lat: 12.95396, lng: 77.4908528};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14,
            center: uluru
          });
          var marker = new google.maps.Marker({
            position: uluru,
            map: map
          });
        }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9f6Qb7iMECdh2j81IQlUtH6uOX8-FLfY&callback=initMap">
      </script>

</body>
</html>
