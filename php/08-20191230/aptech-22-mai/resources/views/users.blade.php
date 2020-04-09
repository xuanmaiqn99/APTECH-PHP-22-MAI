  
<?php

foreach($users as $user){
  echo "<div>";
  echo $user->id;
  echo '-';
  echo $user->name;
  echo '-';
  echo $user->email;
  echo "</div>";
}
?>