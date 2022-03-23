<?php
function popArticle($pdo, $where)
{
    // $i = filter_input(INPUT_GET, "id");
    // include './common/connexion.php';
    $stmt = $pdo->prepare("SELECT article.*,DATE_FORMAT(dateCreate, '%d/%m/%Y') as dateE, users.*, categorie.*, t1.counter, IFNULL(t1.counter,0) AS counterEnd 
    FROM article LEFT JOIN commentaire ON commentaire.idArticle = article.idArticle LEFT JOIN users 
    ON article.idUsers = users.idUsers LEFT JOIN categorie ON article.idCategorie = categorie.idCategorie
    LEFT JOIN (SELECT commentaire.idArticle, COUNT(commentaire.idArticle)as counter FROM commentaire 
    WHERE commentaire.status = true GROUP BY commentaire.idArticle) as t1 ON t1.idArticle = article.idArticle 
    WHERE {$where['sql']} GROUP BY article.idArticle");

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
    $stmt = $pdo->prepare("SELECT *, DATE_FORMAT(dateSend, '%d/%m/%Y') as dateE FROM commentaire WHERE idArticle = {$idarticle['sqlCom']} AND status = true");
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
     users.nom, users.prenom, article.titre, DATE_FORMAT(dateSend, '%d/%m/%Y') as dateE   FROM commentaire 
     LEFT JOIN article ON commentaire.idArticle = article.idArticle 
     RIGHT JOIN users ON commentaire.idUsers = users.idUsers  WHERE idCommentaire > 0 && status = false");
    $stmt->execute();

    // $outCom = [];
    // $row = $stmt->fetchAll();

    // echo json_encode($row);



    return $stmt;
}
