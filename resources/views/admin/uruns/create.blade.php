@extends('admin.layouts.master')

@section('content')
<div class="content">
    <div class="row">
        <div class="card shadow-none border border-300  p-0" data-component-card="data-component-card">
            <div class="card-header border-bottom border-300 bg-soft">
                <div class="row g-3 justify-content-between align-items-center">
                    <div class="col-12 col-md">
                        <h4 class="text-900 mb-0" data-anchor="data-anchor" id="soft-buttons">Create urun</h4>
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
                    <form action="{{ route('admin.uruns.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="title">Ürün İsim</label>
                            <input class="form-control" id="name" name="name" type="text" placeholder="urun Başlık">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Ürün Stok</label>
                            <input class="form-control" id="name" name="stock" type="text" placeholder="urun Başlık">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Ürün Adet Sayısı(Koli)</label>
                            <input class="form-control" id="name" name="number_unit" type="number"
                                placeholder="urun Başlık" max="20">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Ürün Raf_id</label>
                            <select name="raf_id" id="selectRaf" class="form-control">
                                @foreach ($rafs as $raf)
                                    <option value="{{$raf->id}}">{{$raf->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Ürün Sütun_id</label>
                            <select name="sutun_id" id="selectSutun" class="form-control">
                                <option value="">Seçiniz</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Ürün Bölme_id</label>
                            <select name="bolme_id" id="selectBolme" class="form-control">
                                <option value="">Seçiniz</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Ürün Personel_id</label>
                            <input class="form-control" id="name" name="user_id" type="text" placeholder="urun Başlık">
                        </div>
                        <button type="submit" class="btn btn-primary">Create urun</button>

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

    $('#selectRaf').on('change', function () {
        $.ajax({
            method: "GET",
            url: "{{ url('admin/get-sutuns') }}/" + $(this).val(),
            success: function (res) {
                $('#selectSutun').empty();
                $('#selectSutun').append(
                    '<option value="#">Sütun Seçiniz</option>'
                );
                res.sutuns.forEach((e) => {
                    $('#selectSutun').append(
                        `<option value="${e.id}">${e.name}</option>`
                    );
                });
            }
        });
    });

    $('#selectSutun').on('change', function () {
        $.ajax({
            method: "GET",
            url: "{{ url('admin/get-bolmes') }}/" + $(this).val(),
            success: function (res) {
                $('#selectBolme').empty();
                $('#selectBolme').append(
                    '<option value="#">Bölme Seçiniz</option>'
                );
                res.bolmes.forEach((e) => {
                    $('#selectBolme').append(
                        `<option value="${e.id}">${e.name}</option>`
                    );
                });
            }
        });
    });

</script>
@stack('scripts')
@endsection