<div class="my-nav-box">
    <div class="container" id="my-container">
        <img src="img/header_logo.png" class="img-responsive">
    </div>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand visible-xs" href="#">Code To My Life</a>
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