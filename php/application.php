<?php

spl_autoload_register(function ($class_name) {
    include 'model/' . str_replace('\\','/', $class_name) . '.php';

});

//spl_autoload_register(function ($class_name) { //also works
//    include_once 'model.php';
//});

echo "Welcome\nPlease chose one of the options\n\n";
echo "\n-  -  -  -Region-  -  -\n";
echo "1. Add Region \n";
echo "2. Show Regions \n";

echo "\n-  -  -  -Type-  -  -\n";
echo "3. Add Type \n";
echo "4. Show Types \n";
echo "\n-  -  -  -Agent-  -  -\n";
echo "5. Add Agent \n";
echo "6. Show Agents \n";
echo "\n-  -  -  -Customer-  -  -\n";
echo "7. Add Customer \n";
echo "8. Show Customers \n";

echo "\n-  -  -  -Listings-  -  -\n";
echo "9. Add Listing \n";
echo "10. Show Listings \n";

echo "\n-  -  -  -Sale-  -  -\n";
echo "11. Add Sale \n";
echo "12. Show Sales \n";


echo "\n13. Exit \n";
echo "\n";
echo "Enter your choice: ";

$regions = [];
$types = [];
$agents = [];
$customers = [];
$listings = [];
$sales = [];


do {
    $user_input = fgets(STDIN);
    if ($user_input == 1) {
        echo "Adding new region \n";
        echo "Enter region ID: ";
        $user_region_id = fgets(STDIN);
        echo "Enter region name: ";
        $user_region_name = fgets(STDIN);
        $region = new \Agency\Region(intval($user_region_id), $user_region_name);
        $regions[] = $region; // push on or more elements onto the end of array
        echo "inserted";
    } elseif ($user_input == 2) {
        echo "Showing regions \n";
        if (empty($regions)) {
            echo 'No regions added yet.';
        } else {
            foreach ($regions as $region) {
                echo $region->getId() . ' ' . $region->getName();
            }
        }
    } else if ($user_input == 3) {
        echo "Adding new Type \n";
        echo "Enter Type ID: ";
        $user_type_id = fgets(STDIN);
        echo "Enter Type name: ";
        $user_type_name = fgets(STDIN);
        $type = new \Agency\Type(intval($user_type_id), $user_type_name);
        $types[] = $type; // push on or more elements onto the end of array
        echo "inserted";
    } elseif ($user_input == 4) {
        echo "Showing Types \n";
        if (empty($types)) {
            echo 'No Types added yet.';
        } else {
            foreach ($types as $type) {
                echo $type->getId() . ' ' . $type->getName();
            }
        }
    } else if ($user_input == 5) {
        echo "Adding new Agent \n";
        echo "Enter Agent ID: ";
        $user_agent_id = fgets(STDIN);
        echo "Enter Agent email: ";
        $user_agent_email = fgets(STDIN);
        echo "Enter Agent password: ";
        $user_agent_password = fgets(STDIN);
        echo "Enter Agent's first name: ";
        $user_agent_first_name = fgets(STDIN);
        echo "Enter Agent's last name: ";
        $user_agent_last_name = fgets(STDIN);
        echo "Enter Agent's salary: ";
        $user_agent_salary = fgets(STDIN);
        echo "Is administrator: ";
        $user_agent_is_administrator = fgets(STDIN);
        if ($user_agent_is_administrator == "") {
            $user_agent_is_administrator = 'false';
            echo "Not an administrator";
        }
        echo "Is employed ";
        $user_agent_is_employed = fgets(STDIN);
        if ($user_agent_is_employed == "") {
            $user_agent_is_employed = 'true';
        }
//        var_dump($user_agent_salary);
//        var_dump ($user_agent_id);
        $agent = new \Agency\Agent(intval($user_agent_id), $user_agent_email, $user_agent_password, $user_agent_first_name, $user_agent_last_name, intval($user_agent_salary), $user_agent_is_administrator === 'true', $user_agent_is_employed === 'true');
        $agents[] = $agent; // push on or more elements onto the end of array
        echo "inserted";
    } elseif ($user_input == 6) {
        echo "Showing Agents \n";
        if (empty($agents)) {
            echo 'No Agents added yet.';
        } else {
            foreach ($agents as $agent) {
                echo $agent->getId() . ' ' . $agent->getFirstName() . ' ' . $agent->getLastName() . ' ' . $agent->getEmail() . ' ' . $agent->getAdministrator() . ' ' . $agent->getEmployed();
            }
        }
    } else if ($user_input == 7) {
        echo "Adding new Customer \n";
        echo "Enter Customer ID: ";
        $user_customer_id = fgets(STDIN);
        echo "Enter Customer's first name: ";
        $user_customer_first_name = fgets(STDIN);
        echo "Enter Customer's last name: ";
        $user_customer_last_name = fgets(STDIN);
        echo "Enter Customer password: ";
        $user_customer_password = fgets(STDIN);
        echo "Enter Customer email: ";
        $user_customer_email = fgets(STDIN);
        $customer = new \Agency\Customer(intval($user_customer_id), $user_customer_email, $user_customer_password, $user_customer_first_name, $user_customer_last_name);
        $customers[] = $customer; // push on or more elements onto the end of array
        echo "inserted";
    } elseif ($user_input == 8) {
        echo "Showing Customera \n";
        if (empty($customers)) {
            echo 'No Customers added yet.';
        } else {
            foreach ($customers as $customer) {
                echo $customer->getId() . ' ' . $customer->getFirstName() . ' ' . $customer->getLastName() . ' ' . $customer->getEmail();
            }
        }
    } elseif ($user_input == 9) {
        echo "Adding new listing \n";
        echo "Enter listing ID: ";
        $user_listing_id = fgets(STDIN);
        echo "Enter listing region: ";
        $user_listing_region = fgets(STDIN);
        $chosen_region;
        foreach ($regions as $region) {
            if ($region->getId() != $user_listing_region) {
                echo "Listing does not exist";
            } else {
               
                $chosen_region = $region;
            }
        }

        echo "Enter  postcode: ";
        $user_postcode = fgets(STDIN);

        echo "Enter number of bedrooms: ";
        $user_bedrooms = fgets(STDIN);
        echo "Enter number of bathrooms: ";
        $user_bathrooms = fgets(STDIN);
        echo "Enter type: ";
        $user_listing_type = fgets(STDIN);
        $chosen_type;
        foreach ($types as $type) {
            if ($type->getId() != $user_listing_type) {
                echo "Type does not exist";
            } else {
                $chosen_type = $type;
            }
        }

        echo "Does it have a garden?: ";
        $user_garden = fgets(STDIN);
        echo "Does it have a parking: ";
        $user_parking = fgets(STDIN);
        echo "Has it been sold: ";
        $user_sold = fgets(STDIN);
        echo "Enter asking price?: ";
        $user_asking_price = fgets(STDIN);


        $listing = new \Agency\Listing(intval($user_listing_id), $chosen_region, $user_postcode, intval($user_bedrooms), intval($user_bathrooms), $chosen_type, $user_garden, $user_parking, $user_sold, intval($user_asking_price));
        $listings[] = $listing; // push on or more elements onto the end of array
        echo "inserted";
    } elseif ($user_input == 10) {
        echo "Showing listings \n";
        if (empty($listings)) {
            echo 'No listings added yet.';
        } else {
            foreach ($listings as $listing) {
                echo $listing->getId() . ' ' . $listing->getRegion() . ' ' . $listing->getPostcode() . ' ' . $listing->getBedrooms() . ' ' . $listing->getBthrooms() . ' ' . $listing->getType() . ' ' . $listing->getGarden() . ' ' . $listing->getParking() . ' ' . $listing->getSoldStatus() . ' ' . $listing->getAskingPrice();
            }
        }
    } else if ($user_input == 11) {
        echo "Adding a new Sale \n";
        echo "Enter Sale ID: ";
        $user_sale_id = fgets(STDIN);
        echo "Enter Sale date: ";
        $user_sale_date = fgets(STDIN);
        echo "Choose Sale agent by ID: ";
        $user_sale_agent_id = fgets(STDIN);

        foreach ($agents as $agent) {
            if ($agent->getId() != $user_sale_agent_id) {
                echo "Agent does not exist";
            } else {
                $chosen_agent = $agent;
            }
        }
        echo "Choose Customer by ID: ";
        $user_sale_customer_id = fgets(STDIN);
        foreach ($customers as $customer) {
            if ($customer->getId() != $user_sale_agent_id) {
                echo "Agent does not exist";
            } else {
                $chosen_customer = $customer;
            }
        }

        echo "Enter Sale listing: ";
        $user_sale_listing = fgets(STDIN);
        foreach ($listings as $listing) {
            if ($listing->getId() != $user_sale_listing) {
                echo "Listing does not exist";
            } else {
                $chosen_listing = $listing;
            }
        }
        echo "Enter Sale price: ";
        $user_sale_price = fgets(STDIN);
        $sale = new \Agency\Sale(intval($user_sale_id), $user_sale_date, $chosen_agent, $chosen_customer, $chosen_listing, intval($user_sale_price));
        $sales[] = $sale; // push on or more elements onto the end of array
        echo "inserted";
    } elseif ($user_input == 12) {
        echo "Showing Sales \n";
        if (empty($sales)) {
            echo 'No Sales added yet.';
        } else {
            foreach ($sales as $sale) {
                echo $sale->getId() . ' ' . $sale->getDate() . ' ' . $sale->getAgent() . ' ' . $sale->getCustomer() . ' ' . $sale->getListing() . ' ' . $sale->getPrice();
            }
        }
    }

} while ($user_input != 13);
