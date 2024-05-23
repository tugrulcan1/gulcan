@extends('admin.layouts.master')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div id="projectSummary"
                    data-list='{"valueNames":["projectName","assigness","start","deadline","task","projectprogress","status","action"],"raf":12,"pagination":true}'>
                    <div class="row justify-content-between mb-4 gx-6 gy-3 align-items-center">
                        <div class="col-auto">
                            <h2 class="mb-0">Siparişler<span class="fw-normal text-700 ms-3">({{ count($orders) }})</span>
                            </h2>
                        </div>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success text-white">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger text-white">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="card shadow-none border border-300 my-4 p-5">
                        <div class="table-responsive scrollbar">
                            <table class="table fs--1 mb-0 border-top border-200">
                                <thead>
                                    <tr>
                                        <th style="width:15%;">ID</th>
                                        <th class="sort white-space-nowrap align-middle ps-0" scope="col"
                                            data-sort="projectName" style="width:20%;">Ürün Adı</th>
                                            <th class="sort white-space-nowrap align-middle ps-0" scope="col"
                                            data-sort="projectName" style="width:20%;">Adet</th>
                                            <th class="sort white-space-nowrap align-middle ps-0" scope="col"
                                            data-sort="projectName" style="width:20%;">Şirket Adı</th>
                                            <th class="sort white-space-nowrap align-middle ps-0" scope="col"
                                            data-sort="projectName" style="width:20%;">Adres</th>
                                            <th class="sort white-space-nowrap align-middle ps-0" scope="col"
                                            data-sort="projectName" style="width:20%;">Telefon</th>

                                    </tr>
                                </thead>
                                <tbody class="list" id="project-list-table-body">
                                    @foreach ($orders as $key => $order)
                                        <tr class="position-static">
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $order->urun->name }}</td>
                                            <td>{{ $order->qt }}</td>
                                            <td>{{ $order->company_name }}</td>
                                            <td>{{ $order->address }}</td>
                                            <td>{{ $order->phone }}</td>


                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="d-flex flex-wrap align-items-center justify-content-between py-3 pe-0 fs--1 border-bottom border-200">
                            <div class="d-flex">
                                <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900"
                                    data-list-info="data-list-info">
                                </p>
                            </div>
                            <div class="d-flex"><button class="raf-link" data-list-pagination="prev"><span
                                        class="fas fa-chevron-left"></span></button>
                                <ul class="mb-0 pagination"></ul><button class="raf-link pe-0"
                                    data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
