<?php

$topic = 'PHP array';

echo "Topic : {$topic}";

echo PHP_EOL;

$student = array('abdullah', "faruk", "alam", "raju", "shuvo");

print_r ($student); //student array
 
echo $student[1]; //faruk

echo PHP_EOL;

$student = ['abdullah', "faruk", "alam", "raju", "shuvo"]; //indexed array

echo $student[1]; //faruk

echo PHP_EOL;

$student = ["name" => "alim", "age" => 25]; //associative array

echo $student["name"]; //alim

echo PHP_EOL;

$student = [["name"=>"hasan"], ["name"=>"ali", ["car"=>"tata"]]];

echo $student[0]['name']; //hasan

echo PHP_EOL;

echo $student[1][0]['car']; //tata

echo PHP_EOL;

//Exam 1 :
$company = [
    "name" => "ABC Ltd",
    "developer"=> [
        [
            "name" => "Mr A",
            "Language" => ["PHP", "Java"]
        ],
        [
            "name" => "Mr B",
            "Language" => ["PHP"]
        ]
    ]
];

// Output : Mr B of ABC Ltd work with PHP.

$company_name = $company['name'];
$developer_name = $company['developer'][1]['name'];
$language = $company["developer"][1]["Language"][0];

echo "{$developer_name} of {$company_name} work with {$language}."

?>