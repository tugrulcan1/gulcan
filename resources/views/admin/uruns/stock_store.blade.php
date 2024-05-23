@extends('admin.layouts.master')

@section('content')
    <div class="content">
        <div class="row">
            <div class="card shadow-none border border-300 p-0" data-component-card="data-component-card">
                <div class="card-header border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-900 mb-0" data-anchor="data-anchor" id="soft-buttons">Ürün Oluştur</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">

                    <div class="p-4 code-to-copy">
                        <form action="{{ route('admin.uruns.stockStorePost') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="urunSelected">Ürün Seç</label>
                                <select name="urun_id" id="urunSelected" class="form-control @error('urun_id') is-invalid @enderror">
                                    <option value="">Seçiniz</option>

                                    @foreach ($uruns as $urun)
                                        <option value="{{ $urun->id }}" {{ old('urun_id') == $urun->id ? 'selected' : '' }}>
                                            {{ $urun->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('urun_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="count">Ürün Adet Sayısı(Koli)</label>
                                <input class="form-control @error('count') is-invalid @enderror" id="count" name="count" type="number"
                                    placeholder="Ürün Adet Sayısı(Koli)" max="20" value="{{ old('count') }}">
                                @error('count')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="selectRaf">Ürün Raf_id</label>
                                <select name="raf_id" id="selectRaf" class="form-control @error('raf_id') is-invalid @enderror">
                                    <option value="">Seçiniz</option>

                                    @foreach ($rafs as $raf)
                                        <option value="{{ $raf->id }}" {{ old('raf_id') == $raf->id ? 'selected' : '' }}>
                                            {{ $raf->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('raf_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="selectSutun">Ürün Sütun_id</label>
                                <select name="sutun_id" id="selectSutun" class="form-control @error('sutun_id') is-invalid @enderror">
                                    <option value="">Seçiniz</option>
                                </select>
                                @error('sutun_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="selectBolme">Ürün Bölme_id</label>
                                <select name="bolme_id" id="selectBolme" class="form-control @error('bolme_id') is-invalid @enderror">
                                    <option value="">Seçiniz</option>
                                </select>
                                @error('bolme_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="username">Personel Adı</label>
                                <input class="form-control @error('username') is-invalid @enderror" id="username" name="username" type="text"
                                    placeholder="Personel Adı" value="{{ old('username') }}">
                                @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Oluştur</button>
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

        $('#selectRaf').on('change', function() {
            $.ajax({
                method: "GET",
                url: "{{ url('admin/get-sutuns') }}/" + $(this).val(),
                success: function(res) {
                    $('#selectSutun').empty();
                    $('#selectSutun').append('<option value="">Sütun Seçiniz</option>');
                    res.sutuns.forEach((e) => {
                        $('#selectSutun').append(`<option value="${e.id}">${e.name}</option>`);
                    });
                }
            });
        });

        $('#selectSutun').on('change', function() {
            $.ajax({
                method: "GET",
                url: "{{ url('admin/get-bolmes') }}/" + $(this).val(),
                success: function(res) {
                    $('#selectBolme').empty();
                    $('#selectBolme').append('<option value="">Bölme Seçiniz</option>');
                    res.bolmes.forEach((e) => {
                        $('#selectBolme').append(`<option value="${e.id}">${e.name} Max ${e.capacity} Kapasite</option>`);
                    });
                }
            });
        });
    </script>
    @stack('scripts')
@endsection
