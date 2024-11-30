<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProjectsController extends Controller
{
    public function projects(){
        try{
            return view("Frontend.pages.project");
        }catch(\Exception $e){
            Log::error("PROJECTS_ERROR".$e->getMessage());
            return back()->with('Sorry, Internal Server Error');
        }
    }
}
