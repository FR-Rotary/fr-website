<?php
require 'vendor/autoload.php';

$site = new FRTemplate\Site();
$page = new FRTemplate\Page($site);
$page->printPage();
