<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CreateNote extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'message'   => 'required|string|max:100',
            'public'    => 'required|boolean',
            'recaptcha' => 'required'
        ]);


        $note = Note::create( $request->except( '_token', 'recaptcha' ) );

        $date = Carbon::parse( $note->created_at )->diffForHumans();
        //return redirect()->back();
        return response()->json([
            'result' => 'Success, note have been created',
            'data'   => [$note, $date ]
        ], 200 );
    }
}
