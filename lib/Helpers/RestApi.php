<?php
namespace Lib\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;

class RestApi
{
    public static function call($method, $url, $options = [])
    {
        try {
            $client = new Client();
            $method = strtolower($method);

            if(!in_array($method, ['get', 'put', 'patch', 'post', 'delete'])){
                $message = sprintf('Method %s not allow, method valid %s', $method, implode(' ', ['get', 'put', 'patch', 'post', 'delete']));
                throw new \Exception($message);
            }

            if(env('APP_ENV') === 'local'){
                $client->setDefaultOption('verify', false);
            }

            $request = $client->createRequest($method, $url, $options);
            $response = $client->send($request);

            if($response->getStatusCode() > 204){
                throw new \Exception($response->getBody()->getContents());
            }

            return $response->getBody()->getContents();
        } catch (ClientException $clientException) {
            return $clientException;
        } catch (ServerException $serverException) {
            return $serverException;
        } catch (BadResponseException $badResponseException) {
            return $badResponseException;
        } catch (\Exception $exception) {
            return $exception;
        }
    }
}
