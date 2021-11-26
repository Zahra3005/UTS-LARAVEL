@extends('layouts.app')

@section('title', 'Detail')

@section('content')
<div class="card border-success" style="max-width: 20rem;">
<div class="card-body text-secondary">

    <h5 style="color:black;">Nama : {{ $friend['nama'] }}</h5>
    <hr>
    <h5 style="color:black;">No. Telp : {{ $friend['no_telp'] }}</h5>
    <hr>
    <h5 style="color:black;">Alamat : {{ $friend['alamat'] }}</h5>
    <hr>
    <h5 style="color:black;">Pendidikan : {{ $friend['pendidikan'] }}</h5>
    <hr>
    <h5 style="color:black;">Grup : {{ $friend['nama_grup'] }}</h5>

</div>
</div>
@endsection