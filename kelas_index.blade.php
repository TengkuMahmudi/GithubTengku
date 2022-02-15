@extends('layouts.layout')

@section('content')
<div class="card">
    <div class="card-header">Daftar Kelas Anda</div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr class="bg-primary bg-opacity-60 text-white">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Tanggal Bergabung</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($model as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item}}</td>
                            <td>{{$item}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>
                                <a href="{{url('siswa/kelas/'.$item->kelas_id, [])}}">Lihat Materi ({{$item->kelasMateri->count()}})</a>
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
        <div class="d-flex justify-content-center mt-2">
            {{ $model->links() }}
        </div>
    </div>
</div>
@endsection
