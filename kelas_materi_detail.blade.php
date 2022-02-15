@extends('layouts.layout')

@section('content')
<div class="card">
    <div class="card-header">Detail Materi</div>

    <div class="card-body">
        Judul: {{strtoupper($model->judul)}}
        <br>
        Nama Materi: {{strtoupper($model->materi->judul)}}
        <br>
        @if($model->materi->jenis == "file")
            <a href="{{\Storage::url($model->materi->isi)}}">
                Lihat File: {{$model->judul}}
            </a>
        @else
            <div>
                {!! $model->materi->isi !!}
            </div>
        @endif
        <br>
        <a href="{{url('siswa/kelas/'. $model->kelas_id, [])}}" class="btn btn-warning mt-2">Kembali</a>
    </div>
</div>
@endsection
