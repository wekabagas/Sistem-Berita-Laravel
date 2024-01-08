<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Pegawai - <strong>EDIT DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/admin" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>


                    <form method="POST" action="/update/{{ $user->id }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" name="nip" class="form-control" value=" {{ $user->nip }}">

                            @if($errors->has('nip'))
                                <div class="text-danger">
                                    {{ $errors->first('nip')}}
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" name="nik" class="form-control" value=" {{ $user->nik }}">

                            @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" value=" {{ $user->name }}">

                            @if($errors->has('name'))
                                <div class="text-danger">
                                    {{ $errors->first('name')}}
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value=" {{ $user->email }}"">

                            @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <label>NO HP</label>
                            <input type="text" id="txtNumber" maxlength="13" name="hp" class="form-control" value=" {{ $user->hp }}">

                            @if($errors->has('hp'))
                                <div class="text-danger">
                                    {{ $errors->first('hp')}}
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" name="jabatan" class="form-control" value=" {{ $user->jabatan }}">

                            @if($errors->has('jabatan'))
                                <div class="text-danger">
                                    {{ $errors->first('jabatan')}}
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="defaultGroupExample3" name="is_admin" value="1"  {{$user->is_admin == '1'? 'checked' : ''}}>
                                <label class="custom-control-label" for="defaultGroupExample3">Admin</label>
                              </div>
                              <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="defaultGroupExample4" name="is_admin" value="0" {{$user->is_admin == '0'? 'checked' : ''}}>
                                <label class="custom-control-label" for="defaultGroupExample4">User</label>
                              </div>
                                  @if($errors->has('status'))
                                  <div class="text-danger">
                                      {{ $errors->first('status')}}
                                  </div>
                              @endif
                    </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value=" {{ $user->username }}">

                            @if($errors->has('username'))
                                <div class="text-danger">
                                    {{ $errors->first('username')}}
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" value=" {{ $user->password }}">

                            @if($errors->has('password'))
                                <div class="text-danger">
                                    {{ $errors->first('password')}}
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
