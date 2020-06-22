<?php  
    session_start();

    $phone = "";
    
    $host = "localhost";
    $user = "id9911770_virusx";
    $pass = "TSEWrtwHdIW";
    $db = "id9911770_registration";
    $table = "squads_01";
	
    $db = mysqli_connect($host, $user, $pass, $db) or die("could not connect to server");

    if(isset($_POST['register']))
    {
        $team = mysqli_real_escape_string($db, $_POST['team']);
        $leader = mysqli_real_escape_string($db, $_POST['leader']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        $member1 = mysqli_real_escape_string($db, $_POST['member1']);
        $member2 = mysqli_real_escape_string($db, $_POST['member2']);
        $member3 = mysqli_real_escape_string($db, $_POST['member3']);
        
        $query = "INSERT INTO $table (`team_name`, `team_leader`, `phone`, `member1`, `member2`, `member3`) 
                                VALUES ('$team', '$leader', $phone, '$member1', '$member2', '$member3')";
        $db->query($query);
           
		$_SESSION['confirm'] = "Confirm Registration";
		$_SESSION['team'] = $team;
		$_SESSION['leader'] = $leader;
        $_SESSION['phone'] = $phone;
		$_SESSION['member1'] = $member1;
		$_SESSION['member2'] = $member2;
		$_SESSION['member3'] = $member3;	
		$_SESSION['date'] = "Squad event on 29th June, 2019";
        $_SESSION['amt'] = "50.00";

        header("location:proceed.php"); 
    }
?>