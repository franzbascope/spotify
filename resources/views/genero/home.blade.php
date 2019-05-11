@extends('layouts.app')
@section('content')

        <h1 class=" pt-5 pb-2  text-white font-weight-bold ml-4">Generos y estados de animo</h1>
        <a href="genero/create"  class="btn btn-dark m-4">Nuevo Genero</a>
        <div class="flex-container">
            @foreach($listaGeneros as $objGenero)
                <div class="container mb-5">
                        <figure >
                            <img  class="image"  src="{{$objGenero['imagen']}}" >
                            <div class="overlay">
                                <a    href="/artista/genero/{{$objGenero["id"]}}"   >
                                    <i  class="far fa-eye icon"></i>
                                </a>
                                <a class="edit " data-id=""  href="/genero/{{$objGenero["id"]}}"  >
                                    <i style="margin-left:40px;"  class="far fa-edit icon"></i>
                                </a>
                                <form method="POST" action="{{action('GeneroController@destroy',$objGenero["id"])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button style="background:transparent;border-style:none"  type="submit" onclick="return confirm('Está Seguro que desea eliminar?');" class="btnEliminar">
                                        <a class="edit " data-id=""  href="java"  >
                                            <i style="margin-left:80px;"  class="fas fa-trash-alt icon"></i>
                                        </a>
                                    </button>
                                </form>
                            </div>
                            <figcaption></figcaption>
                            <h5 class="text-white mt-2">{{$objGenero['nombre']}}</h5>
                        </figure>
                </div>
            @endforeach
        </div>


@endsection