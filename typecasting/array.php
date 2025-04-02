

<?php

//ARRAYS

#usual definition
$programmingLanguages = ['PHP','JAVA','Python'];

#old definition
$programmingLanguagesOLD = array('PHP','JAVA','Python');

$name = 'MIU';

echo $name[1];

echo $programmingLanguages[1];

#We can check if an index has a value, using isset()

var_dump(isset($programmingLanguages[5]));