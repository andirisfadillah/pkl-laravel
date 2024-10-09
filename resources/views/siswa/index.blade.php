@extends('header')

@section('content')
    <a class="btn btn-primary" href="/siswa/tambah">Siswa Tambah</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">NIS</th>
                <th scope="col">nama</th>
                <th scope="col">jurusan</th>
                <th scope="col">hobi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $item)
                <tr>
                    <td>

                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('siswa.delete', $item->id) }}" method="POST">
                            <a href="{{ route('siswa.halamanedit', $item->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" id="DELETE">HAPUS</button>
                        </form>
                    </td>
                    <td>
                        {{ $item->nis }}
                    </td>
                    <td>
                        {{ $item->nama }}
                    </td>
                    <td>
                        {{ $item->jurusan }}
                    </td>
                    <td>
                        {{ $item->hobi }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
