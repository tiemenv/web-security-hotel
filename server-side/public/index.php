<?php
require('../vendor/autoload.php');
require('../lib.php');
require('../routes.php');
require('../bootstrap.php');

render(run($routes));
