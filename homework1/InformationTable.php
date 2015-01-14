<?php

/*
Write a PHP script InformationTable.php
 *  which generates an HTML table by given information about a person
 *  (name, phone number, age, address).
 */

$name = "Gosho";
$phone = 0882321423;
$age = 24;
$address = "Hadji";

?>

<table border="1">
    <tr>
        <td style="background-color: yellow;">Name</td>
        <td><?= $name;?>  </td>
    </tr>
    <tr>
        <td style="background-color: yellow;">Phone</td>
        <td><?= $phone;?>  </td>
    </tr>
    <tr>
        <td style="background-color: yellow;">Age</td>
        <td><?= $age;?>  </td>
    </tr>
    <tr>
        <td style="background-color: yellow;">Address</td>
        <td><?= $address;?>  </td>
    </tr>
</table>
