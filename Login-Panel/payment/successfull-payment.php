<?php 
session_start();
    $val_id=urlencode($_POST['val_id']);
    $store_id=urlencode("group5dea27b3d85fe");
    $store_passwd=urlencode("group5dea27b3d85fe@ssl");
    $requested_url = ("https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php?val_id=".$val_id."&store_id=".$store_id."&store_passwd=".$store_passwd."&v=1&format=json");
    
    $handle = curl_init();
    curl_setopt($handle, CURLOPT_URL, $requested_url);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false); # IF YOU RUN FROM LOCAL PC
    curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); # IF YOU RUN FROM LOCAL PC
    
    $result = curl_exec($handle);
    
    $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);
    
    if($code == 200 && !( curl_errno($handle)))
    {
    
        # TO CONVERT AS ARRAY
        # $result = json_decode($result, true);
        # $status = $result['status'];
    
        # TO CONVERT AS OBJECT
        $result = json_decode($result);
    
        # TRANSACTION INFO
        $status = $result->status;
        $tran_date = $result->tran_date;
        $tran_id = $result->tran_id;
        $val_id = $result->val_id;
        $amount = $result->amount;
        $store_amount = $result->store_amount;
        $bank_tran_id = $result->bank_tran_id;
        $card_type = $result->card_type;
    
        # EMI INFO
        $emi_instalment = $result->emi_instalment;
        $emi_amount = $result->emi_amount;
        $emi_description = $result->emi_description;
        $emi_issuer = $result->emi_issuer;
    
        # ISSUER INFO
        $card_no = $result->card_no;
        $card_issuer = $result->card_issuer;
        $card_brand = $result->card_brand;
        $card_issuer_country = $result->card_issuer_country;
        $card_issuer_country_code = $result->card_issuer_country_code;
    
        # API AUTHENTICATION
        $APIConnect = $result->APIConnect;
        $validated_on = $result->validated_on;
        $gw_version = $result->gw_version;

        $studentName = $_SESSION['Name'];
        $studentEmail = $_SESSION['Email'];
        $studentPhone = $_SESSION['Phone_Number'];
        
        echo '<label>Student Name : <label><span>' .$studentName.'</span><br><br>'; 
        echo '<label>Student Email : <label><span>'.$studentEmail.'</span><br><br>'; 
        echo '<label>Student Phone Number: <label><span>'.$studentPhone.'</span><br><br>'; 
        echo '<label>Payment Status : <label><span>'. $status.'</span><br><br>'; 
        echo '<label>Transaction Date : <label> <span>'. $tran_date.'</span><br><br>'; 
        echo '<label>Transaction Status : <label><span>'. $tran_id.'</span><br><br>';  
        echo '<label>Card Type : <label><span>'. $card_type.'</span><br><br>'; 
        
        
        //store payment report// 

        $con = mysqli_connect('localhost','root','','all_private_university');  
        $report_sql = "INSERT INTO payment_report (studentName,studentEmail,paymentStatus,studentPhone,transcDate,transcStatus,cardType)
                       VALUES ('$studentName','$studentEmail','$status','$studentPhone','$tran_date','$tran_id' ,'$card_type');";
       
       $result =  mysqli_query($con, $report_sql);
         
       if ($con->query($report_sql) === TRUE) {
        echo "New record created successfully";
        echo "<h3><a href='/project/landing-page/landing_page.php' class='btn btn-primary'>  Back To Home </a></h3>";
    } else {
        echo "Error:  <br>" . $con->error;
    }
    
    } else {
    
        echo "Failed to connect with SSLCOMMERZ";
    }
?>
<style>
    span{
        font-size:20px;
        font-weight: bold;
        color:blue;
        font-family: 'Open Sans Condensed', sans-serif;
    }
    label{
        font-size:30px;
        font-weight: bold;
        font-family: 'Roboto Condensed', sans-serif;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>