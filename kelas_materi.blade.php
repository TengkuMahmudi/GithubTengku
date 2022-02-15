@extends('layouts.layout')

@section('content')
<div class="card">
    <div class="card-header">Daftar Materi</div>

    <div class="card-body">
        <h1>Nama Kelas: {{$kelas_siswa->kelas->nama}}</h1>
        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr class="bg-primary bg-opacity-60 text-white">
                        <th>No</th>
                        <th>Jenis</th>
                        <th>Isi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($model as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->materi->jenis}}</td>
                            <td>
                            <a href="{{url('siswa/kelas/materi/detail/'. $item->id)}}">
                                Lihat Materi : {{$item->materi->judul}}
                            </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Data tidak ada!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
