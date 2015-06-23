<?php

namespace n00bsys0p\Horizon;

use GuzzleHttp\Client as HttpClient;

class NetworkException extends \Exception {
    protected $message = 'Generic Network Exception';
}

class ClientException extends \Exception {
    protected $message = 'Generic Horizon Exception';
}

class UnknownAccountException extends ClientException {
    protected $message = 'Account not detected on network';
}

class InvalidAccountException extends ClientException {
    protected $message = 'Invalid account ID.';
}

class HorizonClient {
    protected $client = NULL;
    protected $baseUrl = NULL;

    public function __construct($host, $port)
    {
        $this->baseUrl = "http://$host:$port";
        $this->client = new HttpClient();
    }

    public function runCommand($method, $command, $params = array())
    {
        $uri = "/nhz?requestType=$command" .
                    $this->constructUrl($params);

        $method = strtolower($method);
        $res = $this->client->$method($this->baseUrl . $uri);

        if($res->getStatusCode() !== 200)
            throw new NetworkException('Network error ' . $res->getStatusCode());
        
        $res = json_decode($res->getBody());

        if(property_exists($res, 'errorCode'))
        {
            switch($res->errorCode)
            {
                case 5:
                    throw new UnknownAccountException;
                    break;
                case 4:
                    throw new InvalidAccountException;
                    break;
            }

            throw new ClientException('Horizon error ' . 
                $res->errorCode . ' (' . $res->errorDescription . ')'
            );
        }

        return $res;
    }

    protected function constructUrl($params)
    {
        $qstr = '';
        foreach($params as $key => $val)
            $qstr .= "&$key=" . urlencode($val);

        return $qstr;
    }
}
