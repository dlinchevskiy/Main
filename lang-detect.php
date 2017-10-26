<?php

//Return:
//$lang['short'] = short code of browser lang
//$lang['currency'] = currency code for lang

function get_lang() {
    $lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    if ($lang == TRUE) {
        list($lang_full, $lang_short) = explode(',', $lang);
        $lang_short = explode(';', $lang_short);
        $lang_short = $lang_short[0];
    }
    $ru_countries = array(
        'ru' => 'RUB',
        'am' => 'AMD',
        'az' => 'AZM',
        'by' => 'BYR',
        'ee' => 'EUR',
        'lt' => 'EUR',
        'lv' => 'LVL',
        'ua' => 'UAH',
        'md' => 'MDL',
        'ge' => 'GEL',
        'kz' => 'KZT',
        'uz' => 'UZS',
        'kg' => 'KGS',
        'tm' => 'TMT',
        'tj' => 'TJS'
    );

    $eng_countries = array(
        'ag' => 'XCD',
        'au' => 'AUD',
        'bs' => 'BSD',
        'bb' => 'BBD',
        'bz' => 'BZD',
        'ca' => 'CAD',
        'dm' => 'XCD',
        'gd' => 'XCD',
        'gy' => 'GYD',
        'ie' => 'EUR',
        'jm' => 'JMD',
        'nz' => 'NZD',
        'kn' => 'XCD',
        'lc' => 'XCD',
        'vc' => 'XCD',
        'tt' => 'TTD',
        'gb' => 'GB',
        'en' => 'USD'
    );

    $lang_return = array();    
    
    if (array_key_exists($lang_short, $ru_countries)) {
        $lang_return['short'] = $lang_short;
        $lang_return['currency'] = $ru_countries[$lang_short];
    } elseif (array_key_exists($lang_short, $eng_countries)) {
        $lang_return['short'] = $lang_short;
        $lang_return['currency'] = $ru_countries[$lang_short];
    } else {
        $lang_return['short'] = 'en';
        $lang_return['currency'] = 'USD';
    }

    return array($lang_return);
}

$top_top_countries_locale = array (
'Russian' => 'RU',
'Portuguese' => 'PT',
'Spanish' => 'ES',
'French' => 'FR',
'German' => 'FR',
'Italian' => 'IT',
'Dutch' => 'NL',
'Turkish' => 'TR',
'Japanese' => 'JA',
'Korean' => 'KO',
'Thai' => 'TH',
'Vietnamese' => 'VI',
'Arabic' => 'AR',
'Hebrew' => 'HE',
'Polish' => 'PL',
'English' => 'EN'
    
);

$top_category_countries_locale = array (
'Russian' => 'rus',
'Portuguese' => 'pt-br',
'Spanish' => 'es-es',
'French' => 'fr-fr',
'German' => 'de-de',
'Italian' => 'it-it',
'Dutch' => 'nl-nl',
'Turkish' => 'tr',
'Japanese' => 'ja',
'Korean' => 'ko',
'Thai' => 'th',
'Vietnamese' => 'vi',
'Arabic' => 'ar-qa',
'Hebrew' => 'he',
'Polish' => 'pl',
'English' => 'en-us'
    
);

$top_countries_currencies = array (
'Russian' => 'RUB',
'Portuguese' => 'EUR',
'Spanish' => 'EUR',
'French' => 'EUR',
'German' => 'EUR',
'Italian' => 'EUR',
'Dutch' => 'ANG',
'Turkish' => 'TRY',
'Japanese' => 'JPY',
'Korean' => 'KPW',
'Thai' => 'THB',
'Vietnamese' => 'VND',
'Arabic' => 'AED',
'Hebrew' => 'ILS',
'Polish' => 'PLN',
'English' => 'USD'
    
);





?>
