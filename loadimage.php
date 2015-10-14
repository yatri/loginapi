<?php
	$response = array();
   $url = array("http://lh5.ggpht.com/_hepKlJWopDg/TB-_WXikaYI/AAAAAAAAElI/715k4NvBM4w/s144-c/IMG_0075.JPG",
        "http://lh4.ggpht.com/_4f1e_yo-zMQ/TCe5h9yN-TI/AAAAAAAAXqs/8X2fIjtKjmw/s144-c/IMG_1786.JPG",
        "http://lh3.ggpht.com/_GEnSvSHk4iE/TDSfmyCfn0I/AAAAAAAAF8Y/cqmhEoxbwys/s144-c/_MG_3675.jpg",
        "http://lh6.ggpht.com/_ZN5zQnkI67I/TCFFZaJHDnI/AAAAAAAABVk/YoUbDQHJRdo/s144-c/P9250508.JPG",
        "http://lh4.ggpht.com/_XjNwVI0kmW8/TCOwNtzGheI/AAAAAAAAC84/SxFJhG7Scgo/s144-c/0014.jpg",
        "http://lh6.ggpht.com/_Nsxc889y6hY/TBp7jfx-cgI/AAAAAAAAHAg/Rr7jX44r2Gc/s144-c/IMGP9775a.jpg",
        );
  
    
    $headlines = array("Dance of Democracy",
                        "Major Naxal attacks in the past",
                        "BCCI suspends Gurunath pending inquiry ",
                        "Life convict can`t claim freedom after 14 yrs: SC",
                        "Indian Army refuses to share info on soldiers mutilated at LoC",
                        "French soldier stabbed; link to Woolwich attack being probed",
                        "Life convict can`t claim freedom after 14 yrs: SC"
                        );
 
    
    $response['url']=$url;
	$response['headlines']=$headlines;
    
    exit(json_encode($response));

?>

