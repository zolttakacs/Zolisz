<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function showList()
    {
        //Kérjük le az adatokat a db-ből, majd táblázatosan
        //mutassuk a fealdat nevét, néven legyen link,
        //amelyre kattintva részletesen nézetbe tudunk átmenni
        $records = Todo::all();
        $viewData= [
            'table' => $records
        ];
        return view('todos.list', $viewData);
        
    }

    public function showOne(Todo $record)
    {
        $viewData= [
            'rec' => $record
        ];
        return view('todos.one', $viewData);
        
    }
    public function addForm()
    {

    }
    public function add(Request $record)
    {

    }
    public function delete(Todo $record)
    {
            $record->delete();
            return redirect()->route('todos.list');
    }
    public function updateForm()
    {

    }
    public function update(Request $request)
    {

    }
}
