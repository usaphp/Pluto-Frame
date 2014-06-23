<?php
  if(session_id() == '') session_start();
  if(isset($_SESSION['color_scheme'])){
    $current_color = $_SESSION['color_scheme'];
  }else{
    $current_color = 'blue_sky';
  }

  if(isset($_SESSION['menu_position'])){
    $menu_position = $_SESSION['menu_position'];
  }else{
    $menu_position = 'left';
  }

  if(isset($_SESSION['navigation_type'])){
    $navigation_type = $_SESSION['navigation_type'];
  }else{
    $navigation_type = 'infinite';
  }

  function active_color_class($color, $current_color){
    if($color == $current_color){
      return 'active';
    }else{
      return '';
    }
  }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
  <link href='/frame/fonts/osfonts.css' rel='stylesheet' type='text/css'>
  <link href='/frame/style.css?ver=1' rel='stylesheet' type='text/css'>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <title>Premium Wordpress Themes</title>
</head>
<body>
  <div id="themeControlBar">
    <a href="http://pinsupreme.com/?source=from_pluto" class="logo-w">
      Pluto <span>wordpress</span>
      <i class="os-icon-angle-down"></i>
    </a>
    <div class="buttons-w">
      <div class="button-w btn-remove-frame"><a href="/" class="btn"><i class="os-icon-thin-255_checkbox_x_checked_no"></i> <span>Remove Frame</span></a></div>
      <div class="button-w btn-customize">
        <a href="#" class="btn btn-settings customize-trigger" target="_blank"><i class="os-icon-thin-053_settings_gear_preferences"></i> <span>Customize</span></a>

        <div class="customize-w">
          <div class="tiparrow"></div>
          <i class="os-icon-thin-255_checkbox_x_checked_no close-customizer"></i>
          <h3>Color Scheme:</h3>
          <div class="customize-block colors">
            <a href="/frame/customize.php?color=black_and_white" class="color color-one <?php echo active_color_class('black_and_white', $current_color); ?>"><span class="color1"></span><span class="color2"></span></a>
            <a href="/frame/customize.php?color=blue_sky" class="color color-two <?php echo active_color_class('blue_sky', $current_color); ?>"><span class="color1"></span><span class="color2"></span></a>
            <a href="/frame/customize.php?color=dark_night" class="color color-three <?php echo active_color_class('dark_night', $current_color); ?>"><span class="color1"></span><span class="color2"></span></a>
            <a href="/frame/customize.php?color=pinkman" class="color color-four <?php echo active_color_class('pinkman', $current_color); ?>"><span class="color1"></span><span class="color2"></span></a>
          </div>
          <h3>Menu Position:</h3>
          <select name="#" id="menu_position_select">
            <option value="/frame/customize.php?menu=left" <?php if($menu_position == 'left') echo "selected" ?>>Left</option>
            <option value="/frame/customize.php?menu=right" <?php if($menu_position == 'right') echo "selected" ?>>Right</option>
            <option value="/frame/customize.php?menu=top" <?php if($menu_position == 'top') echo "selected" ?>>Top</option>
          </select>
          <h3>Navigation Type:</h3>
          <select name="#" id="navigation_type_select">
            <option value="/frame/customize.php?navigation_type=infinite" <?php if($navigation_type == 'infinite') echo "selected" ?>>Infinite Scroll</option>
            <option value="/frame/customize.php?navigation_type=classic" <?php if($navigation_type == 'classic') echo "selected" ?>>Classic Pagination</option>
          </select>
        </div>
      </div>
      <div class="button-w btn-ask"><a href="mailto:tamik@soziev.com" class="btn"><i class="os-icon-thin-215_support_help_rescue"></i> <span>Ask Question</span></a></div>
      <div class="button-w btn-documentation"><a href="http://usaphp.github.io/wp-pluto-docs/readme.html" class="btn" target="_blank"><i class="os-icon-thin-063_paper_document_file_word"></i> <span>Documentation</span></a></div>
      <div class="button-w btn-purchase"><a href="/frame/purchase.php" class="btn"><i class="os-icon-thin-136_shopping_cart_store_basket_purchase"></i> <span>Purchase</span></a></div>
    </div>
  </div>
  <div class="iframe-wrap">
  <iframe src="/" frameborder="0" id="previewIframe"></iframe>
  </div>
  <script>
    $(function() {
      $('#menu_position_select').change(function(){
        window.location = $(this).find(':selected').val();
        return false;
      });
      $('#navigation_type_select').change(function(){
        window.location = $(this).find(':selected').val();
        return false;
      });
      $('.customize-trigger, .close-customizer').click(function(){
        $('.customize-w').fadeToggle('fast');
        return false;
      });
    });
  </script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-42863888-6', 'pinsupreme.com');
    ga('send', 'pageview');

  </script>
</body>
</html>