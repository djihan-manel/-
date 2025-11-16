<?php
if(isset($_POST['submit'])){
    $name = trim($_POST['name']);
    if($name !== ""){
        $line = "$name | ".date("Y-m-d")." | ".date("H:i")."\n";
        file_put_contents("presence.txt", $line, FILE_APPEND);
    }
}
$lines = file_exists("presence.txt") ? file("presence.txt") : [];
?>
<!DOCTYPE html>
<html>
<body>
<h2>periso eleve</h2>
<form method="post">
    nom: <input type="text" name="name" required>
    <button name="submit">enregistrer</button>
</form>

<h3>liste de presenc</h3>
<?php foreach($lines as $l) echo $l."<br>"; ?>
</body>
</html>
