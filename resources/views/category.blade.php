@extends('layouts.app')

@section('title')
    YB - Inicio
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-bg-8">
            <div class="card">
                <div class="card-header mt-1">
                    <h2 class="text-center">
                        Yourblog - Administrador de categorias
                    </h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row mt-3 justify-content-center ">
                        @foreach ($categories as $category)
                            <div class="feature col-md-3 m-2">
                                <div class="card">
                                    <div class="card-header bg-primary">
                                        <h4 class="text-center m-1">{{ $category->category }}</h2>
                                    </div>
                                    <div class="card-body">
                                        <img src="{{ $category->image}}" class="img-thumbnail">
                                        <p class="mx-3">
                                            En Your Blog te damos la posibilidad de crear etiquetas de temas especificos de los cuales puedes clasificar tus articulos con ellas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="feature col-md-4 m-2">
                            <div class="card">
                                <div class="card-header bg-primary mb-4">
                                    <h4 class="text-center m-1">Crea tus categorias</h2>
                                </div>
                                <div class="card-body text-center">
                                    <img src="..\img\category.png" class="img-fluid rounded mx-auto d-block mb-4">
                                    <p class="mx-3">
                                        En your blog te damos la capacidad de crear carpetas de articulos en las cuales se clasifican a 
                                        travez de categorias en las que con una descripcion permitiras a los lectores ver tus articulos relacionados.
                                    </p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createCategory">
                                        Creala ahora!!!
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="createCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Creando Categoria</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('categories.store') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <label class="form-label" for="Category">Categoria:</label>
                                <input type="text" name="category" id="Category" class="form-control" placeholder="Nombre de la categoría">
                                <label class="form-label" for="Description">Descripcion:</label>
                                <textarea name="description" id="Description" class="form-control" 
                                placeholder="Escribe la descripcion de la categoria" rows="4"></textarea>
                                <label class="form-label" for="Image">Imagen:</label>
                                <input class="form-control" accept="image/*" type="file" name="image" id="Image">
                                <input type="number" name="id_user" value="{{ Auth::user()->id }}" id="createCategory" style="display: none">
                            </div>
                            <div class="modal-footer">
                              <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                              <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection