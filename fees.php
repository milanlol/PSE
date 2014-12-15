<?php 
/* Short and sweet */
define('WP_USE_THEMES', false);
require('blog/wp-blog-header.php');
?>

<?php
require('blog/wp-blog-header.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="robots" content="noindex"


   	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>PSE Credit Union - Fees</title>

    <link href="assets/css/hover_pack.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for -->
    <link href="assets/css/main.css" rel="stylesheet">
    
    <link href="assets/css/animations.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    


    <!-- Main Jquery & Hover Effects. Should load first -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover_pack.js"></script>

    <!-- fotorama.css & fotorama.js. -->
    <link  href="http://fotorama.s3.amazonaws.com/4.6.2/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
    <script src="http://fotorama.s3.amazonaws.com/4.6.2/fotorama.js"></script> <!-- 16 KB -->
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
<body>
    <?php include 'mainHeader.php' ?>




<div class="container rates">

    <div class="mini-nav">
        <ul class="nav nav-pills nav-justified">
            <li><a href="#CA-rates">Share Account Fees</a></li>
            <li><a href="#SA-rates">Checking Account Fees</a></li>
            <li><a href="#CC-rates">Other Service Fees</a></li>
            <li><a href="#IRA-rates">Electronic Funds Transfer Fee</a></li>
            <li><a href="#ChA-rates">Loan Fees</a></li>
            <li><a href="#VISA-rates">Safe Deposit Box Fees</a></li>
            <li><a href="#LOAN-rates">Credit Union Membership</a></li>
        </ul>
    </div>
    
    <div id="CA-rates">
        <p class="disclaimer">
            Effective as of October 15, 2014
        </p>
        <h4>Share Account Fees  <a href="#top"><i class="fa fa-level-up"></i></a></h4> 
        <table class="table table-striped t50">
            <tr>
                <td>IRA Annual Maintenance Fee</td>
                <td>$16.00 per IRA type</td>
            </tr>
            <tr>
                <td>IRA Transfer Fee (Outgoing)</td>
                <td>$10.00 per transfer</td>
            </tr>
        </table>
    </div>

    <div id="SA-rates">
        <table class="table table-striped t50">
            <h4>Checking Account Fees <a href="#top"><i class="fa fa-level-up"></i></a></h4> 
            <tr>
                <td>Non-Suffiecient Funds (NSF) Fees</td>
                <td>$32.00 per item</td>
            </tr>
            <tr>
                <td>Stop Payment Fee</td>
                <td>$30.00 per request</td>
            </tr>
            <tr>
                <td>Check Printing Fee</td>
                <td>Prices vary due to style</td>
            </tr>
            <tr>
                <td>Microfilm Check Copy Fee</td>
                <td>$2.00 per item</td>
            </tr>
            <tr>
                <td>Overdraft Advance Fee</td>
                <td>$32.00 per item</td>
            </tr>
        </table>
    </div>

    <div id="CC-rates">
        <table class="table table-striped t50">
            <h4>Other Service Fees (applicable to all accounts) <a href="#top"><i class="fa fa-level-up"></i></a></h4>
            
            <tr>
                <td>Account Reconciliation Fee</td>
                <td>$30.00 per hour</td>
            </tr>
            <tr>
                <td>Account History Print</td>
                <td>$1.25 per page</td>
            </tr>
            <tr>
                <td>Account Research Fee</td>
                <td>$30.00 per hour</td>
            </tr>
            <tr>
                <td>Statement Copy Fee</td>
                <td>$10.00 per copy</td>
            </tr>
            <tr>
                <td>Deposit Item Return Fee</td>
                <td>$25.00 per item</td>
            </tr>
            <tr>
                <td>Closed Account Processing Fee</td>
                <td>$5.00 (180 days of opening)</td>
            </tr>
            <tr>
                <td>Close Account Processing Fee</td>
                <td>$5.00 (90 days of re-opening)</td>
            </tr>
            <tr>
                <td>Reinstatement Processing Fee</td>
                <td>$10.00 (180 days of closing)</td>
            </tr>
            <tr>
                <td>Wire Transfer (outgoing) Fee</td>
                <td>$20.00 per transfer</td>
            </tr>
            <tr>
                <td>Wire Transfer (incoming) Fee</td>
                <td>$10.00 per transfer</td>
            </tr>
            <tr>
                <td>International Wire Incoming</td>
                <td>$20.00 per wire</td>
            </tr>
            <tr>
                <td>International Wire Outgoing</td>
                <td>$45.00 per wire</td>
            </tr>
            <tr>
                <td>Money Order Fee</td>
                <td>$2.00 per money order</td>
            </tr>
            <tr>
                <td>Visa Gift Card</td>
                <td>$3.50</td>
            </tr>
            <tr>
                <td>Visa Reloadable Debit Card</td>
                <td>$4.95</td>
            </tr>
            <tr>
                <td>Teller Service Fee</td>
                <td>$1.50 per load</td>
            </tr>
            <tr>
                <td>Travel Gift Card</td>
                <td>$7.95</td>
            </tr>
            <tr>
                <td>Teller Service Fee</td>
                <td>$1.00 per load</td>
            </tr>
            <tr>
                <td>Inactive Account Fee</td>
                <td>$25.00 per year (after two years and account under $50.00)</td>
            </tr>
            <tr>
                <td>Check Cashing Fee</td>
                <td>$5.00 per check (for account balances under $100.00)</td>
            </tr>
            <tr>
                <td>Check Withdrawal by Mail under $50.00</td>
                <td>One FREE per day; Additional $1.00 each</td>
            </tr>
            <tr>
                <td>Locator's Fee</td>
                <td>$15.00</td>
            </tr>
            <tr>
                <td>Faxing Fee</td>
                <td>$2.00 first page; $1.00 each page after that</td>
            </tr>
            <tr>
                <td>Garnishment Fee</td>
                <td>$5.00 for processing</td>
            </tr>
            <tr>
                <td>Account Verification</td>
                <td>$5.00 for processing</td>
            </tr>
            <tr>
                <td>Notary Service Fee</td>
                <td>$1.50</td>
            </tr>
            <tr>
                <td>Signature Guarantee</td>
                <td>$5.00 per service</td>
            </tr>
        </table>
    </div>

    <div id="IRA-rates">
        <table class="table table-striped t50">
            <h4>Electronic Funds Transfer Fee <a href="#top"><i class="fa fa-level-up"></i></a></h4>
            <tr>
                <td>Five FREE Credit Union ATM Withdrawals/Transfers per month and then </td>
                <td>$2.00 per transaction</td>
            </tr>
            <tr>
                <td>Credit Union ATM Withdrawals/Transfers Plus Network Fee</td>
                <td>$2.00 per transaction</td>
            </tr>
            <tr>
                <td>Nonproprietary ATM Withdrawa/Transfer Fee</td>
                <td>$2.50 per transaction</td>
            </tr>
            <tr>
                <td>Nonproprietary ATM Withdrawa/Transfer Plus Network Fee</td>
                <td>$2.50 per transaction</td>
            </tr>
            <tr>
                <td>PIN Reset Fee</td>
                <td>$2.00 per reset</td>
            </tr>
            <tr>
                <td>Balance Inquiry Fee</td>
                <td>$32.00 per transaction</td>
            </tr>
            <tr>
                <td>Overdraft Advance Fee</td>
                <td>$32.00 per item</td>
            </tr>
            <tr>
                <td>NSF Fee</td>
                <td>$32.00 per item</td>
            </tr>
            <tr>
                <td>Automatic Draft Transfer Fee; 3 transfers per month then</td>
                <td>$3.00 per item after</td>
            </tr>
            <tr>
                <td>ATM/Debit Card Replacement</td>
                <td>$10.00</td>
            </tr>
            <tr>
                <td>ATM Deposit Charge (non-Member)</td>
                <td>$5.00 per deposit</td>
            </tr>
        </table>
    </div>

    <div id="ChA-rates">
        <table class="table table-striped t50">
            <h4>Loan Fees <a href="#top"><i class="fa fa-level-up"></i></a></h4>
            <tr>
                <td>Non-Member Application Fee</td>
                <td>$25.00</td>
            </tr>
            <tr>
                <td>Paperwork Update</td>
                <td>$25.00</td>
            </tr>
            <tr>
                <td>Mortgage Application Fee</td>
                <td>$30.00</td>
            </tr>
            <tr>
                <td>Re-Application Fee</td>
                <td>$25.00 (within 6 months)</td>
            </tr>
            <tr>
                <td>Subordination Fee</td>
                <td>$150.00</td>
            </tr>
            <tr>
                <td>Visa Home Equity Application Fee</td>
                <td>$50.00 per HE Line</td>
            </tr>
        </table>
    </div>


    <div id="VISA-rates">
        <table class="table table-striped">
            <h4>Safe Deposit Box Fees <a href="#top"><i class="fa fa-level-up"></i></a></h4>
            <tr>
                <th>Size</th>
                <th>Annual Rental Fee</th>
            </tr>
            <tr>
                <td>2x5</td>
                <td>$21.06</td>
            </tr>
            <tr>
                <td>3x5</td>
                <td>$27.00</td>
            </tr>
            <tr>
                <td>5x5</td>
                <td>$32.40</td>
            </tr>
            <tr>
                <td>3x10</td>
                <td>$48.60</td>
            </tr>
            <tr>
                <td>5x10</td>
                <td>$62.10</td>
            </tr>
            <tr>
                <td>7x10</td>
                <td>$91.80</td>
            </tr>
            <tr>
                <td>10x10</td>
                <td>$108.00</td>
            </tr>
            <tr>
                <td>Change of Lock Fee</td>
                <td>$5.00</td>
            </tr>
            <tr>
                <td>Drilling of Box Fee</td>
                <td>As billed by Diebold</td>
            </tr>
        </table>
    </div>

    <div id="LOAN-rates">
        <table class="table table-striped">
            <h4>Credit Union Membership <a href="#top"><i class="fa fa-level-up"></i></a></h4>
            <tr>
                <td>Membership Share</td>
                <td>$5.00 par value</td>
            </tr>
        </table>
    </div>


</div>


 <?php include 'footer.php'; ?>
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/retina.js"></script>
   


    <script>
        $(function() {
          $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top
                }, 1000);
                return false;
              }
            }
          });
        });
    </script>

</body>