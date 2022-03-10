<?php

echo ("<h4>Snack 2, parametri get</h4>");
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

//Verifiche

if (strlen($name) > 3) {
    if (strpos($mail, "@") && strpos($mail, ".")) {
        if (is_numeric($age)) {
            echo ("<p>Accesso eseguito!</p>");
        } else {
            echo ('<p>Accesso negato, inserisci un valore "età" corretto.</p>');
        }
    } else {
        echo ('<p>Accesso negato, inserisci un indirizzo email corretto.</p>');
    };
} else {
    echo('<p>Accesso negato, il nome inserito è troppo corto.</p>');
};
?>