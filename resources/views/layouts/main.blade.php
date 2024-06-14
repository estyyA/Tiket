<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>tiket App - @yield('title')</title>
</head>
<body>
<div class="container-fluid">
    <div class="row"> 
        <div class="col-md-12 bg-info py-2 aligment-center">
          <div class="dropdown float-right">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="bi bi-person-fill-add"></i> user
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">{{Auth ::user()->name}}</a>
              <a class="dropdown-item" href="/user">Change Password</a>
              <a class="dropdown-item" href="/logout">Logout</a>
            </div>
          </div>
          </div> 
    </div> 
    <div class="row">
        <div class="col-md-12 bg-info py-2">Tiket System</div>
    </div>
    <div class="row">
        <div class="col-md-2 vh-100">
            <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link {{ ($key == 'home') ? 'active' : '' }}" href="/">Home</a>
                <a class="nav-link {{ ($key == 'tiket') ? 'active' : '' }}" href="/tiket">tiket</a>
                <a class="nav-link" id="v-pills-messages-tab"  href="#" >About</a>
                <a class="nav-link" id="v-pills-messages-tab"  href="#" >FAQ</a>
            </div>
        </div>
        <div class="col-md-10 vh-100">
            <div class="card mt-4">
                <div class="card-header"></div>
                <div class="card-body"></div>
                @yield('artikel')
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
</body>
</html>
