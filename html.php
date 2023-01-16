<?php

    if (isset($_POST['premier']) && isset($_POST['second'])){
        $name =  $_POST['premier'] ;
        $second = $_POST['second'] ;
        $gender = $_POST['sexe'];
        $file = $_POST['file'];

        echo "$gender ";
        echo $name . "  " . $second;
        $file = pathinfo($file);
        if ($file["extension"] == "pdf"){
            echo "vous avez prit le fichier " . $file;
        }
        echo "Votre fichier n'est pas un fichier pdf ";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>exo162</title>
    <meta name="viewport" content="width-device-width, initial-scale=1.0">

</head>
<body>
<form action="user.php" method="get">
    <input type="text" placeholder="Votre nom" name="nom" required>
    <input type="text" placeholder="Votre prénom"  name="prenom" required>
    <input type="submit" name="send">
</form>
<hr>
<form action="user.php" method="post">
    <input type="text" placeholder="Votre nom" name="nom" required>
    <input type="text" placeholder="Votre prénom"  name="prenom" required>
</form>
<hr>
<?php if(!isset($_POST['premier']) && !isset($_POST['second'])): ?>
    <form action="html.php" method="post" id="three" class="three">
        <input type="text" name="premier" placeholder="Votre prénom" required>
        <input type="text" name="second" placeholder="Votre nom" required>
        <select name="sexe" id="" required>
            <option value="Madame">Madame</option>
            <option value="Monsieur">Monsieur</option>
        </select>
        <input type="file" name="file">
        <input type="submit" name="send" id="send">
    </form>
<?php endif ?>
<script type="text/javascript" src="app.js">
</script>
</body>
</html>