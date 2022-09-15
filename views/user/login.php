<h1>Se connecter</h1>
<span class="message"><?= $data ?></span>
<form action="?module=user&action=authentificate" method="post" class="formulaire">
    <fieldset>
        <label for="user-username">Username</label>
        <input type="text" name="username" id="user-username" max-length="50" required>
    </fieldset>

    <fieldset>
        <label for="user-password">Mot de passe</label>
        <input type="password" name="password" id="user-password" required>
    </fieldset>

    <input type="submit" value="Se connecter >" class="bouton">
</form>

