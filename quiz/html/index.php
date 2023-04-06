<?php

require __DIR__.'/../lib/functions.php';

$dataList = fetchAll();

if (!$dataList) {
    error404();
}

$questions = [];
foreach ($dataList as $data){
    $questions[] = generateFormattedData($data);
};

$assaingData = [
    'questions' => $questions
];

loadTemplate('index', $assaingData);