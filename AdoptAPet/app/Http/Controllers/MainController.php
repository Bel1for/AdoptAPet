<?php

namespace App\Http\Controllers;

use App\Models\InfoModel;
use App\Models\PhoneModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use GuzzleHttp;
class MainController
{
//    public $phone = '0';
//    public $key = '112ADA881EB94803B26F2B7F40FF735D';
    public $url = 'https://api.veriphone.io/v2/verify?phone=%0&key=112ADA881EB94803B26F2B7F40FF735D';
    public function Pet(){

        $client = new GuzzleHttp\Client();

        //$phone = '0';
        //$key = '112ADA881EB94803B26F2B7F40FF735D';
        $res = $client->request('GET', $this->url, [
            'auth' => ['user', 'pass']
        ]);
        $json = json_decode($res->getBody()->getContents());
        $reviews = new InfoModel();
        $reviews->phone_valid = $json->phone_valid;
        if ($reviews->phone_valid == 1)
            $reviews->phone_valid = 'true';
        else
            $reviews->phone_valid = 'false';
        $reviews->phone_country = $json->country;
        $reviews->carrier = $json->carrier;
        $reviews->phone_type = $json->phone_type;
        $reviews->international_number = $json->international_number;
        $reviews->local_number = $json->local_number;
        $reviews->phone_e164 = $json->e164;
        $reviews->phone_region = $json->phone_region;
        $reviews->country_prefix = $json->country_prefix;
        $reviews->country_code = $json->country_code;
        $reviews->save();
        return view('home',['reviews'=>$reviews]);


    }

    public function home()
    {
        $reviews = new PhoneModel();
        //dd($phoneex);
        foreach ($reviews as $item){
            $phoneex = $item->phone;
        }
        return $phoneex;
    }
    public function pricing()
    {
        return view('pricing');
    }
    public function docs1()
    {
        return view('docs');
    }
    public function countries1()
    {
        return view('countries');
    }
    public function integrations()
    {
        return view('integrations');
    }
    public function review(Request $request)
    {
        $valid=$request->validate([
            'phone'=>'required|min:10|max:13'
        ]);

        $phone = new PhoneModel();
        $phone->phone = $request->input('phone');

        $phone->save();
        $this->url = 'https://api.veriphone.io/v2/verify?phone=%'.$phone->phone.'&key=112ADA881EB94803B26F2B7F40FF735D';
        return $this->Pet();
    }

}
