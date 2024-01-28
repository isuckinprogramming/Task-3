
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
    <title>{{$tableName}}</title>

    <link href="stylesheets/HeadersAndParagraphs.css" rel="stylesheet">
    <link  href="stylesheets/TableContentsHover.css" rel="stylesheet">
    <style>
        table,th,td {
            border: solid black 5px;
            /* padding :10px */
        }
        th{
            /* margin: 5px; */
        }
    </style>
</head>
<body>
    <div class="table-details">

    {{-- I honestly don't get what the error is about --}}
    <h1 class="table-name" style="text-transform:uppercase;">{{$tableName}}</h1>
    <h1 class="table-status">The table is @if($isTableInsideDB) inside @else not inside @endif </h1>
    <h2 class="column-count">Number of columns {{$columnNums}}</h2>
    </div>
    <div class="tableContents">
        <table>
            <tr>
            @foreach($columnNames as $names)
                <th style="text-transform:uppercase;">{{$names}}</th>
            @endforeach
            </tr>
            @php
            // this foreach loop is great, it automatically destructures the data
            // inside the loop, which is confusing as fuck as I don't really know the
            // process behind it and how it will operate with other data types aside arrays
            // much less complex datatypes such as the ones for return types for the Eloquent ORM
            // might break and change later in the future
            foreach($allTableData as $rowData){
                echo "<tbody><tr>";
                foreach($rowData as $data){
                    echo "<td>$data</td>";
                }
                echo "</tbody></tr>";
            }
            @endphp
        </table>
    </div>
</body>
</html>
