@extends('client.layouts.master')

@section('content')
    <div class="page-title-area page-title-four">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="page-title-item">
                    <h2>{{ $blog['title'] }}</h2>
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Anasayfa</a>
                        </li>
                        <li>
                            <i class="icofont-simple-right"></i>
                        </li>
                        <li>{{ $blog['title'] }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="blog-details-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="blog-details-item">
                        <div class="blog-details-img">
                            <img src="{{ url('uploads/' . $blog['image']) }}" alt="Blog">
                            <h2>{{ $blog['title'] }}</h2>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="icofont-businessman"></i>
                                        Erol Günen
                                    </a>
                                </li>
                            <li>
    <i class="icofont-calendar"></i>
    {{ \Carbon\Carbon::parse($blog['created_at'])->toDateString() }}
</li>

                            </ul>
                            <p>{!! $blog['content'] !!}</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </div>
@endsection
