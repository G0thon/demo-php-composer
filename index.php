<!DOCTYPE html>
<html>
  <head>
    <title>CleverCloud composer</title>
    <link rel="stylesheet" href="/public/css/main.css" type="text/css" media="all">
  </head>
  <body>
    <?php

    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    // create a log channel
    $log = new Logger('name');

     ?>
    <?php echo 'Toto'; ?>
    Plop
  </body>
</html>
