@extends('layouts.app')

@section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        body {
            background-color: #f1f5f9;
        }
        .table-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #4a90e2;
            border-color: #4a90e2;
        }
        .btn-warning {
            background-color: #f0ad4e;
            border-color: #f0ad4e;
        }
        .btn-danger {
            background-color: #d9534f;
            border-color: #d9534f;
        }
        .status-indicator {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            display: inline-block;
        }
        .status-approved {
            background-color: green;
        }
        .status-rejected {
            background-color: red;
        }

        /* Align the buttons horizontally */
        .action-buttons {
            display: flex;
            justify-content: space-between;
            width: 160px;
        }

        .btn-lg-icon, .btn-sm {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            border-radius: 5px;
        }

        .btn-sm {
            font-size: 16px;
            padding: 6px 12px;
        }
    </style>

    <div class="container mt-4">
        <div class="table-container">
            <!-- Display Error Message -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="d-flex justify-content-between mb-3">
                <button class="btn btn-light btn-lg-icon">
                    <i class="fa fa-file-excel"></i>
                </button>
            </div>

            <table id="dataTable" class="table table-striped table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>Aplikasi</th>
                        <th>Disi Oleh</th>
                        <th>Bulan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop through Laporan Data -->
                    @foreach($laporans as $laporan)
                        <tr>
                            <td>{{ $laporan->nama_aplikasi }}</td>
                            <td>{{ $laporan->role }} @gmail.com</td>
                            <td>{{ $laporan->bulan }}</td>
                            <td>
                                @if($laporan->status == 'approved')
                                    <span class="status-indicator status-approved"></span>
                                @else
                                    <span class="status-indicator status-rejected"></span>
                                @endif
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn btn-primary btn-lg-icon">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                    <button class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endsection

