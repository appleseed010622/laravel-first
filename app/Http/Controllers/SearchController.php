<?php

namespace App\Http\Controllers;

use App\Models\SignUser;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {        
        $users = SignUser::paginate(10);

        return view('list', ['users' => $users]);
    }

    public function search(Request $request)
    {
        $full_name = $request->input('name_find');
        $birth = $request->input('birth_find');
        $construction = $request->input('construction_find');

        $query = SignUser::query();

        if (!empty($full_name)) {
            $query->where('full_name', 'LIKE', '%' . $full_name . '%');
        }

        if (!empty($birth)) {
            $query->whereDate('birth', $birth);
        }

        if (!empty($construction)) {
            $query->whereDate('construction', $construction);
        }

        $users = $query->paginate(10);

        // Store the input values in the session
        
        return view('list', ['users' => $users]);
        }
}
