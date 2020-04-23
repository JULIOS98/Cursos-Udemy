<?php

namespace App\Services;

use App\Traits\ConsumesExternalServices;

//Representa al servicio como tal
//Enviar peticiones http atravez del trait
class PayPalService
{
    //Con esto paypal tiene acceso a los metodos de esta funcion
    use ConsumesExternalServices;

    //atributos
    protected $baseUri;
    protected $clientId;
    protected $clientSecret;

    //Este constructor establecera cada uno de los parametros de las variables
    //de entorno
    public function __construct()
    {
        $this->baseUri = config('services.paypal.base_uri');
        $this->clientId = config('services.paypal.client_id');
        $this->clientSecret = config('services.paypal.client_secret');
    }

    //Se necesita resivir los parametros pero como se actuara sobre ellos se necesitan 
    //referencias como un apuntador
    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {

    }

    //Se recibe el objeto que representa la respuesta
    public function decodeResponse()
    {

    }


}