<?php

namespace App\Services;

use App\Entities\CredentialsWebService;
use Greenter\See;
use Greenter\Ws\Services\SunatEndpoints;

class WebServiceSunat
{
    public See $see;

    public function __construct(string $pathCertificate,string $endpoint)
    {
        $this->see = new See();
        $this->see->setCertificate(file_get_contents(base_path($pathCertificate)));
        $this->see->setService($endpoint);
        $this->see->setClaveSOL(CredentialsWebService::RUC,CredentialsWebService::USER,CredentialsWebService::PASSWORD);
    }
}
