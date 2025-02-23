<?php
require_once "../model/TransactionVerifier.php";

use Model\TransactionVerifier;

header("Content-Type: application/json");

// Vérification du hash en GET
if (!isset($_GET['hash']) || empty($_GET['hash'])) {
    echo json_encode(["error" => "Hash de transaction requis."]);
    exit;
}

// Initialisation avec l'API Key
$api_key = "82CD9BUSMRBYMDEA6UJE5BTFHPAIV23HJG";
$verificateur = new TransactionVerifier($api_key);

// Récupération des détails de la transaction
$tx_hash = $_GET['hash'];
$resultat = $verificateur->verifierTransaction($tx_hash);

// Retour en JSON
echo json_encode($resultat, JSON_PRETTY_PRINT);
