<?php
require_once('../inclusion/init.php');
if(!empty($_GET['id']))
{
    $data = ["id" => intval($_GET['id'])];
    $request="DELETE FROM article WHERE id=:id";
    $response = $pdo->prepare($request);
    $response->execute(['id' => $_GET['id']]);
    $_SESSION['messages']['success'][] = "L'article a bien été supprimé.";
    header('location:gestionArticle.php');
    exit();
}