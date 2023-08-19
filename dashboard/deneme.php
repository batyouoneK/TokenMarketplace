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
                    <h3 class="title live-bidding-title">Deposit</h3>
                </div>
                <div class="row g-5">
            
                <div class="rn-upload-variant-area varient rn-section-gap">
        <div class="container">
            <div class="row">
                <div class="upload-variant-title-wrapper">
                    <h3 class="title text-center">
                        Deposit Menu
                    </h3>
                    <p class="text-center">Select the currency you want to deposit!</p>
                </div>
            </div>
            <div class="row g-5 mt--40">
                <div class="offset-lg-3 col-lg-3 col-md-6 col-12">
                    <div class="upload-variant-wrapper">
                        <div class="variant-preview">
                            <img src="depositltclogo.jpg" alt="nuron-single">
                        </div>
                        <br>
                        <center> <strong> <h4>  Deposit Litecoin</h4> </strong> </center>
                        <a href="depositLTC.php" class="btn btn-primary mt--20">Deposit LTC</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="upload-variant-wrapper">
                        <div class="variant-preview">
                            <img src="depositltstlogo.jpg" alt="nuron-single">
                        </div>
                        <br>
                        <center> <strong> <h4>  Deposit LTST</h4> </strong> </center>
                        <a href="depositLTST.php" class="btn btn-primary mt--20">Deposit LTST</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
                  
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