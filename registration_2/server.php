<?php  
    session_start();

    $phone = "";
    
    $host = "localhost";
    $user = "id9911770_virusx"; 
    $pass = "TSEWrtwHdIW";
    $db = "id9911770_registration";
    $table = "solo_01";
	
    $db = mysqli_connect($host, $user, $pass, $db) or die("could not connect to server");

    if(isset($_POST['register']))
    {
        $player = mysqli_real_escape_string($db, $_POST['player']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        
        $query = "INSERT INTO $table (`player`, `phone`) 
                                VALUES ('$player', '$phone')";
        $db->query($query);
           
		$_SESSION['confirm'] = "Confirm Registration";
		$_SESSION['player'] = $player;
        $_SESSION['phone'] = $phone;	
		$_SESSION['date'] = "Solo Event on 30th June";
        $_SESSION['amt'] = "20.00";

        header("location:proceed.php"); 
    }
?>