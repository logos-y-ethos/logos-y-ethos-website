<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Collaborator;

class WebsiteController extends Controller
{

    public function getCollaborators() {
        // $collaborators = Collaborator::all();
        $students = Collaborator::selectRaw('substr(last_name,1,1) as initial, GROUP_CONCAT(CONCAT(last_name, ", ", name) ORDER BY name SEPARATOR "###") as people')
        ->where('type', 'estudiante')->groupBy('initial')->get();
        $graduates = Collaborator::selectRaw('substr(last_name,1,1) as initial, GROUP_CONCAT(CONCAT(last_name, ", ", name) ORDER BY name SEPARATOR "###") as people')
        ->where('type', 'egresado')->groupBy('initial')->get();

        return response()->view('website.us.collaborators', ['students' => $students, 'graduates' => $graduates]);
        // return response()->json(['collaborators' => $collaborators]);
    }

    public function getPublications() {
        // $collaborators = Collaborator::all();
        $publications = Publication::all();

        return response()->view('website.publications', ['publications' => $publications]);
    }

}
