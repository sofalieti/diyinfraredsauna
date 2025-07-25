<?php

// Конфигурация
$whm_host = 'premium233.web-hosting.com'; // IP или хост
$whm_user = 'sofalieti';
$api_token = 'ZZT79D2R8ZYUKDMS6KO8SCPVS3QFVYV6'; // ваш токен
$main_domain = 'costcosaunapart.com';
$shared_docroot = '/home/namechaep/public_html'; // замените на правильный путь

// Список доменов для добавления как алиасов
$domains = [
    "wasaunaparts.com",
    "costcosaunapart.net",
    "costcosaunaparts.net",
    "infraredsaunalights.com",
    "infraredheaterguru.net",
    "hotwindsaunapart.net",
    "infraredsaunaionizers.com",
    "infraredsaunadoorhardware.net",
    "josensaunapart.net",
    "infraredsaunafuses.net",
    "luxsaunasparts.com",
    "josensaunapart.com",
    "infraredsaunalamps.net",
    "costcosaunaparts.com",
    "rockymountainsaunasparts.com",
    "infraredsaunachromotherapy.com",
    "hybridoutdoorsaunas.com",
    "healthmateparts.net",
    "wasaunapart.com",
    "infraredsaunarelays.com",
    "infraredsaunablocks.com",
    "saunakingparts.net",
    "infraredsaunalamps.com",
    "healthproinfraredsaunapart.com",
    "infraredsaunaremotecontrol.com",
    "infraredsaunawalls.com",
    "infraredsaunaelements.com",
    "infraredsaunafuses.com",
    "heloinfraredsaunaparts.net",
    "heatwavesaunaparts.net",
    "mccoysaunaparts.net",
    "heavenlyheatsaunaparts.com",
    "rockymountainsaunaspart.net",
    "hybridoutdoorsauna.net",
    "ezeinfraredsaunas.net",
    "infraredsaunacovers.com",
    "infraredsaunaraincovers.com",
    "infraredsaunaraincover.net",
    "helosaunaparts.net",
    "infraredsaunaextendedwarranty.com",
    "saunakingpart.net",
    "infraredsaunablocks.net",
    "mastersaunasparts.net",
    "infraredsaunaceramicheaters.com",
    "hotwindsaunaparts.com",
    "heaveninfraredsaunapart.com",
    "infraredsaunaconnetors.com",
    "precisiontherapysaunapart.com",
    "josensaunaparts.net"
];

// Функция для вызова WHM API
function call_whm_api($host, $user, $token, $query) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://$host:2087$query");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        "Authorization: whm $user:$token"
    ]);
    $response = curl_exec($curl);
    if (curl_errno($curl)) {
        die("Curl error: " . curl_error($curl));
    }
    curl_close($curl);
    return json_decode($response, true);
}

// Добавление домена как алиаса с shared docroot
foreach ($domains as $domain) {

    echo "Добавляю домен: $domain\n";

    $query = "/json-api/cpanel?cpanel_jsonapi_user=$whm_user&cpanel_jsonapi_module=ParkIt&cpanel_jsonapi_func= park&domain=$domain&topdomain=$main_domain&dir=" . urlencode($shared_docroot);

    $result = call_whm_api($whm_host, $whm_user, $api_token, $query);

    if (!empty($result['error'])) {
        echo "Ошибка при добавлении $domain: " . $result['error'] . "\n";
    } else {
        echo "Домен $domain успешно добавлен.\n";
    }

    sleep(1); // Пауза между запросами
}

?>