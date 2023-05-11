<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServerSide Processing</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

</head>
<body>
    

    <div class="container">

        <h1 class="py-3 text-center">ServerSide Processing</h1>

        <table class="table table-borderless table-striped" id="datatable">
            <thead>
                <tr>
                    <!-- <th>Id</th> -->
                    <th>Brticket</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Date</th>
                    <th>Cell</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
           
            </tbody>
           
        </table>

    </div>





















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

<script>
    $(document).ready(function () {
    $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'fetch_data.php',
        
    });
});
</script>
    
</body>
</html>