<?php

require('app/app.php');

//use App\Data;

$view_bag = [
    'title' => 'Glossary List',
    'heading' => 'Glossary'
];

if (isset($_GET['search'])) {
    $items = search_terms($_GET['search']);

    $view_bag['heading'] = 'Search Results for ' . $_GET['search'];
} else {
    //$items = Data\get_terms();
    $items = get_terms();
    
}

view('index', $items);