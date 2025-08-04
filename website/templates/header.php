<!DOCTYPE html>
<html lang="<?=$this->language?>">
<meta charset="utf-8">
<!-- IE kludge --><meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?=$this->printTitle()?></title>
<?php
// Alternate language links; see
// <http://googlewebmastercentral.blogspot.se/2011/12/new-markup-for-multilingual-content.html>.
$long_postfix = FRTemplate\Constants\Pages::LONG_POSTFIX;
foreach (array_keys($site->pages[$this->page]) as $language) {
    // Exclude the `-long` varieties if they exist, since they are not really
    // "languages".
    if (!(substr($language, -strlen($long_postfix)) === $long_postfix)) {
        ?>
<link rel="alternate" hreflang="<?=$language?>" href="<?=$site->link($this->page, $language)?>">
<?php
    }
}
?>
<link rel="stylesheet" href="css/standard.min.css">
<!-- IE kludge -->
<!--[if gt IE 8]><!-->
<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/fa.min.css">
<!--<![endif]-->
<meta name="description" content="<?=$site->config->metaDescription?>">
<meta name="keywords" content="<?=$site->config->metaKeywords?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- IE kludge -->
<!--[if lt IE 9]>
<script src="bower_components/css3-mediaqueries-js/css3-mediaqueries.js"></script>
<script src="bower_components/ie9-js/lib/IE9.js"></script>
<body>
<![endif]-->

<div class="container">

<header>
  <h1><a href="<?=$site->link($site->config->startPage)?>"><img src="images/design/fr-rotary-logga.jpg" alt="<?=$this->title?>" title="<?=$this->title?>" width="800" height="353"></a></h1>

<?php require 'navigation.php';?>
</header>

<div class="content hyphenate">

