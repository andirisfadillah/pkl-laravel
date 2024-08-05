



<form action="{{route ('siswa.edit',$siswa->id) }}" method="POST">
    @csrf
    @method('put')
    <label>NIS</label>
<input type="text" name="nis" class="form control mb-2" value="{{$siswa->nis}}">
<label>NAMA</label>
<input type="text" name="nama" class="form control mb-2" value="{{$siswa->nama}}">
<label>JURUSAN</label>
<input type="text" name="jurusan" class="form control mb-2" value="{{$siswa->jurusan}}">
<label>HOBI</label>
<input type="text" name="hobi" class="form control mb-2" value="{{$siswa->hobi}}">

<button class="btn btn-primary">tambah</button>

</form>
