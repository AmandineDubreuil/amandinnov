<?php

// fonctions générales

function dbug($valeur)
{
    echo "<pre style='background-color:black;color:white;padding: 15px;overflow:auto;height:300px;'>";
    var_dump($valeur);
    echo "</pre>";
}

function dd($valeur)
{
    echo "<pre style='background-color:black;color:white;padding: 15px;overflow:auto;height:300px;'>";
    var_dump($valeur);
    echo "</pre>";
    die();
}

function redirectUrl(string $path = ''): void
{
    $homeUrl = 'https://' . $_SERVER['HTTP_HOST'];
    $homeUrl .= '/' . $path;
    header("Location: {$homeUrl}");
    exit();
}

function getUrl(string $path)
{
    $homeUrl = 'https://' . $_SERVER['HTTP_HOST'];
    $homeUrl .= '/' . $path;
    echo $homeUrl;
}


// fonctions CRUD générales

/**
 * checkXSSPostValue
 * 
 * Cette fonction sert à vérifier l'intégrité de la variable post transmise (faille XSS).
 * 
 * @param  mixed $postEntrie : entrée de formulaire à vérifier
 * @return mixed variable post nettoyée de ses tags
 */
function checkXSSPostValue($postEntrie)
{
    $postEntrie = strip_tags($postEntrie);
    return $postEntrie;
}