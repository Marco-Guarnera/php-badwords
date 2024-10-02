<?php

// Fase di raccolta dati

// Variabili

$user_text = $_GET["user-text"];
var_dump($user_text);

$user_word = $_GET["user-word"];
var_dump($user_word);

// Fase di elaborazione

$new_text = str_replace($user_word, "***", $user_text);

// Fase di produzione

echo "Text: " . $user_text . " " . "Length: " . strlen($user_text);
echo "New Text: " . $new_text . " " . "Length: " . strlen($new_text);

?>