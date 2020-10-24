<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // Шаг 1. Массивы
        echo 'Шаг 1. Массивы ---------------------------------------------------<br>';
        // Одномерный массив
        echo 'Одномерные массивы <br>';
        $array1 = [];
        $array1 = [21, 22, 23];
        echo $array1[2];
        echo '<br>';
        //Многомерный массив
        echo 'Многомерные массив <br>';
        $array2 [0] [0]= ['значение'];
        $array2 [0] [0];
        var_dump($array2);
        echo '<br>';
        
        //Ассоциативный массив
        echo 'Ассоциативные массивы <br>';
        $array3 ['name'] = 'Nicolay';
        $array3 = [
            'name' => 'Almira',
            'age' => 18,
            'city' => 'Moscow',
        ];
        var_dump($array3);
        echo '<br>';

        //Добавление/удаление элементов массива
        echo 'Добавление/удаление элементов массива <br>';
        $array1[]=5;
        array_push($array1,18, 2);
        array_splice($array1, 0, 3,null);
        var_dump($array1);

        //Преобразование строк в массив
        $NewString = 'Das ist eine Linie';
        $array4 = str_split($NewString);
        var_dump($array4);

        //Проверка типа переменной is_array
        echo '<br> Массив это массив? - ' . is_array($array4);
        echo '<br> Строка это массив? -' . is_array($NewString);

        //Пустые массивы и false
        $arrayEmpty = [];
        echo '<br> Массив и empty = ' . empty($arrayEmpty);

        //Копирование
        $arrayCopy = $array4;
        echo '<br> Копирование = ';
        var_dump($arrayCopy);
        echo '<br>';
        echo 'Шаг 2.Функции для работы с массивами ---------------------------------------------------<br>';
    //Шаг 2.Функции для работы с массивами

        //array_combine — Создает новый массив, используя один массив в качестве ключей, а другой для его значений
        echo '<br>';
        $name = ['Anna', 'Boris', 'Sveta'];
        $city = ['Kazan', 'Moscow', 'Kirov'];
        $combine = array_combine($name, $city);
        var_dump($combine);

        //array_merge — Сливает один или большее количество массивов
        echo '<br>';
        $Haustier1 = [
            'Haustier' => 'Hund',
            'Hundeart' => 'Collie',
            'Name' => 'Alex',
        ];
        $Haustier2 = [
            'Alter' => '7',
            'Stadt' => 'Kazan',
        ];
        $merdge = array_merge($Haustier1, $Haustier2);
        var_dump($merdge);

    //array_multisort — Сортирует несколько массивов или многомерные массивы
        echo '<br>';
        $arr1 = [1,3,6,4,2];
        $arr2 = [21,22,24,23,25];
        array_multisort($arr1, $arr2);
        var_dump($arr1);
        echo '<br>';
        var_dump($arr2);


    //array_pop — Извлекает последний элемент массива
        echo '<br>';
        $Fruchte  = ["Apfelsine", "Banane", "Apfel",];
        $Obst = array_pop($Fruchte);
        var_dump($Obst);

    //array_push — Добавляет один или несколько элементов в конец массива
        echo '<br>';
        array_push($Fruchte, 'Birnbaum');
        var_dump($Fruchte);
        echo '<br>';
    
    //array_walk — Применяет заданную пользователем функцию к каждому элементу массива
        $Gemüse = ['Tomate', 'Gurke', 'Krott', 'Kartoffel'];
        function walk($item){
            echo $item . ' <br>';
        }
        array_walk($Gemüse, 'walk');
        echo 'Шаг 3. Примеры  циклов ---------------------------------------------------<br>';
//Шаг 3. Примеры  циклов
    //while
    echo 'Цикл while <br>';
        $i=0;
        while($i<count($Gemüse)){
            echo $Gemüse[$i] . ' ';
            $i++;
        }
        echo '<br>';

    //do-while
    echo 'Цикл do-while <br>';
        $i=0;
        do{
            echo $Gemüse[$i];
            $i++;
        }
        while ($i<count($Gemüse));
    echo '<br>';
    echo '<br>';
    //For
    echo 'Цикл For <br>';
    for($index=0; $index<count($Fruchte);$index++){
        for($index2=0; $index2<10;$index2++)
        {
            echo $Fruchte[$index] . ' ';
            if($index2>=4)
            {
                break;
            }
        }
        if($index>=1)
        {
            continue;
        }
        echo '<br>';
    }
    echo '<br>';
    echo '<br>';
    //Foreach
    echo 'Цикл Foreach <br>';
    foreach($array3 as $key => &$value){
        $value=$value . ' after foreach';
        echo $value . ' ' . $key . ' ';
    }
    echo '<br>';
    echo '<br>';
    //Foreach нахождение первого и последнего элемента
    $outIndex=1;
    foreach($array4 as $indexArray)
    {
        if($outIndex==1){
            echo 'первый элемент массива это: ' . $indexArray . '<br>';
        }
        else if($outIndex==count($array4))
        {
            echo 'последний элемент массива это: ' . $indexArray . '<br>';
        }
        $outIndex++;
    }
    echo '<br>';
    echo '<br>';

    //многомерный массив
    $multi_array=[
        $Gemüse, $Fruchte, $array4
    ];

    echo 'распаковка многомерного массива с помощью List <br>';
    foreach($multi_array as list($a, $b, $c)){
        echo $a . ' ' . $b . ' ' . $c . '<br>';
    }
    echo '<br>';
    echo 'Шаг 4 Условия---------------------------------------------------<br>';

