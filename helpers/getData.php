<?php
declare(strict_types=1);

function getData($url) {
    if(@file_get_contents($url) === FALSE) {
        echo errorComponent();
    } else {
        $data = file_get_contents($url);
        $res = json_decode($data, true);
        return $res;
    };
}