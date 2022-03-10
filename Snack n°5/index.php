<?php

echo ("<h4>Snack 5, paragrafi</h4>");
$testo = "Oh, there ain't no rest for the wicked. Money don't grow on trees. I got bills to pay. I got mouths to feed. There ain't nothing in this world for free.
            I know I can't slow down. I can't hold back. Though you know. I wish I could. Oh, no there ain't no rest for the wicked. Until we close our eyes for good";
echo ("$testo");

$paragrafi = ".";
$testoDivisoParagrafi = explode($paragrafi, $testo);
// ciclo l'array
for ($i = 0; $i < count($testoDivisoParagrafi); $i++) {
    echo ("<p>$testoDivisoParagrafi[$i]" . $paragrafi . "</p>");
};


?>