<?php require_once('../inclusion/header.php');  ?>

<?php 
$responses = $pdo->query("SELECT * FROM article ");
$articles = $responses->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container">
    <table class="table table-dark">
        <thead>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>image</th>
                <th>description</th>
                <th>prix</th>
                <th>taille</th>
                <th>option</th>
            </tr>            
        </thead>
        <tbody>
            <?php  foreach($articles as $article) :  ?>
                <tr>
                    <td><?= $article['id'];?></td>
                    <td><?= $article['nom'] ;?></td>
                    <td><img src="<?= BASE . 'assets/upload/'. $article['image'] ;?>" alt!="" height ="50px"></td>
                    <td><?= substr($article['description'],0,15) ;?>...</td>
                    <td><?= $article['prix'] ;?> €</td>
                    <td><?= $article['taille'] ;?></td>
                    <td>
                        <!-- <a class="text-light"href="">Voir</a> -->
                        <a class="text-warning" href="<?= BASE . "back/modifierArticle.php?id=". $article['id'] ?>">Modifier</a>
                        <a class="text-danger" href="<?= BASE . "back/supprimerArticle.php?id=". $article['id'] ?>">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>



<?php require_once('../inclusion/footer.php'); ?>