<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    //show all record
    public function index()
    {
        return Menu::all();
    }

    //show one record by id
    public function show($id)
    {
        return Menu::find($id);
    }

    //add one record
    public function store(Request $request)
    {
        return Menu::create($request->all());
    }

    //update record by id
    public function update(Request $request, $id)
    {
        $messages = Menu::findOrFail($id);
        $messages->update($request->all());
        return $messages;
    }

    //delete one record by id
    public function delete(Request $request, $id)
    {
        $messages = Menu::findOrFail($id);
        $messages->delete();
        return 204;
    }
}
