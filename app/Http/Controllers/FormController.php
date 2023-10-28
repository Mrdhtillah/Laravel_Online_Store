<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller; 

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'age' => 'required|integer|min:18|max:99',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048', 
            'price' => 'required|numeric|between:2.50,99.99',
        ]);

        if ($validator->fails()) {
            return redirect('/form')
                ->withErrors($validator)
                ->withInput();
        }

        session()->flash('success', 'Formulir berhasil diinputkan.');
        session()->flash('name', $request -> input('name'));
        session()->flash('email', $request->input('email'));
        session()->flash('age', $request->input('age'));
        $imageName = time().'.'.$request->image->extension();
        session()->flash('image', $imageName);
        session()->flash('price', $request->input('price'));

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }

        return redirect('/success');
    }
}
