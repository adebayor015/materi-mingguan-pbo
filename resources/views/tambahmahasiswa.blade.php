@extends ('layouts.main');

@section('content');
    <h1>Tambah Data Mahasiswa</h1>
 
    <div class="card">
        <div class="card-body">
<form action="/insertdata" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="name" id="name" placeholder="Nama Lengkap" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <div class="form-group">
    <label for="nim">Nomor induk(Nim)</label>
    <input type="Number" name="nim" id="nim" placeholder="Nomor induk Mahasiswa" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="prodi">Progam Studi</label>
    <input type="text" name="prodi" id="prodi" placeholder="Jurusan"class="form-control" id="exampleInputPassword1">
  </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Alamat Email"class="form-control" id="exampleInputPassword1">
  
  </div>
    <div class="form-group">
        <label for="nohp">No Hp</label>
        <input type="number" name="nohp" id="nohp" placeholder="Nomor Telepon"class="form-control" id="exampleInputPassword1">
    </div>
        <td>
  <button type="submit" class="btn btn-primary">Submit</button>
  </td>
</form>
</div>
</div>

@endsection