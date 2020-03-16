<?php
require_once 'model.php';

echo "-  -  -Region-  -  -\n";
echo "1. Add Region \n";
echo "2. Show Regions \n";

echo "-  -  -Type-  -  -\n";
echo "3. Add Type \n";
echo "4. Show Types \n";

echo "5. Exit \n";
echo "\n";
echo "Enter your choice: ";

$regions = [];

do {
    $user_input = fgets(STDIN);
    if ($user_input == 1) {
        echo "Adding new region \n";
        echo "Enter region ID: ";
        $user_region_id = fgets(STDIN);
        echo "Enter region name: ";
        $user_region_name = fgets(STDIN);
        $region = new Region($user_region_id,$user_region_name);
        $regions[] = $region; // push on or more elements onto the end of array
        echo $region->getId() . ' ' . $region->getName();
    } elseif ($user_input == 2) {
        echo "Showing regions \n";
        if (empty($regions)) {
            echo 'No regions added yet.';
        } else {
            foreach ($regions as $region) {
                echo $region->getId() . ' ' . $region->getName();
            }
        }
    }else if ($user_input == 3) {
        echo "Adding new Type \n";
        echo "Enter Type ID: ";
        $user_type_id = fgets(STDIN);
        echo "Enter Type name: ";
        $user_type_name = fgets(STDIN);
        $type = new Type($user_type_id,$user_type_name);
        $types[] = $type; // push on or more elements onto the end of array
        echo $type->getId() . ' ' . $type->getName();
    } elseif ($user_input == 4) {
        echo "Showing Types \n";
        if (empty($types)) {
            echo 'No Types added yet.';
        } else {
            foreach ($types as $type) {
                echo $type->getId() . ' ' . $type->getName();
            }
        }
    }



} while ($user_input != 5);





