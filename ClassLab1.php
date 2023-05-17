<?php
// Task 01 

// LAB 1.1 : Write a program to count 5 to 15 using PHP loop.

// $count = 5;

// while($count<=15)
// {
// echo ($count."  ");
// // $count++; 
// // OR
// // $count+=1;
// // OR
// $count = $count+1;


// }

// Task 02

//LAB 1.2 :Write a program to print two variables in single echo.

// $message_1 = "Hey Every One .";
// $message_2 = "Whta's going On in PHP ~~@~~!";
// echo ("<b>".$message_1." ".$message_2."</b>");

// Task 03

//LAB 1.3: Write a program to check student grade based on marks.


// Input section
// get users name

// $marks = 80;
// $percentage = ($marks/100*100);

// if($marks >100){
// 	$grade = "You Have Entered An Incorrect Value Please Insert Correct!.";
// }
// elseif($marks>=80){
// 	$grade="First Division";
//     $percentage;
// }
// elseif($marks>=70)
// {
// 	$grade="Second Division";
//     $percentage;
// }
// elseif($marks>=50)
// {
// 	$grade="Third Division";
//     $percentage;
// }
// elseif($marks < 50 && $marks >0)
// {
// 	$grade="Fail";
//     $percentage;
// }
// else
// {
// 	$grade="You Have Entered an Incorrect Value !";
// }

// echo("<b>Student grade: ".$grade."<br/>"."Student Marks: " .$percentage."%</b>");


// Task 04

//LAB 1.4 :Write a program to show day of the week using switch.

// $day="5";	

// switch($day){
//     	case"1":
//         	echo" <b>ToDay is Monday! Happy Week<b/>";
//         	break;

//         case"2":
//         	echo"<b>ToDay is Tuesday! Happy Scecond day of Week<b/>";
//         	break;
//         case"3":
// 	        echo"<b>ToDay is Wednesday! Happy Third day of Week<b/>";
// 	        break;
// 		case"4":
// 	       echo"<b>ToDay is Thursday! Happy Fourth day of Week<b/>";
// 	       break;
// 	    case"5":
//         	echo"<b>ToDay is Friday! Happy Half Day & JuMMa MuBaRaK<b/>";
//          	break;
//         	case"6":
//         echo"<b>ToDay is Saturday! Happy Weekend <b/>";
//         	break;
//         	case"7":
//         	echo"<b>ToDay is Sunday! Happy Weekend<b/>";
//         	break;
//         default:
//         	echo"<b>Invalid number! Please Insert a Valid Number I Will Ask You Day of WeeK!!!<b/>";
// }
        


// Task 05

//LAB 1.5 :Factorial program in PHP using recursive function.

function factorial($number){

if($number<2){
    return 1;
}
else
{
return($number*factorial($number-1));
}
}
echo factorial(7);
    


?>


