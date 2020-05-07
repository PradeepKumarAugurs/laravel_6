<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination List </title>
    <style>
     .pagination .page-item{
        padding: 10px;
        margin-left:3px; 
        background-color: #00adff;
        display: inline;
        color:white;
        cursor:pointer; 
     }
     .pagination .page-item .page-link{
        text-decoration:none;
     }
    </style>
</head>
<body>
    <table>
    <thead>
    <th>SR</th>
    <th>Company</th>
    <th>User id </th>
    </thead>
    <tbody >
        @foreach($companies_list as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->user_id}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
    <div>
    {{$companies_list->links()}}
    </div>
    
</body>
</html>