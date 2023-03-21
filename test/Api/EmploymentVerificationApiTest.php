<?php

namespace CirculoDeCredito\EmploymentVerification\Client;

use CirculoDeCredito\EmploymentVerification\Client\Api\ApiClient;
use CirculoDeCredito\EmploymentVerification\Client\Model\Address;
use CirculoDeCredito\EmploymentVerification\Client\Model\StateCatalog;
use CirculoDeCredito\EmploymentVerification\Client\Model\FullName;
use CirculoDeCredito\EmploymentVerification\Client\Model\PrivacyNotice;
use CirculoDeCredito\EmploymentVerification\Client\Model\EmploymentVerification;
use CirculoDeCredito\EmploymentVerification\Client\Model\EmploymentVerificationWithPrivacyNotice;

use CirculoDeCredito\EmploymentVerification\Client\Configuration;
use CirculoDeCredito\EmploymentVerification\Client\ApiException;
use CirculoDeCredito\EmploymentVerification\Client\ObjectSerializer;

use Signer\Manager\Interceptor\MiddlewareEvents;
use Signer\Manager\Interceptor\KeyHandler;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;

class EmploymentVerificationApiTest extends \PHPUnit\Framework\TestCase
{
    const YES   = "Y";
    const NO    = "N";

    private $username;
    private $password;
    private $apiKey;
    private $httpClient;
    private $config;

    public function setUp(): void
    {
        $this->username = "";
        $this->password = "";
        $this->apiKey   = "";

	    $apiUrl              = "";
	    $keystorePassword    = "";
        $keystore            = "your_pkcs.p12";
        $cdcCertificate      = "cdc_cert.pem";

        $signer = new KeyHandler($keystore, $cdcCertificate, $keystorePassword);

        $events = new MiddlewareEvents($signer);
        $handler = HandlerStack::create();
        $handler->push($events->add_signature_header('x-signature'));
        $handler->push($events->verify_signature_header('x-signature'));

        $this->config = new Configuration();
        $this->config->setHost($apiUrl);

        $this->httpClient = new HttpClient([
            'handler' => $handler
        ]);

    }
    
    /**
     * HTTP POST employment verification.
     * 
     * New employment verification request.
     * 
     * @group 
     */
    public function testEmploymentverificationsWithPrivacyNotice(): void
    {
        $address = new Address();
        $address->setState(StateCatalog::CDMX);
        $address->setPostalCode("");
        $address->setCity("");
        $address->setCounty("");
        $address->setSettlement("");
        $address->setStreetAndNumber("");

        $fullName = new FullName();
        $fullName->setFirstName("");
        $fullName->setMiddleName("");
        $fullName->setFirstSurname("");
        $fullName->setSecondSurname("");
        $fullName->setAditionalSurname("");

        // Current date time with the format required by EVA API
        // Note that this date time MUST correspond with the real acceptance date time from the client
        $microTime = sprintf("%.2f", microtime(true));
        $dateTime = date('Y-m-d\TH:i:s', $microTime).'.'.substr($microTime, -2).'Z';

        $privacyNotice = new PrivacyNotice();
        $privacyNotice->setFullName($fullName);
        $privacyNotice->setAddress($address);
        $privacyNotice->setAcceptanceDate($dateTime);
        $privacyNotice->setAcceptance(Self::YES); // [Y,N]

        $employment = new EmploymentVerification();
        $employment->setCurp("");
        $employment->setNss("");
        $employment->setEmail("");
        $employment->setEmploymentVerificationRequestId($this->uuid());
        $employment->setSubscriptionId("");

        $requestPayload = new EmploymentVerificationWithPrivacyNotice();
        $requestPayload->setPrivacyNotice($privacyNotice);
        $requestPayload->setEmploymentVerification($employment);

        $reponse = null;

        try  {
            $api = new ApiClient($this->httpClient, $this->config);
            $response = $api->employmentverificationsWithPrivacyNotice($this->apiKey, $this->username, $this->password, $requestPayload);
            print("\n".$response);
            
        }  catch  (ApiException $exception)  {
            print("\nThe HTTP request failed, an error occurred: ".($exception->getMessage()));
            print("\n".$exception->getResponseObject());
        }
    
        $this->assertNotNull($response);
    }

    /**
     * HTTP GET employment verification by inquiryId.
     * 
     * @group skip
     */
    public function testGetEmploymentVerificationByInquiryId(): void
    {
        $inquiryId = "";

        $response = null;

        try  {
            $api = new ApiClient($this->httpClient, $this->config);
            $response = $api->getEmploymentVerification($this->apiKey, $this->username, $this->password, $inquiryId);
            print("\n".$response);
            
        }  catch  (ApiException $exception)  {
            print("\nThe HTTP request failed, an error occurred: ".($exception->getMessage()));
            print("\n".$exception->getResponseObject());
        }
    
        $this->assertNotNull($response);
    }

    /**
     * HTTP GET all employment verfications.
     * 
     * @group skip
     */
    public function testGetAllEmploymentVerfications(): void
    {
        $page = 1;
        $perPage = 20;

        $response = null;

        try  {
            $api = new ApiClient($this->httpClient, $this->config);
            $response = $api->getEmploymentVerifications($this->apiKey, $this->username, $this->password, $page, $perPage);
            print("\n".$response);
            
        }  catch  (ApiException $exception)  {
            print("\nThe HTTP request failed, an error occurred: ".($exception->getMessage()));
            print("\n".$exception->getResponseObject());
        }
    
        $this->assertNotNull($response);
    }

    /**
     * Generates UUID v4.
     */
    public function uuid():string {
        $bytes = random_bytes(16);

        $bytes[6] = chr(ord($bytes[6]) & 0x0f | 0x40);
        $bytes[8] = chr(ord($bytes[8]) & 0x3f | 0x80);

        $uuid = vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($bytes), 4));

        return $uuid;
    }
}
