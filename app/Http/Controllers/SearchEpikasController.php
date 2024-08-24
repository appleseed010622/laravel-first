<?php

namespace App\Http\Controllers;

use App\Models\EpikaUser;
use Illuminate\Http\Request;

class SearchEpikasController extends Controller
{
    public function index()
    {        
        $epikas = EpikaUser::paginate(10);



        return view('epika.list', ['epikas' => $epikas]);
    }

    public function search(Request $request)
    {
        $full_name = $request->input('name_find');
        $birth = $request->input('birth_find');
        $construction = $request->input('construction_find');

        $query = EpikaUser::query();

        if (!empty($full_name)) {
            $query->where('full_name', 'LIKE', '%' . $full_name . '%');
        }

        if (!empty($birth)) {
            $query->whereDate('birth', $birth);
        }

        if (!empty($construction)) {
            $query->whereDate('construction', $construction);
        }

        $epikas = $query->paginate(10);

        // Store the input values in the session
        
        return view('/epika/list', ['epikas' => $epikas]);
        }
}
