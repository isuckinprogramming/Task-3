@extends('layouts.basicHeadLayout')

@section("additional-head-content")
    {{-- <link href="./../../css/test.css"  rel="stylesheet"/> --}}
@endsection

@section("body-content")
    <h1 class="something">Test if this works</h1>
    <h1>trying out retrieving content from database</h1>

    @foreach( $energy_drinks as $e_drink )
        <div>
            <p>Energy drink content: {{$e_drink->id}}</p>
            <h2>
                <p> {{ $e_drink->name }} </p>
                <p> {{ $e_drink->short_description}} </p>
                <p> {{ $e_drink->full_description}} </p>
            </h2>
        </div>
    @endforeach

    <ul>
        <h1>Names of table in Database</h1>
    @foreach( $tableNames as $tableName )
        <li>
            {{$tableName->Tables_in_it6ldb}}
            <a href="/newSite?dbTableName={{$tableName->Tables_in_it6ldb}}">View table contents</a>
        </li>
    @endforeach
    </ul>

    {{-- BOoooooooooooooo yaahhhhh it fuckcign worsssks --}}
    <a href="/newSite?test=1">Click to enter new site</a>

@endsection

