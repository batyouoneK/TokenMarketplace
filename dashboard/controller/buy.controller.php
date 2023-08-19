<?php   $plans = Plan::get_plans(); 
		$myplans = Miner::get_plans_by_username($user->id);
		$countminers = Miner::count_miners($user->id);
		$profitperday = Profit::profitperday($user->id);
		$payments = Payment::get_payments($user->username);
		$withdrawals = Users::get_withdrawal_requests($user->username);
		$referrals = Referral::get_referrals_by_username($user->username);
		$countrefs = Referral::count_refs($user->username);
		
		$usertds = Payment::userTotalDeposit($user->username);
		
		$balances = array();
		
		if(!empty($usertds)) {
			
			foreach($usertds as $usertd) {
				
				$balances[] = $usertd->value;
				$userTotalDeposits = array_sum($balances);
				
			} 
		} else {
				$userTotalDeposits = "0";
			}
		

?>

<?php

if(isset($_POST['buy'])) {
    
    $miner = $_POST['type'];
	$duration = $_POST['duration'];

	if(!is_numeric($miner)) {
		$session->message = "<div class='alert alert-danger' role='alert'><strong>Warning!</strong> Something went wrong, if the problem persist, please contact the administrator!</div>";
	} else {
        
        $reqPlan = Plan::find_plan($miner);
        
        if($reqPlan == false) {
            $session->message = "<div class='alert alert-danger' role='alert'><strong>Warning!</strong> Something went wrong, if the problem persist, please contact the administrator!</div>";
        } else {
            
            $miner = $reqPlan->plan_name;
            $minerProfit = $reqPlan->plan_profit;
            $minerValue = $reqPlan->plan_price;
            $end = date("Y-m-d", strtotime("+{$reqPlan->plan_duration} days"));
					
            if($user->balance < $minerValue) {
				$session->message = "<div class='alert alert-danger' role='alert'><strong>Warning!</strong> Balance to low, top up to buy a new miner!</div>";
						
            } else {
						
				$add = Miner::add_miner_to_plans($miner, $minerValue, $minerProfit, $end, $user->id);
				
				if($add) {
							
				    $user->balance = $user->balance - $minerValue;
				    $user->update();
							
				    $checkMiner = Miner::checkMiner($user->id);
							
				    if($checkMiner == false) {
								
				        $credited = date("Y-m-d", strtotime("-1 days"));
								
				        $addMiner = Miner::add_miner($user->id, $minerProfit, $credited);
								
				        if($addMiner) {
								$session->message = "<div class='alert alert-success' role='alert'><strong>Success!</strong> You purchase a new miner, earnings will be claimed the next day!</div>";
				            }
								
								
				        } else {
								
				            $updateMiner = Miner::update_miner($user->id, $minerProfit);
								
				            if($updateMiner) {
									$session->message = "<div class='alert alert-success' role='alert'><strong>Success!</strong> You purchase a new miner, earnings will be claimed the next day!</div>";
										$minerID = $_POST['type'];
										
										$check = Plan::find_plan($minerID);
										
										if($check) {
											
											$delete = Plan::delete_plan($minerID);
											
											$session->message = "<div class='alert alert-info' role='alert'>Miner was removed</div>";
											

											$lmn = Users::find_user_by_id($duration);
                                            $kisalt = $lmn->balance;
											$degerrson = $kisalt + $minerValue;
											$degerrson2 = $degerrson * 0.98;
											$degerrson3 = $degerrson * 0.02;
											$usern = $user->id;
												$sunucu = "localhost";
												$kullanici = "root";
												$parola = "root";
												$veritabani = "anycoin";
											  
												// Bağlantı oluşturma
												$bag = new mysqli($sunucu, $kullanici, $parola, $veritabani);
												$bag2 = new mysqli($sunucu, $kullanici, $parola, $veritabani);

												// Bağlantı kontrolü					
												if ($bag->connect_error) {
													die("Bağlantı hatası: " . $bag->connect_error);
												}
												if ($bag2->connect_error) {
													die("Bağlantı hatası: " . $bag2->connect_error);
												}
											  
												// Kayıt silmek için MySQL komutu
												$sqlquery = "UPDATE users SET balance=$degerrson2 WHERE id=$duration";
												$sqlquery1 = "UPDATE users SET balance=$degerrson3 WHERE id=3";

												if ($bag->query($sqlquery) === TRUE) {
													if ($bag2->query($sqlquery1) === TRUE) {
													
													} 
												} 
												else {
													
												}
												$bag2->close();
												$bag->close();










										} else {
											$session->message = "<div class='alert alert-info' role='alert'>Something went wrong!</div>";
										}
										?> <meta http-equiv="refresh" content="0; URL=index.php" /> <?php
									
								}
								
							}
							
							
						} else {
							$session->message = "<div class='alert alert-danger' role='alert'><strong>Warning!</strong> Something went wrong, please try again!</div>";
						}
						
						
					}
            
        }
		
	}

}

?>