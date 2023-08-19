<?php




            $data_json = file_get_contents('data.json');
            $decoded_json = json_decode($data_json, true);
            $datas = $decoded_json['datas'];

            echo $datas[0]['wallet'];
































?>  