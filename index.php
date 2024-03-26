<?php

function printUserName($firstName, $lastName) {
    echo "<p>Имя: $firstName</p>";
    echo "<p>Фамилия: $lastName</p>";
}


printUserName(firstName: "Иван", lastName: "Иванов");
printUserName(lastName: "Петров", firstName: "Петр");

?>