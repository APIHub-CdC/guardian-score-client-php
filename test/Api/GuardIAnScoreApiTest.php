<?php

namespace GuardianScore\Client;

use Signer\Manager\ApiException;
use Signer\Manager\Interceptor\MiddlewareEvents;
use Signer\Manager\Interceptor\KeyHandler;

use \GuardianScore\Client\Configuration;
use \GuardianScore\Client\ObjectSerializer;

class GuardIAnScoreApiTest extends \PHPUnit_Framework_TestCase
{
    
    public function setUp() {
        $password = "your_key_password";

        $this->keypair = 'path/to/keypair.p12';
        $this->cert = 'path/to/cdc_cert.pem';

        $this->signer = new KeyHandler($this->keypair, $this->cert, $password);
        $events = new MiddlewareEvents($this->signer);

        $handler = \GuzzleHttp\HandlerStack::create();
        $handler->push($events->add_signature_header('x-signature'));   
        $handler->push($events->verify_signature_header('x-signature'));
        $client = new \GuzzleHttp\Client(['handler' => $handler]);

        $config = new Configuration();
        $config->setHost('the_url');

        $this->apiInstance = new \GuardianScore\Client\Api\GuardIAnScoreApi($client,$config);
        $this->x_api_key = "your_api_key";
        $this->username = "your_username";
        $this->password = "your_password";
    }

    public function testCreditreport() {
        $requestBody = new \GuardianScore\Client\Model\CreditReport();
        $requestBody->setIdFolioConsultaReporte('folio_consulta');
        $requestBody->setFolioOtorgante('folio_otorgante');

        $request = new \GuardianScore\Client\Model\RequestBody();
        $request->setCreditReport($requestBody);

        try {
            $result = $this->apiInstance->creditreport($this->x_api_key,$this->username,$this->password, $request);
            $this->assertNotNull($result);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling GuardIAnScoreApi->creditreport: ', $e->getMessage(), PHP_EOL;
        }
    }
}
