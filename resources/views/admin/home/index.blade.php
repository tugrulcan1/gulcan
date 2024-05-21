@extends('admin.layouts.master')

@section('content')
<div class="content">
    <div class="pb-5">
        <div class="row g-4">
            <div class="col-12 col-xxl-6">
                <div class="mb-8">
                    <h2 class="mb-2">Depo Otomasyon Sistemi</h2>
                    <h5 class="text-700 fw-semi-bold">
                        BU OTOMASYONDA SU ŞİŞELERİ KOLİLER HALİNDE LİSTELENMEKTEDİR. HER BİR KOLİ, 20 LİTRE SU HACMİNE
                        SAHİPTİR.
                        HER BİR KOLİ İÇİN AŞAĞIDAKİ GİBİ SU ŞİŞELERİ BULUNMAKTADIR:
                        <ul>
                        <li>40 ADET 0.5 LİTRELİK SU ŞİŞESİ</li>
                        <li>20 ADET 1 LİTRELİK SU ŞİŞESİ</li>
                        <li> 10 ADET 2 LİTRELİK SU ŞİŞESİ</li>
                        <li>4 ADET 5 LİTRELİK SU ŞİŞESİ</li>
                        <li>2 ADET 10 LİTRELİK SU ŞİŞESİ</li>
                        <li> 1 ADET 20 LİTRELİK SU ŞİŞESİ (DAMACANA)</li>
                        </ul>
                        <br><br>
                        DEPO 6 BLOKTAN OLUŞMAKTADIR VE HER BLOKTA 5 SÜTUN BULUNMAKTADIR. BU İTİBARLA DEPODA TOPLAMDA 30
                        SÜTUN MEVCUTTUR. HER SÜTUN İÇERİSİNDE 10 BÖLÜM YER ALMAKTADIR. BU DURUMDA DEPODA TOPLAMDA 300
                        BÖLÜM BULUNMAKTADIR.

                        HER BÖLÜMÜN DEPOLAMA ALANI OLARAK 20 KOLİYE SAHİP OLDUĞUNU DİKKATE ALIRSAK, DEPODA TOPLAMDA 6000
                        KOLİ DEPOLANABİLİR KAPASİTEYE SAHİPTİR.
                    </h5>
                </div>

                <hr class="bg-200 mb-6 mt-4" />

                



               


            </div>
            @foreach ($rafs as $raf)



                <div style="border : 1px solid black">
                    <div class="col-xl-7 col-xxl-8">
                        <h3>{{$raf->name}}</h3>
                        <div class="px-xl-4 mb-7">
                            <div class="row mx-0 mx-sm-3 mx-lg-0 px-lg-0">
                                <div class="col-sm-12 col-xxl-6 border-bottom border-end-xxl border-translucent py-3">
                                    <table class="w-100 table-stats table-stats">
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <td class="py-2">
                                                <div class="d-inline-flex align-items-center">
                                                    <div class="d-flex bg-success-subtle rounded-circle flex-center me-3"
                                                        style="width:24px; height:24px"><span class="text-success-dark"
                                                            data-feather="bar-chart-2"
                                                            style="width:16px; height:16px"></span></div>
                                                    <p class="fw-bold mb-0">Blok Doluluk Oranı (%)</p>
                                                </div>
                                            </td>
                                            <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                            <td class="py-2">
                                                <p class="ps-6 ps-sm-0 fw-semibold mb-0 mb-0 pb-3 pb-sm-0">
                                                    %{{ $raf->uruns->sum('number_unit') * 100 / $raf->capacity }}
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex bg-info-subtle rounded-circle flex-center me-3"
                                                        style="width:24px; height:24px"><span class="text-info-dark"
                                                            data-feather="trending-up"
                                                            style="width:16px; height:16px"></span></div>
                                                    <p class="fw-bold mb-0">Stoktaki Ürün Sayısı (Koli)</p>
                                                </div>
                                            </td>
                                            <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                            <td class="py-2">
                                                <p class="ps-6 ps-sm-0 fw-semibold mb-0">
                                                    {{ $raf->uruns->sum('number_unit') }}
                                                </p>
                                            </td>

                                        </tr>
                                    </table>
                                </div>
                                <div class="col-sm-12 col-xxl-6 border-bottom border-translucent py-3">
                                    <table class="w-100 table-stats">
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <td class="py-2">
                                                <div class="d-inline-flex align-items-center">
                                                    <div class="d-flex bg-primary-subtle rounded-circle flex-center me-3"
                                                        style="width:24px; height:24px"><span class="text-primary-dark"
                                                            data-feather="phone" style="width:16px; height:16px"></span>
                                                    </div>
                                                    <p class="fw-bold mb-0">Toplam Kapasite (Koli)</p>
                                                </div>
                                            </td>
                                            <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                            <td class="py-2"><a class="ps-6 ps-sm-0 fw-semibold mb-0 pb-3 pb-sm-0 text-body"
                                                    href="tel:+11123456789">{{$raf->capacity}}</a></td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex bg-warning-subtle rounded-circle flex-center me-3"
                                                        style="width:24px; height:24px"><span class="text-warning-dark"
                                                            data-feather="mail" style="width:16px; height:16px"></span>
                                                    </div>
                                                    <p class="fw-bold mb-0">Boş Alan (Koli)</p>
                                                </div>
                                            </td>
                                            <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                            <td class="py-2"><a class="ps-6 ps-sm-0 fw-semibold mb-0 text-body"
                                                    href="mailto:jacksonpol@email.com">{{$raf->capacity - $raf->uruns->sum('number_unit') }}</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div
                                    class="col-sm-12 col-xxl-6 border-end-xxl border-bottom border-bottom-xxl-0 py-3 border-translucent">
                                    <table class="w-100 table-stats">
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <td class="py-2">
                                                <div class="d-inline-flex align-items-center">
                                                    <div class="d-flex bg-success-subtle rounded-circle flex-center me-3"
                                                        style="width:24px; height:24px"><span class="text-success-dark"
                                                            data-feather="users" style="width:16px; height:16px"></span>
                                                    </div>
                                                    <p class="fw-bold mb-0">Blok Sorumlusu</p>
                                                </div>
                                            </td>
                                            <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                            <td class="py-2">
                                                <div class="ps-6 ps-sm-0 fw-semibold mb-0 pb-3 pb-sm-0">Jackson Pollock
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex bg-info-subtle rounded-circle flex-center me-3"
                                                        style="width:24px; height:24px"><span class="text-info-dark"
                                                            data-feather="edit" style="width:16px; height:16px"></span>
                                                    </div>
                                                    <p class="fw-bold mb-0">Blok Sorumlusu İd Numarası</p>
                                                </div>
                                            </td>
                                            <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                            <td class="py-2">
                                                <div class="ps-6 ps-sm-0 fw-semibold mb-0">1</div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <hr>
                                <div class="col-sm-12 col-xxl-6 py-3">

                                    <p>
                                        @foreach ($raf->sutuns as $key => $sutun)
                                            <button class="btn btn-phoenix-secondary ms-sm-2 mt-2" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseExample{{$key}}"
                                                aria-expanded="false" aria-controls="collapseExample{{$key}}">{{$sutun->name}}
                                                -- Toplam Ürün Sayısı (Koli) ( {{ $sutun->uruns->sum('number_unit') }} / 200)
                                            </button>

                                        @endforeach
                                    </p>
                                    @foreach ($raf->sutuns as $key => $sutun)

                                        <div class="collapse" id="collapseExample{{$key}}">
                                            <div class="border border-translucent p-3 rounded">
                                                {{ $sutun->name}}
                                                <hr>
                                                <table>
                                                    <tbody>
                                                        @foreach ($sutun->bolmes as $bolum)
                                                            <tr>
                                                                <td class="py-2 pl-5">
                                                                    <div class="d-inline-flex align-items-center">
                                                                        <div class="d-flex bg-info-subtle rounded-circle flex-center me-3"
                                                                            style="width:24px; height:24px">
                                                                            <span class="text-info-dark" data-feather="calendar"
                                                                                style="width:16px; height:16px"></span>
                                                                        </div>
                                                                        <p class="fw-bold mb-0">{{$bolum->name}} Ürün Sayısı</p>
                                                                    </div>
                                                                </td>
                                                                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                                                <td class="py-2">
                                                                    <div class="ps-6 ps-sm-0 fw-semibold mb-0 pb-3 pb-sm-0">
                                                                        {{ $bolum->uruns->sum('number_unit') }} / 20
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    @endforeach




                                </div>

                            </div>
                        </div>

                    </div>


                </div>

            @endforeach


            


        </div>
    </div>
</div>
@endsection