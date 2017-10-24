<?php

require_once 'dataload/load.php';

// IMPORTANT: Load the templates first, only then the resourceloaders, so that the templates definitions can be reused
require_once 'templates/load.php';
require_once 'resourceloaders/load.php';

require_once 'processors/load.php';
require_once 'library/load.php';
