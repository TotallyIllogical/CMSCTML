<div class="my-nav-box">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <img src="img/header_image.png" id="my-img">
            </div>
            <div class="col-sm-10">
                <img src="img/header_logo.png" id="my-logo">
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  <?php 
                    foreach($menu as $item){
                      print('<li' . ($item['selected']?' class="topmenu-selected"':'') . '><a href="' . $item['name'] . '">' . $item['text'] . '</a></li>');
                    }
                  ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>