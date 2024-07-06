@extends('layout.template')

@section('content')
    {{-- Breadcrumb --}}
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18">{{ $title }}</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="/dashboard" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">{{ $title }}</span>
            </li>
        </ul>
    </div>
    {{-- End breadcrumb --}}
    {{-- Table --}}
    <div class="row g-3">
        <div class="col-lg-12">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="container">
                    <div class="container-fluid">
                        <div class="card-body p-4">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="preview-tab-pane" role="tabpanel"
                                    aria-labelledby="preview-tab" tabindex="0">
                                    <div
                                        class="d-sm-flex text-center justify-content-between align-items-center border-bottom pb-20 mb-20">
                                        <h4 class="fw-semibold fs-18 mb-sm-0"><b>List {{ $title }}</b></h4>
                                        <button
                                            class="border-0 btn btn-primary py-2 px-3 px-sm-4 text-white fs-14 fw-semibold rounded-3"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                            aria-controls="offcanvasRight">
                                            <a href="/berita/tambah" class="btn text-white text-bordered py-sm-1 d-block">
                                                <i class="ri-add-line text-white"></i>
                                                <span class="fw-semibold">Tambah Data</span>
                                            </a>
                                        </button>
                                    </div>
                                    <div class="default-table-area members-list">
                                        <div class="table-responsive">
                                            <table class="table align-middle" id="myTable">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Judul</th>
                                                        <th scope="col">Foto</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Pembuat</th>
                                                        <th scope="col">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($berita as $key => $value)
                                                        <tr>
                                                            <td>
                                                                <span>{{ $no++ }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="fw-semibold"><b>{{ $value->judul }}</b></span>
                                                                <br>
                                                                <small><span>Kategori :
                                                                        {{ $value->id_kategori_berita }}</span></small>
                                                            </td>
                                                            <td>
                                                                <span>{{ $value->foto_berita }}</span>
                                                            </td>
                                                            @if ($value->status == 'Post')
                                                                <td>
                                                                    <span
                                                                        class="bg-success bg-opacity-10 text-success fs-13 fw-semibold py-1 px-2 rounded-1">Post</span>
                                                                </td>
                                                            @else
                                                                <td>
                                                                    <span
                                                                        class="bg-danger bg-opacity-10 text-success fs-13 fw-semibold py-1 px-2 rounded-1">Private</span>
                                                                </td>
                                                            @endif
                                                            <td>
                                                                <span>{{ $value->id_admin }}</span>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown action-opt">
                                                                    <button class="btn bg p-0" type="button"
                                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i data-feather="more-horizontal"></i>
                                                                    </button>
                                                                    <ul
                                                                        class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="/kategori_berita/{{ $value->id }}/edit">
                                                                                <i data-feather="edit-3"></i>
                                                                                Edit
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <button class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#hapus{{ $value->id }}">
                                                                                <i data-feather="trash-2"></i>
                                                                                Hapus
                                                                            </button>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="hapus{{ $value->id }}"
                                                            data-bs-backdrop="static" data-bs-keyboard="false"
                                                            tabindex="-1" aria-labelledby="staticBackdropLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5"
                                                                            id="staticBackdropLabel">
                                                                            Hapus?</h1>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Apakah anda yakin ingin menghapus
                                                                        <b>{{ $value->nama_kategori }}</b>?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary text-white"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a href="/kategori_berita/{{ $value->id }}/hapus"
                                                                            type="button"
                                                                            class="btn btn-danger text-white">Hapus</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Table --}}
@endsection
