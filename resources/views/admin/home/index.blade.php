@extends('admin.layouts.master')

@section('content')
    <div class="content">
        <div class="pb-5">
            <div class="row g-4">
                {{-- <div class="col-12 col-xxl-6">
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








                </div> --}}
                <div class="container mt-5">
                    <h2 class="mb-4">Raf İstatistikleri</h2>
                    <div class="row">
                        @foreach ($rafs as $raf)
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>{{ $raf->name }}</h4>
                                    </div>
                                    <div class="card-body">
                                        @foreach ($raf->sutuns as $sutun)
                                            <div class="mb-3">
                                                <h5 class="card-title">{{ $sutun->name }}</h5>
                                                <ul class="list-group">
                                                    @foreach ($sutun->bolmes as $bolme)
                                                        @php
                                                            $totalProducts = $bolme->uruns->sum('count');
                                                        @endphp
                                                        <li @if ($totalProducts == $bolme->capacity) style="background-color: green;color:White"
                                                            @elseif ($totalProducts < 5 && $totalProducts != 0) style="background-color: red;color:White" @endif
                                                            class="list-group-item d-flex justify-content-between align-items-center">
                                                            {{ $bolme->name }}
                                                            <span
                                                                class="badge badge-primary badge-pill  @if ($totalProducts == $bolme->capacity || $totalProducts < 5 && $totalProducts != 0)
                                                               text-white  @else text-black  @endif">{{ $totalProducts }}
                                                                Adet</span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>






            </div>
        </div>
    </div>
@endsection
