<?php
    $public = 'sqrrbBcSxpOtPFQdNykhkyLY4R2EoDDY'; // api key
    $secret = 'MZqCaX1SSYbE0LZH5TemQ9r6m5qVInvM'; // api sercet
    $data = array(
     'amount' => $_REQUEST['amount'],
     'currency' => $_REQUEST['currency'],
     'orderId' => $_REQUEST['orderId'],
     'urlResult' => $_REQUEST['urlResult'],
     'urlSuccess' => $_REQUEST['urlSuccess'],
     'urlFail' => $_REQUEST['urlFail']
    );
    $method = 'payment';
    $data['token'] = $public;

    $data['sign'] = md5(implode('', $data) . $secret);
 
    $url = 'https://merchant.betatransfer.io/api/' . $method . '?' . http_build_query($data);

     $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch,CURLOPT_USERAGENT, 'Betatransfer');
     curl_setopt($ch, CURLOPT_HEADER, 0);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_TIMEOUT, 30);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
     curl_setopt($ch, CURLOPT_POST, true);
     curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
     $response = curl_exec($ch);
     curl_close($ch);

  


$new_url = (json_decode($response, true));

print_r('Loading...'.$new_url['url']);
    ?>


    <script>

    setTimeout(() => {
        location.href = '<?php echo $new_url['url'] ?>';
    }, 1000);
  
    </script>


