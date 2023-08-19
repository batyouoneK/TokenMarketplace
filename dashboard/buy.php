<?php include('includes/header.php'); ?>
<?php include('includes/left-navigation.php'); ?>
<?php if($session->is_signed_in()) : ?>
<?php $user = Users::find_user_by_id($session->user_id); ?>
<?php require_once('controller/buy.controller.php'); ?>
    <!-- Right Panel -->
    <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">DogeTR <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Financial
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Balance Transactions</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="deposit.php">Deposit</a>
            <a class="collapse-item" href="payout.php">Withdraw</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Mining Transactions</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="buy.php">Buy Miner</a>
            <a class="collapse-item" href="miners.php">Your Miner's</a>
      
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        General
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Referral Transactions</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="referrals.php">Referral's</a>
            <a class="collapse-item" href="yourreferrals.php">Referral History</a>

          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="support.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Support</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                 
                  <?php 
                        $place = "";
						
						if(empty($payments)) {
							
						} else {
							
							foreach($payments as $payment) {
                        $place = ++$place;
                      ?>
                        
                        <tr>

							<td>
							<?php if($payment->status == 0) : ?>

							<?php else: ?>
							
								<?php if($payment->status == 100) : ?>
								
                  <div>
                    <div class="small text-gray-500"><?php echo $payment->deposit_date; ?></div>
                    <span class="font-weight-bold">Your <?php echo $payment->value; ?> Dogecoin deposit has been created !</span>
                  </div>
									<button type="button" class="btn btn-success btn-sm">Complete</button>
								
								<?php else: ?>
								
								<?php endif; ?>

							<?php endif; ?>
							</td>
						</tr>
                        
                      <?php } ?> 
							
						<?php } ?>
                </tbody>
            </table>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profile.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="profile.php">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <style>
      
        
        .pricing {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-justify-content: center;
            justify-content: center;
            width: 100%;
            margin: 0 auto 3em;
        }
        
        .pricing-item {
            position: relative;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: stretch;
            align-items: stretch;
            text-align: center;
            -webkit-flex: 0 1 330px;
            flex: 0 1 330px;
        }
        
        .pricing-action {
            color: inherit;
            border: none;
            background: none;
        }
        
        .pricing-action:focus {
            outline: none;
        }
        
        .pricing-feature-list {
            text-align: left;
        }
        
        .pricing-palden .pricing-item {
            font-family: 'Open Sans', sans-serif;
            cursor: default;
            color: #84697c;
            background: #fff;
            box-shadow: 0 0 10px rgba(46, 59, 125, 0.23);
            border-radius: 20px 20px 10px 10px;
            margin: 1em;
        }
        
        @media screen and (min-width: 66.25em) {
            .pricing-palden .pricing-item {
                margin: 1em -0.5em;
            }
            .pricing-palden .pricing__item--featured {
                margin: 0;
                z-index: 10;
                box-shadow: 0 0 20px rgba(46, 59, 125, 0.23);
            }
        }
        
        .pricing-palden .pricing-deco {
            border-radius: 10px 10px 0 0;
            background: rgba(76, 70, 101, 0.99);
            padding: 4em 0 9em;
            position: relative;
        }
        
        .pricing-palden .pricing-deco-img {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 160px;
        }
        
        .pricing-palden .pricing-title {
            font-size: 0.75em;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 5px;
            color: #fff;
        }
        
        .pricing-palden .deco-layer {
            -webkit-transition: -webkit-transform 0.5s;
            transition: transform 0.5s;
        }
        
        .pricing-palden .pricing-item:hover .deco-layer--1 {
            -webkit-transform: translate3d(15px, 0, 0);
            transform: translate3d(15px, 0, 0);
        }
        
        .pricing-palden .pricing-item:hover .deco-layer--2 {
            -webkit-transform: translate3d(-15px, 0, 0);
            transform: translate3d(-15px, 0, 0);
        }
        
        .pricing-palden .icon {
            font-size: 2.5em;
        }
        
        .pricing-palden .pricing-price {
            font-size: 5em;
            font-weight: bold;
            padding: 0;
            color: #fff;
            margin: 0 0 0.25em 0;
            line-height: 0.75;
        }
        
        .pricing-palden .pricing-currency {
            font-size: 0.15em;
            vertical-align: top;
        }
        
        .pricing-palden .pricing-period {
            font-size: 0.15em;
            padding: 0 0 0 0.5em;
            font-style: italic;
        }
        
        .pricing-palden .pricing__sentence {
            font-weight: bold;
            margin: 0 0 1em 0;
            padding: 0 0 0.5em;
        }
        
        .pricing-palden .pricing-feature-list {
            margin: 0;
            padding: 0.25em 0 2.5em;
            list-style: none;
            text-align: center;
        }
        
        .pricing-palden .pricing-feature {
            padding: 1em 0;
        }
        
        .pricing-palden .pricing-action {
            font-weight: bold;
            margin: auto 3em 2em 3em;
            padding: 1em 2em;
            color: #fff;
            border-radius: 30px;
            background: #4d4766;
            -webkit-transition: background-color 0.3s;
            transition: background-color 0.3s;
        }
        
        .pricing-palden .pricing-action:hover,
        .pricing-palden .pricing-action:focus {
            background-color: #100A13;
        }
        
        .pricing-palden .pricing-item--featured .pricing-deco {
            padding: 5em 0 8.885em 0;
        }
    </style>
