<?php

if(!is_null($data)) { ?>
    <div class="articles"> <?php
        foreach($data as $article) {
            /* @var Article $article */ ?>
            <div class="article">
            <h2><?= $article->getTitle() ?></h2>
            <div class="article-content">
                <?= $article->getContent() ?>
            </div>
            <a href="/index.php?controller=article-edit&id=<?= $article->getId() ?>">Editer</a>
            </div><?php
        } ?>
    </div> <?php
}