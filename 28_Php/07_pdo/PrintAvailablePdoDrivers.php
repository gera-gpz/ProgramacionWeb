<?php

print "<h2>PDO Available Drivers</h2>";
print_r(PDO::getAvailableDrivers());

$drivers = PDO::getAvailableDrivers();

foreach ($drivers as $key => $value ) {
    print "[".$key."] = ".$value."<br>";
}
?>