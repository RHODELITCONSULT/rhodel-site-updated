<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CareerController extends Controller
{
    public function career(){
        try{
            return view('Frontend.pages.career');

        }catch(\Exception $e){
            Log::error("CAREER_ERROR" . $e->getMessage());
            return back()->with('error','Sorry, Internal Server Error');
        }
    }
}
