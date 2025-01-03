<?php

if (isset($_POST['send_reserve_req']) || $_SERVER['REQUEST_METHOD'] === 'POST') {
    
    //Get form data
    $name = isset($_POST['name']) ? $_POST['name'] : '-';
    $email = isset($_POST['email']) ? $_POST['email'] : '-';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '-';
    $audience = isset($_POST['audience']) ? $_POST['audience'] : '-';
    $web_link = isset($_POST['web_link']) ? $_POST['web_link'] : '-';
    $referring = "";
    if (isset($_POST['referring']) && is_array($_POST['referring'])) {
        $referring = implode(', ', $_POST['referring']);
    } else {
        $referring = "No values selected.";
    }
    $referring_other = isset($_POST['referring_other']) ? $_POST['referring_other'] : '-';
    $audience_benefit = isset($_POST['audience_benefit']) ? $_POST['audience_benefit'] : '-';
    $audience_promote = isset($_POST['audience_promote']) ? $_POST['audience_promote'] : '-';
    $need_help = isset($_POST['need_help']) ? $_POST['need_help'] : '-';
    
  
    // DETAILS
    $ip_address = isset($_POST['ip_address']) ? $_POST['ip_address'] : '-';
    $city = isset($_POST['city']) ? $_POST['city'] : '-';
    $country = isset($_POST['country']) ? $_POST['country'] : '-';
    $internet_connection = isset($_POST['internet_connection']) ? $_POST['internet_connection'] : '-';
    $zipcode = isset($_POST['zipcode']) ? $_POST['zipcode'] : '-';
    $region = isset($_POST['region']) ? $_POST['region'] : '-';
    $url = isset($_POST['url']) ? $_POST['url'] : 'None';
  
    // LEAD API
    $api_key = 'f130432e28c4d8a311f5e23239491c4b36bd54721ff5ac53c1759eddb8bee0e9';
  
    $source = 'https://projectwall.net/api/affiliate-leads';
    $data = array(
      'brand_name' => 'Authors Time',
      'name' => $name,
      'email' => $email,
      'phone' => $phone,
      'audience' => $audience,
      'web_link' => $web_link,
      'referring' => $referring,
      'referring_other' => $referring_other,
      'audience_benefit' => $audience_benefit,
      'audience_promote' => $audience_promote,
      'need_help' => $need_help,
      'url' => $url,
      'ip_address' => $ip_address,
      'city' => $city,
      'country' => $country,
      'internet_connection' => $internet_connection,
      'zipcode' => $zipcode,
      'region' => $region
    );
  
    $jsonData = json_encode($data);
  
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $source);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt(
      $curl,
      CURLOPT_HTTPHEADER,
      array(
        'Content-Type: application/json',
        'X-API-TOKEN:' . $api_key
      )
    );
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    $responseData = json_decode($response, true);
  
    curl_close($curl);

    header("Location: /affiliate_apply/thankyou.php");

}