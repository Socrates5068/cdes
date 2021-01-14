<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conductor;
class CovidController extends Controller
{
    
    public function porpais(){
    	$tipot=1;$t="Por Pais";
    	return view("covid.index",compact("tipot","t"));
    }
    public function porregion(){
    	$tipot=0;$t="Por Region";
    	return view("covid.index",compact("tipot","t"));
    }
    
}
