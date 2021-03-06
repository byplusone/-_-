<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="./imgs/favicon.ico">

  <title>饿了吗 | 餐厅列表</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="assets/ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Custom styles for this template -->
  <link href="css/main.css" rel="stylesheet">
  <link href="css/restaurants.css" rel="stylesheet">
</head>
<body>
  
  <!-- Menus and overlays -->
  <?php  include('shared/header.html'); ?>
  
  <div id="main-content">
    
    <!-- Restaurants list -->
    <section id="splash-screen">
      <div class="splash-container">
        <h1>附近的餐厅</h1>
        <div id="restaurants" class="splash-container-scroller row">
          <template>
            <a class="item col-lg-3 col-md-4 col-sm-6 col-xs-12" href="javascript:leaveTo('meals.php')">
              <div class="data">
                <img class="restaurant-icon pull-left" src="imgs/placeholder.png" alt>
                <div>
                  <h4 class="restaurant-name">Unkown</h4>
                  <p><span class="rating-stars">☆☆☆☆☆</span>&nbsp;(<span class="rating-count"></span>)</p>
                  <p>起送价￥<span class="min-order-value"></span></p>
                  <p>配送费￥<span class="shipping-costs"></span></p>
                  <p>配送时间<span class="eta"></span>分钟</p>
                </div>
              </div>
            </a>
          </template>
          <a class="load-more-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="data">
              <div class="reload-icon"></div>
              <h4>更多</h4> 
            </div>
          </a>
        </div>
      </div>
    <!-- Footer -->
    <?php include('shared/footer.html'); ?>
    </section>
    
  </div>
  
  <!-- Load Scripts at the end to optimize site loading time -->
  <script src="js/jquery-2.1.0.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="js/api.js"></script>
  <script src="js/main.js"></script>
  <script src="js/restaurants.js"></script>
</body>
</html>