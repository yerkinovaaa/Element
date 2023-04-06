<?php 
  define("UPLOAD_DIR", get_included_files() . realpath(dirname(__FILE__)) . "/uploads/");
  header('Content-Type: application/json');

  if (!empty($_FILES)) {
    echo '{ "message": "completed uploading files", "statusCode": 200, "fileNames": ' . json_encode($_FILES['fileUpload']['name']) . ' }';
  } else {
    header('HTTP/1.1 500 Internal Server Error');
    echo '{ "message": "no files uploaded", "statusCode": 500 }';
  }
?>
