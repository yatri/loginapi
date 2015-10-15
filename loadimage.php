<?php
    $categoryid = $_POST['cat_id'];
	$productid = $_POST['prod_id'];

    $response = array();

    $category = array("Black Level","antiguity","Bhodka","Rum","antiguity","Bhodka","Rum","antiguity","Bhodka","Rum","antiguity","Bhodka","Rum");
   $url = array("http://lh5.ggpht.com/_hepKlJWopDg/TB-_WXikaYI/AAAAAAAAElI/715k4NvBM4w/s144-c/IMG_0075.JPG",
        "http://lh4.ggpht.com/_4f1e_yo-zMQ/TCe5h9yN-TI/AAAAAAAAXqs/8X2fIjtKjmw/s144-c/IMG_1786.JPG",
        "http://lh3.ggpht.com/_GEnSvSHk4iE/TDSfmyCfn0I/AAAAAAAAF8Y/cqmhEoxbwys/s144-c/_MG_3675.jpg",
        "http://lh6.ggpht.com/_ZN5zQnkI67I/TCFFZaJHDnI/AAAAAAAABVk/YoUbDQHJRdo/s144-c/P9250508.JPG",
        "http://lh4.ggpht.com/_XjNwVI0kmW8/TCOwNtzGheI/AAAAAAAAC84/SxFJhG7Scgo/s144-c/0014.jpg",
        "http://lh6.ggpht.com/_Nsxc889y6hY/TBp7jfx-cgI/AAAAAAAAHAg/Rr7jX44r2Gc/s144-c/IMGP9775a.jpg",
        );


    $headlines = array( "Dance of Democracy",
                        "Major Naxal attacks in the past",
                        "BCCI suspends Gurunath pending inquiry ",
                        "Life convict can`t claim freedom after 14 yrs: SC",
                        "Indian Army refuses to share info on soldiers mutilated at LoC",
                        "French soldier stabbed; link to Woolwich attack being probed",
                        "Life convict can`t claim freedom after 14 yrs: SC"
                        );


    if(isset($categoryid)){
        $imageurl = array();
        $imageheading = array();
        $prod_id = array();
        for ($cnt = 0; $cnt < count($url); $cnt++) {
            $prod_id[$cnt] = $cnt+101;
            $imageurl[$cnt] = $url[$cnt];
            $imageheading[$cnt] = $headlines[$cnt];
         }
        $response['prod_id'] = $prod_id;
        $response['imageurl'] = $imageurl;
        $response['imageheading'] = $imageheading;
    } else if(isset($productid)) {
        $response = array(
                'prod_id'       => '1',
                'imageurl'      => 'http://lh4.ggpht.com/_4f1e_yo-zMQ/TCe5h9yN-TI/AAAAAAAAXqs/8X2fIjtKjmw/s144-c/IMG_1786.JPG',
                'name'          => 'Some Name',
                'description'   => 'Some Namea asdf asdf asfsadf ',
                'types'         => array('half', 'full'),
                'price'         => array('200', '400')
            );
    }else{
        $categoryarr = array();
        $imageheadings = array();

        foreach ($category as $value) {
            $categoryarr[] = $value;
        }

        for ($cnt = 0; $cnt < count($url); $cnt++) {
            $imageheadings[] = array(
                    'url'=> $url[$cnt],
                    'headline' => $headlines[$cnt]
                );
         }
        $response['category'] = $categoryarr;
        $response['imageheadings'] = $imageheadings;
    }


    exit(json_encode($response));

?>

