@extends('admin.layouts.master')

@section('content')
    <div class="content">
        <div class="row">
            <div class="card shadow-none border border-300  p-0" data-component-card="data-component-card">
                <div class="card-header border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-900 mb-0" data-anchor="data-anchor" id="soft-buttons">Create sutun</h4>
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
                        <form action="{{ route('admin.sutuns.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="title">Sütun İsim</label>
                                <input class="form-control" id="name" name="name" type="text"
                                    placeholder="sutun Başlık">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Sütun Stok</label>
                                <input class="form-control" id="name" name="stock" type="text"
                                    placeholder="sutun Başlık">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Sütun Kapasite</label>
                                <input class="form-control" id="name" name="capacity" type="text"
                                    placeholder="sutun Başlık">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Sütun Boş Alan</label>
                                <input class="form-control" id="name" name="empty_space" type="text"
                                    placeholder="sutun Başlık">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Sütun Bölüm Sayısı	</label>
                                <input class="form-control" id="name" name="section_number" type="text"
                                    placeholder="sutun Başlık">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Sütun Raf İd	</label>
                                <input class="form-control" id="name" name="raf_id" type="text"
                                    placeholder="sutun Başlık">
                            </div>
                                  
                            
                                </div>

                            <button type="submit" class="btn btn-primary">Create sutun</button>
                           
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
