<?php

namespace Alura\DesignPattern\Http;

class CurlHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        // fazer as configurações necessárias

        echo "Usando o Curl Adapter..." . PHP_EOL;
    }
}