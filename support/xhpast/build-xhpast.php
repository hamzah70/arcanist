#!/usr/bin/env php
<?php

$root = dirname(dirname(dirname(__FILE__)));
require_once $root.'/scripts/init/init-script.php';

PhutilXHPASTBinary::build();

echo pht('Build successful!')."\n";
