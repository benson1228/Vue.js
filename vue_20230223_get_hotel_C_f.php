<?php
    $mydata = file_get_contents('https://media.taiwan.net.tw/XMLReleaseALL_public/hotel_C_f.json');
    echo $mydata;

    //在openData上直接抓網址他會擋掉要渲染在前台的畫面因為CORS(跨領域阻擋)，為了保護網頁不要被入侵，所以我們要自己寫後台程式，從後台自己抓網址，經過自己的虛擬主機來渲染到前端。因為電腦的特性，所以我們只能用api來抓取。


?>