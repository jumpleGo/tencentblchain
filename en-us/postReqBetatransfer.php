<?php 
require './../vendor/autoload.php';


use Morrislaptop\Firestore\Factory;
use Kreait\Firebase\ServiceAccount;



$serviceAccount = ServiceAccount::fromJsonFile('./../tencent-1de4b-firebase-adminsdk-208fo-cf7ffbcd21.json');

$firestore = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->createFirestore();


      $amount = (int)str_replace(array(' ', ','), '', $_REQUEST['amount']);
      $amount_dollars = $amount / 65;
      $amount_coin = $amount_dollars / 10;
      $uid = $_REQUEST['orderId'];  
      
      $collection = $firestore->collection('users');
      $user = $collection->document($uid);
      $snap = $user->snapshot();
      $bal =  $snap['balance']; 
      $button = $snap['button'];

      $newbal = $bal + $amount_coin;
      $user->set([ 'balance' => $newbal, 'button' => $button]);

      die('added '.$amount_coin.' tokens, button : '.$button.' ');
    
   
      
    
  
    

?>

 



  

    
 
  

