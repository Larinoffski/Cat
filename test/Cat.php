<form action="Cat.php" method="post">
    <input name="cat" type="text"/><input type="submit" value="Назвать">
</form>

<?php

//Задача - пронаследоваться от класса Animals и проверить как зовут кота.
//Еслу Garfield, то "мяу", есил нет, то не "мяу"

class Animals{

    public $name = '';

    function getName(){
        $this->name = $_POST['cat'];
        return $this->name;
    }
}

class Cat extends Animals{
    function meow(){
        if ($this->name === 'Garfield') {
            echo 'Cat ' . $this->name . ' is saying meow.';
        }
        elseif ($this->name === NULL){
            echo 'Enter the name';
        }
        else {
            echo 'It is no Garfield';
        }
    }
}

$cat = new Cat ();
$cat->getName ();
$cat->meow();