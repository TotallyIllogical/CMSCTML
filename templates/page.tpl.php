<!doctype html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="My Site">
        <title><?php print($title); ?></title>
        <base href="<?php print($baseHref); ?>">
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-36488005-1', 'auto');
            ga('send', 'pageview');
        </script>
        <link href="style/style.css" rel="stylesheet">
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="script/script.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="header">
                    <?php print($menu); ?>
                </div>
            </div>
            <div class="row content">
                <div class="col-sm-8 lotoftext">
                    <?php print($content); ?> 
                </div>
                
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="well">
                        <h3>Kontakt</h3>
                        <ul class="nav nav-pills nav-stacked">
                            <?php print($sidemenu); ?>
                        </ul>
                    </div>
                </div>
                <div class="footer col-sm-12">
                    <hr>
                    <?php print($footer); ?>
                </div>
            </div><!-- content row -->
        </div><!-- container -->

    </body>
</html>
