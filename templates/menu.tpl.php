
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p class="navbar-brand"><?php echo SITE_TITLE; ?></p>
            </div>

            <?php //Collect the nav links, forms, and other content for toggling ?>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                  <?php 
                    foreach($menu as $item){
                      print('<li' . ($item['selected']?' class="topmenu-selected"':'') . '><a href="' . $item['name'] . '">' . $item['text'] . '</a></li>');
                    }
                  ?>
                </ul>
            </div><?php //navbar-collapse ?>
        </div><?php //container-fluid ?>
    </nav>
