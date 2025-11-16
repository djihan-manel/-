<?php
$today = date("Y-m-d");
$file = "$today.txt";

if(isset($_POST['submit'])){
    $note = trim($_POST['note']);
    if($note !== ""){
        file_put_contents($file, "[".date("H:i")."] ".$note."\n", FILE_APPEND);
    }
}
$notes = file_exists($file) ? file($file) : [];
?>
<!DOCTYPE html>
<html>
<body>
<h2>lever</h2>
<form method="post">
    <textarea name="note" rows="4" cols="30" placeholder="ecre"></textarea><br>
    <button name="submit">enrejster</button>
</form>

<h3>commet</h3>
<?php foreach($notes as $n) echo $n."<br>"; ?>
</body>
</html>
