@extends('layaouts.frontend')
@section('title', 'SERVICE')

@section('content')
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-lg-8">
              <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    @foreach($dataproduct as $d)
  
                  <div class="swiper-slide">
                    <img src="{{@d->getFirstMedianUrl('image', 'preview')}}" alt="">
                  </div>
  
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
  
            <div class="col-lg-4">
              <div class="portfolio-info">
                <h3>{{$d->name}}</h3>
                <ul>
                  <li><strong>Category</strong>: {{$d->category}}</li>
                  <li><strong>Client</strong>: {{$d->stock}}</li>
                  <li><strong>Project date</strong>: {{$d->price}}</li>
                  <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                </ul>
              </div>
              <div class="portfolio-description">
                <h2>{{$d->description}}</h2>
                <p>
                {{$d->description}}
                </p>
              </div>
              @endforeach
            </div>
  
          </div>
  
        </div>
      </section><!-- End Portfolio Details Section -->