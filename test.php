<form action="inscription.php" method="post">
    <fieldset>
        <legend>
            Civilité
        </legend>
        <label for="lastName">Nom</label>
        <input type="text" name="lastName" id="lastName" required="" placeholder="Votre nom">
        <label for="firstName">Prénom</label>
        <input type="text" name="firstName" id="firstName" required="" placeholder="Votre prénom">
        <label for="Sexe">Sexe</label>
        <select name="Sexe" id="Sexe">
            <option value="M">Monsieur</option>
            <option value="F">Madame/option&gt;</option></select>
            <label for="birthDate">Date de naissance</label>
            <input type="date" name="birthDate" id="birthDate">
        </fieldset>
        <fieldset>
            <legend>
                Coordonnée
            </legend>
            <label for="phoneNumber">Numéro de téléphone</label>
            <input type="tel" name="phoneNumber" id="phoneNumber" placeholder="Votre numéro de téléphone">
            <fieldset>
                <legend>
                    Adresse
                </legend>
                <label for="city">Ville</label>
                <input type="text" name="city" id="city" placeholder="Votre ville">
                <label for="zipCode">Code postal</label>
                <input type="number" name="zipCode" id="zipCode" placeholder="Votre code postal">
                <label for="address">Adresse</label>
                <textarea name="address" id="address" cols="25" rows="1" placeholder="Votre adresse"></textarea>
            </fieldset>
        </fieldset>
        <fieldset>
            <legend>
                Niveau-Discipline
            </legend>
            <label for="games">Catégorie d'âge :</label>
            <select name="games" id="games" multiple="">
                <option value="tarot">Débutant</option>
                <option value="echecs">Benjamin</option>
                <option value="dames">Sénior</option>
            </select>
            <label for="Discipline">Discipline</label>
            <select name="sponsor" id="sponsor">
                <option value="">Extérieur</option>
                <option value="Laure">En salle</option>
                <option value="Adam">En campagne</option>
                <option value="Chloé">Tir 3d</option>
                <option value="Jules">Tir nature</option>
            </select>
        </fieldset>
        <fieldset>
            <legend>
                Remarques
            </legend>
            <label for="Remarques">Remarques</label>
            <textarea name="Remarques" id="Remarques" cols="25" rows="10" placeholder="Ecrivez ici"></textarea>
        </fieldset>
        <fieldset>
            <legend>
                Newsletter
            </legend>
            <input type="checkbox" name="newsletter" id="newsletter">
            <label for="newsletter">J'accepte de recevoir la newsletter</label>
        </fieldset>
        <button type="submit">Je souhaite m'inscrire</button>
    </form>