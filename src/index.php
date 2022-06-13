<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CONVERTER</title>
    <style>
.button {
    padding: 15px 25px;
    font-size: 24px;
    text-align: center;
    cursor: pointer;
    outline: none;
    color: #fff;
    background-color: blue;
    border: none;
    border-radius: 15px;
 }
.button:active {
  background-color: whitesmoke;
  /* transform: translateY(4px); */
}

span{
    font-size: medium;
}
#btn{
    top: 40px;
    margin-left: 80px;
}
    </style>
</head>
<body>
    <div class="main">
        <form action="" method="POST">
        <span>Text Area</span> <textarea name="input" id="users" value="<?php $conversion ? $conversion : '';?>" rows="3"></textarea>
          <div id="btn">
              <input type="submit" class="button" onclick="myfunction()" value="UpperCase" name="upper">
    
              <input type="submit" class="button" onclick="myfunction()"  value="LowerCase" name="lower">

          </div>

        </form>
    </div>

    <?php   
$conversion = $_POST['input'];
// print_r($conversion);
  echo '<div class="summery" name="output">
  <h1>Summary</h1>
</div>';
    if (isset($_POST['upper'])) {
        echo strtoupper("this is upper case :"." ".$conversion);
        $conversion = strtoupper($conversion);
    } else {
        echo strtolower("this is lower case :"." ".$conversion);
        $conversion = strtolower($conversion);  
    }
    echo "<br>";
    echo "number of words is :";
    echo str_word_count($conversion);

    echo "<br>";    
    echo "<br>";
    echo "number of characters is :";
    echo strlen($conversion);
    echo "<br>";
?>
      <script>
        var x = '<?php echo $conversion ?>';
        console.log(x);
        document.getElementById("users").innerHTML= x;
    </script>;

</body>
</html>
    
