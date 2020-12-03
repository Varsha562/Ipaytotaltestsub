<?php

session_start();


  $_SESSION['first_name']  = $_POST['first_name'];
  $_SESSION['last_name']= $_POST['last_name'];
  $_SESSION['address'] = $_POST['address'];
  $_SESSION['sulte_apt_no'] = $_POST['sulte_apt_no'];
  $_SESSION['country'] = $_POST['country'];
  $_SESSION['state'] = $_POST['state'];
  $_SESSION['city'] = $_POST['city'];
  $_SESSION['zip'] = $_POST['zip'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['phone_no'] = $_POST['phone_no'];
  $_SESSION['amount'] = $_POST['amount'];
  $_SESSION['currency']=$_POST['currency'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" type="image/x-icon" href="https://ipaytotal.solutions/newTheme/assets/img/logo-favicon.png">
        <title>iPaytotal Secure Payment | Pay now</title>
        <link href="https://ipaytotal.solutions/newTheme/assets/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="https://ipaytotal.solutions/newTheme/assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="https://ipaytotal.solutions/newTheme/assets/lib/select2/css/select2.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://ipaytotal.solutions/newTheme/assets/css/dashforge.css">
        <link rel="stylesheet" href="https://ipaytotal.solutions/newTheme/assets/css/dashforge.auth.css">
        <style type="text/css">
            .transaction {
                position: relative;
            }
            .payment-form{
                margin-top: 45px;
                padding: 0px;
            }
            footer{
                /*position: fixed;
                width: 100%;
                bottom: 0px;*/
            }
            footer ul{
                margin: 0px;
            }
            footer li{
                float: left;
                list-style: none;
                height: 60px;
                position: relative;
                width: 80px;
            }
            footer li img{
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
            }
            .content-fixed{
                margin-top: 30px;
            }
            .btn-success:hover,
            .btn-success{
                background-color: #002E5B !important;
                color: #FFF !important;
                border-color: #002E5B !important;
            }
            .card-body{
                background-color: #002E5B;
                color: #fff;
            }
            .tx-primary{
                color: #e5d335;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 payment-form">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between" style="background-color: #e5d335;">
                      <img src="https://ipaytotal.solutions/newTheme/assets/img/logo.png" alt="" style="width: 150px;">
                      <label class="badge badge-info" style="font-size: 16px; font-weight: bold; padding: 6px 5px 3px;"><?php  echo $_SESSION["amount"] ;echo  $_SESSION["currency"] ?></label>
                        </div>
                        <div class="col-md-12">
                        </div>
                        <form action="transaction.php" method="POST">
                            <div class="card-body pd-25">
                                <div class="form-group">
                                    <label><strong>Card No.</strong></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                                        </div>
                                        <input type="text" name="card_no" value="" placeholder="Card No." class="form-control inputCreditCard" id="card" required>
                                    </div>
                                    <div id="creditCardType" class="d-flex tx-28 tx-gray-500 mg-t-10">

                                        <div class="visa lh-1 mg-l-5"><i class="fab fa-cc-visa"></i></div>
                                        <div class="mastercard lh-1 mg-l-5"><i class="fab fa-cc-mastercard"></i></div>



                                    </div>
                                    <strong class="text-danger log"></strong>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong> Expiry Month</strong></label>
                                            <select class="form-control single-select" name="ccExpiryMonth" id="ccExpiryMonth" required>
                                                <option selected disabled> -- Select Exp. Month -- </option>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong> Expiry Year</strong></label>
                                            <select class="form-control single-select" name="ccExpiryYear" id="ccExpiryYear" required>
                                                <option selected disabled> -- Select Exp. Year -- </option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                                <option value="2027">2027</option>
                                                <option value="2028">2028</option>
                                                <option value="2029">2029</option>
                                                <option value="2030">2030</option>
                                                <option value="2031">2031</option>
                                                <option value="2032">2032</option>
                                                <option value="2033">2033</option>
                                                <option value="2034">2034</option>
                                                <option value="2035">2035</option>
                                                <option value="2036">2036</option>
                                                <option value="2037">2037</option>
                                                <option value="2038">2038</option>
                                                <option value="2039">2039</option>
                                                <option value="2040">2040</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><strong>CVV No.</strong></label>
                                    <input type="text" name="cvvNumber" value="" placeholder="CVV No." class="form-control" id="cvvNumber" required>
                                </div>
                            </div>
                            <div class="card-footer pd-y-15 pd-x-20 text-center" style="background-color: #e5d335;">
                                <button class="btn btn-success" type="submite" id="disableBTN">Pay</button>
                                <a href="https://ipaytotal.solutions/ipaytotal-iframe-checkout/VG5wTDJjTjlxVWVYaGlTNldPWjBYZzZlN3VpYTd4Uy95M3lBODN2VXdoMWhTcjVZeFdoYUJsblVrc3RSbm5kOEh3eE1QdVdqbHhuK3p2L1pobXd0bFkyNnhWRzJ4cnlkRWR1RXlka0tPRXVBeUNwV3lXMFVyeWtlclIwQjV5bmFhZ1FlZ05WN05MRmgwN0tyT2p2UlBUbE5NNCtoQUFhSkFoelhVT2JWZ3pBPQ==?status=fail&amp;message=The%20customer%20has%20cancelled%20the%20transaction.&amp;order_id=&amp;sulte_apt_no=56784673322" class="btn btn-success">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer" style="background-color: #fff; color: #002A5A;">
            <div>
                <span>&copy; 2020  iPayTotal Ltd. All Right Reserved </span>
            </div>
            <div>
                <nav class="nav">
                    <ul class="pull-center">
                        <li>
                            <img src="https://ipaytotal.solutions/imgs/card-logos.jpg" alt="Master Card And Visa" title="Master Card And Visa" border="0" style="width: 80px;">
                        </li>
                        <li>
                            <a href="javascript:" onclick="window.open('https://sisainfosec.com/site/certificate/36572671505100517165','SISA Certificate','width=685,height=670')"><img src="https://ipaytotal.solutions/imgs/pci_logo_footer.jpg" alt="PCI-DSS - certified by SISA" title="PCI-DSS - certified by SISA" border="0"></a>
                        </li>
                        <li>
                            <a href="https://trustsealinfo.verisign.com/splash?form_file=fdf/splash.fdf&amp;lang=en" target="_blank" title="Norton Secured Powered by VeriSign"><img src="https://ipaytotal.solutions/imgs/norton_logo_footer.jpg " alt="Norton Secured Powered by VeriSign" title="Norton Secured Powered by VeriSign" border="0"></a>
                        </li>
                        <li>
                            <img src="https://ipaytotal.solutions/imgs/mastercard_logo_footer.jpg" alt="MasterCard SecureCode" title="MasterCard SecureCode" border="0">
                        </li>
                        <li>
                            <img src="https://ipaytotal.solutions/imgs/visa_logo_footer.jpg" alt="Verified by VISA" title="Verified by VISA" border="0">
                        </li>
                        <li>
                            <img src="https://ipaytotal.solutions/imgs/american_exp_footer.jpg" alt="American Express SafeKey" title="American Express SafeKey" border="0">
                        </li>
                        <li>
                            <img src="https://ipaytotal.solutions/imgs/SafeSecureLogo.jpg" alt="SafeSecure" title="SafeSecure" border="0" style="width: 70px;">
                        </li>
                        <li>
                            <img src="https://ipaytotal.solutions/imgs/ssl.png" alt="SSL" title="SSL" border="0" style="width: 70px;">
                        </li>
                        <li>
                            <img src="https://ipaytotal.solutions/imgs/sitelock.png" alt="sitelock" title="sitelock" border="0" style="width: 70px;">
                        </li>
                        <li>
                            <img src="https://ipaytotal.solutions/imgs/jcb_logo_footer.jpg" alt="JCB J/Secure" title="JCB J/Secure" border="0">
                        </li>
                        <li>
                            <img src="https://ipaytotal.solutions/imgs/comodo.png" alt="Comode" title="Comode" border="0" style="width: 80px;">
                        </li>
                    </ul>
                </nav>
            </div>
        </footer>
    </body>
</html>
