<?php  namespace App\Sms;

use GuzzleHttp\Client;

class SmsConnection
{

    /**
     * Define the application's connection details.
     *
     * @param null {{ config('app.name') }}
     * @return void
     */

    public $client;
    public $message;
    public $text;
    public $from;
    public $to;
    public $username;
    public $password;


    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.infobip.com',
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => env('INFOBIP_API'), //use any
            ],
            //  'auth' => ['Tyondo_KE', 'Test123!'],
            //'timeout' => 2.0,
        ]);
    }


  private function decodePostRequestResult($result)
  {
      if ($result['httpCode'] >= 200 && $result['httpCode'] < 300) {
          $messages = $result['responseBody']->messages;
          return $messages;
      }else{
         return $result['responseBody']->requestError->serviceException->text;
      }
  }
}
