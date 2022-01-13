<?php

require('../app/functions.php');

include('../app/_parts/_header.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$message = filter_input(INPUT_POST, 'message');
$message = $message != "" ? $message : "...";
$filename = '../app/messages.txt';
// $messages = file($filename, FILE_IGNORE_NEW_LINES);
$fp = fopen($filename, 'a');
fwrite($fp, $message . "\n");
fclose($fp);
} else {
exit("invalid request");
}
?>

  <p>got it !</p>

  <p><a href="index.php">Go back</a></p>

<?php

include('../app/_parts/_footer.php');