<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint"
          content = "width=device-width">
    <meta http-equiv="X-UA-Compatible">
    <title>Document</title>
</head>

<body>

<?php

class Person{
    public $name;
    public $surname; //properties of the person class
    private $age; 


    public function __construct($name, $surname){
        echo $name. ' ' .$surname;
    }
}



$p = new Person("Brad", "Traversy");  

//$p2 = new Person('Malcom', 'Gladwell') . '<br>';    

echo '<pre>';
var_dump($p); 
echo '</pre>';

/*echo '<pre>';
var_dump($p2); 
echo '</pre>';
*/ 




?>

</body>

</html>




    



