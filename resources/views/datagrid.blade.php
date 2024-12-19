<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datagrid z Laravel</title>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Nowoczesny Datagrid z Laravel</h2>
        <table id="example" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Imię i nazwisko</th>
            <th>Email</th>
            <th>Stanowisko</th>
            <th>Data</th>
        </tr>
    </thead>
</table>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
    $(document).ready(function () {
        $('#example').DataTable({
            ajax: '{{ route("datagrid.data") }}', // Trasa do danych
            columns: [
                { data: 0 }, // Imię i nazwisko
                { data: 1 }, // Email
                { data: 2 }, // Stanowisko
                { data: 3 }  // Data
            ],
            responsive: true,
            pageLength: 10,
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/pl.json' // Polskie tłumaczenie
            }
        });
    });
</script>

</body>
</html>