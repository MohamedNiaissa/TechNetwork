<?php
  echo 'file';  
  $mime_type = mime_content_type("/ressources/{$_GET['file']}");
  header('Content-Type: '.$mime_type);

  readfile("/ressources/{$_GET['file']}");
?>