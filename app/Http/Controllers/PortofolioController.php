<?php

namespace App\Http\Controllers;

use App\Models\PortofolioProfile;
use App\Models\PortofolioProject;
use Illuminate\Http\Request;


class PortofolioController extends Controller
{
public function index()
{
    $profile = PortofolioProfile::first();
    $projects = PortofolioProject::latest()->get();

    return view('home', compact('profile', 'projects'));
}
}