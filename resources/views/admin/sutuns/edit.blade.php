@extends('admin.layouts.master')

@section('content')
    <div class="content">
        <div class="row">
            <div class="card shadow-none border border-300  p-0" data-component-card="data-component-card">
                <div class="card-header border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-900 mb-0" data-anchor="data-anchor" id="soft-buttons">Edit sutun</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="p-4 code-to-copy">
                        <form action="{{ route('admin.sutuns.update', $sutun->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label" for="title">Sütun İsim</label>
                                <input class="form-control" id="title" name="name" type="text"
                                    value="{{ $sutun->name }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Sütun Stok</label>
                                <input class="form-control" id="title" name="stock" type="text"
                                    value="{{ $sutun->stock }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Sütun Kapasite</label>
                                <input class="form-control" id="title" name="capacity" type="text"
                                    value="{{ $sutun->capacity }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Sütun Boş Alan</label>
                                <input class="form-control" id="title" name="empty_space" type="text"
                                    value="{{ $sutun->empty_space }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Sütun Bölme Sayısı</label>
                                <input class="form-control" id="title" name="section_number" type="text"
                                    value="{{ $sutun->section_number }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Sütun Raf İd</label>
                                <input class="form-control" id="title" name="raf_id" type="text"
                                    value="{{ $sutun->raf_id }}">
                            </div>
                       
                        

                            <button type="submit" class="btn btn-primary">Update sutun</button>
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
