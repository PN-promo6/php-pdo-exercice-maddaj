<?php
include_once "PDO.php";

function GetAllPostLike($formsEmail, $formsPassword)
{
    global $PDO;
    $response = $PDO->query(
        "SELECT user.nickname, user.password "
            . "FROM user "
            . "WHERE user.nickname = '$formsEmail' AND user.password = '$formsPassword'  "
    );
    return $response->fetchAll();
}
