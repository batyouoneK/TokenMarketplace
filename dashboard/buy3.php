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
    <title>Explore Isotop || Nuron - NFT Marketplace Template</title>
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
                            <li><a target="_blank" href="https://ltc-20.net/mint.php"><img src="home.png" style="width:25px;height:25px;" >&nbsp&nbspHome</a></li>
                                <li><a target="_blank" href="https://ltc-20.net/"><img src="verified.png" style="width:35px;height:25px;" > Verified Project's</a></li>
                                <li><a target="_blank" href="https://marketplace.ltc-20.net/"><img src="marketplace.png" style="width:25px;height:25px;" >&nbsp&nbspMarketplace</a></li>
                                <li><a target="_blank" href="https://ltc-20.net/wallet.php"><img src="walletmenu.png" style="width:25px;height:25px;" >&nbsp&nbspWallet</a></li>

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
                            <a id="" class="btn btn-primary-alta btn-small" target="_blank" href="https://ltc-20.net/contact.php">List your Token</a>
                        </div>
                    </div>
                    <div class="setting-option header-btn rbt-site-header" id="rbt-site-header">
                        <div class="icon-box">
                            <a id="" class="btn btn-primary-alta btn-small"  target="_blank" href="https://ltc-20.net/contact.php">&nbsp&nbsp&nbsp&nbspConnect Wallet&nbsp&nbsp&nbsp&nbsp</a>
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
                    <a class="logo-light" href="index.html"><img src="sitelogo.png" alt="nft-logo"></a>
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
                <ul class="mainmenu">
                    <li class="has-droupdown">
                        <a class="nav-link its_new" href="#">Home</a>
                        <ul class="submenu">
                            <li><a href="index.html">Home page - 01 <i class="feather-home"></i></a></li>
                            <li><a href="index-two.html">Home page - 02<i class="feather-home"></i></a></li>
                            <li><a href="index-three.html">Home page - 03<i class="feather-home"></i></a></li>
                            <li><a href="index-four.html">Home page - 04<i class="feather-home"></i></a></li>
                            <li><a href="index-five.html">Home page - 05<i class="feather-home"></i></a></li>
                            <li><a href="index-six.html">Home page - 06<i class="feather-home"></i></a></li>
                            <li><a href="index-seven.html">Home page - 07<i class="feather-home"></i></a></li>
                            <li><a href="index-eight.html">Home page - 08<i class="feather-home"></i></a></li>
                            <li><a href="index-nine.html">Home page - 09<i class="feather-home"></i></a></li>
                            <li><a href="index-ten.html">Home page - 10<i class="feather-home"></i></a></li>
                            <li><a href="index-eleven.html">Home page - 11<i class="feather-home"></i></a></li>
                            <li><a href="index-twelve.html">Home page - 12<i class="feather-home"></i></a></li>
                            <li><a href="index-thirteen.html">Home page - 13<i class="feather-home"></i></a></li>
                            <li><a href="index-fourteen.html">Home page - 14<i class="feather-home"></i></a></li>
                            <li><a href="index-fifteen.html">Home page - 15<i class="feather-home"></i></a></li>
                            <li><a href="index-sixteen.html">Home page - 16<i class="feather-home"></i></a></li>
                            <li><a href="index-seventeen.html">Home page - 17<i class="feather-home"></i></a></li>
                            <li><a href="index-eighteen.html">Home page - 18<i class="feather-home"></i></a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About</a>
                    </li>
                    <li class="has-droupdown">
                        <a class="nav-link its_new" href="#">Explore</a>
                        <ul class="submenu">
                            <li><a href="explore-one.html">Explore Filter<i class="feather-fast-forward"></i></a></li>
                            <li><a href="explore-two.html">Explore Isotop<i class="feather-fast-forward"></i></a></li>
                            <li><a href="explore-three.html">Explore Carousel<i class="feather-fast-forward"></i></a></li>
                            <li><a href="explore-four.html">Explore Simple<i class="feather-fast-forward"></i></a></li>
                            <li><a href="explore-five.html">Explore Place Bid<i class="feather-fast-forward"></i></a></li>
                            <li><a href="explore-six.html">Place Bid With Filter<i class="feather-fast-forward"></i></a></li>
                            <li><a href="explore-seven.html">Place Bid With Isotop<i class="feather-fast-forward"></i></a></li>
                            <li><a href="explore-eight.html">Place Bid With Carousel<i class="feather-fast-forward"></i></a></li>
                            <li><a href="explore-list-style.html">Explore Style List<i class="feather-fast-forward"></i></a></li>
                            <li><a href="explore-list-column-two.html">Explore List Col-Two<i class="feather-fast-forward"></i></a></li>
                            <li><a href="explore-left-filter.html">Explore Left Filter<i class="feather-fast-forward"></i></a></li>
                            <li><a class="live-expo" href="explore-live.html">Live Explore</a></li>
                            <li><a class="live-expo" href="explore-live-two.html">Live Explore Carousel</a></li>
                            <li><a class="live-expo" href="explore-live-three.html">Live With Place Bid</a></li>
                        </ul>
                    </li>
                    <li class="with-megamenu">
                        <a class="nav-link its_new" href="#">Pages</a>
                        <div class="rn-megamenu">
                            <div class="wrapper">
                                <div class="row row--0">
                                    <div class="col-lg-3 single-mega-item">
                                        <ul class="mega-menu-item">
                                            <li>
                                                <a href="create.html">Create NFT<i data-feather="file-plus"></i></a>
                                            </li>
                                            <li>
                                                <a href="upload-variants.html">Upload Type<i data-feather="layers"></i></a>
                                            </li>
                                            <li><a href="activity.html">Activity<i data-feather="activity"></i></a></li>
                                            <li>
                                                <a href="creator.html">Creators<i data-feather="users"></i></a>
                                            </li>
                                            <li><a href="collection.html">Our Collection<i data-feather="package"></i></a></li>
                                            <li><a href="upcoming_projects.html">Upcoming Projects<i data-feather="loader"></i></a></li>
                                            <li><a href="create-collection.html">Create Collection<i data-feather="edit-3"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 single-mega-item">
                                        <ul class="mega-menu-item">
                                            <li><a href="login.html">Log In <i data-feather="log-in"></i></a></li>
                                            <li><a href="sign-up.html">Registration <i data-feather="user-plus"></i></a></li>
                                            <li><a href="forget.html">Forget Password <i data-feather="key"></i></a></li>
                                            <li>
                                                <a href="author.html">Author/Profile(User) <i data-feather="user"></i></a>
                                            </li>
                                            <li>
                                                <a href="connect.html">Connect to Wallet <i data-feather="pocket"></i></a>
                                            </li>
                                            <li><a href="privacy-policy.html">Privacy Policy <i data-feather="file-text"></i></a></li>
                                            <li><a href="newsletter.html">Newsletter<i data-feather="book-open"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 single-mega-item">
                                        <ul class="mega-menu-item">

                                            <li><a href="product.html">Product<i data-feather="folder"></i></a></li>
                                            <li><a href="product-details.html">Product Details <i data-feather="layout"></i></a></li>
                                            <li><a href="ranking.html">NFT Ranking<i data-feather="trending-up"></i></a></li>
                                            <li><a href="blog.html">Our News <i data-feather="message-square"></i></a></li>
                                            <li><a href="blog-details.html">Blog Details<i data-feather="book-open"></i></a></li>
                                            <li><a href="404.html">404 <i data-feather="alert-triangle"></i></a></li>
                                            <li><a href="forum-community.html">Forum & Community<i data-feather="message-circle"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 single-mega-item">
                                        <ul class="mega-menu-item">
                                            <li><a href="about.html">About Us<i data-feather="award"></i></a></li>
                                            <li><a href="contact.html">Contact <i data-feather="headphones"></i></a></li>
                                            <li><a href="support.html">Support/FAQ <i data-feather="help-circle"></i></a></li>
                                            <li><a href="terms-condition.html">Terms & Condition <i data-feather="list"></i></a></li>
                                            <li><a href="coming-soon.html">Coming Soon <i data-feather="clock"></i></a></li>
                                            <li><a href="maintenance.html">Maintenance <i data-feather="cpu"></i></a></li>
                                            <li><a href="forum-details.html">Forum Details <i data-feather="message-circle"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="has-droupdown has-menu-child-item">
                        <a class="nav-link its_new" href="blog.html">Blog</a>
                        <ul class="submenu">
                            <li><a href="blog-single-col.html">Blog Single Column<i class="feather-fast-forward"></i></a></li>
                            <li><a href="blog-col-two.html">Blog Two Column<i class="feather-fast-forward"></i></a></li>
                            <li><a href="blog-col-three.html">Blog Three Column<i class="feather-fast-forward"></i></a></li>
                            <li><a href="blog.html">Blog Four Column<i class="feather-fast-forward"></i></a></li>
                            <li><a href="blog-details.html">Blog Details<i class="feather-fast-forward"></i></a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                <!-- End Mainmanu Nav -->
            </nav>
        </div>
    </div>
    <!-- start page title area -->

    <!-- end page title area -->
    <!-- Start product area -->
    <div class="rn-product-area rn-section-gapTop masonary-wrapper-activation">
        <div class="container">
            <div class="row mb--30 align-items-center">
                <div class="col-lg-4">
                    <div class="section-title">
                    <div class="row mb--30">
                    <h3 class="title live-bidding-title">Live Marketplace</h3>
                </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="button-group isotop-filter filters-button-group d-flex justify-content-start justify-content-lg-end mt_md--30 mt_sm--30">
                        <button data-filter="*" class="is-checked"><span class="filter-text">All Items</span></button>
                        <button data-filter=".cat--1"><span class="filter-text">LTNT</span></button>
                        <button data-filter=".cat--2"><span class="filter-text">LITE</span></button>
                        <button data-filter=".cat--3"><span class="filter-text">MWEB</span></button>
                        <button data-filter=".cat--4"><span class="filter-text">LTST</span></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
            <div class="text-center">

