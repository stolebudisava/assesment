<?php

class Validator
{

  public function __construct() {

  }

  $fullName = $_POST['fullName'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  function validateForm() {
    //trim fullName
    $name = trim($fullName);
    $lastName = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
    $firstName = trim( preg_replace('#'.$lastName.'#', '', $name ) );

    $errors = array();

          if (strlen($password) < 8 || strlen($password) > 12) {
              $errors[] = "Password should be min 8 characters and max 12 characters";
          }
          if (!preg_match("/[A-Z]/", $password) {
              $errors[] = "Password should contain at least one Capital Letter";
          }
          if (!preg_match("/[a-z]/", $password) {
              $errors[] = "Password should contain at least one small Letter";
          }
          if (!preg_match("/\d{3}/", $password) {
              $errors[] = "Password should contain at least 3 digit";
          }
          if (!preg_match("/\W{2}/", $password) {
              $errors[] = "Password should contain at least 2 special character";
          }
          if (!preg_match("/(\w)\1{6,}/", $password) {
              $errors[] = "Password should not contain more than 5 repeating characters";
          }
          if (preg_match("/\d{7}/u", $password, $matches) > 0) {
              $errors[] = "Password should not contain more than 6 consecutive numbers";
          }
          if (preg_match("/\s/", $password) {
              $errors[] = "Password should not contain any white space";
          }
          if (stripos($password, $firstName) !== false) {
              $errors[] = "Password contains firstName";
          }
          if (stripos($password, $lastName) !== false) {
              $errors[] = "Password contains lastName";
          }
          if($password == $cpassword) {
            $errors[] = "Password and Confirm Password are not the same";
          }

          if ($errors) {
              foreach ($errors as $error) {
                  echo $error . "\n";
              }
              die();
          } else {
              echo "$pass => MATCH\n";
              return true;
          }
    }

}
 ?>
