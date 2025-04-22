<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class RocketLeagueService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('RAPIDAPI_KEY'); // Ambil API key dari file .env
    }

    // Fungsi untuk mendapatkan semua tim
    public function getAllTeams()
    {
        try {
            $response = $this->client->request('GET', 'https://rocket-league1.p.rapidapi.com/tournaments/asia-east', [
                'headers' => [
                    'x-rapidapi-key' => $this->apiKey
                ],
                'verify' => false // Menonaktifkan verifikasi SSL
            ]);

            $data = json_decode($response->getBody()->getContents(), true);
            return $data;
        } catch (RequestException $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
