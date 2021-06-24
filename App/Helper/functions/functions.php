<?php
function filterURL($str)
{

  return htmlspecialchars(strip_tags(trim($str)));
}
function extendsLayout($name)
{
  require APP_DIR . "/Layout/" . $name . "Extend.php";
}
function vExtends($name)
{
  require APP_DIR . "/View/c/" . $name . ".php";
}
function jsAlert($text)
{
  $alert = "<script>alert('" . $text . "')</script>";
  return $alert;
}
function assetsURL($name)
{

  echo $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/" . BASE_PROJECT . "assets/" . $name;
}
function site_URL()
{
  return $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/" . BASE_PROJECT;
}
/*function get($name)
{
  if (isset($_GET[$name]))
  {

    if (is_array($_GET[$name]))
    {
      return array_map(function ($item)
      {
        return filterURL($item);
      }
      , $_GET[$name]);
    }
    else
    {
      return filterURL($_GET[$name]);
    }

  }
  return false;
}*/
function post_get($name)
{
  if (isset($_POST[$name])) {

    if (is_array($_POST[$name])) {
      return array_map(
        function ($item) {
          return filterURL($item);
        },
        $_POST[$name]
      );
    } else {
      return filterURL($_POST[$name]);
    }
  } else {
    return false;
  }
}
function gets($name)
{
  if (isset($_GET[$name])) {

    if (is_array($_GET[$name])) {
      return array_map(
        function ($item) {
          return filterURL($item);
        },
        $_GET[$name]
      );
    } else {
      return filterURL($_GET[$name]);
    }
  } else {
    return false;
  }
}

function post($name)
{
  if (isset($_POST[$name])) {
    return true;
  } else {
    return false;
  }
}

function session($name)
{
  if (isset($_SESSION[$name])) {
    return $_SESSION[$name];
  } else {
    return false;
  }
}

function tokenGen()
{
  $data = base64_encode(uniqid(rand(0000, 9999)) . date('d.m.Y H:i:s') . uniqid(rand(9999, 99999)) . md5(uniqid(uniqid())) . base64_encode(rand(9999, 9999) . uniqid()) . date('d.m.Y H:i:s')) . sha1(uniqid()) . sha1(rand(9999, 5555));
  return $data;
}

function uniqIDgen()
{
  return sha1(base64_encode(uniqid(rand(000, 999)) . date('d.m.Y H:i:s') . uniqid()));
}
function replaceSpace($string)
{
  $string = preg_replace("/\s+/", " ", $string);
  $string = trim($string);
  return $string;
}


function arrayFilterUsername($username,$arr){
  if ($arr == $username) {
    return false;
  }
  else {
    return true;
  }
}
