<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ServicesController extends Controller
{
    public function solar_energy()
    {
        try {
            return view("Frontend.pages.services.solar-energy");
        } catch (\Exception $e) {
            Log::error("SOLAR_ENERGY_ERROR" . $e->getMessage());
            return back()->with('errors', 'Sorry, Internal Server Error');
        }
    }
    public function it_services()
    {
        try {
            return view("Frontend.pages.services.it-service");
        } catch (\Exception $e) {
            Log::error("SOLAR_ENERGY_ERROR" . $e->getMessage());
            return back()->with('errors', 'Sorry, Internal Server Error');
        }
    }
    public function software_service()
    {
        try {
            return view("Frontend.pages.services.software-service");
        } catch (\Exception $e) {
            Log::error("SOLAR_ENERGY_ERROR" . $e->getMessage());
            return back()->with('errors', 'Sorry, Internal Server Error');
        }
    }
    public function electric_fence()
    {
        try {
            return view("Frontend.pages.services.electric-fence");
        } catch (\Exception $e) {
            Log::error("SOLAR_ENERGY_ERROR" . $e->getMessage());
            return back()->with('errors', 'Sorry, Internal Server Error');
        }
    }
    public function cctv_service()
    {
        try {
            return view("Frontend.pages.services.cctv_service");
        } catch (\Exception $e) {
            Log::error("SOLAR_ENERGY_ERROR" . $e->getMessage());
            return back()->with('errors', 'Sorry, Internal Server Error');
        }
    }
    public function ac_service()
    {
        try {
            return view("Frontend.pages.services.ac-service");
        } catch (\Exception $e) {
            Log::error("SOLAR_ENERGY_ERROR" . $e->getMessage());
            return back()->with('errors', 'Sorry, Internal Server Error');
        }
    }
}
