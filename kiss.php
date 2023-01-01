<?php

// KISS - KISS – keep it short simple – делайте вещи проще

// Keep It Short and Simple


// Example

// First example
function week($day){
    switch($day){
        case 1:
            return "Monday";

            break;
        case 2:
            return "Thursday";

            break;
        case 3:
            return "Wednesday";

            break;
        default :
            throw new Exception('Error');
    }
};
// Second example

function week2($day){
    if($day < 1 || $day > 7){
        throw new Exception("Error");
    };

    $days = [
        "Monday",
        "Thursday",
        "Wednesday",
    ];

    return $days[$day- 1];
};

// The functions which given in examples do same things but ... (Read second paragraph ⏬ )

// You can see two functions which return days in the wee but the second function is written by principe by KISS beaus this function is short and simple 

// ========================================================================================================================================