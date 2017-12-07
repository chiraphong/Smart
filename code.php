<!--?php 

        include "httpful.phar";
        // กำหนด uri
        $uri = "https://api.netpie.io/topic/Smartfarm01/sensor/switch?auth=9pd3UJu2niXn06Z:ztdhv77wgvm0ilqox0yn0XuYm";
        
        // สั่งให้เรียก uri โดยใช้คำสั่ง GET เพื่อขออ่านค่าจาก netpie
        $response = \Httpful\Request::get($uri)->send();
        
        // แปลงค่าที่ได้จาก netpie จาก json มาเป็น array
        $result = json_decode($response->body, true);

        // ลองพิมพ์ค่าที่ได้ออกมาดู 
        // netpie จะเก็บค่าของตัวแปรไว้ใน json ที่ชื่อ payload
        echo "debug = " . $result[0]['payload'] . "\n";
        $debug = $result[0]['payload'];
        
        echo $response . "\n" ;
        sleep(1);
?-->
