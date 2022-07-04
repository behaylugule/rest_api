<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employeer;

class EmployeerController extends Controller
{
    public function index()
    {
        return Employeer::all();
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'dateOfBirth' => 'required',
            'gender' => 'required',
            'salary' => 'required',
        ]);

        return Employeer::create([
            'name' => request('name'),
            'dateOfBirth' => request('dateOfBirth'),
            'gender' => request('gender'),
            'salary' => request('salary'),
        ]);
    }

    public function update(Employeer $employeer)
    {
        request()->validate([
            'name' => 'required',
            'dateOfBirth' => 'required',
            'gender' => 'required',
            'salary' => 'required',
        ]);

        $success = $employeer->update([
            'name' => request('name'),
            'dateOfBirth' => request('dateOfBirth'),
            'gender' => request('gender'),
            'salary' => request('salary'),
        ]);

        return [
            'success' => $success
        ];
    }

    public function destroy(Employeer $employeer)
    {
        $success = $employeer->delete();

        return [
            'success' => $success
        ];
    }
}
