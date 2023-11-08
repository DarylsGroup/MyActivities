<?php
class Student {
    public $firstName = "David Shaine";
    public $lastName = "Custodio";
    public $address = "Sto. Domingo Ilocos Sur";
    public $age = 20;
    public $contactNumber = "999-999-999";
}

$student = new Student();

echo "This Is My Information";
echo "<br>First Name: " . $student->firstName . "\n";
echo "<br>Last Name: " . $student->lastName . "\n";
echo "<br>Address: " . $student->address . "\n";
echo "<br>Age: " . $student->age . "\n";
echo "<br>Contact Number: " . $student->contactNumber . "\n";
?>