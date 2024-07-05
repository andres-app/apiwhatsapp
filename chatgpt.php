<?php
// $apiKey = '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';

// Datos para la solicitud con el modelo `gpt-3.5-turbo`
$data = [
    'model' => 'gpt-3.5-turbo',
    'messages' => [
        ['role' => 'system', 'content' => 'You are a helpful assistant.'],
        ['role' => 'user', 'content' => 'Que es Microsoft']
    ],
    'temperature' => 0.7,
    'max_tokens' => 3, // Reducido para optimizar uso
    'n' => 1,
    'stop' => ['\n']
];

$ch = curl_init('https://api.openai.com/v1/chat/completions');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Authorization: Bearer ' . $apiKey
));

$response = curl_exec($ch);
$responseArr = json_decode($response, true);

print($response);
?>
<!-- chatgpt ya no es gratuito ahora se pagaaaa -->