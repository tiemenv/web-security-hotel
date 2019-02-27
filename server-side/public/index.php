<?php
echo "hello from serverside";
exit;

require('../vendor/autoload.php');
require('../lib.php');
require('../routes.php');
require('../bootstrap.php');

render(run($routes));
