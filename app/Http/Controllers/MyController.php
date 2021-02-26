<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\UsersExport;
use App\Imports\UsersImport;

use App\Exports\AreasExport;
use App\Imports\AreasImport;
use Maatwebsite\Excel\Facades\Excel;

class MyController extends Controller
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function importExportView()
    {
        return view('import');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new UsersExport, 'List-Usuarios.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import()
    {
        Excel::import(new UsersImport, request()->file('file'));

        return back();
    }
    //ESTOS SON LOS METODOS PARA LA TABLA ÁREAS

    /**
     * @return \Illuminate\Support\Collection
     */
    public function importExportView1()
    {
        return view('importAreas');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function exportAreas()
    {
        return Excel::download(new AreasExport, 'List-Areas.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function importAreas()
    {
        Excel::import(new AreasImport, request()->file('file'));

        return back();
    }
}
