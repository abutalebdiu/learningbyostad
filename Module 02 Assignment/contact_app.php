<?php

$contact1_name = "";
$contact1_phone = "";
$contact1_email = "";

$contact2_name = "";
$contact2_phone = "";
$contact2_email = "";

$contact3_name = "";
$contact3_phone = "";
$contact3_email = "";


$contactCount = 0;


while (true) {
    echo "\n====== CONTACT MENU ======\n";
    echo "1. Add Contact\n";
    echo "2. View Contacts\n";
    echo "3. Exit\n";
    echo "Choose an option (1-3): ";

    $choice = trim(fgets(STDIN));

    if ($choice == "1") {
        if ($contactCount >= 3) {
            echo " Contact list full. Max 3 contacts allowed.\n";
        } else {
            echo "\nEnter Contact Name: ";
            $name = trim(fgets(STDIN));

            echo "Enter Contact Phone: ";
            $phone = trim(fgets(STDIN));

            echo "Enter Contact Email: ";
            $email = trim(fgets(STDIN));

            if ($contactCount == 0) {
                $contact1_name = $name;
                $contact1_phone = $phone;
                $contact1_email = $email;
            } elseif ($contactCount == 1) {
                $contact2_name = $name;
                $contact2_phone = $phone;
                $contact2_email = $email;
            } elseif ($contactCount == 2) {
                $contact3_name = $name;
                $contact3_phone = $phone;
                $contact3_email = $email;
            }

            $contactCount = $contactCount + 1;
            echo " Contact added successfully!\n";
        }

    } elseif ($choice == "2") {
        echo "\n====== CONTACT LIST ======\n";
        if ($contactCount == 0) {
            echo "No contacts found.\n";
        } else {
            if ($contact1_name != "") {
                echo "1. Name: $contact1_name | Phone: $contact1_phone | Email: $contact1_email\n";
            }
            if ($contact2_name != "") {
                echo "2. Name: $contact2_name | Phone: $contact2_phone | Email: $contact2_email\n";
            }
            if ($contact3_name != "") {
                echo "3. Name: $contact3_name | Phone: $contact3_phone | Email: $contact3_email\n";
            }
        }

    } elseif ($choice == "3") {
        echo "Exiting... Goodbye!\n";
        break;

    } else {
        echo " Invalid option. Please enter 1, 2 or 3.\n";
    }
}
