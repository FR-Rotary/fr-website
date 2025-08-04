<?php
$alt_lang_sv_en = $this->alternateLanguageSvEn();
?>
  <nav>
    <a href="<?=$site->link($this->page, $alt_lang_sv_en)?>" class="language-switch"><img src="images/flaggor/<?=$alt_lang_sv_en?>-14x12.png" width="14" height="12" alt="<?=$site->config->languageLinkAlt[$alt_lang_sv_en]?>"><?=$site->config->languageLinkText[$alt_lang_sv_en]?></a>

    <ul id="internal" class="internal">
<?php

foreach ($site->pages as $pagename => $header) {
    ?>
      <li<?=($this->page == $pagename ? ' class="current">' . $header[$this->language] : '><a href="' . $site->link($pagename) . '">' . $header[$this->language] . '</a>')?>

<?php
}

?>
    </ul>

    <ul id="external">
      <li><a class="icon external-link" href="http://www.sgs.se/">SGS</a>
      <li><a class="icon external-link" href="http://www.rotarypub.se/">Rotary Pub</a>
    </ul>
  </nav>
