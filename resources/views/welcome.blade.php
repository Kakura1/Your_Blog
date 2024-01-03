@extends('layouts.app')

@section('title')
    YB - Bienvenido
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-bg-8 ">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center m-1 fw-bold">Bienvenido a Your Blog</h2>
                    </div>

                    <div class="card-body">
                        <h3 class="text-center mb-3">
                            La pagina que te permitira crear tus propio blog personal.
                        </h3>
                        <h3 class="text-center mb-3">
                            Y en la cual podras administrar diferentes articulos a traves de etiquetas y categorias.
                        </h3>
                    </div>
                </div>

                <div class="row mt-3 justify-content-center ">
                    <div class="feature col-md-4 m-2">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h4 class="text-center m-1">Crea tus articulos</h2>
                            </div>
                            <div class="card-body">
                                <img src="..\img\article.jpg" class="rounded mx-auto d-block">
                                <p class="mx-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur suscipit mollitia quibusdam tenetur iste fugit. Deleniti labore explicabo officia quisquam hic accusantium non in.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="feature col-md-3 m-2">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h4 class="text-center m-1">Crea tus etiquetas</h2>
                            </div>
                            <div class="card-body">
                                <img src="..\img\article.jpg" class="rounded mx-auto d-block">
                                <p class="mx-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur suscipit mollitia quibusdam tenetur iste fugit. Deleniti labore explicabo officia quisquam hic accusantium non in.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="feature col-md-4 m-2">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h4 class="text-center m-1">Crea tus categorias</h2>
                            </div>
                            <div class="card-body">
                                <img src="..\img\article.jpg" class="rounded mx-auto d-block">
                                <p class="mx-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur suscipit mollitia quibusdam tenetur iste fugit. Deleniti labore explicabo officia quisquam hic accusantium non in.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
