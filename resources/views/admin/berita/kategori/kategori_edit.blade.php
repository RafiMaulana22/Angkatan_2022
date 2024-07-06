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
                <a href="/kategori_berita" class="text-decoration-none">
                    <span class="dot ms-2">Kategori Berita</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">{{ $title }}</span>
            </li>
        </ul>
    </div>
    {{-- End breadcrumb --}}
    {{-- Form --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4 mt-3">
                    <div class="container">
                        <div class="container-fluid">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="preview-tab-pane" role="tabpanel"
                                    aria-labelledby="preview-tab" tabindex="0">
                                    <form class="row g-3 needs-validation" action="/kategori_berita/{{ $detail->id }}/edit" method="POST" novalidate>
                                        @csrf
                                        <div class="col-md-12">
                                            <label for="nama_kategori" class="form-label label">Nama Kategori Berita</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control h-58 ps-5" id="nama_kategori"
                                                    name="nama_kategori" value="{{ $detail->nama_kategori }}" placeholder="Masukkan nama kategori berita..."
                                                    required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please masukkan nama kategori berita.
                                                </div>
                                                <i class="ri-newspaper-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                                                    style="top: 13px !important;"></i>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <a href="/kategori_berita" class="btn btn-danger fw-semibold text-white py-2 px-3"
                                                type="submit">Kembali</a>
                                            <button class="btn btn-primary fw-semibold text-white py-2 px-3"
                                                type="submit">Submit Form</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Form --}}
@endsection
