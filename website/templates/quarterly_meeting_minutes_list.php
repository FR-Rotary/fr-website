<ul>
<?php
foreach (array_reverse(glob('documents/kvartalsmoten/protokoll_kvartalsmote_frrotary-????-??-??.pdf')) as $document) {
    $date = mb_substr($document, -14, 10);
    ?>
        <li><a class="icon document" href="<?=$document?>"><?=$date?></a>
<?php
}
?>
</ul>
