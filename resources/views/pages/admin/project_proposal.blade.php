<!-- resources/views/admin/proposal.blade.php -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>project proposal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Project Proposals</h1>
    <table>
        <thead>
            <tr>
                
                <th>Project Title</th>
                <th>Sector</th>
                <th>Category</th>
                <th>District</th>
                <th>File</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($applications as $application)
                <tr>

                    <td>{{ $application->project_title }}</td>
                    <td>{{ $application->sector }}</td>
                    <td>{{ $application->category }}</td>
                    <td>{{ $application->district }}</td>
                    <td>
                        <a href="{{ route('admin.proposal.download', $application->id) }}">Download</a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>





