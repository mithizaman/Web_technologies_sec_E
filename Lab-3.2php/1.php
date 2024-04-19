<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["name"])) {
        $name = $_POST["name"];

        echo "Hello, $name!";
    }
    else {
        echo "Please enter a name!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .field {
            width:300px;
        }
    </style>
</head>
<body>
    <form method='post'>
        <div class="field">
            <fieldset> 
                <legend>NAME<br></legend>
                <input type="text">
                <hr>
                <button>Submit</button><br><br>
            </fieldset><br>
        </div>

    </form>
</body>
</html>