//Шаг 4 Условия

    for($i1=0;$i1<count($Gemüse);$i1++)
    {
        if(strlen($Gemüse[$i1])==5)
        {
            echo $Gemüse[$i1] . ' имеет длину строки равно 5 символам <br>';
        }
        else if(strlen($Gemüse[$i1])==6)
        {
            echo $Gemüse[$i1] . ' имеет длину строки равную 6 символам <br>';
        }
        else{
            echo $Gemüse[$i1] . ' все что иначе <br>';
        }

    }
    echo '<br>';
    echo 'Шаг 5 Функции---------------------------------------------------<br>';

//Шаг 5.  Функции
    /*sagHalo
        Возвращает строку 'Hallo' + $name
        <?php
         function sagHalo($name)

        @param String $name
        строка, к которой прибавится новое значение 'Hallo, '
        
        @return String; 
        */
    function sagHallo($name){

        return 'Hallo, ' . $name;
    }
    echo sagHallo('Almira');

    echo '<br>';
    echo '6. Классы и  методы---------------------------------------------------<br>';

//Шаг 6. Классы и  методы
    class Person
    {
        //публичные свойства
        public $name = 'User';
        public $lastName = '';
        public $city = 'City';
        
        //приватные свойства
        private $age = 18;
        private $children = 0;

        //конструктор
        function __construct($name, $lastname, $city)
        {
            $this->name=$name;
            $this->lastName=$lastname;
            $this->city=$city;
        }

        //публичные методы
        public function setChildren($number)
        {
            $this->children = $number;
        }
        public function getChildren(){
            return $this->children;
        
        }
        public function setAge($age)
        {
            $this->age=$age;
        }
        public function getAge()
        {
            return $this->age;
        }
    }

    $human = new Person('Ivan', 'Petrov','Moscow');
    $human->setAge(32);
    $human->setChildren(2);
    var_dump($human);
    echo '<br>';
    echo '<br>';
    $human->city = 'Sankt-Petersburg';
    $human->setAge(33);
    var_dump($human);

//ACT - must   
    class User extends Person{
        //приватные переменные
        private $phone = '';
        private $email='';

        //публичные методы
        public function setContacts($phone,$email)
        {
            $this->phone=$phone;
            $this->email=$email;
        }
    }
    $newUser = new User('Anna','Ivanova','Kaluga');
    $newUser->setAge(30);
    $newUser->setContacts('+71234567890','Anna@mail.ru');
    echo '<br>';
    echo '<br>';
    var_dump($newUser);
    echo '<br>';
    echo 'Pet Project----------------------------------------<br>';
//ACT - should
    $petArray=[123, 'red', true, 'orange', 1324, 'green', 'blue', 'yellow'];
    $sortArray=[];
    $sortArrayOwnMethod=[];
    foreach($petArray as $item){
        if(is_string($item)==true){
            array_push($sortArray, $item);
            array_push($sortArrayOwnMethod, $item);
        }
    }
    asort($sortArray);
    echo 'Сортировка массива строк с помощью встроенных функций языка';
    echo '<br>';
    var_dump($sortArray);
    echo '<br>';
    echo 'Сортировка массива строк с помощью метода пузырька, исходный массив <br>';
    var_dump($sortArrayOwnMethod);
    echo '<br>';
    echo 'процесс сортировки <br>';
    for($i=0; $i<count($sortArrayOwnMethod);$i++)
    {
        for($j=0; $j<count($sortArrayOwnMethod);$j++)
        {
            if($sortArrayOwnMethod[$i][0]<$sortArrayOwnMethod[$j][0])
            {
                $item=$sortArrayOwnMethod[$i];
                array_splice($sortArrayOwnMethod,$i,1,$sortArrayOwnMethod[$j]);
                array_splice($sortArrayOwnMethod,$j,1,$item);
                echo 'обмен элементов ' . $sortArrayOwnMethod[$i] . '<-> ' . $sortArrayOwnMethod[$j] .' <br>';
            }
            var_dump($sortArrayOwnMethod);
            echo '<br>';
        }
    }
    echo 'Отсортированный методом пузырька массив: <br>';
    var_dump($sortArrayOwnMethod);
    echo '<br>';
    echo '<br> функция подсчета количества букв в строке--------------';
    //функция подсчета количества букв в строке
    function charsCalculate($user_string)
    {
        $ignorSymbols = [' ', '.', ',', ':', ';'];
        $unicumSymbols=[];
        $countSymbols=[];
        for($i=0; $i<strlen($user_string);$i++)
        {
            if(array_search($user_string[$i], $ignorSymbols)===false)
            {
                if(array_search($user_string[$i], $unicumSymbols)===false)
                {
                    array_push($unicumSymbols, $user_string[$i]);
                }
            }
        }
        for($i=0; $i<count($unicumSymbols);$i++)
        {
            $count = substr_count($user_string,$unicumSymbols[$i]);
            array_push($countSymbols, $count);

        }
        $resultArray = array_combine($unicumSymbols,$countSymbols);
        echo 'массив с подсчетанным количеством букв: ';
        var_dump($countSymbols);
        arsort($resultArray);
        return $resultArray;
    }

    echo '<br>';

    $user_string = 'Lorem ipsum dolor sit amet,';
    echo 'изначальная строка: ' . $user_string . '<br>';
    $str = charsCalculate($user_string);
    echo '<br>Полученный массив ';
    var_dump($str);
    echo '<br>';

    ?>
</body>
</html>