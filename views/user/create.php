<small>Déja un compte? <a href="index.php?module=user&action=login" class="annuler">Connectez-vous</a></small>
<h1>Créer un compte</h1>
<form action="index.php?module=user&action=insert" method="post" class="formulaire">
    <fieldset>
        <label for="user-name">Nom</label>
        <input type="text" name="name" id="user-name" maxlength="25" required>
    </fieldset>

    <fieldset>
        <label for="user-username">Username</label>
        <input type="email" name="username" id="user-username" maxlength="50" placeholder="exemple@gmail.com" required>
    </fieldset>

    <fieldset>
        <label for="user-password">Mot de passe</label>
        <input type="password" name="password" id="user-password" required>
    </fieldset>

    <fieldset>
        <label for="user-birthday">Date de naissance</label>
        <input type="date" name="birthday" id="user-birthday" maxlength="10" placeholder="aaaa-mm-jj" required>
    </fieldset>

    <input type="submit" value="Créer >" class="bouton">
</form>

