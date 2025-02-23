<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification de Transaction BNB</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body class="bg-dark text-light">
    <div class="container mt-5">
        <h2 class="text-center">🔍 Vérification d'une transaction BNB</h2>
        <div class="mb-3">
            <label for="hash" class="form-label">Entrez le hash de la transaction :</label>
            <input type="text" id="hash" class="form-control" placeholder="Ex: 0x123abc..." required>
        </div>
        <button class="btn btn-primary w-100" onclick="verifierTransaction()">🔎 Vérifier</button>
        <div class="mt-4">
            <h4 class="text-center">Résultat de la Vérification</h4>
            <div id="resultat" class="d-none card shadow-lg border-0">
                <div class="card-body">
                    <h5 class="card-title" id="status"></h5>
                    <hr>
                    <p><strong><i class="fas fa-coins"></i> Montant :</strong> <span id="montant"></span></p>
                    <p><strong><i class="fas fa-dollar-sign"></i> Valeur en USD :</strong> <span id="montant_usd"></span></p>
                    <p><strong><i class="far fa-calendar-alt"></i> Date :</strong> <span id="date_transaction"></span></p>
                    <p><strong><i class="fas fa-link"></i> Détails :</strong> <a href="#" id="bscscan_link" target="_blank">Voir sur BscScan</a></p>
                </div>
            </div>
            <div id="erreur" class="alert alert-danger d-none mt-3"></div>
        </div>

    </div>

    <script>
        function verifierTransaction() {
            let hash = $("#hash").val().trim();
            if (hash === "") {
                alert("Veuillez entrer un hash de transaction.");
                return;
            }

            $.ajax({
                url: "request/verif_transac_request.php",
                type: "GET",
                data: {
                    hash: hash
                },
                success: function(response) {
                    $("#resultat").addClass("d-none");
                    $("#erreur").addClass("d-none");

                    if (response.success) {
                        $("#status").html('<i class="fas fa-check-circle text-success"></i> Transaction validée');
                        $("#montant").text(response.montant_bnb + " BNB");
                        $("#montant_usd").text("~ $" + response.montant_usd);
                        $("#date_transaction").text(response.date_transaction);
                        $("#bscscan_link").attr("href", "https://bscscan.com/tx/" + hash);

                        $("#resultat").removeClass("d-none");
                    } else {
                        $("#erreur").text(response.error).removeClass("d-none");
                    }
                },
                error: function() {
                    $("#erreur").text("Erreur lors de la vérification.").removeClass("d-none");
                }
            });
        }
    </script>
</body>

</html>