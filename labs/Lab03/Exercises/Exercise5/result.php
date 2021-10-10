<?php 

if(isset($_POST['submit'])){

  $directory = "./listFol/" . $_POST["folder"];

  $images = glob($directory . "/*.jpg");

  foreach($images as $image)
  {
    echo "<img src='$image' width='400px' height='400px' style='margin: 20px;'>";
  }
}
