<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keyword" content="Pubg Tournament, pubgmobileadda, pubgadda, addapubg, pubgmobile, mobileadda, pubg mobile adda, pubg, pubg mobile, tournament">
	<meta name="description" content="Pubg Tournament">
    <title>Transaction Status</title>
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
            <div class="container-3">
            <?php
                header("Pragma: no-cache");
                header("Cache-Control: no-cache");
                header("Expires: 0");

                // following files need to be included
                require_once("./lib/config_paytm.php");
                require_once("./lib/encdec_paytm.php");

                $paytmChecksum = "";
                $paramList = array();
                $isValidChecksum = "FALSE";

                $paramList = $_POST;
                $paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

                //Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
                $isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


                if($isValidChecksum == "TRUE") {
                    if ($_POST["STATUS"] == "TXN_SUCCESS") {
                        echo "<b>Transaction successful</b>" . "<br/>";
                        //Process your transaction here as success transaction.
                        //Verify amount & order id received from Payment gateway with your application's order id and amount.
                    }
                    else {
                        echo "<b>Transaction failure</b>" . "<br/>";
                    }

                    if (isset($_POST) && count($_POST)>0 )
                    { 
                        foreach($_POST as $paramName => $paramValue) {
                                echo "<br/> Your Order ID is " . $paramValue;
                                break;
                        }
                    }
                    echo "Thank You for Registering at PUBGMobileADDA. We will contact you soon"
                }
                else {
                    echo "<b>Checksum mismatched.</b>";
                    //Process transaction as suspicious.
                }

                ?>
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