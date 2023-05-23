<!DOCTYPE html>  
<html> 
<header>
        <title>PHP Exercise 2</title>
</header>
<body>

<h2>PHP Functions Number 1</h2>
<?php

function checkIfVowelOrConsonant($char){
    $result = "consonants";
    $char = strtolower($char);
    if($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u'){
        $result = "vowel";
    }

    return $char. ' is a '.$result;
}

echo checkIfVowelOrConsonant('a').'<br/>';
echo checkIfVowelOrConsonant('b').'<br/>';
echo checkIfVowelOrConsonant('C').'<br/>';
echo checkIfVowelOrConsonant('D').'<br/>';
echo checkIfVowelOrConsonant('E').'<br/>';

?>

<h2>PHP Functions Number 2</h2>
<?php

function convertDigitToWord($value){
    $numberWord = [
        '0'=>'Zero',
        '1'=>'One',
        '2'=>'Two',
        '3'=>'Three',
        '4'=>'Four',
        '5'=>'Five',
        '6'=>'Six',
        '7'=>'Seven',
        '8'=>'Eight',
        '9'=>'Nine',
    
    ];

    $valueArr = str_split($value);

    $result = '';
    foreach($valueArr as $number){
        $result .= $numberWord[$number].'';
    }

    return $result;
}
    echo convertDigitToWord(721). '<br/>';

?>

<h2>PHP Functions Number 3</h2>
<?php

function isDivisibleByThree($value){
    return $value % 3 === 0 ? $value. 'is divisible by 3' : $value. 'is not divisible by 3';
}

    echo isDivisibleByThree(8). '<br/>';
    echo isDivisibleByThree(3). '<br/>';
    echo isDivisibleByThree(15). '<br/>';
    echo isDivisibleByThree(22). '<br/>';

?>

<h2>PHP Functions Number 4</h2>
<?php
        function deleteDuplicate($list){
            //return array_unique($list);
        
            $newlist = [];
            $prevValue = null;
            foreach($list as $value){
                if($prevValue != $value){
                    array_push($newlist, $value);
                    $prevValue = $value;
                }
            }
        
            return $newlist;
        }
        
        echo implode(',', deleteDuplicate(['one','one','two', 'three', 'four', 'four','five','six','six'])).'<br/>';
?>

<h2>PHP Functions Number 5</h2>
<?php

function isArmstrongNumber($number){

    $digits = str_split($number);
    $sum = 0;
    foreach($digits as $value){
        $sum += $value ** count($digits);
    } 

    if($sum == $number){
        return $number .' is an Armstrong Number';
    }else{
        return $number .' is not an Armstrong Number';
    }
}
            echo isArmstrongNumber(153). '<br/>';

            echo isArmstrongNumber(19). '<br/>';

            echo isArmstrongNumber(27). '<br/>';

            echo isArmstrongNumber(1996). '<br/>';

            echo isArmstrongNumber(787). '<br/>';
 ?>
</body>
</html>