<?php echo $session->message; ?>

</div>
                <div class="grid-metro5 mesonry-list">
                    <div class="resizer"></div>
                    <?php foreach($plans as $plan) { ?>
    
                    <!-- start single product -->
                    <div class="grid-metro-item cat--1">
                        <div class="product-style-one no-overlay">
                            <div class="card-thumbnail">
                                <a href="product-details.html"><img src="1000ltnt.jpg" alt="NFT_portfolio"></a>
                            </div>
                            <div class="product-share-wrapper">
                                <div class="profile-share">
                                    <a class="more-author-text" href="#"><?php echo $plan->plan_name; ?>wallet</a>
                                </div>
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
                            </div>
                            <a href="product-details.html"><span class="product-name"><?php echo $plan->plan_profit * 1; ?> LTNT</span></a>
                            <span class="latest-bid">Price : <?php echo $plan->plan_price * 1; ?>$</span>
                            <div class="bid-react-area">
                                <div class="last-bid"><?php echo $plan->plan_price / 10; ?> LTC</div>
                                <div class="react-area">
                                </div>
                                <form action="" method="post">
                                <input type="hidden" name="type" value="<?php echo $plan->id; ?>">
                                <button type="submit" class="btn btn-primary-alta btn-small" name="buy"><b>BUY Token's</b></button>         
                    </form>   
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- end single product -->
                    <!-- start single product -->
             
                    <!-- end single product -->
                </div>
            </div>
        </div>
    </div>
    <!-- end product area -->
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
    <!-- Start Footer Area -->
 
    <!-- End Footer Area -->
    <!-- Start Footer Area -->
    <div class="copy-right-one ptb--20 bg-color--1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="copyright-left">
                        <span>©2023 LTC-20.net, Inc. All rights reserved.</span>
                        <ul class="privacy">
                            <li><a href="terms-condition.html">Terms</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="copyright-right">
                        <ul class="social-copyright">
                            <li><a href="#"><i data-feather="facebook"></i></a></li>
                            <li><a href="#"><i data-feather="twitter"></i></a></li>
                            <li><a href="#"><i data-feather="instagram"></i></a></li>
                            <li><a href="#"><i data-feather="linkedin"></i></a></li>
                            <li><a href="#"><i data-feather="mail"></i></a></li>
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