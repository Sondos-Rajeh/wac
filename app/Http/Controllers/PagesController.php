<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //handle the index route
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function ourVision()
    {
        return view('our-vision');
    }

    public function massege()
    {
        return view('massege');
    }

    public function goalsAndValues()
    {
        return view('goals-and-values');
    }

    public function ourServices()
    {
        return view('our-services');
    }

    public function transportServices()
    {
        return view('transport-services');
    }

    public function oilServices()
    {
        return view('oil-services');
    }

    public function customsClearance()
    {
        return view('customs-clearance');
    }

    public function contractingAndConstruction()
    {
        return view('contracting-and-construction');
    }

    public function logisticsServices()
    {
        return view('logistics-services');
    }

    public function otherServices()
    {
        return view('other-services');
    }

    public function projects()
    {
        return view('projects');
    }

    public function emergencyUnitProjects()
    {
        return view('emergency-unit-projects');
    }

    public function clearanceProject()
    {
        return view('clearance-project');
    }

    public function contact()
    {
        return view('contact');
    }
}
