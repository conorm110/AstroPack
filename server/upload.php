<?php
$target_dir = "data/audiofiles/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if (file_exists($target_file)) {
  echo "<script>alert(\"File Already Exists\");</script>";
  header("Refresh:1; url=http://astrotalk.tk/queue.php");
  $uploadOk = 0;
}
if($imageFileType != "mp3") {
  echo "<script>alert(\"MP3 is the only excepted format\");</script>";
  header("Refresh:1; url=http://astrotalk.tk/queue.php");
  $uploadOk = 0;
}
if ($uploadOk == 1) {
  $target_file = str_replace(' ', '_', $target_file);
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "<script>alert(\"Successful Upload\");</script>";
  header("Refresh:1; url=http://astrotalk.tk/queue.php");
  } else {
    
  }
}
?>