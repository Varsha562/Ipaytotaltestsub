
<?php
session_start();
        $url = "https://ipaytotal.solutions/api/test/transaction";
        $key = "16630iRX27NSvssxLrBPXJDirxT4ZZTcBW4Ajaz08qSpDiwyceDqL2jhOTjey0zfpCHa";
        $visa_regex = "/^4[0-9]{0,}$/";

    // MasterCard
    $mastercard_regex = "/^(5[1-5]|222[1-9]|22[3-9]|2[3-6]|27[01]|2720)[0-9]{0,}$/";
    $maestro_regex = "/^(5[06789]|6)[0-9]{0,}$/";

    // American Express
    $amex_regex = "/^3[47][0-9]{0,}$/";

    //Discover
    $discover_regex = "/^(6011|65|64[4-9]|62212[6-9]|6221[3-9]|622[2-8]|6229[01]|62292[0-5])[0-9]{0,}$/";
    $card_type=0;
    if (preg_match($amex_regex, $_POST["card_no"])) {
        $card_type=1;
    }
    if (preg_match($visa_regex, $_POST["card_no"])) {
        $card_type=2;
    }
    if (preg_match($mastercard_regex, $_POST["card_no"])) {
        $card_type=3;
    }
    if (preg_match($discover_regex, $_POST["card_no"])) {
        $card_type=4;
    }
    if (preg_match($maestro_regex, $_POST["card_no"])) {
        if ($pan[0] == '5') {
            $card_type=3;
        }
      }

        $data = [
            'api_key' => $key,
            'first_name' => $_SESSION['first_name'] ,
            'last_name' =>   $_SESSION['last_name'],
            'address' => $_SESSION['address'],
            'sulte_apt_no'=> $_SESSION['sulte_apt_no'],
            'country' => $_SESSION['country'],
            'state' => $_SESSION['state'],
            'city' => $_SESSION['city'],
            'zip' => $_SESSION['zip'],
            'ip_address' => $_SERVER["REMOTE_ADDR"],
            'email' =>  $_SESSION['email'],
            'phone_no' => $_SESSION['phone_no'],
            'amount' => $_SESSION['amount'],
            'currency' => $_SESSION['currency'],
            'card_no' => $_POST["card_no"],
            'card_type' => $card_type,
            'ccExpiryMonth' => $_POST["ccExpiryMonth"],
            'ccExpiryYear' => $_POST["ccExpiryYear"],
            'cvvNumber' => $_POST["cvvNumber"],
            'response_url' => "response.php"
        ];
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER,[
            'Content-Type: application/json'
        ]);
        $response = curl_exec($curl);
        curl_close($curl);
        $responseData = json_decode($response);

if (isset($responseData->payment_redirect_url) && $responseData->payment_redirect_url != null) {
    // redirect to card payment page
    header('Location: '.$responseData->payment_redirect_url);
} else {
    // print error response
    echo('<pre>');print_r($responseData);exit;
    echo "ciao";
}
if (isset($responseData->redirect_3ds_url) && $responseData->redirect_3ds_url != null) {
    // redirect to card payment page
    header('Location: '.$responseData->redirect_3ds_url);
} else {
    // print error response
    echo('<pre>');print_r($responseData);exit;
    echo "ciao";
}
?>
