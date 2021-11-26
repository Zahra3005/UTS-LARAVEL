@extends('layouts.app')

@section('title', 'Groups')

@section('content')

<form action="/groups/addmember/{{$group->id}}" method="POST">
@csrf
@method('PUT')
    <div class="mb-3">
        <label for="exampleInputEmail1" style="background-color: #ffffff">Nama Teman</label>
        <div class="dropdown">
  
    
  </button>

    <select class="form-select" aria-label="Default select example" name="friend_id"> 
    
  <option selected>Pilih Teman</option>
  

    @foreach ($friend as $f)
    <option value="{{$f->id}}">{{$f->nama}}</option>
    @endforeach
    </select> 
</div>

 
</div>
<br>
<br>
            <div class="mb-3"></div>
    <button type="submit" class="btn btn-primary">Tambah ke grup</button>
</form>

@endsection