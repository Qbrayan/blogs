<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Intern;

class InternController extends Controller
{
    public function index()
    {
        return view('intern',['interns' => Intern::all()]);
    }

    public function create()
    {
        return view('new_intern');
    }

    public function add(Request $request)
    {
        Intern::create(['firstname'=>$request->input('firstname'), 'lastname'=>$request->input('lastname'), 'department'=>$request->input('department'),'contact'=>$request->input('contact')]);
        return Redirect('/intern');
    }
    public function delete($id)
    {
        try
        {
            Intern::findOrFail($id)->forceDelete();
        }
        catch (\Exception $e)
        {
            dd("The intern you are trying to delete does not exist");
        }
        return Redirect('/intern');
    }
    public function getUpdate($id)
    {
        return view('intern_update', ['internup' => Intern::find($id)]);
    }
    public function update(Request $request)
    {
        $id = $request -> input('id');
        Intern::where('id', $id)->update(['firstname'=>$request->input('firstname'), 'lastname'=>$request->input('lastname'), 'department'=>$request->input('department'),'contact'=>$request->input('contact')]);
        return Redirect('/intern');
    }
}