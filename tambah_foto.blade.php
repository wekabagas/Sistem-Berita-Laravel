<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tutorial Laravel #21 : CRUD Eloquent Laravel - www.malasngoding.com</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Input Data Pegawai
                </div>
                <div class="card-body">
                    <a href="/foto" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>

                    <form method="POST" action="/foto/store" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>judul</label>
                            <input type="text" name="judul" class="form-control" placeholder="isi judul">

                            @if($errors->has('judul'))
                                <div class="text-danger">
                                    {{ $errors->first('judul')}}
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <label>tanggal</label>
                            <input type="date" name="tanggal" class="form-control" placeholder="">

                            @if($errors->has('tanggal'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal')}}
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="file" name="image" class="form-control" placeholder="">

                            @if($errors->has('image'))
                                <div class="text-danger">
                                    {{ $errors->first('image')}}
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>
