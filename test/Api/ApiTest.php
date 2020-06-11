<?php

namespace rc\pe\Client;

use \GuzzleHttp\Client;
use \GuzzleHttp\Event\Emitter;
use \GuzzleHttp\Middleware;
use \GuzzleHttp\HandlerStack as handlerStack;

use \rc\pe\Client\ApiException;
use \rc\pe\Client\Configuration;
use \rc\pe\Client\Model\Error;
use \rc\pe\Client\Interceptor\KeyHandler;
use \rc\pe\Client\Interceptor\MiddlewareEvents;
use \rc\pe\Client\Api\ReporteCreditoPeruApi as Instance;

class ApiTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        $password = getenv('KEY_PASSWORD');
        $this->signer = new KeyHandler(null, null, $password);

        $events = new MiddlewareEvents($this->signer);
        $handler = handlerStack::create();
        $handler->push($events->add_signature_header('x-signature'));   
        $handler->push($events->verify_signature_header('x-signature'));
        $client = new Client(['handler' => $handler]);

        $config = new Configuration();
        $config->setHost('the_url');
        
        $this->apiInstance = new Instance($client, $config);
        $this->x_api_key = "your_api_key";
        $this->username = "your_username";
        $this->password = "your_password";
    }
    
    public function testGetRC()
    {
        $request = new \rc\pe\Client\Model\Peticion();

        $request->setFolio("10000200");
        $request->setNumeroDocumento("67544489");
        $request->setTipoDocumento("1");

        try {
            $result = $this->apiInstance->getRC($this->x_api_key, $this->username, $this->password, $request);
            
            if($this->apiInstance->getStatusCode() == 200){
                print_r($result);
            }
        } catch (ApiException $e) {

            if($e->getCode() !== 204){
                echo ' code. Exception when calling ApiTest->getRC: ', $e->getResponseBody(), PHP_EOL;
            }
        }
        $this->assertTrue($this->apiInstance->getStatusCode() == 200);
    }
}
