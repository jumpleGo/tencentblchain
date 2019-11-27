<?php 
require './../vendor/autoload.php';


use Morrislaptop\Firestore\Factory;
use Kreait\Firebase\ServiceAccount;



$serviceAccount = ServiceAccount::fromJsonFile('./../tencent-1de4b-firebase-adminsdk-208fo-cf7ffbcd21.json');

$firestore = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->createFirestore();


    
   
    

    $merchant_id = '173610';
    $merchant_secret = '0dzdcrjc';
    //  function getIP() {
    //  if(isset($_SERVER['HTTP_X_REAL_IP'])) return $_SERVER['HTTP_X_REAL_IP'];
    //  return $_SERVER['REMOTE_ADDR'];
    //  }
    //  if (!in_array(getIP(), array('136.243.38.147', '136.243.38.149', '136.243.38.150', '136.243.38.151', '136.243.38.189', '136.243.38.108'))) {
    //  die("hacking attempt!");
    //  }

    $sign = md5($merchant_id.':'.$_REQUEST['AMOUNT'].':'.$merchant_secret.':'.$_REQUEST['MERCHANT_ORDER_ID']);

    if ($sign != $_REQUEST['SIGN']) {
      die('none');
    } else{
      $amount = (int)str_replace(array(' ', ','), '', $_REQUEST['AMOUNT']);
      $uid = $_REQUEST['us_uid'];  
      
      $collection = $firestore->collection('users');
      $user = $collection->document($uid);
      $snap = $user->snapshot();
      $bal =  $snap['balance']; 
      $button = $snap['button'];

      $newbal = $bal + $amount;
      $user->set([ 'balance' => $newbal, 'button' => $button]);

      die('added '.$amount.' tokens, button : '.$button.' ');
    }
   
      
    
  
    

?>

 



  

    
 
  

