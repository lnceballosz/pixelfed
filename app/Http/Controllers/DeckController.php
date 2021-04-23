<?php

/*
 * SPDX-FileCopyrightText: 2018 Daniel Supernault 
 * SPDX-License-Identifier: AGPL-3.0-only
 */
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeckController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('deck.index');
    }


    public function insights()
    {
        return view('deck.insights.index');
    }
}
