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
                                    <th>Jenis Kelamin</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @forelse($applicants as $applicant)
                                <tr>
                                    <td>{{$no}}.</td>
                                    <td>{{$applicant->user->name}}</td>
                                    <td>{{$applicant->hiring->position_hiring}}</td>
                                    <td>{{$applicant->user->email}}</td>
                                    <td>{{$applicant->user->personalPelamar->phone_pelamar}}</td>
                                    <td>{{$applicant->user->personalPelamar->gender}}</td>
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
                                @php
                                $no++;
                                @endphp
                                @empty
                                <tr>
                                    <td colspan="7">Tidak ada pelamar</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection