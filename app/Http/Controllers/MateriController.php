<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Materi;
Use App\Models\Category;

class MateriController extends Controller
{
    //
    public function index(){
        
        $materi = Materi::latest()->take(5)->get();
        $materiPilihan = Materi::latest()->take(2)->get();
        $categories = Category::all();
        return view('home', compact('materi', 'categories', 'materiPilihan'));
    
        }

        public function show($id)
        {
            $materi = Materi::with(['writer', 'category'])->findOrFail($id);
            $materi->increment('visitor');

            return view('materi.show', compact('materi'));

        }

        public function popular()
        {
        $popularMateri = Materi::orderBy('visitor', 'desc')->paginate(3); 
        return view('materi.popular', compact('popularMateri'));
        }


        




}
