<?php

namespace Model;

class TransactionVerifier
{
    private $api_key;
    private $base_url = "https://api.bscscan.com/api";

    public function __construct($api_key)
    {
        $this->api_key = $api_key;
    }

    /**
     * Vérifie le statut d'une transaction et récupère ses détails
     * @param string $tx_hash - Hash de la transaction
     * @return array - Détails de la transaction ou erreur
     */
    public function verifierTransaction($tx_hash)
    {
        if (empty($tx_hash)) {
            return ["error" => "Le hash de transaction est requis."];
        }

        // Vérifier le statut de la transaction
        $url = "$this->base_url?module=transaction&action=gettxreceiptstatus&txhash=$tx_hash&apikey=$this->api_key";
        $response = $this->makeRequest($url);

        if (isset($response['status']) && $response['status'] == "1") {
            // Récupérer les détails de la transaction
            $details_url = "$this->base_url?module=proxy&action=eth_getTransactionByHash&txhash=$tx_hash&apikey=$this->api_key";
            $details = $this->makeRequest($details_url);

            if (isset($details['result'])) {
                $result = $details['result'];

                // Récupérer le montant en BNB
                $montant_bnb = hexdec($result['value']) / 1e18;

                // Convertir en USD
                $prix_bnb = $this->getPrixBNB();
                $montant_usd = $montant_bnb * $prix_bnb;

                // Récupérer la date de la transaction
                $timestamp = hexdec($result['timeStamp']);
                $date_transaction = date("Y-m-d H:i:s", $timestamp);

                return [
                    "success" => true,
                    "message" => "Transaction validée !",
                    "montant_bnb" => $montant_bnb,
                    "montant_usd" => round($montant_usd, 2),
                    "date_transaction" => $date_transaction,
                    "details" => $result
                ];
            }
            return ["error" => "Impossible de récupérer les détails de la transaction."];
        } else {
            return ["error" => "Transaction non trouvée ou échouée."];
        }
    }

    /**
     * Récupère le prix actuel du BNB en USD
     * @return float - Prix du BNB en USD
     */
    private function getPrixBNB()
    {
        $url = "$this->base_url?module=stats&action=bnbprice&apikey=$this->api_key";
        $response = $this->makeRequest($url);
        return isset($response['result']['ethusd']) ? (float)$response['result']['ethusd'] : 0;
    }

    /**
     * Effectue une requête API et retourne les données sous forme de tableau associatif
     * @param string $url - URL de l'API
     * @return array - Réponse JSON décodée
     */
    private function makeRequest($url)
    {
        $response = file_get_contents($url);
        return json_decode($response, true);
    }
}
