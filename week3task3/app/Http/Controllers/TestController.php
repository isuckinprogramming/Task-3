<?php

namespace App\Http\Controllers;

// use is kind of like an import statement
// Im going to think of it as an import statement
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\energy_drinks;

class TestController extends Controller
{
    public function index()
    {

        // $parameterVar = ["energy_drinks" => energy_drinks::All()];
        $parameterVar = [
            "tableNames" => TestController::retrieveTableNames(),
            "energy_drinks" => energy_drinks::orderBy('name')->get()

        ];

        return view('Dashboard',$parameterVar);
    }

    private function retrieveTableNames()
    {

        $tableNames = DB::select("SHOW TABLES");

        // fuck no this wont work
        // love you carlosvini from stackoverflow
        // $tables = DB::connection()->getDoctrineSchemaManager()->listTableNames();

        return $tableNames;
    }

    public function show($param)
    {

    return [
        "text" => "this is a string containing $param",
        "this is a json" => "php styled json"];
    }
}
