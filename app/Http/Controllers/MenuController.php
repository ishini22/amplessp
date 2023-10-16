<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    // Method to display the list of menus.
    public function index()
    {
        // Fetch menus from the database or any other data source.
        // For example:
        $menus = Menu::all();

        return view('menus.index', ['menus' => $menus]);
    }

    // Method to create a new menu.
    public function create()
    {
        return view('menus.create');
    }

    // Method to store a newly created menu.
    public function store(Request $request)
    {
        // Validate and store the menu data.
        // Example validation:
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            // Add more validation rules as needed.
        ]);

        // Create and save the menu.
        $menu = new Menu($validatedData);
        $menu->save();

        return redirect()->route('menus.index')->with('success', 'Menu created successfully.');
    }

    // Method to edit an existing menu.
    public function edit(Menu $menu)
    {
        return view('menus.edit', ['menu' => $menu]);
    }

    // Method to update an existing menu.
    public function update(Request $request, Menu $menu)
    {
        // Validate and update the menu data.
        // Example validation:
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            // Add more validation rules as needed.
        ]);

        $menu->update($validatedData);

        return redirect()->route('menus.index')->with('success', 'Menu updated successfully.');
    }

    // Method to delete a menu.
    public function destroy(Menu $menu)
    {
        $menu->delete();

        return redirect()->route('menus.index')->with('success', 'Menu deleted successfully.');
    }
}


