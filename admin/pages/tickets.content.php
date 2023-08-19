<div class="row">
    
    <div class="col-md-12">
        
        <div class="text-center">
    
        <?php echo $session->message; ?>
    
        </div>
    
        <div class="card">
            <div class="card-header">
                <strong class="card-title">My latest 10 tickets</strong>
            </div>
        <div class="table-stats order-table ov-h">
            <table class="table ">
                <thead>
                    <tr>
                        <th class="serial">#</th>
                        <th>Amount</th>
                        <th>Price</th>
                        <th>Wallet</th>
                        <th>User ID</th>
                        <th>Created</th>
                        <th>Status</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $place = "";
						
						if(empty($tickets)) {
							
                            
						} else {
							
							foreach($tickets as $ticket) {
                        $place = ++$place;
                      ?>
                        
                        <tr>
							<td><?php echo $place; ?></td>
							<td><?php echo $ticket->type; ?></td>
							<td><?php echo $ticket->title; ?> </td>
                            <td><?php echo substr($ticket->message, 0, 150)?> </td>
                            <td><?php  $lmn = Users::find_user_by_usernameh2($ticket->message);
                                       echo $lmn->id;
                            
                            
                            ?> </td>
                           
                            <td><?php echo $ticket->created; ?> </td>
                            <td><?php if($ticket->status == "pending"){
                                ?> <button type="button" class="btn btn-warning">Pending</button> <?php
                            } if ($ticket->status == "replied"){
                               ?> <button type="button" style="background:green;color:black;" class="btn btn-outline-secondary">Replied</button> <?php
                            }; ?>
                           <?php if ($ticket->status == "selled"){
                               ?> <button type="button" style="background:grey;color:black;" class="btn btn-outline-secondary">Selled</button> <?php
                            }; ?> </td>
                            <td><a href="ticket.php?id=<?php echo $ticket->id; ?>" type="button" class="btn btn-warning">View</a></td>
                            <td>
                                <form action="" method="post">
                                    <input type="hidden" name="ticketID" value="<?php echo $ticket->id; ?>">
                                    <button type="submit" name="delete" class="btn btn-danger">Remove</button>
                                </form>
                            </td>
						</tr>
                        
                      <?php } ?> 
							
						<?php } ?> 
                </tbody>
            </table>
            </div> 
        </div>
        
    </div>

</div>