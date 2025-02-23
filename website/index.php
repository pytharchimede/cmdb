<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMDB - Devenez Millionnaire</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-white shadow-md py-4 px-6 flex justify-between items-center sticky top-0 z-50">
        <h1 class="text-3xl font-bold text-blue-600">CMDB</h1>
        <a href="#inscription" class="bg-blue-600 text-white px-6 py-2 rounded-lg text-lg">S'inscrire</a>
    </nav>

    <!-- Carrousel -->
    <div class="relative w-full overflow-hidden h-[400px]">
        <div class="absolute w-full h-full flex flex-col justify-center items-center bg-black bg-opacity-50 text-white text-4xl font-bold">
            <p>Rejoignez la Révolution Financière</p>
            <p class="text-lg mt-2">Commencez avec seulement 15$</p>
        </div>
        <img src="../assets/img/carroussel/slide_1.png" class="w-full h-full object-cover">
    </div>

    <!-- Présentation CMDB -->
    <section class="text-center my-12 px-6">
        <h2 class="text-4xl font-bold text-gray-800">Qu'est-ce que CMDB ?</h2>
        <p class="mt-4 text-lg text-gray-600">La Communauté Mondiale du Bonheur (CMDB) est un réseau d'entraide financière conçu pour permettre à chacun de réaliser ses projets grâce à la solidarité et au soutien mutuel.</p>
    </section>

    <!-- Pourquoi rejoindre CMDB -->
    <section class="text-center my-12 px-6">
        <h2 class="text-4xl font-bold text-gray-800">Pourquoi rejoindre CMDB ?</h2>
        <p class="mt-4 text-lg text-gray-600">En rejoignant CMDB, vous intégrez une communauté engagée qui croit en la puissance du partage et de l'union. Profitez d'une opportunité unique pour bâtir un avenir meilleur et atteindre vos objectifs financiers grâce à un système structuré et évolutif.</p>
    </section>

    <!-- Présentation du Plan -->
    <section class="text-center my-12 px-6">
        <h2 class="text-4xl font-bold text-gray-800">Comment ça marche ?</h2>
        <p class="mt-4 text-lg text-gray-600">Rejoignez notre communauté d'entraide mondiale avec une matrice 5x5 et générez des revenus passifs.</p>
    </section>

    <!-- Étapes -->
    <section class="container mx-auto px-6 py-12">
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <i class="fas fa-user-plus text-blue-600 text-4xl"></i>
                <h3 class="text-2xl font-semibold mt-4">1. Inscrivez-vous</h3>
                <p class="text-gray-600 mt-2">Avec seulement 15$, accédez à une opportunité unique.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <i class="fas fa-users text-blue-600 text-4xl"></i>
                <h3 class="text-2xl font-semibold mt-4">2. Recrutez et développez</h3>
                <p class="text-gray-600 mt-2">Invitez 5 personnes et montez de niveau.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <i class="fas fa-money-bill-wave text-blue-600 text-4xl"></i>
                <h3 class="text-2xl font-semibold mt-4">3. Gagnez des récompenses</h3>
                <p class="text-gray-600 mt-2">Recevez des commissions et des cadeaux.</p>
            </div>
        </div>
    </section>

    <!-- Tableau RSI -->
    <div class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Tableau des Gains</h2>
        <table class="w-full text-left bg-white shadow-lg rounded-lg overflow-hidden">
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="py-4 px-6">Niveau</th>
                    <th class="py-4 px-6">Participants</th>
                    <th class="py-4 px-6">Gains ($)</th>
                    <th class="py-4 px-6">Produits Offerts</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <tr class="border-b">
                    <td class="py-4 px-6">1</td>
                    <td class="py-4 px-6">5</td>
                    <td class="py-4 px-6">25</td>
                    <td class="py-4 px-6">Montre + Sardines</td>
                </tr>
                <tr class="border-b bg-gray-100">
                    <td class="py-4 px-6">2</td>
                    <td class="py-4 px-6">25</td>
                    <td class="py-4 px-6">100</td>
                    <td class="py-4 px-6">Sac de riz + Huile</td>
                </tr>
                <tr class="border-b">
                    <td class="py-4 px-6">3</td>
                    <td class="py-4 px-6">125</td>
                    <td class="py-4 px-6">500</td>
                    <td class="py-4 px-6">Palette d'eau + Poisson</td>
                </tr>
                <tr class="border-b bg-gray-100">
                    <td class="py-4 px-6">4</td>
                    <td class="py-4 px-6">625</td>
                    <td class="py-4 px-6">3000</td>
                    <td class="py-4 px-6">Pomme de terre + Poulet</td>
                </tr>
                <tr>
                    <td class="py-4 px-6">5</td>
                    <td class="py-4 px-6">3125</td>
                    <td class="py-4 px-6">30 000</td>
                    <td class="py-4 px-6">Voyage Tanzanie</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Section Inscription -->
    <section id="inscription" class="text-center py-12 bg-blue-600 text-white">
        <h2 class="text-4xl font-bold">Prêt à changer votre vie ?</h2>
        <p class="text-lg mt-4">Rejoignez-nous maintenant et commencez à gagner !</p>
        <button class="mt-6 px-8 py-3 bg-white text-blue-600 font-bold rounded-lg text-lg">S'inscrire</button>
    </section>

    <!-- Section Inscription -->
    <!-- <section id="inscription" class="text-center py-12 bg-blue-600 text-white">
        <h2 class="text-4xl font-bold">Prêt à changer votre vie ?</h2>
        <p class="text-lg mt-4">Rejoignez-nous maintenant et commencez à gagner !</p>
        <a href="https://cmdbofficial.org/register" class="mt-6 px-8 py-3 bg-white text-blue-600 font-bold rounded-lg text-lg inline-block">S'inscrire</a>
    </section> -->


    <!-- Footer -->
    <footer class="text-center py-6 text-gray-600">
        <p>© 2025 CMDB - Tous droits réservés.</p>
    </footer>
</body>

</html>