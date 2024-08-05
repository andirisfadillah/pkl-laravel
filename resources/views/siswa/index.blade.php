@extends('header')

@section('content')
    <a class="btn btn-primary" href="/siswa/tambah">siswa tambah</a>

    <table class="table" border="4">
        <tr>
            <td>aksi</td>
            <td>
                <h1>nis</h1>
            </td>
            <td>
                <h1>nama</h1>
            </td>
            <td>
                <h1>jurusan</h1>
            </td>
            <td>
                <h1>hobi</h1>
            </td>
        </tr>
        @foreach ($siswa as $item)
            <tr>
                <td>
                    <a href="siswa/edit/{{ $item->id }}">edit</a>
                    <form action="{{ route('siswa.delete', $item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">delete</button>
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
    </table>
@endsection
