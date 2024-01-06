<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Inscription</title>
  <link rel="stylesheet" href="styles.css">
  </head>
<body>
  <div class="container">
    <form class="registration-form">
      <h2> Reserver une Vite  </h2>
      <label for="username"> Nom:</label>
      <input type="text" id="username" name="username" placeholder="Entrez votre Nom" required>

      <label for="prenom">Prenom:</label>
      <input type="text" id="prenom" name="prenom" placeholder="Entrez votre Prenom" required>
      
      <label for="email"> Adresse e-mail :</label>
      <input type="email" id="email" name="email" placeholder="Entrez votre adresse e-mail complète" required >
      
      <label for="password"> Numéro de téléphone :</label>
      <input type="text" id="telephone" name="tel" placeholder="Entrez votre Numero de telephone complète" required>
      
      <label for="adress"> lieux que vous habitez :</label>
      <input type="text" id="adresse" name="adresse" placeholder="Entrez votre adresse complète" required>
      
      <input type="submit" value="Reverver">

    </form>
  </div>
</body>
</html>
