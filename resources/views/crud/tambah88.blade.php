@extends('crud.master88')
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
                        <h1>Data Diri</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Home</li>
                            <li class="breadcrumb-item active">Data Diri</li>
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
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nama</label>
                                    @foreach ($data_user as $a)
                                        @if ($a->id == $id)
                                            <input type="text" class="form-control" id="users_id" name="users_id"
                                                value="{{ $a->id }}" hidden>
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                value="{{ $a->name }}" disabled>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Alamat</label>
                                    @foreach ($data88 as $a)
                                        @foreach ($data_user as $b)
                                            @if ($a->users_id == $b->id)
                                                <input type="text" class="form-control" id="users_id" name="users_id"
                                                    value="{{ $b->id }}" hidden>
                                                <input type="text" class="form-control" id="nama" name="nama"
                                                    value="{{ $a->alamat }}" disabled>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tempat Lahir</label>
                                    @foreach ($data88 as $a)
                                        @foreach ($data_user as $b)
                                            @if ($a->users_id == $b->id)
                                                <input type="text" class="form-control" id="users_id" name="users_id"
                                                    value="{{ $b->id }}" hidden>
                                                <input type="text" class="form-control" id="nama" name="nama"
                                                    value="{{ $a->tempat_lahir }}" disabled>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tanggal Lahir</label>
                                    @foreach ($data88 as $a)
                                        @foreach ($data_user as $b)
                                            @if ($a->users_id == $b->id)
                                                <input type="text" class="form-control" id="users_id" name="users_id"
                                                    value="{{ $b->id }}" hidden>
                                                <input type="text" class="form-control" id="nama" name="nama"
                                                    value="{{ $a->tanggal_lahir }}" disabled>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Agama</label>
                                    @foreach ($data88 as $a)
                                        @foreach ($data_agama as $c)
                                            @if ($a->agama_id == $c->id)
                                                <input type="text" class="form-control" id="users_id" name="users_id"
                                                    value="{{ $a->agama_id }}" hidden>
                                                <input type="text" class="form-control" id="nama" name="nama"
                                                    value="{{ $c->nama_agama }}" disabled>
                                            @endif
                                        @endforeach
                                    @endforeach
                                    {{-- <select class="form-control" id="agama_id" name="agama_id">
                                            @foreach ($data_agama as $b)
                                                <option value="{{ $b->id }}">
                                                    {{ $b->nama_agama }}
                                                </option>
                                            @endforeach
                                        </select> --}}
                                    {{-- BUAT EDIT DATA --}}
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Foto KTP</label>
                                    {{-- <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile"
                                                    name="foto">
                                                <label class="custom-file-label" for="exampleInputFile">Pilih
                                                    gambar</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div> --}}
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                @foreach ($data_user as $a)
                                    @if ($a->id == $id)
                                        <a href="{{ url('edit88', $a->id) }}"
                                            class="btn btn-block1 btn-outline-info float-right">Edit Data
                                        </a>
                                    @endif
                                @endforeach
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
