@extends('client.layouts.master')

@section('content')





<div class="page-title-area page-title-four">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="page-title-item">
                <h2>Bloglar</h2>
                <ul>
                    <li>
                        <a href="{{url('/')}}">Anasayfa</a>
                    </li>
                    <li>
                        <i class="icofont-simple-right"></i>
                    </li>
                    <li>Bloglar</li>
                </ul>
            </div>
        </div>
    </div>
</div>



<section class="blog-area-two pt-100">
    <div class="container">
        <div class="row">
           @foreach ($blogs as $blog)
               
          
            <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                <div class="blog-item">
                    <div class="blog-top">
                        <a href="{{route('blogs.show',$blog->id)}}">
                            <img src="{{url('uploads/'.$blog['image'])}}" alt="Blog">
                        </a>
                    </div>
                    <div class="blog-bottom">
                        <h3>
                            <a href="{{route('blogs.show',$blog->id)}}">
                                {{$blog['title']}}
                            </a>
                        </h3>
                        <p>{{$blog['short_content']}}</p>
                        <ul>
                            <li>
                                <a href="{{route('blogs.show',$blog->id)}}">
                                    Daha Fazla
                                    <i class="icofont-long-arrow-right"></i>
                                </a>
                            </li>
                            <li>
    <i class="icofont-calendar"></i>
    {{ \Carbon\Carbon::parse($blog['created_at'])->toDateString() }}
</li>

                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

            
        </div>
    </div>
</section>


@endsection