 <?php
  

function send_LINE($msg){
 $access_token = '8auxoYNmwKKiI0DqQwDHmVIP+r/Bef6dZbTdnPPNY46xKD51B1sQbcHsEOeIYZr0IkjdLRzyNNfQ+QuADbqU4rK9qErTtQi1QwOy+aQHkuGgkYDWZK32SDWrcfsQhQoKmhgqMrt+SXNOHkKNs/n46QdB04t89/1O/w1cDnyilFU='; 
 $messages = [
        'type' => 'text',
        'text' => $msg
        
      ];
  
      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'uae9500a76c7fbeb157fbef2385197e5d',
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
