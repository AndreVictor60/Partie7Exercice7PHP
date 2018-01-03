<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Partie 7 Exercice 7</title>
    </head>
    <body>
        <p>Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.</p>
        <hr>
        <?php
        // Vérification des POST s'ils existent
        if (isset($_POST['genre']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_FILES['myFile'])) {
            // htmlspecialchars qui sert à échapper le code HTML ( Éviter les failles XSS )
            echo htmlspecialchars($_POST['genre']) . ', ' . htmlspecialchars($_POST['firstName']) . ' ' . htmlspecialchars($_POST['lastName']) . '. Votre fichier est ' . $_FILES['myFile']['name'];
        } else {
            ?>
            <!-- Création du formulaire
         Action = L'attribut sert à définir la page appelée par le formulaire
         Method(variable globale) = Méthode d'envoie du formulaire GET ou POST(99%)
            -->
            <form action="index.php" method="post" enctype="multipart/form-data">
                <!-- Créer une liste HTML avec les valeurs suivantes -->
                <select name="genre">
                    <option value="Monsieur">Mr</option>
                    <option value="Madame">Mme</option>
                </select>
                <!-- Ajout des inputs avec leurs labels -->
                <label for="firstName">Nom :</label><input type="text" name="firstName">
                <label for="lastName">Prénom :</label><input type="text" name="lastName">
                <!-- Type="file" Ce type de commande permet à l'utilisateur de sélectionner un fichier de sorte que son contenu puisse être soumis avec le formulaire -->
                <label for="myFile">Votre fichier :</label><input type="file" name="myFile">
                <!-- Submit : le bouton de validation du formulaire qui commande l'envoi des donnée-->
                <input type="submit" value="valider">
            </form>
            <?php
        }
        ?>
        <a href="../index.php"><button type="button">Retour</button></a>
    </body>
</html>
