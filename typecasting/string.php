<?php

/* STRINGS */
#Differences between single quotes and double quotes:
    # 'xyz' -> YOU CANT USE VARIABLES
    # "XYZ$home" - YOU CAN USE VARIABLES
$c='ijij';
$b="JJ${c}";
$a="HH{$b}";

#How to concatenate strings
$name = $a . ' ' . $c;

echo $name . '<br/>';
#we can display a value for a specific index
echo $name[0];

var_dump($name);


echo '<br/><br/> HEREDOC: <br/> ';

// Heredoc
#within heredoc we can have variables
#syntax
$line1 = 'Hello';
$line2 = "$line1, World!";
$line3 = "$line2 / Everyone!";

$textHerodoc = <<<TEXT
Line 1 $line1
Line 12 $line2
Line 323 $line3
TEXT;

echo $textHerodoc;
echo '<br/>';

#WE CAN USE nl2br function so we dont use <br/>
echo nl2br($textHerodoc);

echo '<br/><br/> NOWDOC: <br/> ';




// Nowdoc
#within nowdoc we cant have variables
#syntax
#the syntax for nowdoc is different, we have to close the tag name with a single quote
#so the variables will be treated as strings and all of the values as a single quote

$textNowdoc = <<<'TEXT'
LINE 1 $line1
LINE 2 $line2
Line 3 $line3
Line 4 $line4
TEXT;

echo nl2br($textNowdoc);


echo nl2br(
    "<br/>Usecases <br/> When we have multiline strings with complex expressions"
);

echo nl2br(
    "<br/>When we have to generate HTML Dinamically<br/> "
);

echo nl2br(
    "<br/>NOTICE: Any space in the HERODOC/NOWDOC is taken as is<br/> "
);

$htmlGen = <<<HTML
<div>
    <p>
        HELLOOO
    </p>
</div>
HTML;

echo nl2br($htmlGen);