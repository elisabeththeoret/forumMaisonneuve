<h1>À lire!</h1>
<section class="forum-articles">
    <?php foreach($data as $row) { ?>
    <article class="carte-article">
        <header>
            <h3 class="titre"><?= $row['forumTitre']; ?></h3>
            <small class="date"><?= date_format(date_create($row['forumDate']), 'Y-m-d'); ?></small>
        </header>
        <p class="texte"><?= str_replace("\\r\\n", "<br>", nl2br($row['forumArticle'])); ?></p>
        <footer>
            <span class="ecrit-par">Écrit par : <?= $row['username']; ?></span>
        </footer>
    </article>
    <?php } ?>
</section>

