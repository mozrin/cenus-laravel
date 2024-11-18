<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EQ2 Worlds</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 12px;
        }
        .card-header {
            background-color: #007bff;
            color: white;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            text-align: center;
            padding: 1.5rem 1rem;
        }
        .table th, .table td {
            vertical-align: middle;
            padding: 1rem;
        }
        .table-responsive {
            overflow-x: auto;
        }
        .btn-view {
            background-color: #007bff;
            color: white;
        }
        .btn-view:hover {
            background-color: #0056b3;
            color: white;
        }
        @media (max-width: 768px) {
            .card-header {
                font-size: 1.5rem;
                padding: 1rem 0.5rem;
            }
            .table {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header">
                <h1 class="mb-0">EverQuest 2 Worlds</h1>
            </div>
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>World Name</th>
                                <th>Language</th>
                                <th class="text-end">View</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($worlds as $world)
                            <tr>
                                <td>{{ $world['name'] }}</td>
                                <td>{{ $world['language'] ?? 'N/A' }}</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-view btn-sm">
                                        <i class="bi bi-eye"></i> View
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
