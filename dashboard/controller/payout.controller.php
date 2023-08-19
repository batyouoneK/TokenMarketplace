<?php require_once('controller/buy.controller.php'); ?>
<?php

if(isset($_POST['request'])) {
	
	$address = $user->payment_address;
	$amount = $_POST['amount'];
	$secimverisi = $_POST['secim'];
	
	if($user->payment_address == "No Address") {
		$session->message = "<div class='alert alert-warning' role='alert'><strong>Warning!</strong> Please add a {$setting->currency} address to be able to withdraw!</div>";
	} else {
		
		if(!is_numeric($amount)) {
        
        $session->message = "<div class='alert alert-warning' role='alert'><strong>Warning!</strong> Something went wrong, please try again!</div>";
        
    } else {
            if ($secimverisi == "2") { 
       			 if($amount < 999) {
            
	      	$session->message = "<div class='alert alert-warning' role='alert'><strong>Warning!</strong> 1000 LTST minimum to withdraw!</div>";
            
	          } else {
			 require_once('controller/buy.controller.php');
		      if($profitperday->profit < $amount) {
                  
			     $session->message = "<div class='alert alert-warning' role='alert'><strong>Warning!</strong> Your balance is lower than your request!</div>";
                  
		      } else {
				$adresson = $address . " " . " : LTST";
			     $add = Users::add_request($user->username, $adresson, $amount);
			
			     if($add) {
					$degerr = $profitperday->profit;
                    $degerrson = $degerr - $amount;
					$usern = $user->id;
						$sunucu = "localhost";
						$kullanici = "root";
						$parola = "root";
						$veritabani = "anycoin";
					  
						// Bağlantı oluşturma
						$bag = new mysqli($sunucu, $kullanici, $parola, $veritabani);
					  
						// Bağlantı kontrolü					
						if ($bag->connect_error) {
							die("Bağlantı hatası: " . $bag->connect_error);
						}
					  
						// Kayıt silmek için MySQL komutu
						$sqlquery = "UPDATE miners SET profit=$degerrson WHERE name=$usern";
					  
						if ($bag->query($sqlquery) === TRUE) {
							
						} 
						else {
							
						}
						
						$bag->close();


					
					

                    $session->message = "<div class='alert alert-info' role='alert'><strong>LTST withdraw request has been created!</strong> Your request was recorded!</div>";
					?> <meta http-equiv="refresh" content="2; URL=payoutdiger.php" />
 					<?php
				
			}
			
		}
			
		}
		
	} else {
		if($amount < 0.099) {
            
			$session->message = "<div class='alert alert-warning' role='alert'><strong>Warning!</strong> 0.1 Litecoin minimum to withdraw!</div>";
				
			   } else {
			
				  if($user->balance < $amount) {
					  
					 $session->message = "<div class='alert alert-warning' role='alert'><strong>Warning!</strong> Your balance is lower than your request!</div>";
					  
				  } else {
					 $adresson = $address . " " . " : Litecoin";
					 $add = Users::add_request($user->username, $adresson, $amount);
				
					 if($add) {
	
						$user->balance = $user->balance - $amount;
	
						$user->update();
	
						$session->message = "<div class='alert alert-info' role='alert'><strong>Litecoin withdraw request has been created!</strong> Your request was recorded!</div>";
						?> <meta http-equiv="refresh" content="2; URL=payoutdiger.php" />
						<?php
				}
				
				
				
			}
			
		}
	}
        
    }
		
	} 
	
}


?>
<?php

$withdrawals = Users::get_withdrawal_requests($user->username);

?>
