<?php include('includes/header.php'); ?>
<?php include('includes/left-navigation.php'); ?>
<?php if($session->is_signed_in()) : ?>
<?php $user = Users::find_user_by_id($session->user_id); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LTC-20.net</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="theme-style-mode" content="1"> <!-- 0 == light, 1 == dark -->

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="https://rainbowit.net/html/nuron/assets/images/favicon.png">
    <!-- CSS 
    ============================================ -->
    <link rel="stylesheet" href="https://rainbowit.net/html/nuron/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="https://rainbowit.net/html/nuron/assets/css/vendor/slick.css">
    <link rel="stylesheet" href="https://rainbowit.net/html/nuron/assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="https://rainbowit.net/html/nuron/assets/css/vendor/nice-select.css">
    <link rel="stylesheet" href="https://rainbowit.net/html/nuron/assets/css/plugins/feature.css">
    <link rel="stylesheet" href="https://rainbowit.net/html/nuron/assets/css/plugins/jquery-ui.min.css">
    <link rel="stylesheet" href="https://rainbowit.net/html/nuron/assets/css/vendor/odometer.css">
     <script id='pixel-script-poptin' src='https://cdn.popt.in/pixel.js?id=43b75300269f6' async='true'></script> 
    <!-- Style css -->
    <link rel="stylesheet" href="https://rainbowit.net/html/nuron/assets/css/style.css">
</head>

