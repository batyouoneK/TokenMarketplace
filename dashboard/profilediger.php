<?php include('includes/header.php'); ?>
<?php include('includes/left-navigation.php'); ?>
<?php if($session->is_signed_in()) : ?>
<?php $user = Users::find_user_by_id($session->user_id); ?>
<?php require_once('controller/profile.controller.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edit Profile || Nuron - NFT Marketplace Template</title>
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
                            <a id="" class="btn btn-primary-alta btn-small" target="_blank" href="login.php">LOGIN</a>
                        </div>
                    </div>
                    <div class="setting-option header-btn rbt-site-header" id="rbt-site-header">
                        <div class="icon-box">
                            <a id="" class="btn btn-primary-alta btn-small" style="background-color:green;" target="_blank" href="register.php">&nbsp&nbsp&nbsp&nbspREGISTER&nbsp&nbsp&nbsp&nbsp</a>
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
                                    <img class="sun-image" src="https://rainbowit.net/html/nuron/https://rainbowit.net/html/nuron/assets/images/icons/sun-01.svg" alt="Sun images">
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                                    <img class="Victor Image" src="https://rainbowit.net/html/nuron/https://rainbowit.net/html/nuron/assets/images/icons/vector.svg" alt="Vector Images">
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
                    <a class="logo-light" href="index.html"><img src="https://rainbowit.net/html/nuron/assets/images/logo/logo-white.png" alt="nft-logo"></a>
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
    <div class="rn-breadcrumb-inner ptb--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <h5 class="title text-center text-md-start">Edit Profile</h5>
                </div>
             
            </div>
        </div>
    </div>
    <!-- end page title area -->


    <!-- Start tabs area -->
    <div class="edit-profile-area rn-section-gapTop">
        <div class="container">
            <div class="row plr--70 padding-control-edit-wrapper pl_md--0 pr_md--0 pl_sm--0 pr_sm--0">
                <div class="col-12 d-flex justify-content-between mb--30 align-items-center">
                    <h4 class="title-left">Edit Your Profile</h4>
                    
                </div>
            </div>
            <div class="row plr--70 padding-control-edit-wrapper pl_md--0 pr_md--0 pl_sm--0 pr_sm--0">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <!-- Start tabs area -->
                    <nav class="left-nav rbt-sticky-top-adjust-five">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active " id="nav-home-tabs" data-bs-toggle="tab" data-bs-target="#nav-homes" type="button" role="tab" aria-controls="nav-homes" aria-selected="true">Profile Setting's</button>

                        </div>
                    </nav>
                    <!-- End tabs area -->
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 mt_sm--30">
                    <div class="tab-content tab-content-edit-wrapepr" id="nav-tabContent">

                        <!-- sigle tab content -->
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <!-- start personal information -->
                                        <div class="text-center">
                        
                                        <?php echo "<br>" . $session->message; ?>
                                    
                                    </div>
        
                            <div class="nuron-information">
                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="profile-form-wrapper">
                                    <div class="input-two-wrapper mb--15">
                                        <div class="first-name half-wid">
                                            <label for="contact-name" class="form-label">Username</label>
                                            <input name="contact-name" id="contact-name" type="text" disabled="" value="<?php echo $user->username; ?>">
                                        </div>
                                        <div class="last-name half-wid">
                                            <label for="contact-name-last" class="form-label">Your Wallet</label>
                                            <input name="contact-name" id="contact-name-last" disabled="" type="text" value="<?php echo $user->email; ?>">
                                        </div>
                                    </div>
                                    <div class="email-area">
                                        <label for="Email" class="form-label">Payment Wallet</label>
                                        <input type="text" name="payment_address" value="<?php echo $user->payment_address ?>" id="text-input" placeholder="Receiving address" class="form-control">
                                        <small> <strong style="color:red; font-size:15px;"> Note: </strong> <strong style="color:white; font-size:12px;"> This is the address where your balance will be sent when you make a Litecoin or LTST withdraw. Please enter an LTC20 Address ! </strong> </small>
                                    </div>
                                </div>
                                <br>
                               <center> <h5> Change Your Password </h5> </center>
                                <div class="input-two-wrapper mb--15">
                                        <div class="first-name half-wid">
                                            <label for="contact-name" class="form-label">Current Password</label>
                                            <input type="password" name="password" id="password-input" placeholder="Password" class="form-control">
                                            <small class="help-block form-text">Only if you want to change your password</small>
                                        </div>
                                    &nbsp &nbsp &nbsp &nbsp &nbsp
                                        <div class="last-name half-wid">
                                            <label for="contact-name-last" class="form-label">New Password</label>
                                            <input type="password" name="newpassword" id="password-input" placeholder="Password" class="form-control">
                                            <small class="help-block form-text">Only if you want to change your password</small>

                                        </div>
                                    </div>

                                <!-- edit bio area Start-->
                         
                                <!-- edit bio area End -->

                                <!--  -->
                             

                          
                             
                                <div class="button-area save-btn-edit">
                                    <a href="#" class="btn btn-primary-alta mr--15" onclick="customAlert.alert('Cancel Edit Profile?')">Cancel</a>
                                   <button type="submit" name="update" class="btn btn-primary btn-block">Save</button>
                                </div>
                                </form>
                            </div>
                            <!-- End personal information -->
                        </div>
                        <!-- End single tabv content -->
                        <!-- sigle tab content -->
                        <div class="tab-pane fade" id="nav-homes" role="tabpanel" aria-labelledby="nav-home-tab">
                            <!-- start personal information -->
                            <div class="nuron-information">

                                <div class="profile-form-wrapper">
                                    <div class="input-two-wrapper mb--15">
                                        <div class="first-name half-wid">
                                            <label for="contact-name" class="form-label">First Name</label>
                                            <input name="contact-name" id="contact-name" type="text" value="Mr.">
                                        </div>
                                        <div class="last-name half-wid">
                                            <label for="contact-name-last" class="form-label">Last Name</label>
                                            <input name="contact-name" id="contact-name-last" type="text" value="Sunayra">
                                        </div>
                                    </div>
                                    <div class="email-area">
                                        <label for="Email" class="form-label">Edit Your Email</label>
                                        <input name="email" id="Email" type="email" value="example@gmail.com">
                                    </div>
                                </div>


                                <!-- edit bio area Start-->
                                <div class="edit-bio-area mt--20">
                                    <label for="Discription" class="form-label">Edit Your Bio</label>
                                    <textarea id="Discription">Hello, I am Alamin, A Front-end Developer...</textarea>
                                </div>
                                <!-- edit bio area End -->

                                <!--  -->
                                <div class="input-two-wrapepr-prifile">
                                    <!-- start Role area -->
                                    <div class="role-area mt--15">
                                        <label for="Role" class="form-label mb--10">Your Role</label>
                                        <input name="Role" id="Role" type="text" value="Front-end Developer">
                                    </div>
                                    <!-- End Role area -->
                                    <!-- select gender -->
                                    <select class="profile-edit-select">
                                        <option selected>Select Your Gender</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Third Gender</option>
                                    </select>
                                    <!-- end gender -->
                                </div>

                                <div class="input-two-wrapper mt--15">
                                    <div class="half-wid currency">
                                        <!-- select gender -->
                                        <select class="profile-edit-select">
                                            <option selected>Currency</option>
                                            <option value="1">($)USD</option>
                                            <option value="2">wETH</option>
                                            <option value="3">BIT Coin</option>
                                        </select>
                                        <!-- end gender -->
                                    </div>
                                    <div class="half-wid phone-number">
                                        <label for="PhoneNumber" class="form-label">Phone Number</label>
                                        <input name="contact-name" id="PhoneNumber" type="text" value="+880100000000">
                                    </div>
                                </div>
                                <div class="input-two-wrapper mt--15">
                                    <div class="half-wid currency">
                                        <!-- select gender -->
                                        <select class="profile-edit-select">
                                            <option selected>Location</option>
                                            <option value="1">United State</option>
                                            <option value="2">Katar</option>
                                            <option value="3">Canada</option>
                                        </select>
                                        <!-- end gender -->
                                    </div>
                                    <div class="half-wid phone-number">
                                        <label for="PhoneNumbers" class="form-label">Address</label>
                                        <input name="contact-name" id="PhoneNumbers" type="text" value="USA Cidni">
                                    </div>
                                </div>
                                <div class="button-area save-btn-edit">
                                    <a href="#" class="btn btn-primary-alta mr--15" onclick="customAlert.alert('Cancel Edit Profile?')">Cancel</a>
                                    <a href="#" class="btn btn-primary" onclick="customAlert.alert('Successfully Saved Your Profile?')">Save</a>
                                </div>

                            </div>
                            <!-- End personal information -->
                        </div>
                        <!-- End single tabv content -->

                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <!-- change password area Start -->
                            <div class="nuron-information">
                                <div class="condition">
                                    <h5 class="title">Create Your Password</h5>
                                    <p class="condition">
                                        Passwords are a critical part of information and network security. Passwords
                                        serve to protect user accounts but a poorly chosen password, if compromised,
                                        could put the entire network at risk.
                                    </p>
                                    <hr />
                                    <div class="email-area">
                                        <label for="Email2" class="form-label">Enter Email</label>
                                        <input name="email" id="Email2" type="email" value="">
                                    </div>
                                </div>
                                <div class="input-two-wrapper mt--15">
                                    <div class="old-password half-wid">
                                        <label for="oldPass" class="form-label">Enter Old Password</label>
                                        <input name="pass" id="oldPass" type="password">
                                    </div>
                                    <div class="new-password half-wid">
                                        <label for="NewPass" class="form-label">Create New Password</label>
                                        <input name="password" id="NewPass" type="password">
                                    </div>
                                </div>
                                <div class="email-area mt--15">
                                    <label for="rePass" class="form-label">Confirm Password</label>
                                    <input name="Password" id="rePass" type="password" value="">
                                </div>
                                <a href="#" class="btn btn-primary save-btn-edit" onclick="customAlert.alert('Successfully Changed Password?')">Save</a>
                            </div>
                            <!-- change password area ENd -->
                        </div>

                        <div class="tab-pane fade " id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                            <!-- start Notification Setting  -->
                          
                            <!-- End Notification Setting  -->


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End tabs area -->


    <!-- Start Footer Area -->
  
    <!-- End Footer Area -->
    <!-- Start Footer Area -->
    <div class="rn-footer-area footer-for-left-sticky-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner text-center">
                        <div class="logo logo-custom-css">
                            <a class="logo-light" href="index.html"><img src="logow.png" alt="nft-logo"></a>
                            <a class="logo-dark" href="index.html"><img src="https://rainbowit.net/html/nuron/https://rainbowit.net/html/nuron/assets/images/logo/logo-dark.png" alt="nft-logo"></a>
                        </div>
                        <p class="description mt--30">© 2023. All rights reserved by LTC-20.net</a></p>
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