<?php
function curl($method, $param)
{
    $url = "http://localhost:8080/index.php/api/" . $method;
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $param,
        CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded",
            "key: 94eddb0a8125810636452c79fba823b8",
        ),
    ));

    $output = curl_exec($curl);
    curl_close($curl);

    $data = json_decode($output);

    return $data;
}
