@extends('admin.layouts.master')

@section('content')
    <div class="content">
        <div class="row">
            <div class="card shadow-none border border-300  p-0" data-component-card="data-component-card">
                <div class="card-header border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-900 mb-0" data-anchor="data-anchor" id="soft-buttons">Create Blok</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="p-4 code-to-copy">
                        <form action="{{ route('admin.rafs.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="title">Blok name</label>
                                <input class="form-control" id="name" name="name" type="text"
                                    placeholder="Blok Başlık">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Blok stock</label>
                                <input class="form-control" id="name" name="stock" type="text"
                                    placeholder="Blok Stok">
                            </div><div class="mb-3">
                                <label class="form-label" for="title">Blok capacity</label>
                                <input class="form-control" id="name" name="capacity" type="text"
                                    placeholder="Blok Kapasite">
                            </div><div class="mb-3">
                                <label class="form-label" for="title">Blok empty_space</label>
                                <input class="form-control" id="name" name="empty_space" type="text"
                                    placeholder="Blok Boş Alan">
                            </div><div class="mb-3">
                                <label class="form-label" for="title">Blok column_number</label>
                                <input class="form-control" id="name" name="column_number" type="text"
                                    placeholder="Blok Sütun Sayısı">
                            </div>
                           
                           
                            


                            <button type="submit" class="btn btn-primary">Create Blok</button>
                           
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
