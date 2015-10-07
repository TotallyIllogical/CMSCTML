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
        <div class="header">
            <?php print($menu); ?>
        </div>

        <div class="container content">
            <div class="row">
                    <?php print($content); ?>
                    <div class="col-sm-12">
                    <!--<?php 
                        foreach($quicklinks as $item){
                            print('<a href="' . $item['link'] . '">' . $item['name'] . '</a>');
                        }
                  ?>-->
                    </div>
            </div><!--row -->
        </div>><!-- container -->

        <div class="footer navbar-fixed-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 footer-text">
                        <?php print($footer); ?>
                    </div>
                </div><!-- row -->
            </div><!-- container -->
        </div>


    </body>
</html>
