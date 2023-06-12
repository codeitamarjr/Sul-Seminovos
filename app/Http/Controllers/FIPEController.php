<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class FIPEController extends Controller
{
    private $URLBase = "https://parallelum.com.br/fipe/api/v1/";

    public function getCarBrands()
    {
        return Cache::remember('car-brands', 60 * 24 * 30, function () {
            // $url = $this->URLBase . "carros/marcas";
            // $response = Http::get($url);
            // if ($response->successful()) {
            //     return $response->json();
            // }

            $url = $this->URLBase . "carros/marcas";
            $json = file_get_contents($url);
            $data = json_decode($json);
            return $data;

            throw new Exception('Falha ao obter marcas de carro');
        });
    }

    public function getCarModels($brand)
    {
        $url = $this->URLBase . "carros/marcas/{$brand}/modelos";

        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json();
            return $data;
        }

        throw new Exception('Falha ao obter modelos de carro');
    }

    public function getCarYears($brand, $model)
    {
        $url = $this->URLBase . "carros/marcas/{$brand}/modelos/{$model}/anos";

        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json();
            return $data;
        }

        throw new Exception('Falha ao obter anos de carro');
    }

    public function getCarDetails($brand, $model, $year)
    {
        $url = $this->URLBase . "carros/marcas/{$brand}/modelos/{$model}/anos/{$year}";

        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json();
            return $data;
        }

        throw new Exception('Falha ao obter detalhes de carro');
    }
}
