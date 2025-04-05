

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

var_dump(isset($programmingLanguages[2])); #checks if the element is defined at that index and if that element is != NULL

echo $programmingLanguages[1] = 'C++'; #hard coding modifying element

echo '<pre>';
print_r($programmingLanguages);
echo '<pre/>';

echo count($programmingLanguages);

#add item to the array
#push element to the end of the array
$programmingLanguages[] = 'Rust';
print_r($programmingLanguages);
echo '<br/>';

array_push($programmingLanguages, ['a','b','c']);
echo '<br/>';
print_r($programmingLanguages);


#array keys
$someYear = 'OCT 5, 2020';
$programmingLanguages = [
    'php' => '8.0',
    'python'=> [
        'creator' => 'Guido Van Rossum',
        'extension' => '.py',
        'website' => 'www.python.org',
        'isOpenSource' => true,
        'versions' => [
            ['version'=> 3.9, 'releaseDate' => 'OCT 5, 2020'],
            ['version'=> 3.8, 'releaseDate'=> $someYear],
        ]
    ],
];
echo '<pre>'; 
print_r($programmingLanguages); 
echo '</pre>';

#add element by variable

$newLanguageHAHA = 'HTML';

$programmingLanguages[$newLanguageHAHA] = '112.3';

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

#access the dimension of a key you specify

echo $programmingLanguages['python']['versions'][0]['version'];

#when we create an array, 
#if the key of all elements or 2 elements are the same,
# for ex 1, the last value will override the first one, 
#and there will be only one element with key 1 and the last value that is passed
#same happens for the next ones as key => true, 1, '1', 1.8 |||||   for null as key, there will be [] => x value





#Having keys on only some elements & how automatic indexing works

$array = ['a',50 => 'b','c']; #prints key 0 for A, key 50 for B and key 51 for C


echo '<br/>';
print_r($array);


#removing an element from the beginning of an array

echo '<br/>';
echo array_shift($array);
unset($array[0]); #removes an entire array or an specific element
#unset functon does not re-index the elements of an array after removing the specific one/multuple
#if we insert a new element there will be added with the next index that was available before unset($array[0]);
print_r($array); #prints the element that was removed

#check if key exists in array

$array2 = ['a'=> 1, 'b'=>null];

var_dump(array_key_exists('b', $array2));

var_dump(isset($array2[1]));
#difference between array_key_exists and isset()
#array_key_exists -> tells you if the key exists or not in the array
#isset() -> tells you if the key exists and it is NOT null.

