<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MCServerStatus\MCPing;

class ShowGames extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function __invoke(Request $request)
    {
        $server = MCPing::check('167.172.105.202');
        return view('games.index')->with('server', $server);
    }
}
