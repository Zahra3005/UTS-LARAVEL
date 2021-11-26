@extends('layouts.app')

@section('title', 'Detail')

@section('content')
<div class="card border-success" style="max-width: 20rem;">
<div class="card-body text-secondary">

    <h5 style="color:black;">Nama Grup : {{ $group['name'] }}</h5>
    <hr>
    <h5 style="color:black;">Description : {{ $group['description'] }}</h5>



</div>
</div>
@endsection