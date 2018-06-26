<?php
  include_once("../db.php");
  
    $address = urlencode($_GET['address']);
     
    // google map geocode api url
     $key = "8a8265a039bc0379bbfa2a44d5f1b5cf";
     $url = "http://restapi.amap.com/v3/geocode/geo?key={$key}&address={$address}";

    try {
      // get the json response
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $resp_json = curl_exec($ch);
                  
      // decode the json
      $resp = json_decode($resp_json, true);

      // generate answer
      $answer['success'] = true;
      $answer['data'] = $resp;
      

      $answer['data']['geocodes']['0']['simple'] = array();
      $answer['data']['geocodes']['0']['simple']['road'] = $answer['data']['geocodes']['0']['formatted_address'];
      $answer['data']['geocodes']['0']['simple']['city'] = $answer['data']['geocodes']['0']['city'];
      $answer['data']['geocodes']['0']['simple']['state'] = $answer['data']['geocodes']['0']['province'];
      $answer['data']['geocodes']['0']['simple']['country'] = "中国";
      $answer['data']['geocodes']['0']['simple']['postal_code'] = $answer['data']['geocodes']['0']['adcode'];


      $address_location = explode(',', $answer['data']['geocodes']['0']['location']); 
      $answer['data']['geocodes']['0']['position'] = array();
      $answer['data']['geocodes']['0']['position']['long'] = $address_location[0];
      $answer['data']['geocodes']['0']['position']['lat'] = $address_location[1];

      
      } catch(Exception $e) {
      // set fields for array
      $answer['success'] = false;
      $answer['err_no'] = ERROR_GENERAL;
      $answer['err_msg'] = $e;
    }


  // Encode answer as json and print aka send
   echo json_encode($answer);

  //db_close();

?>