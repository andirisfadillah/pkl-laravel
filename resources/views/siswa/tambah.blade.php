@extends('header')

@section('content')


<form action="{{route('siswa.store')}}" method="POST">
    @csrf
    <label>NIS</label>
<input type="text" name="nis" class="form control-mb-2">
<label>NAMA</label>
<input type="text" name="nama" class="form control-mb-2">
<label>JURUSAN</label>
<input type="text" name="jurusan" class="form control-mb-2">
<label>HOBI</label>
<input type="text" name="hobi" class="form control-mb-2">

<button class="btn btn-primary">tambah</button>

</form>
@endsection
