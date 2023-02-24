<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Stichoza\GoogleTranslate\GoogleTranslate;

class LangController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index()
    {
        return view('lang');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function change(Request $request)
    {
$u = 'Hello';
 GoogleTranslate::trans($u, app()->getLocale());
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
//        dd($u);
dd(GoogleTranslate::trans($u));
        return GoogleTranslate::trans($u, app()->getLocale());
    }
}
