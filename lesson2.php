﻿<?php
// 連想配列に下記の国と都市をそれぞれkey,valueとして格納し,foreach文を使ってフォーマットのとおりに連続で出力して下さい。

// 国名 key
// 日本、アメリカ、イギリス、フランス

// 首都名 value
// 東京、ワシントン、ロンドン、パリ

// フォーマット
// ○○の首都は○○です。

$countryCity = array(
'日本' => '東京',
'アメリカ'=>'ワシントン',
'イギリス'=>'ロンドン',
'フランス'=>'パリ'
);
foreach ($countryCity as $country => $city){
    echo '<p>' . $country . 'の首都は' . $city . 'です。</p>';
}

?>



