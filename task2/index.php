<?php
if($_SERVER["REQUEST_METHOD"] === "POST")
{
    if(isset($_POST["submit"]))
    {
        $_POST["email"];
        echo "<br>";
        $_POST["password"];

    }
}


if(isset($_POST["sub"]))
{
    $firstNumber = $_POST["n1"];
    $secondNumber = $_POST["n2"];
    $operand = $_POST["sub"];
    if($operand == "+")
    {
         $ans = $firstNumber + $secondNumber;
         $_POST["result"] = $ans;
         echo $_POST["result"]; 
    }elseif($operand == "-")
    {
         $ans = $firstNumber - $secondNumber;
         $_POST["result"] = $ans;
    }elseif($operand == "*")
    {
         $ans = $firstNumber * $secondNumber;
         $_POST["result"] = $ans;
    }else{
         $ans = $firstNumber / $secondNumber;
         $_POST["result"] = $ans;
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        #result{
            background-color:#666;
            color:white;

        }
    </style>
</head>
<body>
<center>
<div>
    <h1>Adding your information</h1>
<form action="#" method="post">
    <div class="input-group w-25 mb-2">
        <input type="email" name="email" placeholder="Email" class="form-control">
    </div>
    <div class="input-group w-25 mb-2">
        <input type="password" name="password" placeholder="Password" class="form-control">
    </div>
    <div class="input-group w-25">
        <input type="submit" name="submit" value="Submit" class="btn btn-danger">
    </div>
</form>
</div>

<div id="result">
<?php
echo $_POST["email"] ?? "";
echo "<br>";
echo $_POST["password"] ?? "";

?>
</div>
</center>

<center class="mt-5">
    <div class="calcaulater">
        <h2>calcaulater</h2>
        <form action="#" method="post">
        <div class="input-group w-25 mb-2">
            <input type="number" name="n1" placeholder="First Number" class="form-control w-25 mb-2">
        </div>
        <div class="input-group w-25 mb-2">
            <input type="number" name="n2" placeholder="Second Number" class="form-control w-25 mb-2">
        </div>
        <div class="input-group w-25 mb-2">
            <input type="submit" name="sub" value="+" class="btn btn-primary ms-2 me-2">
            <input type="submit" name="sub" value="-" class="btn btn-danger  ms-2 me-2">
            <input type="submit" name="sub" value="*" class="btn btn-success ms-2 me-2">
            <input type="submit" name="sub" value="/" class="btn btn-warning ms-2 me-2">
        </div>
        <div class="result">
        <input type="text" name="result" class="form-control w-25 mb-2" value="<?php echo $_POST["result"] ?? " "?>">
        </div>
        </form>
    </div>
</center>
    
</body>
</html>


