<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Partie 7 Exercice 7</title>
</head>
<body>
  <?php
  if (isset($_POST['genre']) AND isset($_POST['firstName']) AND isset($_POST['lastName']) AND isset($_FILES['myFile']))
  {
       echo $_POST['genre'] . ', ' . $_POST['firstName']. ' ' .$_POST['lastName']. '. Votre fichier est ' .$_FILES['myFile']['name'];

  }else{
    ?>
    <form action="index.php" method="post" enctype="multipart/form-data">
      <select name="genre">
        <option value="Monsieur">Mr</option>
        <option value="Madame">Mme</option>
      </select>
      <label for="firstName">Nom :</label><input type="text" name="firstName">
      <label for="lastName">Prénom :</label><input type="text" name="lastName">
      <label for="myFile">Votre fichier :</label><input type="file" name="myFile">
      <input type="submit" value="valider">
    </form>
    <?php
  }
  ?>
</body>
</html>
