<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    /**
     * Muestra la página de inicio.
     */
    public function home()
    {
        return view('public.home'); // Retorna la vista de inicio
    }

    public function vacancies()
    {
        return view('public.vacancies');
    }
}