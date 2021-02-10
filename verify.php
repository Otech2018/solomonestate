<?php

$curl = curl_init();
  $tran_id = "248201561";   //transaction id from flw
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/".$tran_id."/verify",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Authorization: FLWSECK-960d2d393475350a82d40da24ab2e6e0-X"  //secret key goes here
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
        $txn_api = json_decode($response);

        
        $flw_status = $txn_api->status;  // shows success if txn is sucessful
        $flw_message = $txn_api->message;  //message
        $flw_id = $txn_api->data->id;  //txn id from flw for verification
        $flw_tx_ref = $txn_api->data->tx_ref;  // customer id by created by you
        $flw_flw_ref = $txn_api->data->flw_ref;  // customer id by created by flw
        $flw_device_fingerprint = $txn_api->data->device_fingerprint;  
        echo $flw_amount = $txn_api->data->amount;     //amt paid
        $flw_currency = $txn_api->data->currency;     // eg NGN
        $flw_charged_amount = $txn_api->data->charged_amount;     
        $flw_app_fee = $txn_api->data->app_fee;     
        $flw_merchant_fee = $txn_api->data->merchant_fee;     
        $flw_processor_response = $txn_api->data->processor_response;     
        $flw_auth_model = $txn_api->data->auth_model;     
        $flw_ip = $txn_api->data->ip;     
        $flw_narration = $txn_api->data->narration;     
      echo   $flw_c_status = $txn_api->data->status;      //successfull
        $flw_payment_type = $txn_api->data->payment_type;      // eg card
        $flw_created_at = $txn_api->data->created_at;      // eg card
        $flw_account_id = $txn_api->data->account_id;      
        $flw_amount_settled = $txn_api->data->amount_settled;      
        $flw_first_6digits = $txn_api->data->card->first_6digits;      
        $flw_last_4digits = $txn_api->data->card->last_4digits;      
        $flw_issuer = $txn_api->data->card->issuer;      
        $flw_country = $txn_api->data->card->country;    //NIGERIA NG  
        $flw_type = $txn_api->data->card->type;    // MASTER CARD  
        $flw_token = $txn_api->data->card->token;    // from FLW 
        $flw_expiry = $txn_api->data->card->expiry;     

        $flw_cus_id = $txn_api->customer->id;



        // your code goes here

?>

