<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Laporan Layanan</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
    font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    background: #fff;
    padding: 20px 25px;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding: 16px 30px;
    background: #299be4;
    color: #fff;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.table-title h2 {
    font-size: 24px;
    margin: 0;
}
.table-title .btn {
    color: #566787;
    background: #fff;
    border: none;
    font-size: 13px;
    border-radius: 2px;
    display: flex;
    align-items: center;
    padding: 5px 10px;
}
.table-title .btn i {
    font-size: 20px;
}
.table-title .btn:hover {
    background: #f2f2f2;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
}
.action-icons {
    display: flex;
    justify-content: center;
    gap: 10px;
}
.action-container {
    display: flex;
    flex-direction: column;
    align-items: center;
}
.action-text {
    font-size: 12px;
    color: #333;
    margin-top: 5px;
}
.status {
    font-size: 30px;
    display: inline-block;
    vertical-align: middle;
}
.text-success { color: #10c469; }
.text-warning { color: #FFC107; }
.text-danger { color: #ff5b5b; }
.text-primary { color: #007bff; }
</style>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <!-- Header Table -->
            <div class="table-title">
                <h2>Laporan <b>Layanan</b></h2>
                <a href="{{ route('laporan.create') }}" class="btn btn-light btn-sm">
                    <i class="material-icons text-primary">note_add</i>
                    <span>Buat Laporan</span>
                </a>
                
            </div>

            <!-- Table -->
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Aplikasi</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2</td>
                        <td><a href="#">Canva</a></td>                       
                        <td class="text-center">
                            <div class="action-container">
                                <div class="action-icons">
                                    <a href="#" class="settings" title="Edit" data-toggle="tooltip">
                                        <i class="material-icons text-warning">edit</i>
                                    </a>
                                    <a href="#" class="delete" title="Delete" data-toggle="tooltip">
                                        <i class="material-icons text-danger">delete</i>
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><a href="#">Freepik</a></td>                       
                        <td class="text-center">
                            <div class="action-container">
                                <div class="action-icons">
                                    <a href="#" class="settings" title="Edit" data-toggle="tooltip">
                                        <i class="material-icons text-warning">edit</i>
                                    </a>
                                    <a href="#" class="delete" title="Delete" data-toggle="tooltip">
                                        <i class="material-icons text-danger">delete</i>
                                    </a>
                                </div>
                            </div>
                        </td>                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>     
</body>
</html>
