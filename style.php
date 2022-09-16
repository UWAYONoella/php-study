<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>study</title>
</head>
<body>
    <?php
    // $food=array("potato","banana","rice","matoke");

    // echo var_dump($food[0])
    define("food","banana,matoke,potatoes");
    echo food;
    //conditions

$var=5;
if($var>7){
   echo" <br>";
    echo $var+1;
}else{
    echo" <br>";
    echo $var-1;
}
//switch statment
$floor=3;
switch($floor){
    case 1:
        echo"You are at ground floor";
        break;
        case 2:
            echo"You are at first floor";
            break;
            case 3:
                echo"You are at second floor";
                break;
                default:
                echo"the floor is not exist";
}
#whle
$var=0;
while($var<=20){
    echo "number: $var<br>";
    $var++;
}
$var=21;
do{
    echo "number: $var<br>";
    $var++;
}
while($var<=20);
#for loop
for($var=1;$var<=7;$var++){
    echo"number:$var<br>";
}
    ?>
    
</body>
</html>