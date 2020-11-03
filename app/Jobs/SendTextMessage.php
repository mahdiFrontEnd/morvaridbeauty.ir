<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use SoapClient;

class SendTextMessage implements ShouldQueue
{
    use   InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    private $mobile;
    private $message;

    public function __construct($mobile, $message)
    {
        $this->mobile = $mobile;
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            //turn off the WSDL cache
//        ini_set("soap.wsdl_cache_enabled", "0");
             $sms_client = new SoapClient('http://webservice.0098sms.com/service.asmx?wsdl', array('encoding' => 'UTF-8'));
            $parameters['username'] = "smsq4993";
            $parameters['password'] = "76151576";
            $parameters['mobileno'] = $this->mobile;
            $parameters['pnlno'] = "3000591125";
            $parameters['text'] = $this->message;
            $parameters['isflash'] = false;
           $res= $sms_client->SendSMS($parameters)->SendSMSResult;
            file_put_contents(storage_path('sms_status.txt'),date('Y-m-d H:i:s')."--->".$this->mobile."--->".$res . "\n", FILE_APPEND);

        } catch (\Exception $exception) {
            file_put_contents(storage_path('sms_error.txt'), date('Y-m-d H:i:s')."--->".$this->mobile."--->".$exception->getMessage() . "\n", FILE_APPEND);
        }

    }
}
