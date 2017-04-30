<?php  namespace App\Sms;


class SendSms extends SmsConnection
{
    /**
     * @param $to
     * @param $message
     * @return mixed
     */

    public function sendBulkTextSms($to, $message)
    {
        //$this->message = 'Using Guzzle for bulk sending Simba';
        // $to = ['254712550547','254716107870'];
        $this->message = $message;
        $this->to = $to;
        $response = $this->client->post('/sms/1/text/multi',[
            'body' => '{  
                       "messages":[  
                          {  
                             "from":"'. env('INFOBIP_FROM') .'",
                             "to": '. json_encode($this->to) .',
                             "text":"'. $this->message .'"
                          }
                       ]
                    }',
        ]);
        return $response->getReasonPhrase() ;
    }
    /**
     * @return mixed
     */
    public function sendSingleTextSms($to, $text)
    {
        $this->message = [];
        $this->text = $text;
            $this->message['from'] = env('INFOBIP_FROM');
            //$this->message['to'] = '254712550547';
            $this->message['to'] = $to;
            $this->message['text'] = 'Using Guzzle for sending';
        $response = $this->client->post('/sms/1/text/single',[
            'body' => json_encode($this->message),
        ]);

        return $response->getReasonPhrase() ;
    }
    /**
     * @return mixed
     */
    public function sendAdvancedTextSms()
    {
       //
    }
    /**
     * @return mixed
     */
    public function sendBulkMultimediaSms()
    {
        return $this->method;
    }
    /**
     * @return mixed
     */
    public function sendSingleMultimediaSms()
    {
        return $this->method;
    }
    /**
     * @return mixed
     */
    public function getSingleSmsDeliveryReport()
    {
        return $this->method;
    }    /**
 * @return mixed
 */
    public function getMultipleSmsDeliveryReport()
    {
        return $this->method;
    }
    /**
     * @return mixed
     */
    public function getSingleSmsLogReport()
    {
        return $this->method;
    }    /**
 * @return mixed
 */
    public function getMultipleSmsLogReport()
    {
        return $this->method;
    }

}
