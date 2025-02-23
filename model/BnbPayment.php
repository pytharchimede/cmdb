<?php
// Configuration
$adresse_wallet = "0x3EE6b70be3Ce35cb03403b64F960B72Df575573b";
$api_key = "82CD9BUSMRBYMDEA6UJE5BTFHPAIV23HJG";

// URL de l'API BscScan
$url = "https://api.bscscan.com/api?module=account&action=tokentx&address=$adresse_wallet&startblock=0&endblock=99999999&sort=desc&apikey=$api_key";

// Récupération des transactions
$response = file_get_contents($url);
$data = json_decode($response, true);

// Vérification des paiements reçus
if ($data['status'] == "1") {
    echo "✅ Transactions détectées : \n";
    foreach ($data['result'] as $tx) {
        $montant = $tx['value'] / 1e18; // Conversion du montant (BNB)
        echo "📌 Tx Hash: " . $tx['hash'] . "\n";
        echo "💰 Montant: " . $montant . " " . $tx['tokenSymbol'] . "\n";
        echo "👤 Expéditeur: " . $tx['from'] . "\n";
        echo "📅 Date: " . date('Y-m-d H:i:s', $tx['timeStamp']) . "\n";
        echo "---------------------------------\n";
    }
} else {
    echo "❌ Aucune transaction trouvée.";
}
?>
