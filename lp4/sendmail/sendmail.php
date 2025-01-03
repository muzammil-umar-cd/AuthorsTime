<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST['sendmail'])) {
    
    if($_POST['bot_detector'] == ''){
    
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
        $message = isset($_POST['message']) ? $_POST['message'] : 'No Message';
        $service = isset($_POST['service']) ? $_POST['service'] : 'No Selected Service';
        $url = isset($_POST['url']) ? $_POST['url'] : '-';
        $form = isset($_POST['form_name']) ? $_POST['form_name'] : '-';
      
        // DETAILS
        $ip_address = isset($_POST['ip_address']) ? $_POST['ip_address'] : '';
        $city = isset($_POST['city']) ? $_POST['city'] : '';
        $country = isset($_POST['country']) ? $_POST['country'] : '';
        $internet_connection = isset($_POST['internet_connection']) ? $_POST['internet_connection'] : '';
        $zipcode = isset($_POST['zipcode']) ? $_POST['zipcode'] : '';
        $region = isset($_POST['region']) ? $_POST['region'] : '';
        
        // Retrieve the current page URL
        $currentURL = "http";
        if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on") {
            $currentURL .= "s";
        }
        $currentURL .= "://";
        if ($_SERVER["SERVER_PORT"] !== "80") {
            $currentURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
        } else {
            $currentURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
        }
        
        // LEAD API
      $api_key = 'f130432e28c4d8a311f5e23239491c4b36bd54721ff5ac53c1759eddb8bee0e9';
    
      $source = 'https://securepay.designtechpro.com/brand-leads-store';
      $data = array(
        'brand_name' => 'AuthorsTime',
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'service' => $service,
        'message' => $message,
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
    
    
      $_SESSION['api_code_executed'] = true;
    
      curl_close($curl);
    
      // LEAD API END
        
        $data = '<h1 style="color: #01163A;text-align: center;">Authors Time Lead</h1><table style="width:100%; border: 1px solid black; border-collapse: collapse;">';
            $data .= '<tr>
    				<td style="border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px; font-weight: 500;">Name<td><br>
    				<td style=" border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px">' . $name . '</td><br>
    			</tr>
    			<tr>
    				<td style="border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px; font-weight: 500;">Email<td><br>
    				<td style=" border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px">' . $email . '</td>
    			</tr>	
    			<tr>
    				<td style="border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px; font-weight: 500;">Phone<td>
    				<td style=" border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px">' . $phone . '</td>
    			</tr>
    			<tr>
    				<td style="border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px; font-weight: 500;">Form Name<td>
    				<td style=" border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px">' . $form . '</td>
    			</tr>
    			<tr>
    				<td style="border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px; font-weight: 500;">Source<td>
    				<td style=" border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px">' . $url . '</td>
    			</tr>
    			<tr> 
    				<td style="border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px; font-weight: 500;">Service<td>
    				<td style=" border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px">' . $service . '</td>
    			</tr>
    			<tr> 
    				<td style="border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px; font-weight: 500;">Message<td>
    				<td style=" border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px">' . $message . '</td>
    			</tr>
    			<tr>
    				<td style="border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px; font-weight: 500;">Client IP<td>
    				<td style=" border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px">' . $ip_address . '</td>
    			</tr>
    			<tr>
    				<td style="border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px; font-weight: 500;">Client City<td>
    				<td style=" border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px">' . $city . '</td>
    			</tr> 
    			<tr>
    				<td style="border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px; font-weight: 500;">Client Region<td>
    				<td style=" border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px">' . $region . '</td>
    			</tr>
    			<tr>
                <td style="border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px; font-weight: 500;">Client Country<td>
                <td style=" border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px">' . $country . '</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px; font-weight: 500;">Client Connection<td>
                <td style=" border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px">' . $internet_connection . '</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px; font-weight: 500;">Client Zipcode<td>
                <td style=" border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px">' . $zipcode . '</td>
            </tr>
            ';
        $data .= '</table>';
    
      // Create a new PHPMailer instance
      $mail = new PHPMailer(true);
    
      try {
        // Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF; // Enable verbose debug output
        $mail->isSMTP(); // Send using SMTP
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'brandformsubmission@gmail.com'; // SMTP username
        $mail->Password = 'bcicqekxsbhppskd'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port = 587; // TCP port to connect to
    
        // Recipients
        $mail->setFrom('brandformsubmission@gmail.com', 'Authors Time');
        
        $mail->addAddress('info@authorstime.com'); // Add a recipient
        // $mail->addAddress('muzammil.coredigitals@gmail.com'); // Add a recipient
        
        $mail->addCC('kashan@niversetech.com');
        $mail->addCC('asad@niversetech.com');
        $mail->addCC('haseeb@niversetech.com');
        $mail->addCC('uzair@marketingnotch.com');
        $mail->addCC('muzammil@niversetech.com');
        $mail->addCC('nawab@niversetech.com');
        $mail->addCC('shakeel@coredigitals.biz');
        // SALES
        $mail->addCC('hassan.jamali@niversetech.com');
        $mail->addCC('amin@niversetech.com');
        $mail->addCC('nabiha@coredigitals.biz');
    
        // Content
        $mail->isHTML(true); // Set email format to plain text
        $mail->Subject = 'Authors Time - Form Submission';
        $mail->Body = $data;
    
        if ($mail->send()) {
          
          $urlData = $name."&email=".$email."&phone=".$phone."&message=".$message;
          
          header("Location: /lp4/thankyou.php?name=$urlData");
        }
      } catch (Exception $e) {
        echo "There was a problem sending your submission. Error: {$mail->ErrorInfo}";
      }
        }else{
        exit;
    }
}