<style>
    h5{
        color: red;
    }

    svg{
        color: white;
    }

    svg:hover{
        color: blue;
    }
    span{
        font-size: 20px;
        color:royalblue;
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
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card text-white bg-info mb-3" style="max-width: 50rem;">
                            <div class="card-header">
                                <a href="/data" class="d-inline">
                                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path fill-rule="evenodd" d="M8.354 11.354a.5.5 0 0 0 0-.708L5.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z"/>
                                    <path fill-rule="evenodd" d="M11.5 8a.5.5 0 0 0-.5-.5H6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5z"/>
                                  </svg>
                                </a>
                                <h4 class="text-center">Detail</h4>
                            </div>
                            <div class="card-body bg-light text-secondary">
                            <h5 class="card-title text-center ">Pastikan kan andam menyetujui sebelum kirim</h5>
                            <p class="card-text"><span>Jenis:   </span>{{$sampah -> jenis}}</p>
                            <p class="card-text"><span>Berat:   </span>{{$sampah -> berat}}</p>
                            <p class="card-text"><span>Alamat:  </span>{{$sampah -> alamat}}</p>
                            <p class="card-text"><span>Pesan:   </span>{{$sampah -> pesan}}</p>
                            <p class="card-text"><span>Biaya:   </span>{{$biaya}} </p>
                                <a href="/edit/{{$sampah -> id}}" class="btn btn-primary">edit</a>
                                <form action="/data/{{$sampah->id}}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <a>
    
                                        <button type="submit" class="btn btn-danger">hapus</button>
                                    </a>
                                </form>
                                
                                  <a href="/send" class="btn btn-success">Kirim</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </section>    
    </body>
    </html>
    