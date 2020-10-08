<?php
function dbConnect() {
    try
    {
        $db = new PDO('mysql:host=localhost; dbname=banque_php; charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

function getUser($db, $email) {
    $query = $db->prepare("SELECT * FROM alb_users WHERE u_email = :email");
    $query->execute(["email" => $email]);
    return $query->fetch(PDO::FETCH_ASSOC);
}

function getAccounts($db, $userId) {
    $query = $db->prepare("SELECT * FROM alb_accounts WHERE a_user_id = :userId");
    $query->execute(["userId" => $userId]);
    return $query->fetchall(PDO::FETCH_ASSOC);
}

function getAccount($db, $accountId) {
    $query = $db->prepare("SELECT * FROM alb_accounts WHERE a_id = :accountId");
    $query->execute(["accountId" => $accountId]);
    return $query->fetch(PDO::FETCH_ASSOC);
}

function getTransact($db, $accountId) {
    $query = $db->prepare("SELECT * FROM alb_transactions WHERE t_account_id = :accountId");
    $query->execute(["accountId" => $accountId]);
    return $query->fetchall(PDO::FETCH_ASSOC);
}