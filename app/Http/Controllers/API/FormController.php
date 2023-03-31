<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required'
        ]);

        // dd($request->all());
        Student::create($validatedData);

        return response()->json([
            'message' => 'Student berhasil ditambahkan',
            'student' => $validatedData
        ], 200);
    }
}
