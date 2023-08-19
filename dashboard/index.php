<?php include('includes/header.php'); ?>
<?php include('includes/left-navigation.php'); ?>
<?php if($session->is_signed_in()) : ?>
<?php $user = Users::find_user_by_id($session->user_id); ?>
<?php require_once('controller/buy.controller.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Seven || Nuron - NFT Marketplace Template</title>
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

    <!-- Style css -->
    <link rel="stylesheet" href="https://rainbowit.net/html/nuron/assets/css/style.css">
</head>

<body class="home-sticky-pin sidebar-header scrollspy-example position-relative" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" tabindex="0">

    <!-- start header area -->
    <div class="d-none d-lg-block">
        <div class="header-area left-header-style d-flex">
            <div class="logo-area logo-custom-css">
                <a class="logo-light" href="index.php"><img src="logow.png" alt="nft-logo"></a>
                <a class="logo-dark" href="index.php"><img src="https://rainbowit.net/html/nuron/assets/images/logo/logo-dark.png" alt="nft-logo"></a>
            </div>
            <div class="sidebar-nav-wrapper">
                <nav class="mainmenu-nav">
                    <ul class="mainmenu list-group">
                        <li class="nav-item"><a class="nav-link" href="index.php"> <i data-feather="home"></i>Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="depositchoose.php"> <i data-feather="trending-up"></i>Deposit</a></li>
                       <li class="nav-item"><a class="nav-link" href="payoutdiger.php"> <i data-feather="heart"></i>Withdraw</a></li>
                        <li class="nav-item"><a class="nav-link" href="transactions.php"><i data-feather="book-open"></i>All Transaction's</li> </a>
                    </ul>
                </nav>
                <div class="help-center-area mainmenu-nav mt--30">
                    <ul class="mainmenu">
                        <li class="nav-item"><a class="nav-link" href="profilediger.php"> <i data-feather="settings"></i>Profile Setting's</a></li>
                        <li class="nav-item"><a class="nav-link" href="support.html"> <i data-feather="activity"></i>Help Center</a></li>
                    </ul>
                </div>
            </div>
            <div class="authore-profile">
                <div class="thumbnail">
                    <img src="ltclogo.png" alt="Nft_marketplaces">
                </div>
                <div class="au-content">
                    <p class="name"><?php $kisalt = mb_substr($user->email,0,20);
                                                            echo $kisalt . "........";?></p>
                    <p class="blc">LTC Balance:<span class="value"> <?php echo $user->balance * 1 ; ?> LTC</span></p>
                    <p class="blc">LTST Balance:<span class="value" style="color:#1DFB19"> <?php if(!$profitperday) {echo 0;} else { echo $profitperday->profit*1; } ?> LTST</span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- end header arae -->

    <!-- Start Popup Moobile Menu  -->
    <div class="popup-mobile-menu one-page-vavigation-popup">
        <div class="inner">
            <div class="header-top">
                <div class="logo logo-custom-css">
                    <a class="logo-light" href="index.html"><img src="logow.png" alt="nft-logo"></a>
                    <a class="logo-dark" href="index.html"><img src="https://rainbowit.net/html/nuron/assets/images/logo/logo-dark.png" alt="nft-logo"></a>
                </div>
                <div class="close-menu">
                    <button class="close-button">
                        <i class="feather-x"></i>
                    </button>
                </div>
            </div>
            <nav>
                <!-- Start Mainmanu Nav -->
                <ul class="mainmenu" id="navbar-example2">
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#list-item-1">Home</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#list-item-2">Live Auction</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#list-item-3">Newest Item</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#list-item-4">Explore Product</a></li>
                </ul>
                <!-- End Mainmanu Nav -->
            </nav>
        </div>
    </div>
    <!-- Start Popup Moobile Menu  -->

    <div class="rn-nft-mid-wrapper">

        <div id="list-item-1">
            <!-- top bar -->
            <div class="rn-top-bar-area">
                <div class="d-none d-lg-block">
                    <div class="input-group">
                      
                    </div>
                </div>

                <div class="contact-area">
                    <div class="rn-icon-list setting-option d-block d-lg-none">
                        <div class="icon-box search-mobile-icon">
                            <button><i class="feather-search"></i></button>
                        </div>
                   
                    </div>


                    <div class="setting-option header-btn">
                        <div class="icon-box">
                            <a class="btn btn-primary-alta btn-small" href="#">LTC Balance : <span class="value" style="color:#1BD5E6"> <?php echo $user->balance * 1 ; ?> LTC</span></a>
                        </div>
                    </div>

                    <div class="setting-option header-btn">
                        <div class="icon-box">
                            <a class="btn btn-primary-alta btn-small" href="#">LTST Balance:<span class="value" style="color:#1DFB19"> <?php if(!$profitperday) {echo 0;} else { echo $profitperday->profit*1; } ?> LTST</span></a>
                        </div>
                    </div>

                    <div class="setting-option header-btn">
                        <div class="icon-box">
                            <a class="btn btn-primary-alta btn-small" href="sellyourtoken.php">Sell Your Token</a>
                        </div>
                    </div>

                    
                    <div class="setting-option mobile-menu-bar ml--5 d-block d-lg-none">
                        <div class="hamberger icon-box">
                            <button class="hamberger-button">
                                <i class="feather-menu"></i>
                            </button>
                        </div>
                    </div>

                    <div class="header_admin" id="header_admin">
                        <div class="setting-option rn-icon-list user-account">
                            <div class="icon-box">
                                <a href="author.html"><img src="https://rainbowit.net/html/nuron/assets/images/icons/boy-avater.png" alt="Images"></a>
                                <div class="rn-dropdown">
                                    <div class="rn-inner-top">
                                        <h4 class="title"><a href="product-details.html">Christopher William</a></h4>
                                        <span><a href="#">Set Display Name</a></span>
                                    </div>
                                    <div class="rn-product-inner">
                                        <ul class="product-list">
                                            <li class="single-product-list">
                                                <div class="thumbnail">
                                                    <a href="product-details.html"><img src="portfolio7.jpg" alt="Nft Product Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h6 class="title"><a href="product-details.html">Balance</a></h6>
                                                    <span class="price">25 ETH</span>
                                                </div>
                                                <div class="button"></div>
                                            </li>
                                            <li class="single-product-list">
                                                <div class="thumbnail">
                                                    <a href="product-details.html"><img src="https://rainbowit.net/html/nuron/assets/images/portfolio/portfolio-01.jpg" alt="Nft Product Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h6 class="title"><a href="product-details.html">Balance</a></h6>
                                                    <span class="price">25 ETH</span>
                                                </div>
                                                <div class="button"></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="add-fund-button mt--20 pb--20">
                                        <a class="btn btn-primary-alta w-100" href="connect.html">Add Your More Funds</a>
                                    </div>
                                    <ul class="list-inner">
                                        <li><a href="author.html">My Profile</a></li>
                                        <li><a href="edit-profile.html">Edit Profile</a></li>
                                        <li><a href="connect.html">Manage funds</a></li>
                                        <li><a href="login.html">Sign Out</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div id="my_switcher" class="my_switcher setting-option">
                        <ul>
                            <li>
                                <a href="javascript: void(0);" data-theme="light" class="setColor light">
                                    <img src="https://rainbowit.net/html/nuron/assets/images/icons/sun-01.svg" alt="Sun images">
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                                    <img src="https://rainbowit.net/html/nuron/assets/images/icons/vector.svg" alt="Vector Images">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- top bar End -->

            <!-- banner area start -->

            <!-- EKLENEBİLİR  -->
          
          
           <!--  <div class="rn-banner-area">
                <div class="slider-style-7 bg_image--15 bg_image" data-black-overlay="8">
                    <div class="rn-banner-wrapper row">
                        <div class="col-xl-5 col-lg-12 col-12 order-3 order-xl-1">
                            <div class="item-description">
                                <p>
                                The LTC-20.net Marketplace will open a new era for the entire LTC20 network. We have continued and will continue to develop for you on the LTC20 network. Stay with us!
                                </p>
                                <div class="product-share-wrapper">
                                    <div class="profile-share">
                                        <a href="author.html" class="avatar" data-tooltip="Mark Joe"><img src="ltc20/ltclogo.png" alt="Nft_Profile"></a>
                                        <a href="author.html" class="avatar" data-tooltip="Mr.Jone-lee"><img src="logo3.png" alt="Nft_Profile"></a>
                                        <a href="author.html" class="avatar" data-tooltip="David Worner"><img src="ltc20/ltclogo.png" alt="Nft_Profile"></a>
                                        <a class="more-author-text" href="#">1000+ Inscription Listed..</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12 col-12 order-2 order-xl-2">
                            <h2 class="title">
                                Discover all LTC-20 Token's and<br><span> NFT's</span>
                            </h2>
                        </div>
                        <div class="col-xl-3 col-lg-12 col-12 order-1 order-xl-3">
                            <div class="img-thumb-award">
                                <img src="https://rainbowit.net/html/nuron/assets/images/logo/award-logo.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

            -->


            <!-- banner area end -->
        </div>

        <!-- live Bidding area start -->
        <div class="rn-live-bidding-area ptb--70" id="list-item-2">
            <div class="container">
                <div class="row mb--30">
                    <h3 class="title live-bidding-title">Live Marketplace <span style="color:#58F575; float: right;">0.04979$&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h3>
                </div>
                <div class="row g-5">
                <?php echo $session->message; ?>
                    <!-- start single product -->
                    <?php foreach($plans as $plan) { ?>

                    <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">

                        <div class="product-style-one" >
                            <div class="card-thumbnail">
                                <a href="product-details.html"><img src="images/<?php echo $plan->plan_image; ?>" alt="NFT_portfolio"></a>
                                <div class="countdown" data-date="2022-11-09">
                                    <div class="countdown-container days">
                                        <span class="countdown-value">87</span>
                                        <span class="countdown-heading">D's</span>
                                    </div>
                                    <div class="countdown-container hours">
                                        <span class="countdown-value">23</span>
                                        <span class="countdown-heading">H's</span>
                                    </div>
                                    <div class="countdown-container minutes">
                                        <span class="countdown-value">38</span>
                                        <span class="countdown-heading">Min's</span>
                                    </div>
                                    <div class="countdown-container seconds">
                                        <span class="countdown-value">27</span>
                                        <span class="countdown-heading">Sec</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-share-wrapper">
                           <?php echo $plan->plan_name; ?>
                                <div class="share-btn share-btn-activation dropdown">
                                    <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                        </svg>
                                    </button>

                                    <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                        <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                            Share
                                        </button>
                                        <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                            Report
                                        </button>
                                    </div>

                                </div>
                              <span> </span>
                            </div>
                            <a href="product-details.html"><span class="product-name"><?php echo $plan->plan_profit * 1; ?>  <?php 
                            if($plan->plan_image == "100mweb.png"){
                                echo "MWEB";
                            }; 
                            if($plan->plan_image == "1000ltnt.jpg"){
                                echo "LTNT";
                            }; 
                            if($plan->plan_image == "1000ltst.png"){
                                echo "LTST";
                            }; 
                            
                            
                            ?></span></a>
                            
                            <span class="latest-bid" ><strong> Total Price : <span style="color:white"> <?php echo $plan->plan_price * 1; ?> LTC </span></span>

                        <br>

                            <span class="latest-bid">Per LTST Price : <span style="color:white"><?php
                            
                            $ethbtc = file_get_contents('https://api.binance.com/api/v3/ticker/price?symbol=LTCUSDT');
                            $ethbtc = json_decode($ethbtc,true);
                            $ltcdeger = $ethbtc['price'];
                            echo $plan->plan_price /  $plan->plan_profit *  $ltcdeger; ?> $</strong></span>
                            
                            <div class="bid-react-area">
                                <div class="last-bid"> <span style="font-size:15px;"><?php
                            
                            $ethbtc = file_get_contents('https://api.binance.com/api/v3/ticker/price?symbol=LTCUSDT');
                            $ethbtc = json_decode($ethbtc,true);
                            $ltcdeger = $ethbtc['price'];
                            echo $plan->plan_price *  $ltcdeger ; ?> $</span></span></div>
                                <div class="react-area">
                                </div>
                                <form action="" method="post">
                                <input type="hidden" name="type" value="<?php echo $plan->id; ?>">
                                <input type="hidden" name="duration" value="<?php echo $plan->plan_duration ?> ">
                                <?php 
                                if ($user->id == $plan->plan_duration) {
                                    ?> <span> Your Listing  </span> <?php
                                } else {
                                    ?> <button type="submit" class="btn btn-primary-alta btn-small" name="buy"><b>&nbsp&nbspBUY Token's &nbsp&nbsp</b></button> <?php
                                }
                                
                                ?>
                            </form>   
                            </div>
                        </div>
                        
                    </div>
                    <!-- end single product -->
 <?php } ?>
                </div>
            </div>
        </div>
        <!-- live Bidding area End -->
        <?php 



?>
        <!-- collection area Start -->
     
        <!-- collection area End -->

        <!-- Start product area -->
     

        <!-- start service area -->
        <div class="rn-service-area pb--70" id="list-item-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb--30">
                        <h3 class="title">Make Easyer</h3>
                    </div>
                </div>
                <div class="row g-5">
                    <!-- start single service -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="rn-service-one color-shape-7">
                            <div class="inner">
                                <div class="icon">
                                    <img src="https://rainbowit.net/html/nuron/assets/images/icons/shape-7.png" alt="Shape">
                                </div>
                                <div class="subtitle">Step-01</div>
                                <div class="content">
                                    <h4 class="title"><a href="#">Top up your Balance</a></h4>
                                    <p class="description">Make your Litecoin or LTST investment by going to the "Deposit" section.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End single service -->
                    <!-- start single service -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="rn-service-one color-shape-1">
                            <div class="inner">
                                <div class="icon">
                                    <img src="https://rainbowit.net/html/nuron/assets/images/icons/shape-1.png" alt="Shape">
                                </div>
                                <div class="subtitle">Step-02</div>
                                <div class="content">
                                    <h4 class="title"><a href="#">Make your Desicion</a></h4>
                                    <p class="description">Decide which of the LTST's listed on the Market is right for your budget.</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- End single service -->

                    <!-- start single service -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="rn-service-one color-shape-5">
                            <div class="inner">
                                <div class="icon">
                                    <img src="https://rainbowit.net/html/nuron/assets/images/icons/shape-5.png" alt="Shape">
                                </div>
                                <div class="subtitle">Step-03</div>
                                <div class="content">
                                    <h4 class="title"><a href="#">Buy your First LTST </a></h4>
                                    <p class="description">Complete the purchase with your Litecoin balance that you have filled and your budget is sufficient by clicking on the "Buy" button.</p>
                                </div>
                            </div>
                       
                        </div>
                    </div>
                    <!-- End single service -->
                </div>
            </div>
        </div>
        <!-- End service area -->

    </div>

    <div class="header-right-fixed">
        <!-- notificatio area -->
        <div class="rn-notification-area right-fix-notice">
            <div class="h--100">
                <div class="notice-heading">
                    <h4>Your Transaction's</h4>

                </div>
            </div>
            <div class="rn-notification-wrapper">

                <!-- start single notification -->
                <?php 
                    $place = "";

                    if(empty($myplans)) {
                    ?>
                     <center> <h6 class="title">You have no Transactions..</h6> </center>
                    <?php
                    } else {
                        foreach($myplans as $myplan) {
                              $place = ++$place;
                    ?>

                <div class="single-notice">
                    <div class="thumbnail">
                        <a id="connectbtn" href="connect.html"><img src="removedltst.png" alt="Images"></a>
                    </div>
                    <div class="content-wrapper">
                        <a href="connect.html">
                            <h6 class="title"><?php echo $myplan->profit * 1; ?> <?php if ($myplan->profit * 1 == 100){ echo "LTST Airdrop";} else { echo "LTST sold out..";}; ?></h6>
                        </a>
                        <p><?php if ($myplan->profit * 1 == 100){ echo "You won as a registration prize!";} else { echo "Has been purchased with LTC";}; ?> </p>
                        <div class="notice-time">
                            <span>Transaction Date :</span>
                            <span><?php echo $myplan->buy_date; ?></span>
                        </div>
                        <a href="transactions.php" class="btn btn-primary-alta">Check Out</a>
                    </div>
                </div>
                <!-- End single notification -->
                <?php } ?>
                    <?php } ?>
            </div>
        </div>
        <!-- notificatio area End -->

        <!-- start creators area -->
        <div class="rn-notification-area right-fix-notice">
            <div class="h--100">
                <div class="notice-heading">
                    <h4>All Transaction's</h4>
                 
                </div>
            </div>
            <div class="rn-notification-wrapper">

                <!-- start single notification -->
                <?php $lastMiners = Users::get_latest_miners(); ?>
                <?php if(!$lastMiners) : ?>
                    <?php else: ?>
                    
                    <?php 
                    $place = "";
                    foreach($lastMiners as $lastMiner) {
                    $place = ++$place;
                    ?>
                <div class="single-notice">
                    <div class="thumbnail">
                        <a id="connectbtn" href="connect.html"><img src="removedltst.png" alt="Images"></a>
                    </div>
                    <div class="content-wrapper">
                        <a href="connect.html">
                            <h6 class="title"><?php echo $lastMiner->profit * 1; ?> LTST for <span style="font-size:15px;"> <?php echo $lastMiner->value * 1; ?> LTC </span></h6>
                        </a>
                        <p>From : <?php echo $lastMiner->name; ?></p>
                        <p>To :  <?php 
                                                            
                                                            $lmn = Users::find_user_by_id($lastMiner->author);
                                                            $kisalt = mb_substr($lmn->email,0,18);
                                                            echo $kisalt . "........";
                                                            
                                                            ?></p>
                        <a href="transactions.php" class="btn btn-primary-alta">Check Out</a>
                    </div>
                </div>
                <?php } ?>  
															
                                                            <?php endif; ?>	
                <!-- End single notification -->
            </div>
        </div>
        <!-- End creators area -->
    </div>

    <!-- Start Footer Area  -->
    <div class="rn-footer-area footer-for-left-sticky-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner text-center">
                        <div class="logo logo-custom-css">
                            <a class="logo-light" href="index.html"><img src="logow.png" alt="nft-logo"></a>
                            <a class="logo-dark" href="index.html"><img src="https://rainbowit.net/html/nuron/assets/images/logo/logo-dark.png" alt="nft-logo"></a>
                        </div>
                        <p class="description mt--30">© 2023. All rights reserved by LTC-20.net</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Area  -->

    <!-- Modal -->
    <div class="rn-popup-modal share-modal-wrapper modal fade" id="shareModal" tabindex="-1" aria-hidden="true">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content share-wrapper">
                <div class="modal-header share-area">
                    <h5 class="modal-title">Share this NFT</h5>
                </div>
                <div class="modal-body">
                    <ul class="social-share-default">
                        <li><a href="#"><span class="icon"><i data-feather="facebook"></i></span><span class="text">facebook</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="twitter"></i></span><span class="text">twitter</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="linkedin"></i></span><span class="text">linkedin</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="instagram"></i></span><span class="text">instagram</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="youtube"></i></span><span class="text">youtube</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="rn-popup-modal report-modal-wrapper modal fade" id="reportModal" tabindex="-1" aria-hidden="true">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content report-content-wrapper">
                <div class="modal-header report-modal-header">
                    <h5 class="modal-title">Why are you reporting?
                    </h5>
                </div>
                <div class="modal-body">
                    <p>Describe why you think this item should be removed from marketplace</p>
                    <div class="report-form-box">
                        <h6 class="title">Message</h6>
                        <textarea name="message" placeholder="Write issues"></textarea>
                        <div class="report-button">
                            <button type="button" class="btn btn-primary mr--10 w-auto">Report</button>
                            <button type="button" class="btn btn-primary-alta w-auto" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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