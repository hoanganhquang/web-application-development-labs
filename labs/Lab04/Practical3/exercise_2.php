<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lab04</title>
</head>

<body>
  <?php
  include './logger.php';

  $logger = new FileLogger('./log.txt', 'w');

  $logger->log('PHP interface is awesome');

  $loggers = [
    new FileLogger('./log.txt'),
    new DatabaseLogger()
  ];

  foreach ($loggers as $logger) {
    $logger->log('Log message');
  }
  ?>
</body>

</html>