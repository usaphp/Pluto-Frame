<?php
// Set color for theme preview
if(isset($_GET['color'])){
  if(session_id() == '') session_start();
  $_SESSION['color_scheme'] = $_GET['color'];
}
if(isset($_GET['menu'])){
  if(session_id() == '') session_start();
  $_SESSION['menu_position'] = $_GET['menu'];
}
if(isset($_GET['navigation_type'])){
  if(session_id() == '') session_start();
  $_SESSION['navigation_type'] = $_GET['navigation_type'];
}
if(isset($_GET['show_sidebar_on_masonry'])){
  if(session_id() == '') session_start();
  $_SESSION['show_sidebar_on_masonry'] = $_GET['show_sidebar_on_masonry'];
}
if(isset($_GET['no_frame'])){
  header("Location: /");
}else{
  header("Location: /frame/frame.php");
}