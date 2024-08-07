@extends('layout.sidebar')

@section('navbar')
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <div class="navbar-nav align-items-center" style="color: #007bff; font-size: 20px; font-weight:bold">Pelaksanaan</div>

        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="{{ asset('sneat/assets/img/avatars/1.png') }}" alt
                            class="w-px-40 h-auto rounded-circle" />
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src="{{ asset('sneat/assets/img/avatars/1.png') }}" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">John Doe</span>
                                    <small class="text-muted">Admin</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bx bx-cog me-2"></i>
                            <span class="align-middle">Settings</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="auth-login-basic.html">
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
@endsection

@section('content')
    <div>
        <div class="nav-align-top mb-4">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        href="{{ route('pelaksanaan.prodi') }}" data-bs-target="#navs-top-home"
                        aria-controls="navs-top-home" aria-selected="true">
                        Prodi
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        href="{{ route('pelaksanaan.fakultas') }}" data-bs-target="#navs-top-profile"
                        aria-controls="navs-top-profile" aria-selected="false">
                        Fakultas
                    </button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane show active" id="navs-top-home" role="tabpanel">
                    <div class="row">
                        <!-- Sub Standar -->
                        <div class="col-lg-4 col-md-6 col-sm-6" >
                            <div class="card overflow-hidden mb-4" style="height: 300px;">
                                <div class="card-body left" id="vertical-example"><b>Standar Proses Pembelajaran</b>
                                    <ul>
                                        <li style="font-size: 12px"><a href="menuProdi/dokkurikulum">Dokumen Kurikulum</a>
                                        </li>
                                        <li style="font-size: 12px"><a href="menuProdi/rps">Rencana Pembelajaran Semester
                                                (RPS)</a></li>
                                        <li style="font-size: 12px"><a href="menuProdi/rps">Rencana Pembelajaran Semester
                                                (RPS)</a></li>
                                        <li style="font-size: 12px"><a href="menuProdi/rps">Rencana Pembelajaran Semester
                                                (RPS)</a></li>
                                        <li style="font-size: 12px"><a href="menuProdi/rps">Rencana Pembelajaran Semester
                                                (RPS)</a></li>
                                        <li style="font-size: 12px"><a href="menuProdi/rps">Rencana Pembelajaran Semester
                                                (RPS)</a></li>
                                        <li style="font-size: 12px"><a href="menuProdi/rps">Rencana Pembelajaran Semester
                                                (RPS)</a></li>
                                        <li style="font-size: 12px"><a href="menuProdi/rps">Rencana Pembelajaran Semester
                                                (RPS)</a></li>
                                        <li style="font-size: 12px"><a href="menuProdi/rps">Rencana Pembelajaran Semester
                                                (RPS)</a></li>
                                        <li style="font-size: 12px"><a href="menuProdi/rps">Rencana Pembelajaran Semester
                                                (RPS)</a></li>
                                        <li style="font-size: 12px"><a href="menuProdi/rps">Rencana Pembelajaran Semester
                                                (RPS)</a></li>
                                        <li style="font-size: 12px"><a href="menuProdi/rps">Rencana Pembelajaran Semester
                                                (RPS)</a></li>
                                        <li style="font-size: 12px"><a href="menuProdi/rps">Rencana Pembelajaran Semester
                                                (RPS)</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--/ Sub Standar -->

                        <!-- Tabel Unggah Dokumen Sub Standar -->
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <div class="card overflow-hidden mb-4" style="height: 300px">
                                <div class="card-body right" id="both-scrollbars-example">
                                    @yield('tabel-unggah-dokumen')
                                </div>
                            </div>
                        </div>
                        <!--/ Tabel Unggah Dokumen Sub Standar -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
