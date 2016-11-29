<head><meta name="viewport" content="width=device-width, initial-scale=1"></head>
<header id="header-full-top" class="hidden-xs header-full">
  <div class="container">
    <nav class="top-nav">
      <div class="dropdown">
        <div class="dropdown-menu dropdown-menu-right dropdown-search-box">
          <form role="form">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button class="btn btn-ar btn-primary" type="button">Go!</button>
              </span>
            </div><!-- /input-group -->
          </form>
        </div>
      </div> <!-- dropdown -->
    </nav>
  </div> <!-- container -->
</header> <!-- header-full -->
<nav class="navbar navbar-static-top navbar-default navbar-header-full navbar-dark yamm" role="navigation" id="header">
  <div>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <i class="fa fa-bars"></i>
      </button>
      <div id="ar-brand" class="navbar-brand hidden-lg hidden-md hidden-sm">
        <h1>Joey Meyer</h1>
      </div>
    </div> <!-- navbar-header -->
    <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="navbar-collapse collapse col-sm-6" id="bs-example-navbar-collapse-1">
        <!--<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />-->
        <h1 class="animated fadeInRight"><h1>Joey Meyer</h1></h1>
      </div>
      <ul class="nav navbar-nav text-uppercase col-sm-6 pull-right">
        <?php
        $user_menu = menu_navigation_links('menu-website-navigation');
        print theme('links', array(
          'links' => $user_menu,
          'attributes' => array(
            'id' => 'user-menu',
            'class' => array('links', 'clearfix', 'nav navbar-nav', 'h1'),
          ),
          'heading' => array(
            'text' => t('User menu'),
            'level' => 'li',
            'class' => array('element-invisible'),
          ),
        ));
        ?>
      </ul>
    </div>
  </div><!-- container -->
</nav>

<section id="wrap">
  <div class="col-md-12">
    <?php
      $body = field_get_items('node',$node, 'body');
      print $body[0]['value'];
    ?>
    <?php print render($page['field_basic_page_image']); ?>
  </div>
  featurette-image img-circle img-responsive pull-right
</section>

<footer class="footer">
  <!-- <?php print render($page['footer']); ?> -->
  <div class="col-md-6 col-md-offset-6">
    <img src="themes/initial theme/imgs/vcplogo.png">
  </div>
</footer>
