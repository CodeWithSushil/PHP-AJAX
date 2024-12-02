<?php
$postData = json_decode(file_get_contents("php://input"), true);

$data = $postData ?? $_POST;

if (isset($data["submit"])) {
  $msg = "";
  if ($data["name"] == "") {
    echo $msg = "Name must be required.";
  } elseif ($data["email"] == "") {
    echo $msg = "Email must be required.";
  } elseif ($data["password"] == "") {
    echo $msg = "Password must be required.";
  } else {
    echo $msg = "done";
  }
}