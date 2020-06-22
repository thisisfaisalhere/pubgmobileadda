<?php 
	session_start();
	if(isset($_SESSION['username']))
	{
		$_SESSION['msg']="Register first";
	}
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keyword" content="Pubg Tournament, pubgmobileadda, pubgadda, addapubg, pubgmobile, mobileadda, pubg mobile adda, pubg, pubg mobile, tournament">
	<meta name="description" content="Pubg Tournament">
    <title>Confirm Registeration</title>
    <link href="../img/icon.jpg" rel="icon" type="image/jpg">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cd77ba3fbf.js"></script>
    <link rel="stylesheet" href="../css/styles_shared.css">
    <link rel="stylesheet" href="../css/styles_register.css">
</head>
<body>
    <div class="backdrop"></div>
    <header class="main-header">
        <div class="main-header__left">
            <div class="hamburger"><i class="fas fa-bars"></i></div> 
                <div class="main-header__brandlogo">
                    <a href="../index.php">PUBGMobile<span class="main-header__brandlogo-highlight">ADDA</span></a>
                </div> 
        </div>
            <nav class="main-nav">
                <ul class="main-nav__items">
                    <li class="main-nav__item"><a href="../index.php#showcase">Home</a></li>
                    <li class="main-nav__item"><a href="../index.php#events">Events</a></li>
                    <li class="main-nav__item"><a href="../index.php#results">Results</a></li>
                    <li class="main-nav__item"><a href="../index.php#team">Our Team</a></li>
                    <li class="main-nav__item"><a href="../contact.php">Contact</a></li>
                </ul>
            </nav>    
    </header>
        <nav class="mobile-nav">
            <ul class="mobile-nav__items">
                <li class="mobile-nav__item"><a href="../index.php#showcase">Home</a></li>
                <li class="mobile-nav__item"><a href="../index.php#events">Events</a></li>
                <li class="mobile-nav__item"><a href="../index.php#results">Results</a></li>
                <li class="mobile-nav__item"><a href="../index.php#team">Our Team</a></li>
                <li class="mobile-nav__item"><a href="../contact.php">Contact</a></li>
			</ul>
			<div class="salutation">PUBGMobileADDA</div>
        </nav>
    <main>
        <section>
            <div class="container-2">
				<?php if(isset($_SESSION['confirm'])) : ?>
					<h2>
					<?php
					echo $_SESSION['confirm'];
					unset($_SESSION['confirm']);
					?>
					</h2>
					<table>
						<tr>
							<td>Registerating for:</td>
							<td><?php echo $_SESSION['date']; ?></td>
						</tr>
						<tr>
							<td>Name:</td>
							<td><?php echo $_SESSION['player']; ?></td>
						</tr>
						<tr>
							<td>Contact No:</td>
							<td><?php echo $_SESSION['phone']; ?></td>
						</tr>
						<tr>
							<td>Amount:</td>
							<td><?php echo "Rs " . $_SESSION['amt']; ?></td>
						</tr>
					</table>
					<form method="post" action="pgRedirect.php">
						<input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
							name="ORDER_ID" autocomplete="off"
							value="<?php echo  "ADDA" . rand(10000,99999999);?>">
						<input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" 
							name="CUST_ID" autocomplete="off" 
							value=<?php echo $_SESSION['player']; ?> ></td>
						<input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" 
							name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
						<input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"
							size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
						<input type="hidden" title="TXN_AMOUNT" tabindex="10"
							type="text" name="TXN_AMOUNT"
							value= <?php echo $_SESSION['amt'];?> >
						<input class="button" value="Check Out" type="submit" onclick=""></td>
					</form>
				<?php endif ?>
			</div>
		</section>
	</main>
	<footer class="main-footer">
        <ul class="main-footer__items">
            <li class="main-footer__item">Follow us on:</li>
            <li class="main-footer__item btn"><a href="https://www.facebook.com/iftesar/"><i class="fab fa-facebook-f"></i></a></li>
            <li class="main-footer__item btn"><a href="https://www.instagram.com/pubgmobileadda/"><i class="fab fa-instagram"></i></a></li>
            <li class="main-footer__item btn"><a href="https://www.youtube.com/channel/UCAfFySUSWtFonvE-NR5U6Xw"><i class="fab fa-youtube"></i></a></li>
        </ul>
        <p>PUBGMobileADDA Team &copy <?php echo date('Y'); ?></p>
    </footer>
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
	<script src="../js/shared.js"></script>
	</body>
</html>