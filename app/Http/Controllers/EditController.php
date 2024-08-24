<?php

namespace App\Http\Controllers;

use App\Models\SignUser;
use Illuminate\Http\Request;


class EditController extends Controller
{
    public function show($id)
    {
        // Redirect to /edit/{id}
        return redirect()->route('edit', ['id' => $id]);
    }

    public function edit($id)
    {
        // Retrieve user data from database and pass it to the view
        $post = SignUser::findOrFail($id);
        return view('edit', compact('post'));
    }


    public function update(Request $request, $id)
    {
        $post = SignUser::findOrFail($id);
        $post-> contract_date= $request->input('contract_date');
        $post-> name_front= $request->input('name_front');
        $post-> name_back= $request->input('name_back');
        $post-> full_name= $request->input('name_front').$request->input('name_back');
        $post-> furigana_front= $request->input('furigana_front');
        $post-> furigana_back= $request->input('furigana_back');
        $post-> birth= $request->input('birth');
        $post-> post_code= $request->input('post_code');
        $post-> address= $request->input('address');
        $post-> tel= $request->input('tel');
        $post-> mobile1= $request->input('mobile1');
        $post-> mobile2= $request->input('mobile2');
        $post-> construction= $request->input('construction');
        $post-> payment= $request->input('payment');
        $post-> method= $request->input('method');
        $post-> contract= $request->input('contract');
        $post-> select= $request->input('select');
        $post-> warranty= $request->input('warranty');
        $post-> memo= $request->input('memo');
        
                
        $post->save();
    
       return view('new_success');
    }

}
