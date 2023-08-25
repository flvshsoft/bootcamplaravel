@extends('master.master')
@section('konten')
            <div class="card">
                <div class="col-12">
                    <form action="store" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Lengkap<i style="color: red">*</i></label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kelas<i style="color: red">*</i></label>
                            <input type="text" class="form-control" name="kelas" placeholder="Masukkan Kelas">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat<i style="color: red">*</i></label>
                            <textarea name="alamat" cols="10" rows="3" class="form-control" placeholder="Masukkan Alamat Lengkap"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin<i style="color: red">*</i></label>
                            <select name="jk" class="form-control">
                                <option value=""></option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary col-12">Submit</button>
                    </form>
                </div>
            </div>
</html>
@endsection
