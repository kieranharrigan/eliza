<html>
<head>
<script type="text/javascript" src="eliza.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="eliza.css">
</head>

<body>
<form method="POST" autocomplete="off">
Name: <input type="text" name="name" autofocus> 
<input type="submit" value="submit">
</form>

<?php
date_default_timezone_set('America/New_York');

if(isset($_POST['name'])) {
        $name = $_POST['name'];
        $date = date('n/j/Y');
        echo 'Hello ' . $name . ', ' . $date . '<br>';
        $response = array('human' => '');
        $json = json_encode($response);

        echo "<br><script>startDoc('$json');</script>";
}
?>

<div id="chat"></div>
<div id="type"></div>

</body>
</html>
