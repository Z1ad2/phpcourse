<?php
    
    $number1 = $_GET["number1"];
    $number2 = $_GET["number2"];
    $op = $_GET["op"];

    /*shortcut
    you can also say 
    if(!empty($number1) && 1empty($number2)  && !empty($op)){
          if($op === "+"){
            $result = $_GET["number1"] + $_GET["number2"];
        }elseif ($op === "-"){
            $result = $_GET["number1"] - $_GET["number2"];
        }elseif($op === "*"){
            $result = $_GET["number1"] * $_GET["number2"];
        }elseif($op === "/"){
            $result = $_GET["number1"] / $_GET["number2"];
        }else{
            $result = "Invalid opreation";
        }
    }
    */

    /*if functions
    if(empty($number1)){
        $result = "Number1 is empty";
    }elseif ( empty($number2)){
        $result = "Number2 is empty";
    }elseif(empty($op)){
        $result = "Enter the desired operation";
    }else{
        if($op === "+"){
            $result = $_GET["number1"] + $_GET["number2"];
        }elseif ($op === "-"){
            $result = $_GET["number1"] - $_GET["number2"];
        }elseif($op === "*"){
            $result = $_GET["number1"] * $_GET["number2"];
        }elseif($op === "/"){
            $result = $_GET["number1"] / $_GET["number2"];
        }else{
            $result = "Invalid opreation";
        }
    }
    */
    
    function add($num1 , $num2){
        return ($num1 + $num2);
    };
    function sub($num1 , $num2){
        return ($num1 - $num2);
    };
    function mul($num1 , $num2){
        return ($num1 * $num2);
    };
    function div($num1 , $num2){
        return ($num1 / $num2);
    };

    if(empty($number1)){
        $result = "Number1 is empty";
    }elseif ( empty($number2)){
        $result = "Number2 is empty";
    }elseif(empty($op)){
        $result = "Enter the desired operation";
    }else{

        if($op === "+"){
            $result = add($_GET["number1"], $_GET["number2"]);
        }elseif ($op === "-"){
            $result = sub($_GET["number1"], $_GET["number2"]);
        }elseif($op === "*"){
            $result = mul($_GET["number1"] , $_GET["number2"]);
        }elseif($op === "/"){
            $result = div($_GET["number1"] , $_GET["number2"]);
        }else{
            $result = "Invalid opreation";
        }
    }

?>


<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class = "container">
        <form action="calc.php" method = "GET" class = "form">
            <div>
                <label >Enter Number1:</label>
                <input type="number" id="num1" name = "number1" class = "form-control">

            </div>

            <div>
                <label >Enter Number2:</label>
                <input type="number" id="num2" name = "number2" class = "form-control">

            </div>
            <br>
            <div>
                <label>Opreation:</label>
                <input type="text" name="op" id="form-control">
            </div>
            <br>
            <div class = "alert alert-success">
                <?php  echo $result;?>
            </div>
            <br>
            <input type="submit" class = "btn btn-primary">

        </form>    

    </div>
</body>