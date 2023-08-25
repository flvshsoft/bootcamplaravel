@extends('master.master')
@section('konten')
    
<div class="card">
    <div class="col-12">
        @foreach ($siswa as $item)
        <form action="{{ url('update') }}" method="POST">
            @csrf
            <input type="hidden" class="form-control" name="id" value="{{ $item->id }}">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Lengkap<i style="color: red">*</i></label>
            <input type="text" class="form-control" name="nama" value="{{ $item->nama }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kelas<i style="color: red">*</i></label>
            <input type="text" class="form-control" name="kelas" value="{{ $item->kelas }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat<i style="color: red">*</i></label>
            <textarea name="alamat" cols="10" rows="3" class="form-control" placeholder="{{ $item->alamat }}"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin<i style="color: red">*</i></label>
            <select name="jk" class="form-control">
                <option value="{{$item->jenis_kelamin}}">{{ $item->jenis_kelamin }}</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary col-12">Update</button>
    </form>
    @endforeach
</div>

@endsection