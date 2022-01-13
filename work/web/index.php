<?php

require('../app/functions.php');

include('../app/_parts/_header.php');
// $message = filter_input(INPUT_POST, 'message');
$filename = '../app/messages.txt';
$messages = file($filename, FILE_IGNORE_NEW_LINES);
// $fp = fopen($filename, 'a');
// fwrite($fp, $message . "\n");
// fclose($fp);
?>
  <ul>
    <?php foreach($messages as $message): ?>
      <li><?= h($message)?></li>
    <?php endforeach;?>
  </ul>
  <form action="result.php" method="post">
    <input type="text" name="message">
    <button>Send</button>
  </form>

<?php

include('../app/_parts/_footer.php');