<style>
    h5{
        color: red;
    }
</style>

@php
    $biaya = $sampah->berat * 3000;
@endphp
    <!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Laravel') }}</title>
    
        <!-- Scripts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <script src="{{ asset('js/app.js') }}" defer></script>
    
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
        <!-- my font -->
        <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    </head>
    <body>
        <section>
            <div class="container py-5">
                <div class="row ">
                    <div class="col">
                        <div class="card text-white bg-info mb-3" style="max-width: 50rem;">
                            <div class="card-header text-center">
                              Detail
                            </div>
                            <div class="card-body bg-light text-secondary">
                              <h5 class="card-title text-center ">Pastikan kan andam menyetujui sebelum kirim</h5>
                              <p class="card-text">Jenis :  {{$sampah -> jenis}}</p>
                              <p class="card-text">berat :  {{$sampah -> berat}}</p>
                              <p class="card-text">alamat : {{$sampah -> alamat}}</p>
                              <p class="card-text">pesan :  {{$sampah -> pesan}}</p>
                                <p class="card-text">biaya :  {{$biaya}} </p>
                              <a href="#" class="btn btn-success ">Kirim</a>
                              <a href="#" class="btn btn-danger ">Hapus</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </section>    
    </body>
    </html>
    