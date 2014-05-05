<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="My Site">
  <title><?php print($title); ?></title>
  <base href="<?php print($baseHref); ?>">
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<body>
  <div>
    <div class="header">
        <?php print($menu); ?>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-sm-8 panel panel-default">
          <div class="panel-body">
            <?php print($content); ?>
          </div>
        </div>

        <div class="col-sm-3 col-sm-offset-1">
          <div class="well">
            <h3>Mina andra sidor</h3>
            <ul class="nav nav-pills nav-stacked">
              <li><a href="#">Blog (eng)</a></li>
              <li><a href="https://www.facebook.com/Eia.Andersson">Facebook</a></li>
              <li><a href="https://plus.google.com/u/0/+EiaAnderssonSkog/">Google+</a></li>
              <li><a href="https://github.com/guenhy">GitHub (eng)</a></li>
              <li><a href="http://guenhykitten.deviantart.com/">DeviantArt (eng)</a></li>
              
            </ul>
            <h3>Mina projekt</h3>
            <ul class="nav nav-pills nav-stacked">
              <li><a href="#">Den Här sidan</a></li>
              <li><a href="#">Ej Klar: Söksida (eng)</a></li>
              <li><a href="#">Drupalshop</a></li>
              <li><a href="#">Ej Klar: WP företagsida</a></li>
              
            </ul>
          </div>
        </div>
      </div> 
    </div><!-- huvudinnehåll -->

      <div class="footer">
        <div class="container">
          <?php print($footer); ?>
        </div>
      </div>
      
  </div>
</body>
</html>
