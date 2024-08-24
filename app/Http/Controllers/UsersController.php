<?php

namespace App\Http\Controllers;
use libphonenumber\PhoneNumberUtil;
use Illuminate\Http\Request;
use App\Models\SignUser;
class UsersController extends Controller
{
    public function index()
    {   
        return view('new_success');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([            
            'contract_date' => 'required|date',
            'name_front' => 'required|string|max:255',
            'name_back' => 'required|string|max:255',
            'furigana_front' => 'required|string|max:255',
            'furigana_back' => 'required|string|max:255',
            'birth' => 'required|date',
            'post_code' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'tel' => 'required|string|max:255',
            'mobile1' => 'required|string|max:255',
            'mobile2' => '',
            'construction' => 'required|date',
            'payment' => 'required|date',
            'method' => 'required|string|max:255',
            'contract' => 'required|string|max:255',
            'select' => 'required',
            'warranty' => '',
            'memo' => '',
            'photos.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Check if the name fields contain non-Japanese characters
        // if (!preg_match('/^[ぁ-んァ-ン一-龥]+$/u', $validatedData['name_front']) || !preg_match('/^[ぁ-んァ-ン一-龥]+$/u', $validatedData['name_back'])) {
        //     return redirect()->back()->with('error', 'Check your name.');
        // }

        // if (!preg_match('/^[ぁ-ん]+$/u', $validatedData['furigana_front']) || !preg_match('/^[ぁ-ん]+$/u', $validatedData['furigana_back'])) {
        //     return redirect()->back()->with('error', 'The name fields must contain Japanese characters only.');
        // }
    
        // $phoneUtil = PhoneNumberUtil::getInstance();
        // $telNumber = $phoneUtil->parse($validatedData['tel'], 'JP'); // replace 'JP' with the appropriate country code
        // if (!$phoneUtil->isValidNumber($telNumber)) {
        //     return redirect()->back()->with('error', 'Invalid phone number format for tel.');
        // }
        // $formattedTelNumber = $phoneUtil->format($telNumber, \libphonenumber\PhoneNumberFormat::INTERNATIONAL);
    
        // $mobile1Number = $phoneUtil->parse($validatedData['mobile1'], 'jp'); // replace 'JP' with the appropriate country code
        // if (!$phoneUtil->isValidNumber($mobile1Number)) {
        //     return redirect()->back()->with('error', 'Invalid phone number format for mobile.');
        // }
        // $formattedMobile1Number = $phoneUtil->format($mobile1Number, \libphonenumber\PhoneNumberFormat::INTERNATIONAL);
    
       
        $photos = [];
        foreach ($request->file('photos') as $photo) {
            $filename = time() . '_' . $photo->getClientOriginalName();
            $path = $photo->storeAs('public/photos', $filename);
            $photos[] = 'storage/photos/'.$filename;
        }
        
        $post = new SignUser;
        $post-> contract_date= $validatedData['contract_date'];
        $post-> name_front= $validatedData['name_front'];
        $post-> name_back= $validatedData['name_back'];
        $post-> full_name=  $validatedData['name_front'].$validatedData['name_back'];
        $post-> furigana_front= $validatedData['furigana_front'];
        $post-> furigana_back= $validatedData['furigana_back'];
        $post-> birth= $validatedData['birth'];
        $post-> post_code= $validatedData['post_code'];
        $post-> address= $validatedData['address'];
        $post-> tel= $validatedData['tel'];
        $post-> mobile1= $validatedData['mobile1'];
        $post-> mobile2= $validatedData['mobile2'];
        $post-> construction= $validatedData['construction'];
        $post-> payment= $validatedData['payment'];
        $post-> method= $validatedData['method'];
        $post-> contract= $validatedData['contract'];
        $post-> select= $validatedData['select'];
        $post-> warranty= $validatedData['warranty'];
        $post-> memo= $validatedData['memo'];
        $post-> photos = json_encode($photos);
    
        $post->save();
    
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }
}