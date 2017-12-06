 <?php
  

function send_LINE($msg){
 $access_token = 'WlBuMy2FZL9jwdXovCDHUDG3y7KXw5fZ4IdkLpXwMl+LuGeCKFAsOd1cTSKl8A6ItXM3EjMY6gqVi3FObND2OcblW87bC7DD4T0+i5hGUzoJ4YgrBxaz5AGdWi00AOBPGjkxLm6MBhFrZLF2lHlOtwdB04t89/1O/w1cDnyilFU='
  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U95ed2de6748f89afaaf8512499b68ce0',
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
