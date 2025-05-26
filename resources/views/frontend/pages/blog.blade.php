@extends('frontend.layouts.front')

@section('content')
    <div class="container" id="blog">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div class="header">
                    <h2>Blog kami</h2>
                    <h1>Infromasi dan Inspirasi</h1>
                    <p>Dapatkan inspirasi dengan tips, panduan, dan informasi yang bermanfaat.</p>
                </div>
                <div class="search">
                    <div class="input-group mb-3 form">
                        <span class="input-group-text bg-white border-end-0">
                            <i class="bi bi-search text-muted"></i>
                        </span>
                        <input type="text" class="form-control border-start-0" placeholder="Cari Blog">
                    </div>
                </div>
                <div class="category">
                    <ul>
                        <li class="items active">Australia</li>
                        <li class="items">Selandia Baru</li>
                        <li class="items">AS</li>
                        <li class="items">Singapore</li>
                        <li class="items">Malaysia</li>
                        <li class="items">AS</li>
                        <li class="items">AS</li>
                        <li class="items">China</li>
                        <li class="items">Kanada</li>
                        <li class="items">AS</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row list">
            @for ($i = 0; $i < 6; $i++)
                <div class="col-md-4">
                <article class="card">
                    <a href="#"><img src="{{ asset('build/assets/images/blog.svg') }}" class="card-img-top" alt="..."></a>
                    <div class="pt-3">
                        <p><small class="date"> 19 Jan 25</small></p>
                        <div class="d-flex justify-content-between">
                            <div>
                                <h2><a href="#">Kenapa Pelajar Indonesia Memilih Kuliah di Australia?</a></h2>
                            </div>
                            <div class="ml-auto">
                                <i class="bi bi-arrow-up-right"></i>
                            </div>
                        </div>
                        
                        <p>Kenapa Pelajar Indonesia Memilih Kuliah di Australia?</p>
                        <span class="category">Australia</span>
                    </div>
                </article>
            </div>
            @endfor
        </div>
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <button type="button" class="btn btn-primary-geo">Muat Lebih Banyak</button>
            </div>
            
        </div>

    </div>
@endsection