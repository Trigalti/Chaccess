<?

define("HOST", "localhost"); // The host you want to connect to.
define("USER", "simonlp56_trig"); // The database username.
define("PASSWORD", "Simonus1"); // The database password. 
define("DATABASE", "simonlp56_chaccess"); // The database name.
 
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
// If you are connecting via TCP/IP rather than a UNIX socket remember to add the port number as a parameter.

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}

?>