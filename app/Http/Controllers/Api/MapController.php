<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Providers\AppServiceProvider;
use App\Services\RocketLeagueService;
use Illuminate\Http\Request;

class MapController extends Controller
{
    protected $apiService;

    // Menambahkan dependensi pada constructor
    public function __construct(RocketLeagueService $apiService)
    {
        $this->apiService = $apiService;
    }

    // Method untuk mendapatkan semua tim
    public function getAllTeams()
    {
        // Ambil data tim dari API
        $teams = $this->apiService->getAllTeams();
        // return json_encode($teams);
        // return $teams;
        return view('main', ['data' => $teams]);
    }
}
