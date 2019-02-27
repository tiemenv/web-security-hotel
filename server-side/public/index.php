<?php

require('../vendor/autoload.php');
require('../lib.php');
require('../routes.php');
require('../bootstrap.php');

echo "hello from serverside";
exit;

render(run($routes));





