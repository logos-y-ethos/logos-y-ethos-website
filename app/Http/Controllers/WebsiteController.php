<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Collaborator;

class WebsiteController extends Controller
{

    public function getCollaborators() {
        // $collaborators = Collaborator::all();
        $collaborators = Collaborator::selectRaw('substr(name,1,1) as initial, GROUP_CONCAT(CONCAT(name, " ", last_name)) as people')->groupBy('initial')->get();

        return response()->view('website.us.external-collaborators', ['collaborators' => $collaborators]);
        // return response()->json(['collaborators' => $collaborators]);
    }

    public function getPublications() {
        // $collaborators = Collaborator::all();
        $publications = Publication::all();

        return response()->view('website.publications', ['publications' => $publications]);
    }

}
