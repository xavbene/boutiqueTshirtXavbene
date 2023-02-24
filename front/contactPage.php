<?php   require_once('../inclusion/header.php') ?>
<?php 
//* ici on récupère tout les articles dans un objet PDOstatement
$responses = $pdo->query("SELECT * FROM article ");
//* ici on vas transformer notre objet $responses en tableau associatif
$articles = $responses->fetchAll(PDO::FETCH_ASSOC);
//debug($articles);?>

<h1>Contacts</h1>

<?php   require_once('../inclusion/footer.php') ?>
