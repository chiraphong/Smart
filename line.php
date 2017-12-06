 <?php
  

function send_LINE($msg){
 $access_token = '5kD/TTinWQOMZGiPGTtVAprFyL2dlbB+8Tbwk8/fEdjR1P0b+V3AajhbCOeY483GtXM3EjMY6gqVi3FObND2OcblW87bC7DD4T0+i5hGUzpb8/40H8i9j3xULCvkjN/muneEV/Z0VIO3PBFPyPHtvQdB04t89/1O/w1cDnyilFU='
  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => '7991cdf0d8f2eeda4f78b0ae9d771d4e',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
