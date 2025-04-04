<?php

namespace DiogoDg\Asaas;


class InformacoesFiscais {

    public $http;

    public function __construct(Connection $connection)
    {
        $this->http = $connection;
    }

    public function ListMunicipalConfigurations(){
        return $this->http->get('/customerFiscalInfo/municipalOptions');
    }

    public function get(){
        return $this->http->get('/customerFiscalInfo');
    }

    public function createUpdate($dadosConta){
        return $this->http->post('/customerFiscalInfo', $dadosConta);
    }

}
