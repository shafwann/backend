@extends('crud.master88')
@section('activator88')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Shafwan</title>
    </head>

    <body class="hold-transition sidebar-mini">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Aktivasi Akun User</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Home</li>
                            <li class="breadcrumb-item active">Aktivasi</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <!--TABEL DATA-->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($user as $a)
                                                    <tr>
                                                        @if ($a->role == 'User')
                                                            <td>{{ $a->name }}</td>
                                                            <td>{{ $a->email }}</td>
                                                            @if ($a->isActive == '0')
                                                                <td><a href="{{ url('nonaktif88', $a->id) }}">Aktifkan</a>
                                                                </td>
                                                            @elseif ($a->isActive == '1')
                                                                <td><a href="{{ url('aktif88', $a->id) }}">Nonaktifkan</a>
                                                                </td>
                                                            @endif
                                                        @endif
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </body>

    </html>
@endsection
