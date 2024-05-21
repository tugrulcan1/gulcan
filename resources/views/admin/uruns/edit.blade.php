@extends('admin.layouts.master')

@section('content')
    <div class="content">
        <div class="row">
            <div class="card shadow-none border border-300  p-0" data-component-card="data-component-card">
                <div class="card-header border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-900 mb-0" data-anchor="data-anchor" id="soft-buttons">Edit urun</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="p-4 code-to-copy">
                        <form action="{{ route('admin.uruns.update', $urun->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label" for="title">Ürün İsim</label>
                                <input class="form-control" id="title" name="name" type="text"
                                    value="{{ $urun->name }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Ürün Stok</label>
                                <input class="form-control" id="title" name="stock" type="text"
                                    value="{{ $urun->stock }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Ürün Adet Sayısı</label>
                                <input class="form-control" id="title" name="number_unit" type="text"
                                    value="{{ $urun->capacity }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Ürün Raf_id</label>
                                <input class="form-control" id="title" name="raf_id" type="text"
                                    value="{{ $urun->empty_space }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Ürün Sütun_id</label>
                                <input class="form-control" id="title" name="sutun_id" type="text"
                                    value="{{ $urun->column_number }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Ürün Bölme_id</label>
                                <input class="form-control" id="title" name="bolme_id" type="text"
                                    value="{{ $urun->column_number }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Ürün Kullanıcı_id</label>
                                <input class="form-control" id="title" name="user_id" type="text"
                                    value="{{ $urun->column_number }}">
                            </div>
                       
                        

                            <button type="submit" class="btn btn-primary">Update urun</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
    @stack('scripts')
@endsection
