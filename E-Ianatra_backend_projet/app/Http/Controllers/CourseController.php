<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Liste tous les cours
    public function index()
    {
        return Course::all();
    }

    // Affiche un cours précis et ses leçons
    public function show($id)
    {
        return Course::with('lessons')->findOrFail($id);
    }
}
