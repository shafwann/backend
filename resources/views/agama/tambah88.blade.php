@extends('agama.master88')
@section('tambah88')
    <html>

    <head>
        <title>Shafwan</title>
    </head>

    <body>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Form Tambah Agama</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Home</li>
                            <li class="breadcrumb-item active">Tambah Agama</li>
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
                    <div class="row col-md-12">
                        <!-- form start -->
                        <div class="col-md-1">
                        </div>
                        <div class="card card-info col-md-10">
                            <!-- form start -->
                            <form action="{{ url('/prosestambahagama88') }}" class="form-horizontal" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="namaAgama" class="col-sm-2 col-form-label">Agama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="namaAgama" name="nama_agama"
                                                placeholder="Nama Agama">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-default float-right">Tambah</button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
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
