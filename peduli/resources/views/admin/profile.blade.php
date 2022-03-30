@extends('layouts.admin.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="form-row">
                    <div class="form-group col-md-6 ">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" value="{{ $user->nik }}">
                    </div>

                        <div class="form-group  col-md-6">
                            <label for="pob">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name"name="name" value="{{ $user->name }}">
                        </div>

                        <div class="form-group  col-md-6">
                        <label for="gender">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="alamat" name="jke" value="{{ $user->jk }}">
                      </div>
                      <div class="form-group  col-md-6">
                        <label for="alamat">Tempat Tinggal</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $user->alamat }}">
                      </div>

                      <div class="form-group  col-md-6">
                        <label for="telp">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $user->tgl_lahir }}">
                      </div>


                      <div class="form-group  col-md-6">
                        <label for="telp">Nomer Telpon</label>
                        <input type="text" class="form-control" id="telp"  name="telp" value="{{ $user->telp }}">
                      </div>


                       <div class="form-group  col-md-6">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                        </div>

                        <div class="form-group  col-md-6">
                            <label for="email">Password</label>
                            <input type="password" class="form-control" id="password" name="password"  value="{{ $user->password }}" >
                          </div>
                    </div>

                        <button  class="btn btn-primary" method="\list-user">Kembali</button>
                  </form>
            </div>
        </div>
    
    </div>
      </div>
@endsection