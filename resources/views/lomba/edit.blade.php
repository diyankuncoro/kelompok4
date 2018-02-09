@extends('layouts.app')

@section('css')

@endsection

@section('content')
    <form action="/lomba/{{$lomba->id}}/edit" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="nama">nama</label>
            <input name="nama"type="text" class="form-control" id="nama" placeholder="masukan nama" value="{{$lomba->nama}}" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input name="deskripsi"type="text" class="form-control" id="deskripsi" placeholder="masukan deskripsi"value="{{$lomba->deskripsi}}" required>
        </div>
        <div class="form-group">
            <label for="poster"> Url poster</label>
            <input name="poster"type="text" class="form-control" id="poster" placeholder="masukan Url poster"value="{{$lomba->poster}}" required>            
        </div>
        <div class="form-group">
            <label for="tanggal">tanggal</label>
            <input name="tanggal"type="date" class="form-control" id="tanggal" placeholder="masukan tanggal"value="{{$lomba->tanggal_tutup}}" required>            
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endsection

@section('js')

@endsection