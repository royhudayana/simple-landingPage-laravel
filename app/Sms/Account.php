<?php  namespace App\Sms;


class Account extends SmsConnection
{
    /**
     * @param $to
     * @param $message
     * @return mixed
     */

    /**
     * @return mixed
     */
    public function getAccountBalance()
    {

        $response = $this->client->get('/account/1/balance');

        return json_decode($response->getBody(), true);
    }


}
