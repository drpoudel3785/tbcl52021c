<?php
//date Functions
//format accepted can be get from the https://www.php.net/manual/en/datetime.format.php
$day = date('l'); //It will return Sunday to Saturday
$cdatetime = date('Y/m/d h:i:s A');
echo $cdatetime. "<br>";

//For timezone id get from https://www.php.net/manual/en/timezones.php
date_default_timezone_set('Asia/Kathmandu');
$cdatetime = date('Y/m/d h:i:s a');
echo $cdatetime. "<br>";

date_default_timezone_set('Asia/Dubai');
echo  "Current date and time in Dubai is" .date('Y/m/d h:i:s a'). "<br/>";


echo $cdatetime. "<br>";
switch($day)
{
    case 'Friday':
        { 
            echo "Oho Its firday. We are in relax mode";
            break;
        }
        case 'Saturday':
            {
                echo "Its Holiday";
                break;
            }
        case 'Sunday':
                {
                    echo "Its Holiday";
                    break;
                }
        default:
        {
            echo "Its college days";
        }
}

//switch functions


//YOu can get the day and month by using date('d') and date('m')
//get the data
//if month is 12 and date between 22 to 25 say Merry Christmas
//otherwise if month is 12 date is between 10-21 say Christam is comming
// otherwise if month is 12 and date is greater than 26 to 31 say Christma OVer Happy new year
//otherwise say christmas will comming soon.

//string functions
/*
strlen() //the length of the string
str_word_count() //Counting number of words in string
strrev() //Reverse of the string
md5() //md5 encryption
sha1() //sha1 encryption
ucfirst() // Upper case for first letter
ucwords() // Initial letter capatilize for every words
strtolower() // Lowercase for  strings
strtoupper() // Uppercase for string
trim() // space remove from first and last of the string
substr Return part of a string
*/
echo "<br/>";

$story ="     Today is nepal banda due to that we are unable to take our class at college premises     ";

echo strlen($story) ."<br/>";
echo str_word_count($story) ."<br/>";
echo strrev($story) ."<br/>";
echo md5($story) ."<br/>";
echo sha1($story) ."<br/>";
echo ucwords($story) ."<br/>";
echo strtolower($story) ."<br/>";
echo strtoupper($story) ."<br/>";
echo trim($story) ."<br/>";

$mystory = substr($story, -20);
echo $mystory . "<br/>";

//user defined Functions


?>