<body class="template-color-1 nft-body-connect">
    <!-- Start Header -->
    <header class="rn-header haeder-default header--sticky">
        <div class="container">
            <div class="header-inner">
                <div class="header-left">
                    <div class="logo-thumbnail logo-custom-css">
                    <a class="logo-light" href="index.php"><img src="sitelogo.png" alt="nft-logo"></a>
                        <a class="logo-dark" href="index.php"><img src="sitelogo.png" alt="nft-logo"></a>
                    </div>
                    <div class="mainmenu-wrapper">
                        <nav id="sideNav" class="mainmenu-nav d-none d-xl-block">
                            <!-- Start Mainmanu Nav -->
                            <ul class="mainmenu">
                            <li><a href="https://ltc-20.net/index.php"><img src="home.png" style="width:25px;height:25px;" >&nbsp&nbspHome</a></li>
                                <li><a href="https://ltc-20.net/verified.php"><img src="verified.png" style="width:35px;height:25px;" > Verified Project's</a></li>
                                <li><a href="https://marketplace.ltc-20.net/"><img src="marketplace.png" style="width:25px;height:25px;" >&nbsp&nbspMarketplace</a></li>
                                <li><a href="https://ltc-20.net/wallet.php"><img src="walletmenu.png" style="width:25px;height:25px;" >&nbsp&nbspWallet</a></li>

                            </ul>
                            <!-- End Mainmanu Nav -->
                        </nav>
                    </div>
                </div>
                <div class="header-right">
                  
                    <div class="setting-option rn-icon-list d-block d-lg-none">
                        <div class="icon-box search-mobile-icon">
                        </div>
                        <form id="header-search-1" action="#" method="GET" class="large-mobile-blog-search">
                            <div class="rn-search-mobile form-group">
                            </div>
                        </form>
                    </div>

                    <div class="setting-option header-btn rbt-site-header" id="rbt-site-header">
                        <div class="icon-box">
                            <a id="" class="btn btn-primary-alta btn-small" target="_blank" href="https://ltc-20.net/contact.php">CONTACT US</a>
                        </div>
                    </div>
                    <div class="setting-option header-btn rbt-site-header" id="rbt-site-header">
                        <div class="icon-box">
                            <a id="" class="btn btn-primary-alta btn-small" style="background-color:green;" href="https://ltc-20.net/buy.php">&nbsp&nbsp&nbsp&nbspBUY LTST TOKEN&nbsp&nbsp&nbsp&nbsp</a>
                        </div>
                    </div>

                  

                 


                    <div class="setting-option mobile-menu-bar d-block d-xl-none">
                        <div class="hamberger">
                            <button class="hamberger-button">
                                <i class="feather-menu"></i>
                            </button>
                        </div>
                    </div>

                    <div id="my_switcher" class="my_switcher setting-option">
                        <ul>
                            <li>
                                <a href="javascript: void(0);" data-theme="light" class="setColor light">
                                    <img class="sun-image" src="https://rainbowit.net/html/nuron/assets/images/icons/sun-01.svg" alt="Sun images">
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                                    <img class="Victor Image" src="https://rainbowit.net/html/nuron/assets/images/icons/vector.svg" alt="Vector Images">
                                </a>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->

    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="header-top">
                <div class="logo logo-custom-css">
                    <a class="logo-light" href="index.php"><img src="sitelogo.png" alt="nft-logo"></a>
                    <a class="logo-dark" href="index.php"><img src="sitelogo.png" alt="nft-logo"></a>
                </div>
                <div class="close-menu">
                    <button class="close-button">
                        <i class="feather-x"></i>
                    </button>
                </div>
            </div>
            <nav>
                <!-- Start Mainmanu Nav -->
                <ul class="mainmenu">
                            <li><a href="https://ltc-20.net/home.php"><img src="home.png" style="width:25px;height:25px;" >&nbsp&nbspHome</a></li>
                                <li><a href="https://ltc-20.net/verified.php"><img src="verified.png" style="width:35px;height:25px;" > Verified Project's</a></li>
                                <li><a href="https://marketplace.ltc-20.net/"><img src="marketplace.png" style="width:25px;height:25px;" >&nbsp&nbspMarketplace</a></li>
                                <li><a href="https://ltc-20.net/wallet.php"><img src="walletmenu.png" style="width:25px;height:25px;" >&nbsp&nbspWallet</a></li>

                            </ul>
                <!-- End Mainmanu Nav -->
            </nav>
        </div>
    </div>
    <!-- start page title area -->
  
    <!-- end page title area -->


    <div class="rn-upcoming-area rn-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- start Table Title -->
                    <div class="table-title-area d-flex">
                        <i data-feather="briefcase"></i>
                        <h3>Top 100 LTC-20 Cryptocurrencies by Market Capitalization</h3>
                    </div>
                    <!-- End Table Title -->
    
              

                    <!-- table area Start -->
                    <div class="box-table table-responsive">
                        <table class="table upcoming-projects">
                            <thead>
                                <tr>
                                    <th>
                                        <span>#</span>
                                    </th>
                                    <th>
                                        <span>Status</span>
                                    </th>
                                    <th>
                                        <span>Type</span>
                                    </th>
                                    <th>
                                        <span>Amount</span>
                                    </th>
                                    <th>
                                        <span>From</span>
                                    </th>
                                    <th>
                                        <span>To</span>
                                    </th>
                                    <th>
                                        <span>Token</span>
                                    </th>
                                    <th>
                                        <span>Transaction ID</span>
                                    </th>
                                </tr>
                            </thead>
                            <?php $lastMiners = Users::get_latest_miners(); ?>
                            <tbody class="ranking">  
                            <?php if(!$lastMiners) : ?>
																		  
                                                                          <?php else: ?>
                    
                                                                            <?php 
                                                                            $place = "";
                                                                            foreach($lastMiners as $lastMiner) {
                                                                            $place = ++$place;
                                                                            ?>
                                <tr class="color-light">

                                    <td><span># <?php echo $place; ?></span></td>
                                    <?php if ($place == "1"){
                                      ?>      <td style="width:15px;"><span> <img src="loading2.gif" style="height:50%;width:50%;"></span></td> 
                                      
                                      <?php
                                    } else if($place == "2"){
                                        ?>      <td style="width:15px;"><span> <img src="loading2.gif" style="height:50%;width:50%;"></span></td> 
                                    <?php
                                    }
                                    
                                    else {
                                        ?><td style="width:15px;"><span> <img src="verified.png" style="height:50%;width:50%;"></span></td>  <?php
                                    }?>     



                                      <?php if ($place == "1"){
                                      ?>        <td><span class="color-green">BUY</span></td>
                                      
                                      <?php
                                    } else if($place == "3"){
                                        ?>       <td><span class="color-danger">SELL</span></td>
                                    <?php
                                    }
                                    
                                    else {
                                        ?>   <td><strong><span class="color-green">BUY</span></strong></td>  <?php
                                    }?>
                                    
                                    <td><span ><strong><?php echo $lastMiner->value * 1; ?> LTC</span></strong></td>
                                    <td><span> <?php echo $lastMiner->name; ?> </span> </td>
                                    <td><span>  <?php 
                                                            
                                                            $lmn = Users::find_user_by_id($lastMiner->author);
                                                            $kisalt = mb_substr($lmn->email,0,20);
                                                            echo $kisalt . "........";
                                                            
                                                            ?></span></td>
                                    <td><strong><span><?php echo $lastMiner->profit * 1; ?> LTST</span></strong></td>
                                    <td><span><?php echo $lastMiner->txid; ?></span></td>
                                   
                                </tr>
                             	
													  <?php } ?>  
															
                                                            <?php endif; ?>	
                             
                            </tbody>
                        </table>
                    </div>
                    <!-- table End -->
                  
                </div>
            </div>
        </div>
    </div>


    <!-- Start Footer Area -->
  
    <!-- End Footer Area -->
    <!-- Start Footer Area -->
    <div class="copy-right-one ptb--20 bg-color--1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="copyright-left">
                        <span>©2022 LTC-20.net . All rights reserved.</span>
                 
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="copyright-right">
                        <ul class="social-copyright">
                            <li><a href="https://twitter.com/ltc20official"><i data-feather="twitter"></i></a></li>
                            <li><a href="https://github.com/ltc20official/wallet"><i data-feather="github"></i></a></li>
                            <li><a href="https://t.me/ltc20netmonitor"><i data-feather="linkedin"></i></a></li>
                            <li><a href="mailto:info@ltc-20.net"><i data-feather="mail"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Area -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Start Top To Bottom Area  -->
    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- End Top To Bottom Area  -->
    <!-- JS ============================================ -->
    <script src="https://rainbowit.net/html/nuron/assets/js/vendor/jquery.js"></script>
    <script src="https://rainbowit.net/html/nuron/assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="https://rainbowit.net/html/nuron/assets/js/vendor/jquery-ui.js"></script>
    <script src="https://rainbowit.net/html/nuron/assets/js/vendor/modernizer.min.js"></script>
    <script src="https://rainbowit.net/html/nuron/assets/js/vendor/feather.min.js"></script>
    <script src="https://rainbowit.net/html/nuron/assets/js/vendor/slick.min.js"></script>
    <script src="https://rainbowit.net/html/nuron/assets/js/vendor/bootstrap.min.js"></script>
    <script src="https://rainbowit.net/html/nuron/assets/js/vendor/sal.min.js"></script>
    <script src="https://rainbowit.net/html/nuron/assets/js/vendor/particles.js"></script>
    <script src="https://rainbowit.net/html/nuron/assets/js/vendor/jquery.style.swicher.js"></script>
    <script src="https://rainbowit.net/html/nuron/assets/js/vendor/js.cookie.js"></script>
    <script src="https://rainbowit.net/html/nuron/assets/js/vendor/count-down.js"></script>
    <script src="https://rainbowit.net/html/nuron/assets/js/vendor/isotop.js"></script>
    <script src="https://rainbowit.net/html/nuron/assets/js/vendor/imageloaded.js"></script>
    <script src="https://rainbowit.net/html/nuron/assets/js/vendor/backtoTop.js"></script>
    <script src="https://rainbowit.net/html/nuron/assets/js/vendor/odometer.js"></script>
    <script src="https://rainbowit.net/html/nuron/assets/js/vendor/jquery-appear.js"></script>
    <script src="https://rainbowit.net/html/nuron/assets/js/vendor/scrolltrigger.js"></script>
    <script src="https://rainbowit.net/html/nuron/assets/js/vendor/jquery.custom-file-input.js"></script>
    <script src="https://rainbowit.net/html/nuron/assets/js/vendor/savePopup.js"></script>
    <script src="https://rainbowit.net/html/nuron/assets/js/vendor/vanilla.tilt.js"></script>

    <!-- main JS -->
    <script src="https://rainbowit.net/html/nuron/assets/js/main.js"></script>
    <!-- Meta Mask  -->
</body>

</html>

<?php else: ?>
<?php redirect('../login.php'); ?>
<?php endif; ?>