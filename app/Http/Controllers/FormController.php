<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request)
    {

        if ($request->file('image') == null) {
            return redirect('/form')->with('error', 'Please upload an image');
        }

        if ($request->file('image')->getSize() > 2048 * 1000) {
            return redirect('/form')->with('error', 'Image size must be less than 2MB');
        }

        if (strlen(substr(strrchr($request->input('product-price'), "."), 1)) < 2) {
            return redirect('/form')->with('error', 'Product price must be decimal with 2 digits after comma');
        }

        if ($request->input('product-price') < 2.50 || $request->input('product-price') > 99.99) {
            return redirect('/form')->with('error', 'Product price must be between 2.00 to 99.99');
        }

        if ($request->file('image')->extension() != 'jpg' && $request->file('image')->extension() != 'png' && $request->file('image')->extension() != 'jpeg') {
            return redirect('/form')->with('error', 'Image must be jpg, png, or jpeg');
        }

        $filename = "";
        if ($request->file('image')) {
            $extension = $request->file('image')->extension();
            $filename = date('Y-m-d-H-i-s') . "." . $extension;
            $request->file('image')->storeAs(
                'public/images',
                $filename
            );
        }


        $request['image'] = $filename;



        // return ke view product-detail dengan menambahkan data request, image, dan session message success
        return view('product-detail', ['data' => $request, 'image' => $filename, 'success' => 'Data saved succesfully']);


    }
}