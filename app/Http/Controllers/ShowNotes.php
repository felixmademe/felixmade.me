<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ShowNotes extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|Factory|Response|View
     */
    public function __invoke(Request $request)
    {
        $notes = Note::all();

        return view('board')->with('notes', $notes);
    }
}
