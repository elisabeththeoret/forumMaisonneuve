<a href="index.php?module=user&action=index" class="annuler">Annuler</a>
<h1>Nouvel article</h1>
<form action="index.php?module=forum&action=insert" method="post" class="formulaire">
    <input type="hidden" name="forumUserId" value="<?= $_SESSION["id"] ?>">

    <fieldset>
        <label for="forum-titre">Titre</label>
        <input type="text" name="forumTitre" id="forum-titre" maxlength="100" required>
    </fieldset>

    <fieldset>
        <label for="forum-article">Article</label>
        <textarea name="forumArticle" id="forum-article" cols="30" rows="10" placeholder="Écrire l'article..." required></textarea>
    </fieldset>

    <fieldset>
        <label for="forum-date">Date de l'article</label>
        <input type="date" name="forumDate" id="forum-date" maxlength="10" value="<?= date('Y-m-d') ?>" readonly required>
    </fieldset>

    <input type="submit" value="Créer >" class="bouton">
</form>

