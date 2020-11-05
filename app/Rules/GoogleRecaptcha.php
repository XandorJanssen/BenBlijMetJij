<?php

namespace App\Rules;

use GuzzleHttp\Client;
use Illuminate\Contracts\Validation\Rule;

class GoogleRecaptcha implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function passes($attribute, $value){
        $client = new Client();
        $response = $client->post('https://www.google.com/recaptcha/api/siteverify',
            [
                'form_params' => [
                    'secret' => env('RECAPTCHA_SECRET_KEY', false),
                    'remoteip' => request()->getClientIp(),
                    'response' => $value
                ]
            ]
        );
        $body = json_decode((string)$response->getBody());
        return $body->success;
    }


    public function message(){
        return 'Ik ben geen robot verificatie mislukt';
    }
}