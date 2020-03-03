<?php
    require '../vendor/autoload.php';

    $log = new Monolog\Logger('my-log');
    $log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
    $log->addWarning('some log message');
?>
<p>View log file <a href="app.log">here</a>.</p>
<p>View PHP info <a href="info.php">here</a>.</p>
