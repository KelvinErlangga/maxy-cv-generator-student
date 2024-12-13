@extends('perusahaan.master_perusahaan')
@section('title', 'Perusahaan - Kandidat | CVRE GENERATE')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h5 class="mb-0 font-weight-bold text-primary">Dashboard / Kelola Data / <span class="text-dark">Kandidat</span></h5>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Tabel Kandidat -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Header Card -->
                <div class="card-header py-3 text-center">
                    <h6 class="m-0 font-weight-bold text-dark">KANDIDAT</h6>
                </div>
                <!-- Body Card -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTables" class="table table-bordered table-striped" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Kandidat</th>
                                    <th>Posisi Dilamar</th>
                                    <th>Alamat Email</th>
                                    <th>No. Handphone</th>
                                    <th>Status</th>
                                    <th>Pendidikan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/dashboard/informasi.png')}}" alt="Foto" class="rounded-circle mr-2" style="width: 30px; height: 30px" />
                                            <span>Kelvin Erlangga</span>
                                        </div>
                                    </td>
                                    <td>Senior Office Admin</td>
                                    <td>admin@qaerra.com</td>
                                    <td>+6280210231230</td>
                                    <td>Online</td>
                                    <td>S1 - Ekonomi</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm">
                                            <img src="{{asset('assets/icons/edit.svg')}}" alt="Edit" style="width: 30px; height: 30px" />
                                        </button>
                                        <button class="btn btn-sm">
                                            <img src="{{asset('assets/icons/delete.svg')}}" alt="Delete" style="width: 30px; height: 30px" />
                                        </button>
                                        <button class="btn btn-sm">
                                            <img src="{{asset('assets/icons/view.svg')}}" alt="View" style="width: 30px; height: 30px" />
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/dashboard/informasi.png')}}" alt="Foto" class="rounded-circle mr-2" style="width: 30px; height: 30px" />
                                            <span>Abrar</span>
                                        </div>
                                    </td>
                                    <td>Senior Office Admin</td>
                                    <td>admin@qaerra.com</td>
                                    <td>+6280210231230</td>
                                    <td>Offline</td>
                                    <td>S1 - Ekonomi</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm">
                                            <img src="{{asset('assets/icons/edit.svg')}}" alt="Edit" style="width: 30px; height: 30px" />
                                        </button>
                                        <button class="btn btn-sm">
                                            <img src="{{asset('assets/icons/delete.svg')}}" alt="Delete" style="width: 30px; height: 30px" />
                                        </button>
                                        <button class="btn btn-sm">
                                            <img src="{{asset('assets/icons/view.svg')}}" alt="View" style="width: 30px; height: 30px" />
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/dashboard/informasi.png')}}" alt="Foto" class="rounded-circle mr-2" style="width: 30px; height: 30px" />
                                            <span>Richard</span>
                                        </div>
                                    </td>
                                    <td>Senior Office Admin</td>
                                    <td>admin@qaerra.com</td>
                                    <td>+6280210231230</td>
                                    <td>Offline</td>
                                    <td>S1 - Ekonomi</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm">
                                            <img src="{{asset('assets/icons/edit.svg')}}" alt="Edit" style="width: 30px; height: 30px" />
                                        </button>
                                        <button class="btn btn-sm">
                                            <img src="{{asset('assets/icons/delete.svg')}}" alt="Delete" style="width: 30px; height: 30px" />
                                        </button>
                                        <button class="btn btn-sm">
                                            <img src="{{asset('assets/icons/view.svg')}}" alt="View" style="width: 30px; height: 30px" />
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/dashboard/informasi.png')}}" alt="Foto" class="rounded-circle mr-2" style="width: 30px; height: 30px" />
                                            <span>Kelvin Erlangga</span>
                                        </div>
                                    </td>
                                    <td>Senior Office Admin</td>
                                    <td>admin@qaerra.com</td>
                                    <td>+6280210231230</td>
                                    <td>Online</td>
                                    <td>S1 - Ekonomi</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm">
                                            <img src="{{asset('assets/icons/edit.svg')}}" alt="Edit" style="width: 30px; height: 30px" />
                                        </button>
                                        <button class="btn btn-sm">
                                            <img src="{{asset('assets/icons/delete.svg')}}" alt="Delete" style="width: 30px; height: 30px" />
                                        </button>
                                        <button class="btn btn-sm">
                                            <img src="{{asset('assets/icons/view.svg')}}" alt="View" style="width: 30px; height: 30px" />
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection