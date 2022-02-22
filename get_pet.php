<?php
//critter_handler.php
//responds to ja_post.php via a POST or GET ajax request
// $_REQUEST handles post or GET
if(isset($_REQUEST['critter']))
{
  $critter_type = ucfirst($_REQUEST['critter']);
  echo '<h3> You have selected a lovely pet' . $critter_type . '!</h3>';
  echo '<image src=/' . $_REQUEST['critter'] . '.jpg"style=max-width:500px;" />';
}else{
  echo 'sorry, no critter!';
}
?>