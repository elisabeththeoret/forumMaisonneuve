<h1>Modifier l'article</h1>
<form action="index.php?module=forum&action=update" method="post" class="formulaire">
    <input type="hidden" name="forumId" value="<?= $data['forumId'] ?>">

    <fieldset>
        <label for="forum-titre">Titre</label>
        <input type="text" name="forumTitre" id="forum-titre" maxlength="100" value="<?= $data['forumTitre']; ?>" required>
    </fieldset>

    <fieldset>
        <label for="forum-article">Article</label>
        <textarea name="forumArticle" id="forum-article" cols="30" rows="10" required><?= $data['forumArticle'] ?></textarea>
    </fieldset>

    <fieldset>
        <label for="forum-date">Date de modification</label>
        <input type="date" name="forumDate" id="forum-date" maxlength="10" value="<?= date('Y-m-d') ?>" readonly required>
    </fieldset>

    <input type="submit" value="Enregistrer >" class="bouton">
</form>

