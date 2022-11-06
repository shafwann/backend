@extends('crud.master88')
@section('edit88')
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
                        <h1>Edit Data Diri</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Home</li>
                            <li class="breadcrumb-item active">Edit Data Diri</li>
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
                        <div class="card card-primary">
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action=" {{ url('prosesedit88', $id) }} " method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nama</label>
                                        @foreach ($data_user as $a)
                                            @if ($a == !null)
                                                @if ($a->id == $id)
                                                    <input type="text" class="form-control" id="users_id"
                                                        name="users_id" value="{{ $a->id }}" hidden>
                                                    <input type="text" class="form-control" id="nama" name="nama"
                                                        value="{{ $a->name }}">
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Alamat</label>
                                        @foreach ($data88 as $a)
                                            @if ($a->users_id == Auth::getUser()->id)
                                                <input type="text" class="form-control" id="alamat" name="alamat"
                                                    value="{{ $a->alamat }}">
                                            @endif
                                            @if ($a->users_id == !Auth::getUser()->id)
                                                <input type="text" class="form-control" id="alamat" name="alamat"
                                                    placeholder="Masukkan Alamat">
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tempat Lahir</label>
                                        @foreach ($data88 as $a)
                                            @if ($a->users_id == Auth::getUser()->id)
                                                <input type="text" class="form-control" id="tempat_lahir"
                                                    name="tempat_lahir" value="{{ $a->tempat_lahir }}">
                                            @endif
                                            @if ($a->users_id == !Auth::getUser()->id)
                                                <input type="text" class="form-control" id="tempat_lahir"
                                                    name="tempat_lahir" placeholder="Masukkan Tempat Lahir">
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tanggal Lahir</label>
                                        @foreach ($data88 as $a)
                                            @if ($a->users_id == Auth::getUser()->id)
                                                <input type="date" class="form-control" id="tanggal_lahir"
                                                    name="tanggal_lahir" value="{{ $a->tanggal_lahir }}">
                                            @endif
                                            @if ($a->users_id == !Auth::getUser()->id)
                                                <input type="date" class="form-control" id="tanggal_lahir"
                                                    name="tanggal_lahir" placeholder="Belum Ada Data">
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Agama</label>
                                        <select class="form-control" id="agama_id" name="agama_id">
                                            @foreach ($data_agama as $b)
                                                @if ($a->user_id == Auth::getUser()->id)
                                                    @if ($a->agama_id == $b->id)
                                                        <option value="{{ $b->id }}">
                                                            {{ $b->nama_agama }}
                                                        </option>
                                                    @endif
                                                @else
                                                    <option value="{{ $b->id }}">
                                                        {{ $b->nama_agama }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="foto_ktp">Foto KTP</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="foto_ktp"
                                                    name="foto_ktp">
                                                <label class="custom-file-label" for="foto_ktp">Pilih
                                                    Gambar</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button name="submit" type="submit"
                                        class="btn btn-block1 btn-outline-info float-right">Simpan Data</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
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
