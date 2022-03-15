<?php
function popArticle($pdo, $where)
{
    // $i = filter_input(INPUT_GET, "id");
    // include './common/connexion.php';
    $stmt = $pdo->prepare("SELECT article.*, users.*, categorie.*, COUNT(commentaire.idArticle) as counter 
    FROM article LEFT JOIN commentaire ON commentaire.idArticle = article.idArticle LEFT JOIN users 
    ON article.idUsers = users.idUsers LEFT JOIN categorie ON article.idCategorie = categorie.idCategorie
    WHERE {$where['sql']}
    GROUP BY article.idArticle");

    $stmt->execute(array($where['id']));

    return $stmt;
}

function popLastArticle($pdo, $limit)
{
    $stmt = $pdo->prepare("SELECT * FROM article  ORDER BY dateCreate DESC LIMIT {$limit['sql']}");
    $stmt->execute();
    return $stmt;
}


function addCommentArticle($pdo, $insert)
{
    $stmt = $pdo->prepare("INSERT INTO commentaire (idCommentaire, commentaire, pseudo, status, dateSend, idUsers, idArticle) VALUES
    (DEFAULT, '{$insert['sql1']}', '{$insert['sql2']}', DEFAULT, DEFAULT, '{$insert['sql3']}', '{$insert['sql4']}')");
    $stmt->execute();

    return $stmt;
}

function popCom($pdo, $idarticle)
{
    $stmt = $pdo->prepare("SELECT * FROM commentaire WHERE idArticle = {$idarticle['sqlCom']} AND status = true");
    $stmt->execute();
    return $stmt;
}

function article($pdo)
{
    $stmt = $pdo->prepare("SELECT * FROM users WHERE 1");
    $stmt->execute();
    return $stmt;
}

function user($pdo)
{
    $stmt = $pdo->prepare("SELECT * FROM users WHERE 1");
    $stmt->execute();
    return $stmt;
}

function reception($pdo)
{
    $stmt = $pdo->prepare("SELECT * FROM message WHERE 1");
    $stmt->execute();
    return $stmt;
}

function allComment($pdo)
{
    $stmt = $pdo->prepare("SELECT idCommentaire, commentaire, commentaire.pseudo, status, dateSend,
     users.nom, users.prenom, article.titre  FROM commentaire 
     LEFT JOIN article ON commentaire.idArticle = article.idArticle 
     RIGHT JOIN users ON commentaire.idUsers = users.idUsers  WHERE idCommentaire > 0 && status = false");
    $stmt->execute();
    return $stmt;
}
