<?php
// test_curl_simple.php
$api_key = '02623026c384b6f8d5631647e2d19af3';
$api_secret = '8ca77f079941d108ece06a8fe9690677';

echo "🔍 Test API Mailjet avec cURL\n\n";

// Préparer les données
$data = [
    'Messages' => [
        [
            'From' => [
                'Email' => "akramlabidi45@gmail.com",
                'Name' => "Test Mailjet"
            ],
            'To' => [
                [
                    'Email' => "akramlabidi45@gmail.com",
                    'Name' => "Akram"
                ]
            ],
            'Subject' => "Test API Mailjet " . date('Y-m-d H:i:s'),
            'TextPart' => "Ceci est un test direct de l'API Mailjet",
            'HTMLPart' => "<h3>Test API Mailjet</h3><p>Ceci est un test direct</p>"
        ]
    ]
];

// Initialiser cURL
$ch = curl_init('https://api.mailjet.com/v3.1/send');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Accept: application/json'
]);
curl_setopt($ch, CURLOPT_USERPWD, "$api_key:$api_secret");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // À désactiver seulement en test
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // À désactiver seulement en test
curl_setopt($ch, CURLOPT_VERBOSE, true); // Pour voir les détails

// Exécuter
echo "Envoi de la requête...\n\n";
$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error = curl_error($ch);

curl_close($ch);

// Afficher le résultat
echo "Code HTTP: $http_code\n";

if ($error) {
    echo "❌ Erreur cURL: $error\n";
} else {
    echo "✅ Réponse reçue!\n";
    echo "Contenu: $response\n";
    
    // Décoder la réponse
    $result = json_decode($response, true);
    if ($http_code == 200) {
        echo "\n✅ SUCCÈS! L'email a été envoyé!\n";
    } else {
        echo "\n❌ ÉCHEC! Code: $http_code\n";
        if (isset($result['ErrorMessage'])) {
            echo "Message: " . $result['ErrorMessage'] . "\n";
        }
    }
}