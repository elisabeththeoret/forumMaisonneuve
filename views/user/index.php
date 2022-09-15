<h1>Mes articles</h1>
<a href="?module=forum&action=create" class="bouton">Nouvel article ></a>
<section class="forum-articles">
    <?php if($data == null){ ?>
    <h3 class="aucun-article">Vous n'avez écrit aucun article encore!</h3>
    <?php
        } else{ 
        foreach($data as $row) {
    ?>
    <div class="mes-articles">
        <article class="carte-article">
            <header>
                <h3 class="titre"><?= $row['forumTitre']; ?></h3>
                <small class="date"><?= date_format(date_create($row['forumDate']), 'Y-m-d'); ?></small>
            </header>
            <p class="texte"><?= str_replace("\\r\\n", "<br>", nl2br($row['forumArticle'])); ?></p>
        </article>
        <nav class="navigation-article">
            <a href="?module=forum&action=edit&id=<?= $row['forumId']; ?>" class="bouton-article">Modifier</a>
            <form action="?module=forum&action=delete" method="post">
                <input type="hidden" name="forumId" value="<?= $row['forumId']; ?>">
                <input type="submit" class="bouton-article" value="Supprimer">
            </form>
        </nav>
    </div>
    <?php } } ?>
</section>