</head>

       
            
        <div class="row">

<div class="col-md-12 text-center">

   
    <br>

</div>

</div>
<br>
<div class="text-center">

<?php echo $session->message; ?>

</div>
<br>
<div class="row">

<?php foreach($plans as $plan) { ?>

  <div class="pricing pricing-palden">
            <div class="pricing-item">
                <div class="pricing-deco">
                    <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" y="0px">
                        <path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
                        <path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
                        <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
	H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
                        <path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
                    </svg>
                    <div class="pricing-price"><span class="pricing-currency"></span>
                        <span class="pricing-period"></span>
                    </div>
                    <h3 class="pricing-title">Calculate Your Profit</h3>
                </div>
                <ul class="pricing-feature-list">
                    <li class="pricing-feature">Daily Earning : <?php $b = $plan->plan_profit * 1; echo $b; ?> <?php echo $setting->currency; ?> </li>
                    <li class="pricing-feature">Weekly Earning : <?php $b = $plan->plan_profit * 7; echo $b; ?> <?php echo $setting->currency; ?></li>
                    <li class="pricing-feature">Monthly Earning : <?php $b = $plan->plan_profit * 30; echo $b; ?> <?php echo $setting->currency; ?></li>
                    <li class="pricing-feature">Yearly Earning : <?php $b = $plan->plan_profit * 365; echo $b; ?> <?php echo $setting->currency; ?></li>

                </ul>
            </div>

            <div class="pricing-item pricing__item--featured">
                <div class="pricing-deco">
                    <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" y="0px">
                        <path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
                        <path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
                        <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
	H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
                        <path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
                    </svg>
                    <div class="pricing-price"><span class="pricing-currency">Ɖ</span><?php $d = $plan->plan_price;
                    $kar = strlen($d);
         
                    if ($kar == 12) {
                      echo substr($d, 0, 3);
                    }
                    if ($kar == 13) {
                      echo substr($d, 0, 4);
                    }
                    if ($kar == 14) {
                      echo substr($d, 0, 5);
                    }
                    if ($kar == 15) {
                      echo substr($d, 0, 6);
                    }
                  
                   
                     ?>
                        <span class="pricing-period"></span>
                    </div>
                    <h3 class="pricing-title"><?php echo $plan->plan_name; ?></h3>
                </div>
                <ul class="pricing-feature-list">
                <li class="pricing-feature">Percent Per Day <?php echo $plan->plan_percent; ?>%</li>
                    <li class="pricing-feature">Profit <?php echo $plan->plan_profit; ?> <?php echo $setting->currency; ?></li>
                    <li class="pricing-feature">Duration <?php echo $plan->plan_duration; ?> day(s)</li>
                    <li class="pricing-feature">Price <?php echo $plan->plan_price; ?> <?php echo $setting->currency; ?></li>
                </ul>
                <form action="" method="post">
                        <input type="hidden" name="type" value="<?php echo $plan->id; ?>">
                        <button type="submit" class="pricing-action" name="buy"><b>CLICK HERE TO PURCHASE</b></button>
                    </form>   
            </div>
            <div class="pricing-item">
                <div class="pricing-deco">
                    <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" y="0px">
                        <path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
                        <path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
                        <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
	H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
                        <path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
                    </svg>
                    <div class="pricing-price"><span class="pricing-currency"></span>
                        <span class="pricing-period"></span>
                    </div>
                    <h3 class="pricing-title">Resources</h3>
                </div>
                <ul class="pricing-feature-list">
                    <li class="pricing-feature">7/24 Support</li>
                    <li class="pricing-feature">Daily Withdraw </li>
                    <li class="pricing-feature">Fast And Safe Buying</li>
                    <li class="pricing-feature">Win-Win-Win</li>
                </ul>
            </div>


    
</div>
<?php } ?>
</div>

      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>

        <!-- /.content -->
 

        
<?php else: ?>
<?php redirect('../login.php'); ?>
<?php endif; ?>