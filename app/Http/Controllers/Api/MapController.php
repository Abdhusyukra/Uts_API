<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Providers\AppServiceProvider;
use App\Services\MobileLegendsService;


class MapController extends Controller
{
    protected $apiService;

    // Menambahkan dependensi pada constructor
    public function __construct(MobileLegendsService $apiService)
    {
        $this->apiService = $apiService;
    }

    // Method untuk mendapatkan semua tim
    public function getAllTeams()
    {
        // Ambil data tim dari API
        // $teams = $this->apiService->getAllTeams();
        $response = $this->apiService->getAllTeams();
        // return json_encode($teams);
        // return $teams;
        return view('main', ['response' => $response]);

    }
}
