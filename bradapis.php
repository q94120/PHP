<?php
define('LETTERS', 'ABCDEFGHJKLMNPQRSTUVXYWZIO');
    function checkTWId($id){
        $ret = false;
        // if(strlen($id) == 10){
        //     $c1 = substr($id, 0, 1);
        //     $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        //     if(strpos($letters, $c1) !== false){
        //         $c2 = substr($id, 1, 1);
        //         if($c2 == '1' || $c2 == '2'){

        //         }

        //     }

        // }
        
        $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $values = [1,0,9,8,7,6,5,4,9,3,2,2,1,0,8,9,8,7,6,5,4,3,1,3,2,0];
        if (preg_match('/^[A-Z][12][0-9]{8}$/', $id)){  // A-Z    1or2   0-9 *  8次
            $v1 = substr($id, 0, 1);
            $v2 = strpos($letters, $v1);
            $e1 = $values[$v2];
            $n1 = substr($id, 1, 1);
            $n2 = substr($id, 2, 1);
            $n3 = substr($id, 3, 1);
            $n4 = substr($id, 4, 1);
            $n5 = substr($id, 5, 1);
            $n6 = substr($id, 6, 1);
            $n7 = substr($id, 7, 1);
            $n8 = substr($id, 8, 1);
            $n9 = substr($id, 9, 1);
            
            $N = $e1 + ($n1 * 8) + ($n2 * 7) + ($n3 * 6) + ($n4 * 5) + ($n5 * 4)
             + ($n6 * 3) + ($n7 * 2) + ($n8 * 1) + ($n9 * 1);
            
            if ($N % 10 == 0){
                $ret = true;
            } 
        }
        return $ret;
    }

    function createTWIdByRandom(){
        $area = substr(LETTERS, rand(0,25), 1);
        return createTWIdByArea($area);
    }
    function createTWIdByArea($area = 'A'){
        $gender = rand(0,1) == 0;
        return createTWIdByBoth($area, $gender);
    }
    
    function createTWIdByGender($gender = true){
        $area = substr(LETTERS, rand(0,25), 1);
        return createTWIdByBoth($area, $gender); 
    }
    
    function createTWIdByBoth($area, $gender){
        $id = $area;
        $id .= $gender ? "1" : "2";
        for ($i=0; $i<7; $i++){
            $id .= rand(0,9);
        } 
        for ($i=0; $i<10;$i++){
            if (checkTWId($id . $i)){
                $id .= $i;
                break;
            }
        }
    
        return $id;
    }


?>