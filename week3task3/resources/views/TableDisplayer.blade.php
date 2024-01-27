
<!--
    Act only according to that maxim whereby you can,
    at the same time, will that it should become a universal law.
    - Immanuel Kant -->
{{-- dafuqqq???????? auto-generated content
     sounds cool but I dont get it --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contents of {{$tableName}}</title>

    <style>
        table,th,td {
            border: solid black 5px;
            padding :10px
        }
        th{
            margin: 5px;
        }
    </style>
</head>
<body>
    {{-- I honestly don't get what the error is about --}}
    <h1>{{$tableName}}</h1>
    <h1>The table is @if($isTableInsideDB) inside @else not inside @endif </h1>
    <h2>Number of columns {{$columnNums}}</h2>

    <table>
        <tr>
        @foreach($columnNames as $names)
            <th>{{$names}}</th>
        @endforeach
        </tr>
        @php
        // this foreach loop is great, it automatically destructures the data
        // inside the loop
        foreach($allTableData as $rowData){
            echo "<tbody><tr>";
            foreach($rowData as $data){
                echo "<td>$data</td>";
            }
            echo "</tbody></tr>";
        }
        @endphp
    </table>



</body>

</html>
