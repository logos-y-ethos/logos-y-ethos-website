<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Collaborator;
use App\Models\Person;
use Throwable;

class WebsiteController extends Controller
{

    public function index() {

        $publications = Publication::orderBy('id', 'DESC')->limit(2)->get();

        return response()->view('index', ['publications' => $publications]);
        // return response()->json(['publications' => $publications]);
    }

    public function getCollaborators()
    {
        // $collaborators = Collaborator::all();
        $students = Collaborator::selectRaw('substr(last_name,1,1) as initial, GROUP_CONCAT(CONCAT(last_name, ", ", name) ORDER BY name SEPARATOR "###") as people')
            ->where('type', 'estudiante')->groupBy('initial')->get();
        $graduates = Collaborator::selectRaw('substr(last_name,1,1) as initial, GROUP_CONCAT(CONCAT(last_name, ", ", name) ORDER BY name SEPARATOR "###") as people')
            ->where('type', 'egresado')->groupBy('initial')->get();

        return response()->view('website.us.collaborators', ['students' => $students, 'graduates' => $graduates]);
        // return response()->json(['collaborators' => $collaborators]);
    }

    public function getPublications()
    {
        $publications = Publication::orderBy('id', 'DESC')->get();

        $publicationToShow = count($publications) > 0 ? $publications[0] : null;

        return response()->view('website.publications', ['publications' => $publications, 'publicationToShow' => $publicationToShow]);
        // return response()->json(['publicationToShow' => $publicationToShow]);
    }

    public function getPublication($id)
    {
        $publicationToShow = Publication::find($id);

        if(is_null($publicationToShow)){
            return redirect('/publicaciones');
        }

        $publications = Publication::orderBy('id', 'DESC')->get();

        return response()->view('website.publications', ['publications' => $publications, 'publicationToShow' => $publicationToShow]);
        // return response()->json(['publicationToShow' => $publicationToShow]);
    }

    /**
     * ************************************* NOSOTROS *************************************
     */

    public function getOrganization()
    {
        $directors = Person::where('type', 'consejo directivo')->orderBy('order')->get();
        return response()->view('website.us.organization', ['directors' => $directors]);
    }

    public function getGeneralAssembly()
    {
        $members = Person::selectRaw('substr(last_name,1,1) as initial, GROUP_CONCAT(CONCAT(last_name, ", ", name) ORDER BY name SEPARATOR "###") as people')
            ->where('type', 'miembro activo')->groupBy('initial')->get();
        $collaborators = Person::selectRaw('substr(last_name,1,1) as initial, GROUP_CONCAT(CONCAT(last_name, ", ", name) ORDER BY name SEPARATOR "###") as people')
            ->where('type', 'colaborador')->groupBy('initial')->get();

        return response()->view('website.us.general-assembly', ['members' => $members, 'collaborators' => $collaborators]);
        // return response()->json(['collaborators' => $collaborators]);
    }
    public function getAdvisoryComitee()
    {
        $members = Person::selectRaw('substr(last_name,1,1) as initial, GROUP_CONCAT(CONCAT(last_name, ", ", name) ORDER BY name SEPARATOR "###") as people')
            ->where('type', 'comite consultivo')->groupBy('initial')->get();

        return response()->view('website.us.advisory-committee', ['members' => $members]);
        // return response()->json(['collaborators' => $collaborators]);
    }

}
