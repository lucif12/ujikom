@extends('layouts.app')

@section('content')
<div class="content">
<div class="card">
<div class="card-header">
                    <div class="row ml-3">
                    <h4 class="card-title">{{ $title }}</h4>
                    </div>
  </div>
  </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="/store-trip" enctype="multipart/form-data">
                @csrf
                    @method('post')

                    <div class="form-row">
                    <div class="form-group col-md-6 ">
                        <label for="waktu">Jam</label>
                        <input type="time" class="form-control" id="waktu" placeholder="Jam" name="waktu">
                    </div>

                        <div class="form-group  col-md-6">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" placeholder="Tanggal" name="tanggal">
                        </div>

                        <div class="form-group  col-md-6">
                            <label for="tanggal">Suhu</label>
                            <input type="text" class="form-control" id="suhu" placeholder="Suhu" name="suhu">
                        </div>

                      <div class="form-group  col-md-6">
                        <label for="tanggal">Lokasi</label>
                        <input type="text" class="form-control" id="lokasi" placeholder="Lokasi" name="lokasi">
                      </div>

                        <button type="submit" class="btn btn-primary" >Tambah Data</button>
                  </form>
            </div>
        </div>

    </div>
@endsection
