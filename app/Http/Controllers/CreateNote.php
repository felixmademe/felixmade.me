<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CreateNote extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'message'   => 'required|string|max:100',
            'public'    => 'required|boolean',
            'recaptcha' => 'required'
        ]);


        $note = Note::create( $request->except( '_token', 'recaptcha' ) );

        return redirect()->back();
        /*
        return response()->json([
            'result' => 'Success, note have been created',
            'data'   => $note
        ], 200 );
        */
    }
}
