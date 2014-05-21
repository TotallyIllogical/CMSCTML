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
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="bootstrap/dist/js/bootstrap.min.js"></script>
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
              <?php getSidemenu1(); ?>
            </ul>
            <h3>Mina projekt</h3>
            <ul class="nav nav-pills nav-stacked">
              <?php getSidemenu2(); ?>
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
