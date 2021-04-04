<?php

namespace App\Http\Controllers;

use App\Models\Secretary;
use Illuminate\Http\Request;

class SecretaryController extends Controller
{
    //

    public function indexSecretariesWithMembers() {
        $secretaries = Secretary::all();
        return response()->view('admin.secretaries.index', ['secretaries' => $secretaries ]);

    }
}
