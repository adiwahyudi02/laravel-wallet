@extends('layouts.master')

@section('content')

<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                  Tambah
                </button>
                <h4 class="card-title"> Data Siswa</h4>
                  
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <table class="table table-hover ">
                    <thead>
                    <tr>
												<th>Nama</th>
												<th>Jenis Kelamin</th>
												<th>Jurusan</th>
												<th>Tingkat</th>
												<th>Kelas</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($data_siswa as $siswa)
											<tr>
												<td>{{ $siswa->nama }}</td>
												<td>{{ $siswa->jenis_kelamin}}</td>
												<td>{{ $siswa->jurusan }}</td>
												<td>{{ $siswa->tingkat }}</td>
												<td>{{ $siswa->kelas }}</td>
												<td>
													<!-- <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a> -->
													<a href="/datasiswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>
												</td>
											</tr>
											@endforeach
										</tbody>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body ">
            <form>
                <div class="form-group form-control-lg">
                  <label for="exampleInputEmail1">Nama Lengkap</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
                </div>
                
                <br>

                <div class="form-group form-control-lg">
                  <label>Jenis Kelamin</label>
                  <select class="form-control">
                  <option>-</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                  </select>
                </div>
                
                <br>

                <div class="form-group form-control-lg">
                  <label for="exampleFormControlSelect1">Jurusan</label>
                  <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                    <option>Rekayasa Perangkat Lunak</option>
                    <option>Mekatronika</option>
                    <option>Multimedia</option>
                    <option>Animasi</option>
                    <option>Kimia Industri</option>
                    <option>Teknik Pemesinan</option>
                  </select>
                </div>
                
                <br>

                <div class="form-group form-control-lg">
                  <label for="exampleFormControlSelect1">Tingkat</label>
                  <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                  </select>
                </div>
                
                <br>

                <div class="form-group form-control-lg">
                  <label for="exampleFormControlSelect1">Kelas</label>
                  <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                  </select>
                </div>
            </div>
           
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </form>
          </div>
        </div>
      </div>

@stop