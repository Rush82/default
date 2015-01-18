<meta charset="utf8"/>
   
<?php

$name='сергей';
$age=32;

echo "меня зовут $name <br>";

echo "мне $age года <br>"; 

unset($name, $age);
define("citi", "Краснодар<br>");
if(defined("citi")){
echo citi;}
//define("citi","ростов");
$book1 = ["tytle1" => "Отцы и дети", "outher1" => "Достоевский", "pages1" => 417];

echo "Недавно я прочитал книгу ". $book1 ['tytle1'].", написанную автором ".
        $book1 ['outher1'].", я осилил все ". $book1 ['pages1']. 
        "страниц, мне она очень понравилась.<br>";

$book2 = ["tytle2" => "Война и мир", "outher2" => "Толстой", "pages2" => 1623];
$books = [$book1, $book2];

$myecho = sprintf('Недавно я прочитал книги %s и %s,<br/>написанные '.
        'соответсвтенно авторами %s и %s, я осилил в сумме %s страниц, '.
        'не ожидал от себя подобного',
        $books[0]['tytle1'], $books[1]['tytle2'], $books[0]['outher1'],
        $books[1]['outher2'], $books[0]['pages1'] + $books[1]['pages2']);
echo $myecho;

?>
