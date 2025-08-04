<?php

$config = new FRTemplate\Configuration\News();
$section_title = $config->sectionTitle[$this->language];

$news = new FRTemplate\DB\News($this->language);
$stmt = $news->news();

if ($stmt->num_rows) {
    $bbcode = new Golonka\BBCode\BBCodeParser;
    ?>

<h3><?=$section_title?></h3>
<?php
    $stmt->bind_result($date, $title, $body);
    while ($stmt->fetch()) {
        ?>

<article>
  <h4><?=htmlspecialchars($date)?>: <?=htmlspecialchars($title)?></h4>

  <p><?=$bbcode->parse($body)?>

</article>
<?php
    }
}
?>
