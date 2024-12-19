<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataTableController extends Controller
{
    public function index()
    {
        return view('datagrid'); // Widok Blade
    }

    public function getData()
    {
        $data = [
            ['John Doe', 'johndoe@example.com', 'Manager', '2024-12-19'],
            ['Jane Smith', 'janesmith@example.com', 'Developer', '2023-08-14'],
            ['Tom Brown', 'tombrown@example.com', 'Designer', '2022-11-10'],
        ];

        return response()->json($data);
    }
}
