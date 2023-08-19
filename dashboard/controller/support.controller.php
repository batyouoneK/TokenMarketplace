<?php 

if(isset($_POST['create'])) {
    $yazildi = 0;
    $userID = $user->id;
    $type = $_POST['type'];
    $title = $_POST['title'];
    $balans = $_POST['balans'];
    $message = $_POST['message'];
    
    if(empty($type) || empty($title) || empty($message)) {
        $session->message = "<div class='alert alert-danger' role='alert'><strong>Warning!</strong> Fields cannot be empty!</div>";
    } else {
        
        if($type < 1 || $type > 5) {
            $session->message = "<div class='alert alert-danger' role='alert'><strong>Warning!</strong> Something went wrongG!</div>";
        } else {
            
            if($type == 1) {
                $deger = "5000";
                if($balans > $deger){
                    $type = '5000 LTST';
                    $add = Ticket::add_ticket($userID, $type, $title, $message);
        
                    if($add) {
                        $yazildi = 1;
                        $session->message = "<div class='alert alert-info' role='alert'>Your order has been successfully created. Listing will be approved and completed as soon as possible !</div>";

                        $degerrson = $balans - $deger;
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




                    } else {
                        $session->message = "<div class='alert alert-danger' role='alert'><strong>Warning!</strong> Your balance is not enough for selling !</div>";
                    }
                } else {
                    if($yazildi = 0) { 
                        $session->message = "<div class='alert alert-danger' role='alert'><strong>Warning!</strong> Your balance is not enough for selling !</div>";
                    }
                }
            } 
            if($type == 2) {
                $deger = "10000";
                if($balans > $deger){
                    $type = '10000 LTST';
                    $add = Ticket::add_ticket($userID, $type, $title, $message);
        
                    if($add) {
                        $yazildi = 1;
                        $session->message = "<div class='alert alert-info' role='alert'>Your order has been successfully created. Listing will be approved and completed as soon as possible !</div>";

                        $degerrson = $balans - $deger;
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

                    } else {
                        $session->message = "<div class='alert alert-danger' role='alert'><strong>Warning!</strong>Warning ! Please contact with any admin !</div>";
                    }
                } else {
                        $session->message = "<div class='alert alert-danger' role='alert'><strong>Warning!</strong> Your balance is not enough for selling !</div>";
                }
            } 
            if($type == 3) {
                $deger = "25000";
                if($balans > $deger){
                    $type = '25000 LTST';
                    $add = Ticket::add_ticket($userID, $type, $title, $message);
        
                    if($add) {
                        $yazildi = 1;
                        $session->message = "<div class='alert alert-info' role='alert'>Your order has been successfully created. Listing will be approved and completed as soon as possible !</div>";

                        $degerrson = $balans - $deger;
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

                    } else {
                        $session->message = "<div class='alert alert-danger' role='alert'><strong>Warning!</strong>Warning ! Please contact with any admin !</div>";
                    }
                } else {
                        $session->message = "<div class='alert alert-danger' role='alert'><strong>Warning!</strong> Your balance is not enough for selling !</div>";
                }
            } 
            if($type == 4) {
                $deger = "50000";
                if($balans > $deger){
                    $type = '50000 LTST';
                    $add = Ticket::add_ticket($userID, $type, $title, $message);
        
                    if($add) {
                        $yazildi = 1;
                        $session->message = "<div class='alert alert-info' role='alert'>Your order has been successfully created. Listing will be approved and completed as soon as possible !</div>";

                        $degerrson = $balans - $deger;
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

                    } else {
                        $session->message = "<div class='alert alert-danger' role='alert'><strong>Warning!</strong>Warning ! Please contact with any admin !</div>";
                    }
                } else {
                        $session->message = "<div class='alert alert-danger' role='alert'><strong>Warning!</strong> Your balance is not enough for selling !</div>";
                }
            } 
            if($type == 5) {
                $deger = "100000";
                if($balans > $deger){
                    $type = '100000 LTST';
                    $add = Ticket::add_ticket($userID, $type, $title, $message);
        
                    if($add) {
                        $yazildi = 1;
                        $session->message = "<div class='alert alert-info' role='alert'>Your order has been successfully created. Listing will be approved and completed as soon as possible !</div>";

                        $degerrson = $balans - $deger;
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

                    } else {
                        $session->message = "<div class='alert alert-danger' role='alert'><strong>Warning!</strong>Warning ! Please contact with any admin !</div>";
                    }
                } else {
                        $session->message = "<div class='alert alert-danger' role='alert'><strong>Warning!</strong> Your balance is not enough for selling !</div>";
                }
            }

            
           
            
            
        }
    
    }
    
}

?>

<?php 

if(isset($_POST['delete'])) {
    
    $ticketID = $_POST['ticketID'];
    
    $find_ticket = Ticket::verify_ticket_id($user->id, $ticketID);
        
    if($find_ticket !== false) {
        
        $delete = Ticket::delete_ticket($ticketID);
        
        $delete_answers = Ticket::delete_ticket_answers($ticketID);
        
        if($delete) {
            $session->message = "<div class='alert alert-info' role='alert'>Your ticket was removed!</div>";
        } else {
            $session->message = "<div class='alert alert-danger' role='alert'><strong>Warning!</strong> Something went wrong!</div>";
        }
        
        
    } else {
        $session->message = "<div class='alert alert-danger' role='alert'><strong>Warning!</strong> Something went wrong!</div>";
    }    
    
    
}

?>

<?php 

$tickets = Ticket::get_tickets($user->id);

?>