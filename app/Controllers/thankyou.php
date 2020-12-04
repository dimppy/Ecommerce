<?php

namespace App\Controllers;

require_once ('../vendor/autoload.php');

use GlobalPayments\Api\ServiceConfigs\Gateways\GpEcomConfig;
use GlobalPayments\Api\Services\HostedService;
use GlobalPayments\Api\Entities\Exceptions\ApiException;

class thankyou extends BaseController {

    public function index() {

// configure client settings
        $config = new GpEcomConfig();
        $config->merchantId = "dimppytest";
        $config->accountId = "internet";
        $config->sharedSecret = "sEcr3t";
        $config->serviceUrl = "https://pay.sandbox.realexpayments.com/pay";

        $service = new HostedService($config);



        $Json = file_get_contents('php://input', 0, null); //core php function to get json from clientside
        $Json = urldecode($Json);
        $Json = substr($Json, 12);
        $Json_arry = json_decode($Json);
        $responseJson = json_encode($Json_arry);
        try {
            // create the response object from the response JSON

            $parsedResponse = $service->parseResponse($responseJson, true);

            $orderId = $parsedResponse->orderId; // GTI5Yxb0SumL_TkDMCAxQA
            $responseCode = $parsedResponse->responseCode; // 00
            $responseMessage = $parsedResponse->responseMessage; // [ test system ] Authorised
            $responseValues = $parsedResponse->responseValues; // get values accessible by key
            $data['res'] = $responseValues;
            return view('thankyou',$data);
        } catch (ApiException $e) {
            echo $e;
        }
    }

    //--------------------------------------------------------------------
}
?>
