<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinalSpaceController extends Controller
{
    public function finalspace() {
        $curl = curl_init();

        curl_setopt_array($curl, [
          CURLOPT_URL => "https://finalspaceapi.com/api/v0/",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_POSTFIELDS => "",
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        $datas = json_decode($response);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
            $URL_CHARACTERS = $datas[1]->fullUrl;
            $URL_EPISODES = $datas[3]->fullUrl;
            $URL_LOCATIONS = $datas[5]->fullUrl;
            $URL = array($URL_CHARACTERS, $URL_EPISODES, $URL_LOCATIONS);
            return $URL;
        }
    }
}
