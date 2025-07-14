<?php

while (true) {
    echo "\n====== QUIZ MENU ======\n";
    echo "1. Start Quiz\n";
    echo "2. Exit\n";
    echo "Enter your choice (1 or 2): ";

    $choice = trim(fgets(STDIN));

    if ($choice == "1") {
        echo "\nWelcome to the PHP Terminal Quiz!\n";
        echo "Enter your name: ";
        $name = trim(fgets(STDIN));

        $score = 0;

        // Question 1
        echo "\nQ1. What is the capital of Bangladesh? ";
        $answer1 = trim(fgets(STDIN));
        if (strtolower($answer1) == "dhaka") {
            echo " Correct!\n";
            $score = $score + 1;
        } else {
            echo " Wrong. Correct answer is: Dhaka\n";
        }

        // Question 2
        echo "\nQ2. What is 7 + 5? ";
        $answer2 = trim(fgets(STDIN));
        if ($answer2 == "12") {
            echo "Correct!\n";
            $score = $score + 1;
        } else {
            echo " Wrong. Correct answer is: 12\n";
        }

        // Question 3
        echo "\nQ3. Which language is this quiz written in? ";
        $answer3 = trim(fgets(STDIN));
        if (strtolower($answer3) == "php") {
            echo " Correct!\n";
            $score = $score + 1;
        } else {
            echo " Wrong. Correct answer is: PHP\n";
        }

        // Result
        echo "\n====== QUIZ COMPLETED ======\n";
        echo "👤 Name: $name\n";
        echo " Your Score: $score out of 3\n";

        if ($score == 3) {
            echo " Excellent!\n";
        } elseif ($score == 2) {
            echo " Good job!\n";
        } else {
            echo "📘 Try again to improve.\n";
        }
    } elseif ($choice == "2") {
        echo " Exiting the quiz. Goodbye!\n";
        break;
    } else {
        echo " Invalid option. Please choose 1 or 2.\n";
    }
}
