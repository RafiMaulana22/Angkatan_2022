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
                <a href="/berita" class="text-decoration-none">
                    <span class="dot ms-2">Berita</span>
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
                                    <form class="row g-3 needs-validation" action="/berita/tambah" method="POST"
                                        novalidate>
                                        @csrf
                                        <div class="col-md-8">
                                            <label for="judul" class="form-label label">Judul Berita</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control h-58 ps-5" id="judul"
                                                    name="judul" placeholder="Masukkan judul berita..." required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please masukkan judul berita.
                                                </div>
                                                <i class="ri-newspaper-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                                                    style="top: 13px !important;"></i>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-6">
                                                    <label for="id_kategori_berita" class="form-label label">Kategori
                                                        Berita</label>
                                                    <div class="position-relative">
                                                        <select class="form-select form-control h-58 ps-5"
                                                            id="id_kategori_berita" name="id_kategori_berita" required>
                                                            <option selected disabled value="">Memilih...</option>
                                                            @foreach ($kategori_berita as $key => $value)
                                                                <option value="{{ $value->id }}">{{ $value->nama_kategori }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Please pilih kategori berita.
                                                        </div>
                                                        <i class="ri-newspaper-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                                                            style="top: 13px !important;"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="id_kategori_berita" class="form-label label">Status</label>
                                                    <div class="position-relative">
                                                        <select class="form-select form-control h-58 ps-5"
                                                            id="id_kategori_berita" name="id_kategori_berita" required>
                                                            <option selected disabled value="">Memilih...</option>
                                                            <option value="Post">Post</option>
                                                            <option value="Private">Private</option>
                                                        </select>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Please pilih status.
                                                        </div>
                                                        <i class="ri-checkbox-circle-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                                                            style="top: 13px !important;"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="id_kategori_berita" class="form-label label">Foto Berita</label>
                                            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                                                <div class="product-upload">
                                                    <label for="file-upload" class="file-upload mb-0">
                                                        <span
                                                            class="d-inline-block wh-110 bg-body-bg rounded-10 position-relative ">
                                                            <i class="ri-camera-line wh-38 bg-gray-div7 d-inline-block text-gray-light rounded-circle position-absolute bottom-0 end-0"
                                                                style="right: -10px !important; bottom: -10px !important;"></i>
                                                        </span>
                                                    </label>
                                                    <input id="file-upload" type="file" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <label for="id_kategori_berita" class="form-label label">Foto Berita</label>
                                            <div id="standalone-container">
                                                <div id="toolbar-container">
                                                    <span class="ql-formats">
                                                        <select class="ql-font"></select>
                                                        <select class="ql-size"></select>
                                                    </span>
                                                    <span class="ql-formats">
                                                        <button class="ql-bold"></button>
                                                        <button class="ql-italic"></button>
                                                        <button class="ql-underline"></button>
                                                        <button class="ql-strike"></button>
                                                    </span>
                                                    <span class="ql-formats">
                                                        <button class="ql-blockquote"></button>
                                                        <button class="ql-code-block"></button>
                                                    </span>
                                                    <span class="ql-formats">
                                                        <button class="ql-list" value="ordered"></button>
                                                        <button class="ql-list" value="bullet"></button>
                                                        <button class="ql-indent" value="-1"></button>
                                                        <button class="ql-indent" value="+1"></button>
                                                    </span>
                                                    <span class="ql-formats">
                                                        <button class="ql-link"></button>
                                                        <button class="ql-image"></button>
                                                        <button class="ql-video"></button>
                                                    </span>
                                                </div>
                                                <div id="editor-container" style="height: 200px;"></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <a href="/berita" class="btn btn-danger fw-semibold text-white py-2 px-3"
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
