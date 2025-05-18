<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

Some predefined variables in PHP are "superglobals", which means that they are always
 accessible, regardless of scope - and you can access them from any function, class 
 or file without having to do anything special.

The PHP superglobal variables are:

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION


<h1> ============= GLOBALS ======================  </h1>

<h1>========= With $Global =============== </h1>
<?php

$x = 75;
  
function myfunction() {
  echo $GLOBALS['x'];
}

myfunction();
?>

<h1>========= Without $Global =============== </h1>
<?php

$x = 75;
  
function myfunction2() {
  echo $x;
}

myfunction2();
?>

<h1>========= Create $Global Varibales =============== </h1>
<?php
$x = 100;

echo $GLOBALS["x"];
echo $x;
?>

<?php

function myfunction3() {
    $GLOBALS["x"] = 100;
  }
  
  myfunction3();
  
  echo $GLOBALS["x"];
  echo $x;
?>


<h1> ==================  $_SERVER ================= </h1>


<!-- $_SERVER
$_SERVER is a PHP super global variable which holds information about headers, 
paths, and script locations.

The example below shows how to use some of the elements in $_SERVER: -->


The following table lists the most important elements that can go inside $_SERVER:

Element/Code	Description
$_SERVER['PHP_SELF']	Returns the filename of the currently executing script
$_SERVER['GATEWAY_INTERFACE']	Returns the version of the Common Gateway Interface (CGI) the server is using
$_SERVER['SERVER_ADDR']	Returns the IP address of the host server
$_SERVER['SERVER_NAME']	Returns the name of the host server (such as www.w3schools.com)
$_SERVER['SERVER_SOFTWARE']	Returns the server identification string (such as Apache/2.2.24)
$_SERVER['SERVER_PROTOCOL']	Returns the name and revision of the information protocol (such as HTTP/1.1)
$_SERVER['REQUEST_METHOD']	Returns the request method used to access the page (such as POST)
$_SERVER['REQUEST_TIME']	Returns the timestamp of the start of the request (such as 1377687496)
$_SERVER['QUERY_STRING']	Returns the query string if the page is accessed via a query string
$_SERVER['HTTP_ACCEPT']	Returns the Accept header from the current request
$_SERVER['HTTP_ACCEPT_CHARSET']	Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
$_SERVER['HTTP_HOST']	Returns the Host header from the current request
$_SERVER['HTTP_REFERER']	Returns the complete URL of the current page (not reliable because not all user-agents support it)
$_SERVER['HTTPS']	Is the script queried through a secure HTTP protocol
$_SERVER['REMOTE_ADDR']	Returns the IP address from where the user is viewing the current page
$_SERVER['REMOTE_HOST']	Returns the Host name from where the user is viewing the current page
$_SERVER['REMOTE_PORT']	Returns the port being used on the user's machine to communicate with the web server
$_SERVER['SCRIPT_FILENAME']	Returns the absolute pathname of the currently executing script
$_SERVER['SERVER_ADMIN']	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
$_SERVER['SERVER_PORT']	Returns the port on the server machine being used by the web server for communication (such as 80)
$_SERVER['SERVER_SIGNATURE']	Returns the server version and virtual host name which are added to server-generated pages
$_SERVER['PATH_TRANSLATED']	Returns the file system based path to the current script
$_SERVER['SCRIPT_NAME']	Returns the path of the current script
$_SERVER['SCRIPT_URI']	Returns the URI of the current page

<?php
echo $_SERVER['PHP_SELF'];
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['HTTP_HOST'];
echo $_SERVER['HTTP_REFERER'];
echo $_SERVER['HTTP_USER_AGENT'];
echo $_SERVER['SCRIPT_NAME'];
?>


<h1> ============== $_REQUEST ==============  </h1>

$_REQUEST is a PHP super global variable which contains submitted form data,
 and all cookie data.

In other words, $_REQUEST is an array containing data from $_GET, $_POST, and $_COOKIE.

You can access this data with the $_REQUEST keyword followed by the name of the
 form field, or cookie, like this:


  

  <form method="post" action="demo_request.php">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

        


<h1>  ========== $_REQUEST By More Secure ======== </h1>



<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_REQUEST['fname']);
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}



?>  

</body>
</html>


