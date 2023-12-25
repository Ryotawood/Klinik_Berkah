{{-- $data = App\Models\Pasien::all(); --}}

<!-- resources/views/child.blade.php -->
@extends('layouts.main_layout')

@section('title', 'data')


@section('content')
{{-- <h1>ini home</h1> --}}

{{-- @if (empty($name))
    I have one record!
    @elseif (($name == 'admin'))
        I have multiple records!
    @else
        I don't have any records!
    @endif
    
    @for ($i = 0; $i < 10; $i++)
    The current value is
        {{ $i }}
    @endfor

    $@foreach ($datas as $d)
        <p>{{$loop->iteration}}</p>
        <p>THis is id {{$d['id']}}</p>
        <p>THis is name {{$d['name']}}</p>
        <p>THis is email {{$d['email']}}</p>
    @endforeach --}}
    <div class="main-content d-flex">
        <div class="sidebar" id="side_nav">
            <div class="fs-4 mb-3">
                <i class="bi bi-envelope-open-heart text-info"></i>Klinik Berkah Bermanfaat
                
            </div>
            
            <ul class="list-unstyled h1-2">
                <li class=""><button class="btn btn-white w-100 collapse px-3 h1-2 d-block"><div class="d-flex align-items-center"><i class="bi bi-list text-info fs-4 me-2"></i>Dashboard </div></button></li>
                
                <button class="btn btn-white w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                    <div class="d-flex align-items-center"> <img src="../img/add-folder1.png"> 
                    Rawat Jalan
                    </div>
                </button>
                </p>
            <div class="collapse" id="collapse1">
                <div class="card card-body">
                    <ul class="collapse-menu" aria-labelledby="collapse">
                                    <li><a class="collapse-item" href="#">Semua Status</a></li>
                                    <li><a class="collapse-item" href="#">Reservasi</a></li>
                                    <li><a class="collapse-item" href="#">Registrasi</a></li>
                                </ul>
                </div>
            </div>
                <button class="btn btn-white w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2"> 
                    <div class="d-flex align-items-center"><i class="bi bi-calendar-plus text-info fs-4 me-2"></i>
                    Rekam Medis
                    </div>
                </button>
                </p>
            <div class="collapse" id="collapse2">
                <div class="card card-body">
                    <ul class="collapse-menu" aria-labelledby="collapse">
                                    <li><a class="collapse-item" href="#">Semua Status</a></li>
                                    <li><a class="collapse-item" href="#">Reservasi</a></li>
                                    <li><a class="collapse-item" href="#">Registrasi</a></li>
                                </ul>
                </div>
            </div>
                
                <button class="btn btn-white w-100 px-3 py-2 d-block"><div class="d-flex align-items-center"><i class="bi bi-wallet text-info fs-4 me-2"></i>Pembayaran </div></button>
                <div class="dropdown">
                    <button class="btn btn-white w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3"> 
                        <div class="d-flex align-items-center"><i class="bi bi-table text-info fs-4 me-2"></i>
                        Master Data
                        </div>
                    </button>
                    </p>
                <div class="collapse" id="collapse3">
                    <div class="card card-body">
                        <ul class="collapse-menu" aria-labelledby="collapse">
                                        <li><a class="collapse-item" href="#">Semua Status</a></li>
                                        <li><a class="collapse-item" href="#">Reservasi</a></li>
                                        <li><a class="collapse-item" href="#">Registrasi</a></li>
                                    </ul>
                    </div>
                </div>
                <button class="btn btn-white w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                    <div class="d-flex align-items-center"> <i class="bi bi-calendar-minus fs-5 me-2 text-info"></i>
                    Jadwal Dokter
                    </div>
                </button>
                </p>
            <div class="collapse" id="collapse4">
                <div class="card card-body">
                    <ul class="collapse-menu" aria-labelledby="collapse">
                                    <li><a class="collapse-item" href="#">Semua Status</a></li>
                                    <li><a class="collapse-item" href="#">Reservasi</a></li>
                                    <li><a class="collapse-item" href="#">Registrasi</a></li>
                                </ul>
                </div>
            </div>
                <button class="btn btn-white w-100 px-3 py-2 d-block"> <div class="d-flex align-items-center"> <i class="bi bi-person text-info fs-4 me-2"></i><span class="align-middle">Pasien</span> </div></button>
                <li class=""><button class="btn btn-white w-100 px-3 py-2 d-block"> <div class="d-flex align-items-center"><i class="bi bi-archive text-info fs-4 me-2"></i>Inventori </div></button></li>  
                <button class="btn btn-white w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                    <div class="d-flex align-items-center"><i class="bi bi-clipboard-check text-info fs-4 me-2"></i>
                    Closing & Laporan
                    <i class="bi bi-caret-down"></i>
                </div>
                </button>
                </p>
            <div class="collapse" id="collapse5">
                <div class="card card-body">
                    <ul class="collapse-menu" aria-labelledby="collapse">
                                    <li><a class="collapse-item" href="#">Semua Status</a></li>
                                    <li><a class="collapse-item" href="#">Reservasi</a></li>
                                    <li><a class="collapse-item" href="#">Registrasi</a></li>
                                </ul>
                </div>
            </div>
             <button class="btn btn-white w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6" onclick="toggleArrow()">
                <div class="d-flex align-items-center"><i id="arrow-icon" class="bi bi-code-square text-info fs-4 me-2"></i>
                <span>Integrasi</span>
            </div>
            </button>
            </p>
        <div class="collapse" id="collapse6">
            <div class="card card-body">
                <ul class="collapse-menu" aria-labelledby="collapse">
                                <li><a class="collapse-item" href="#">Semua Status</a></li>
                                <li><a class="collapse-item" href="#">Reservasi</a></li>
                                <li><a class="collapse-item" href="#">Registrasi</a></li>
                            </ul>
            </div>
        </div>
            </ul>
            <hr>
            <div class="user">
                <a href="#" class="text-decoration-none"><img src="../img/luffy.jpg" alt=""></a>
                <span class="text-dark d-none d-sm-inline mx-1">Admin</span>
            </div>
            </div>
    
            <div class="content">
                <div class="mt-3 font btn-group">
                    <p><a class="text-info link-offset-2 link-underline link-underline-opacity-0" href="#">Rawat Jalan</a></p>
                </div>
                    <i class=" fa-solid fa-chevron-up fa-rotate-90 btn-group"></i>
            <p class="btn-group paragraf mt-3 ms-2"> Semua Status</p>

                
                        
                   
                    
            <form action="" method="post" >
                     @csrf
                     <div>
                        <div class="btn-group">
                         <select class="form-select form-select-sm container-fluid text-info" aria-label="Small select example" name="tipe_pembayaran" id="tipe_pembayaran"  style="background-image: none;">
                             <option selected disabled text-info> Tipe Pembayaran</option>
                        <option value="E-money">E-money</option>
                        <option value="Bank Transfer">Bank Transfer</option>
                        <option value="Cash">Cash</option>
                    </select>
                    </div>
                            <div class="btn-group">
                        <select class="form-select form-select-sm container-fluid " aria-label="Small select example" name="poli" id="poli">
                                <option selected disabled>Poli</option>
                                <option value="Poli Gigi" name="poli">Poli Gigi</option>
                                <option value="Poli Umum"name="poli">Poli Umum</option>
                                <option value="Poli Jantung"name="poli">Poli Jantung</option>
                        </select>
                        </div>
                            <div class="btn-group">              
                                <select class="form-select form-select-sm container-fluid" aria-label="Small select example" name="dokter" id="dokter">
                                    <option selected disabled>Dokter</option>
                                    <option value="Dr. Vania Utami" name="dokter">Dr. Vania Utami</option>
                                    <option value="Dr. Pitoyo" name="dokter">Dr. Pitoyo</option>
                                    <option value="Dr. Tony Chopper" name="dokter">Dr. Tony Chopper</option>
                                </select>
                            </div>
                           <div class="btn-group">
                        <button type="button" class="btn btn-primary mb-3 float-end" data-bs-toggle="modal" data-bs-target="#modalTambah">
                            + Reservasi
                        </button>
                        </div>
                        </div>       
                    <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Reservasi</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                
                                <div class="modal-body">
                                    
                                        <div class="mb-3">
                                            <label class="form-label">Pasien Name</label>
                                            <input type="text" class="form-control" name="pasien" id="pasien" placeholder="Masukkan Nama" autocomplete="off" required>
                                            </div>
                                        <div class="mb-3">
                                            <label class="form-label">BPJS Number</label>
                                            <input type="number" class="form-control" name="bpjs" id="bpjs" placeholder="Masukkan Nomor BPJS">
                                        </div>
                                </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" >Save</button>
                                    </div>
                                    
                                </form>
                                </div>
                            </div>
                        </div>
                <div class="card">
                    <div class="card-header ">
                        <div class="row ms-3">
                            <div class="col input-group ">
                                <input type="text" class="form-control" placeholder="Semua Hari" aria-label="Search by day" name="searchDay">
                                <button class="input-group-text bg-light text-info">
                                    <i class="bi bi-calendar"></i>
                                </button>
                            </div>
                            <div class="col input-group">
                                <input type="text" class="form-control" placeholder="Cari MRN, Pasien, dokter, Kode Poli.." aria-label="Search by patient name/poli" name="searchNamePoli">
                                <button class="input-group-text ">
                                    <i class="bi bi-search bg-light text-info"></i>
                                </button>
                            </div>
                            <div class="col input-group">
                                <input type="text" class="form-control" placeholder="Cari no. rujukan, no. Voucher..." aria-label="Search by reference number" name="searchReference">
                                <button class="input-group-text bg-light text-info">
                                    <i class="bi bi-search"></i>
                                    </button>
                            </div>
                        </div>
                    </div>
                
                    <div class="card-body">
                        <table class="table table-bordered table-stripped table-hover">
                            
                            <tr>
                                <th>Waktu Konsul</th>
                                <th>Antrian(Slot)</th>
                                <th>Pasien</th>
                                <th>Poli</th>
                                <th>Dokter</th>
                                <th>Status</th>
                            </tr>

                            <tbody >
                                
                                {{-- @php --}}
                                {{-- // @endphp --}}
                                @foreach ($pasien as $data)
                                
                                {{-- date_default_timezone_set('Asia/Jakarta');
                                $konsul = date("d-F-Y");
                                $jam = date('H:i'); --}}

            {{-- @if($data->Count()>0){ --}}
                <tr>
                    <td><strong>{{ $data['jam']; }}</strong>
                        <br>10:00:00 - 13:00:00
                        <br>
                        <p></p>                        
                    </td>
                    <td>1</td>
                    <td><strong>{{ $data['pasien']; }}</strong>
                        <br>
                        BPJS kesehatan - {{$data['bpjs']; }}</td>
                    <td>{{ $data['poli']; }}</td>
                    <td>{{ $data['dokter']; }}</td> 
                    <td class="text-center">
                        <select class="ukuran form-select form-select-sm text-center" aria-label="Small select example">
                            <option selected></option>
                            <option value="1">Registrasi</option>
                            <option value="2">Proses</option>
                            <option value="3">Selesai</option>
                        </select>
                        
                       
                    </td>
                    <td> 
                            <form action="/pasien/{{$data['id']}}" method="POST" id="deleteForm">
                                @csrf
                                @method('DELETE')
                        <div class="dropdown">
                            <button class="btn btn-white dropdown" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    {{-- <li><button class="dropdown-item btn btn-primary" type="submit" name="update">Update</button></li> --}}
                                <button class="btn btn-success" type="button" name="update" data-bs-toggle="modal" data-bs-target="#modalEdit{{$data['id']}}">Update</button>
                                    {{-- <li><a class="dropdown-item btn-primary" href="#"><button type="submit" class="btn" name="update">Update</button></a></li> --}}
                                    {{-- <li><a class="dropdown-item btn-danger" href={"#"><button type="submit" class="btn" name="delete" >Delete</button></a></li> --}}
                                    <li><button class="dropdown-item btn btn-danger" onclick="return confirm('Apakah anda anda ingin menghapus data ini?')" type="submit" name="delete">Delete</button></li>
                                    <input type="hidden" name="delete_id" value="{{$data['id']}}">

                                    {{-- <li><a class="dropdown-item btn-danger" href={"#"><button type="submit" class="btn" name="delete" >Delete</button></a></li> --}}
                                </ul>
                        </div>
                        </form>
                    </td>
                </tr>

                <div class="modal fade" id="modalEdit{{$data['id']}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                            <button class="btn-close type="button" data-bs-dismiss="modal" aria-label="close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/pasien/{{ $data['id'] }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{$data['id']}}">
                                <div class="mb-3">
                                    <label for="" class="form-label">Pasien Name</label>
                                    <input type="text" class="form-control" id="pasien" name="pasien" value="{{$data['pasien']}}" autocomplete="off" required>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">BPJS Number</label>
                                    <input type="number" class="form-control" id="bpjs" name="bpjs" value="{{$data['bpjs']}}" autocomplete="off" required>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Poli</label>
                                    <select class="form-select" id="poli" name="poli">
                                        <option value="Poli Gigi" {{ ($data['poli'] == 'Poli Gigi') ? 'selected' : ''}}>Poli Gigi</option>
                                        <option value="Poli Umum" {{ ($data['poli'] == 'Poli Umum') ? 'selected' : ''}}>Poli Umum</option>
                                        <option value="Poli Jantung" {{ ($data['poli'] == 'Poli Jantung') ? 'selected' : ''}}>Poli Jantung</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Dokter</label>
                                    <select name="dokter" class="form-select">
                                        <option value="Dr. Vania Utami" {{ ($data['dokter'] == 'Dr. Vania Utami') ? 'selected' : ''}}>Dr. Vania Utami</option>
                                        <option value="Dr. Pitoyo" {{ ($data['dokter'] == 'Dr. Pitoyo') ? 'selected' : ''}}>Dr. Pitoyo</option>
                                        <option value="Dr. Tony Chopper" {{ ($data['dokter'] == 'Dr. Tony Chopper') ? 'selected' : ''}}>Dr. Tony Chopper</option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
                
                    {{-- } --}}
                {{-- }else { --}}
                    {{-- echo '<tr><td colspan="4">Tidak Ada Data</td></tr>'; --}}
                {{-- } --}}
                {{-- @endif --}}
                {{-- @endphp --}}
                    @endforeach
            </tbody>
                        </table>
                    </div>
                  </div>
        </div>
@endsection
        {{-- <script>
            function toggleArrow() {
              const arrowIcon = document.getElementById('arrow-icon');
              arrowIcon.classList.toggle('bi-caret-down');
              arrowIcon.classList.toggle('bi-caret-up');
            }
          </script> --}}
    
</body>
</html>
