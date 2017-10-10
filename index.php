<!DOCTYPE html>
<html>
  <head>
    <title>CleverCloud composer</title>
    <link rel="stylesheet" href="/public/css/main.css" type="text/css" media="all">
  </head>
  <body>
    <?php require __DIR__ . '/vendor/autoload.php'; ?>
    <?php
      $log = new Monolog\Logger('name');
      var_dump($log);
     ?>

    <?php echo 'Toto'; ?>
    Plop
  </body>
</html>
