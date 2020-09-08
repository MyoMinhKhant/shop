<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*use Illuminate\Support\Facades\Route;*/

class PageController extends Controller
{
     public function mainfun($value='')
    {
     /*   $route = Route::current();
        dd($route);*/
    	return view('main');
    }

     public function aboutfun($value='')
    {
    	return view('about');
    }

     public function contactfun($value='')
    {
    	return view('contact');
    }

     public function servicefun($value='')
    {
        return view('service');
    }

       public function testingfun($id,$name)
    {
       /* dd($name);*/
       return $id.'/'.$name;
        return view('testing');
    }

}
