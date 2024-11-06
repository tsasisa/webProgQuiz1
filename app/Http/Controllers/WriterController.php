<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writer;

class WriterController extends Controller
{
    public function index()
{
    $writers = Writer::all();
    return view('writer.index', compact('writers'));
}

public function show($id)
{
    $writer = Writer::with('materi')->findOrFail($id);
    return view('writer.show', compact('writer'));
}

}
