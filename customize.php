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
header("Location: /frame/frame.php");