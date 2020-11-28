<?php



$host = 'localhost';
$database = 'world';
$user = 'root';
$password = '';



function add_table() {
    global $host, $user, $password, $database;

    $link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));


    $sql = 'CREATE TABLE IF NOT EXISTS `countries`
        (
        id INT(3) AUTO_INCREMENT PRIMARY KEY,
        country VARCHAR(150) NOT NULL,
        UNIQUE (country)
        )
        ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;';
    if (!mysqli_query($link, $sql)) {
        echo 'Ошибка при создании базы данных стран '  ;
    }

    mysqli_close($link);

}
add_table();

function add_country($country) {
    global $host, $user, $password, $database;
    $link = mysqli_connect($host, $user, $password, $database);
    $link->set_charset("utf8");


    $country = trim($country);

    if (!$link) {
        die("Ошибка подключения: " . mysqli_connect_error());
    }

    $sql = mysqli_query($link, 'INSERT INTO countries (`country`) VALUES ("'. $country .'")');


    if(!$sql){
        echo "Ошибка подготовки запроса: " . mysqli_error($link);
    } else {
        echo "Данные успешно добавлены в таблицу";
    }


    mysqli_close($link);
}

function print_table() {
    global $host, $user, $password, $database;

    $link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));
    $link->set_charset("utf8");

    if(!$link) {
        die("Ошибка подключения: ".mysqli_connect_error());
    }

    $str = mysqli_query($link, 'SELECT * FROM countries ');

    if ($str) {
        return mysqli_fetch_all($str, MYSQLI_ASSOC);
    }
    else {
        echo "Произошла в получении таблицы стран";
    }
    mysqli_close($link);
return ('') ;
}








?>