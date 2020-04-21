<?php

namespace App\Traits;

use GuzzleHttp\Client;

trait ConsumesExternalServices
{
    public function makeRequest($method,$requestUri,$queryParams = [], $formParams = [], $headers = [], $isJsonRequest = false)
    {
        $client = new Client([
            'base_uri' => $this->baseuri,

        ]);

         //Llamada a metodo para autorizacion
        if(method_exists($this, 'resolveAuthorization'))
        {
            $this->resolveAuthorization($queryParams,$formParams,$headers);
        }
       
       
        $response = $client->request($method, $requestUri, [
            $isJsonRequest ? 'json' : 'form_params' => $formParams,
            'headers' => $headers,
            'query' => $queryParams,

        ]);

        $response = $reponse->getBody()->getContents();

        //Realizar una conversion de la respuesta dependiendo del servicio
        if(method_exists($this, 'decodeResponse'))
        {
            $response = $this->decodeResponse($response);
        }

       

        return $response;
    }
}