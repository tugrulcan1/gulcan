@extends('admin.layouts.master')

@section('content')
    <div class="content">
        <div class="row">
            <div class="card shadow-none border border-300  p-0" data-component-card="data-component-card">
                <div class="card-header border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-900 mb-0" data-anchor="data-anchor" id="soft-buttons">Edit raf</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="p-4 code-to-copy">
                        <form action="{{ route('admin.rafs.update', $raf->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label" for="title">Raf name</label>
                                <input class="form-control" id="title" name="name" type="text"
                                    value="{{ $raf->name }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Raf Stok</label>
                                <input class="form-control" id="title" name="stock" type="text"
                                    value="{{ $raf->stock }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Raf Kapasite</label>
                                <input class="form-control" id="title" name="capacity" type="text"
                                    value="{{ $raf->capacity }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Raf Boş Alan</label>
                                <input class="form-control" id="title" name="empty_space" type="text"
                                    value="{{ $raf->empty_space }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Raf Sütun Sayısı</label>
                                <input class="form-control" id="title" name="column_number" type="text"
                                    value="{{ $raf->column_number }}">
                            </div>
                       
                        

                            <button type="submit" class="btn btn-primary">Update raf</button>
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
