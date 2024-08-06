<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function showWeather()
    {
        $response = Http::get("http://api.openweathermap.org/data/2.5/weather?q=London,uk&appid=" . env('OPEN_WEATHER_MAP_API_KEY'));

        if ($response->successful()) {
            $data = $response->json();

            // Pass the weather data to your dashboard view
            return view('dashboard', ['weather' => $data]);
        } else {
            // Handle error
            return back()->withErrors(['error' => 'Failed to fetch weather data']);
        }
    }
}
