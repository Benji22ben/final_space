<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FinalSpaceController;

class FscharacterController extends Controller
{
    public function fscharacter() {
        $curl = curl_init();
        
        $URL_CHARACTERS = (new FinalSpaceController)->finalspace();
        
        curl_setopt_array($curl, [
          CURLOPT_URL => "$URL_CHARACTERS[0]",
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

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
            $datas = json_decode($response);
            return view('fscharacter', [
              'datas' => $datas,
          ]);
        }
    }
}
