<?php 
function personProfile($name, $city, $job) {
    echo "This person is " .$name." from ".$city.".";
    echo "<br/>";
    echo " His/Her job is ".$job.".";
    echo "<br/>";
}

personProfile('Fabio', 'Tirana', 'Wev Dev');
echo "";
personProfile("Michael", "Athens", "Graphic Designer");
echo "";
personProfile("Xena", "London", "Tailor");
?>