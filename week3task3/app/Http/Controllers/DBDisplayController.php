<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;

class DBDisplayController extends Controller
{
    public function index(Request $request)
    {
        $test = $request->query('test');
        if($test == 1){
            return "success using parameter for conditions";
        }
        return "I don't know how to feel about this";
    }

    public function show(Request $request)
    {

        // $tableNames = DB::select("SHOW TABLES");

        // I honestly don't know if this query will work, I got the query
        //from chat gpt after the query from stackoverflow did not work
        // yeah i i did not study how to use the eloquent ORM
        // tried to read the function tooltip-did not get shit on what the fuck the
        // parameter is on about. I fucking hate this shit. just get shit to work
        $tableNames = DB::table('information_schema.tables')
                        ->select('table_name')
                        ->where('table_schema', '=', 'it6ldb')
                        ->get()
                        ->pluck('table_name')
                        ->toArray();

        $requestTable = $request->query('dbTableName');

        $variablesForView = [
            'isTableInsideDB' => False,
            "tableName" => $requestTable
        ];
        if(in_array($requestTable, $tableNames) ){

            $variablesForView['isTableInsideDB'] = True;
            $variablesForView["message"] = "$requestTable is not inside it6ldb";

            $allTableColumns = Schema::getColumnListing($requestTable);
            $columnNums = count($allTableColumns);

            $variablesForView["columnNums"] = $columnNums;
            $variablesForView["columnNames"] = $allTableColumns;

            $allTableData = DB::select("SELECT * FROM $requestTable");

            $variablesForView["allTableData"] = $allTableData;

            return view('TableDisplayer',$variablesForView);
        }

        return "$requestTable is not inside it6ldb";
    }


}
