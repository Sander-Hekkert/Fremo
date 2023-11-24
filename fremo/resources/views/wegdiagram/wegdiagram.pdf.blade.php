<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wegdiagram PDF</title>
    <style>
        /* Add your custom styles for the PDF here */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Wegdiagram Overview</h1>

    <h2>Instructions:</h2>
    <ol>
        <li>Review the project information below.</li>
        <li>If wegdiagrams are available, they will be displayed in a table.</li>
        <li>If no wegdiagrams are available, a message will be shown.</li>
        <li>Click the "Download PDF" button to download this wegdiagram overview.</li> <!-- Step 4 -->
    </ol>

    <h2>Project Information</h2>
    <p>Project Name: {{ $project->name }}</p>
    <p>Project Description: {{ $project->description }}</p>

    <h2>Wegdiagrams</h2>
    @if ($wegdiagrams->isEmpty())
        <p>No wegdiagrams available for this project.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wegdiagrams as $wegdiagram)
                    <tr>
                        <td>{{ $wegdiagram->id }}</td>
                        <td>{{ $wegdiagram->starttijd }}</td>
                        <td>{{ $wegdiagram->eindtijd }}</td>
                        <td>{{ $wegdiagram->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
