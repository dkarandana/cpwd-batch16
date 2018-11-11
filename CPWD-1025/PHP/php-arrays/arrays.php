<?php

    //$test = array("Hello"=>"World","FName"=>"Dhananjaya");


    $arrayKeyCast = [
        "Hello"=>"Dolly",
        "23"=>"23 String",
        true => "TRUE",
        34.45 => "Fractional 34.45",
        54 => "Integer 54"
    ];

    $languages = [];

    $languages[] = "HTML";
    $languages[] = "HTML";
    $languages[] = "JS";

    $languages['frontend'] = "JS";
    $languages[6] = "Node JS";
    $languages[] = "MONGO DB";

    $languages[3] = "C++";

    $languages[0] = "Pascal";

    //$languageOptions = "";
    settype($languageOptions, "string");

    foreach( $languages as $lang ){
       // $languageOptions = $languageOptions . "<option>$lang</option>";
        $languageOptions .= "<option>$lang</option>";
    }

    echo "<select>$languageOptions</select>";
    /* echo <<<EOD
    <select>
        $languageOptions
    </select>
EOD;
*/











    /* Size of the array */
   // echo count( $languages );

   echo "<select>";
   foreach( $languages as $lang ){
       
    echo <<<OPTION
    "<option>$lang</option>"
OPTION;

   }
   echo "</select>";
?>

<select>
<?php foreach( $languages as $lang ):?>
    <option><?=$lang;?></option>
<?php endforeach ?>
