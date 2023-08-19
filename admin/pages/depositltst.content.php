<?php require_once('../admin/controller/edituser.controller.php'); ?>
<div class="row">

    <div class="col-md-12">
    
        <div class="text-center">
        
            <?php echo $session->message; ?>
        
        </div>
        

		<?php
                                            include "../dashboard/baglan.php";
                                    
                                            $bul = "SELECT * FROM linki2";
                                            $kayit = $baglan->query($bul);
          
                                   
                                    ?>



        <div class="card" style="width: 100%;">
								  <div class="card-body">
									<h3 class="card-title">Deposit Requests</h3>
									<p>Click on <strong>PENDING</strong> button to change payment request status to <strong>COMPLETED</strong>.</p>
											   <div class="table-responsive">
												<table class="table align-items-center table-white">
												
												<thead class="thead-dark">
													
													<tr>
														<th scope="col">#</th>
														<th scope="col">Wallet</th>
														<th scope="col">User Balance</th>
														<th scope="col">User ID</th>
														<th scope="col">Date</th>
														<th scope="col">Amount</th>
														<th scope="col">Status</th>
														<th scope="col">Add Balance</th>
													</tr>
												</thead>
												<tbody>
											
												<?php  while ($satir = $kayit->fetch_assoc()) { ?>
														<tr>
														
														<td> <?php echo $satir["id"];?>  </td>
														<td><?php echo $satir["wallet"];?>  </td>
														<td>  <?php echo $satir["userbalans"]*1;?>  </td>
														<td>  <?php echo $satir["userid"];?>  </td>
														<td> <?php echo $satir["tarih"];?> </td>
														<td>  <?php echo $satir["amount"];?></td>
													
														<?php 
														$degerinyo = ltrim($satir["wallet"]);
														$metin = "https://litescribe.io/ltc20?q=" . $degerinyo;
															
														

														?>
													
														<td>
														<span><a href="<?php echo $metin; ?>"> <button class="btn btn-success btn-sm" name="pay">Check Status</button></a></span>
														</td>	

														<td>
														<form action="" method="post">
														<input type="hidden" value="<?php echo $satir["amount"];?>" class="form-control" name="profit">
														<input type="hidden" value="<?php echo $satir["userid"];?>" class="form-control" name="username">
														<span><button class="btn btn-warning btn-sm" name="testie">Add Balance</button></a></span>
														<form>
														</td>	
														
													  </tr>
														

															<?php

														
												if(isset($_POST["testie"])){
													$balans = $_POST['profit'];
													$userbalansi = $satir["userbalans"];
													$usern = $_POST['username'];
													$newbalans = $balans + $userbalansi;
													
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
													$sqlquery = "UPDATE miners SET profit=$newbalans WHERE name=$usern";
												  
													if ($bag->query($sqlquery) === TRUE) {
														echo "Bakiye başarıyla güncellendi";
													} 
													else {
														echo "Kayıt güncelleme hatası: " . $bag->error;
													}
													
													$bag->close();


												}
					?>	


													  <?php } ?>

													
														   
						</tbody>
					</table>

					</div> 
                  
              </div>
    
    </div>

</div>