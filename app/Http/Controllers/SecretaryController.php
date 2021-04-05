<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Secretary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SecretaryController extends Controller
{
    //

    public function indexSecretariesWithMembers() {
        $secretaries = Secretary::all();
        return response()->view('admin.secretaries.index', ['secretaries' => $secretaries ]);
    }

    public function storeSecretaryMember(Request $request)
    {
        $member = new Person($request->all());
        $member->type = 'secretaria';
        if ($request->hasFile('photo')) {
            if (App::environment('local')) {
                $pathToMove = public_path('/images/us/');
            }else{
                $pathToMove = base_path() . '/public_html/images/us/';
            }
            $photo_name = $request->name .' ' . $request->last_name;
            $request->cover->move($pathToMove, $photo_name);
            $member->photo = $photo_name;
        }
        $member->save();
        return redirect('admin/secretarias');
    }

    public function editSecretaryMember($id)
    {
        $member = Person::find($id);
        $secretaries = Secretary::all();
        return view('admin.secretaries.edit', ['member' => $member, 'secretaries' => $secretaries ]);
    }

    public function updateSecretaryMember(Request $request, $id)
    {
        $member = Person::find($id);
        $member->fill($request->all());
        if ($request->hasFile('photo')) {
            $pathToMove = '';
            if (App::environment('local')) {
                $pathToMove = public_path('/images/us/');
            }else{
                $pathToMove = base_path() . '/public_html/images/us/';
            }
            $photo_name = $request->name . ' ' . $request->last_name . '.png';
            $request->photo->move($pathToMove, $photo_name);
            $member->photo = $photo_name;
        }
        $member->save();
        // return response()->json(['collaborator' => $request->hasFile('photo')]);

        return redirect('admin/secretarias');
    }

    public function destroySecretaryMember($id)
    {
        $member = Person::find($id);
        $member->delete();
        return redirect('admin/secretarias');
    }

}
