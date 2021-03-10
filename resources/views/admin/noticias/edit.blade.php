@extends('layouts.admin')
@section('contenido_principal')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear noticia</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Noticias</a></li>
              <li class="breadcrumb-item active">Editar noticia</li>
             
            </ol>
          </div>
          <div>  <a href="{{ route("admin.noticias.index") }}">Volver a lista de noticias</a></div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Editar Noticia</h3>

          
        </div>
        <div class="card-body">
        @if(Session::has("exito"))
            <p style="color: #87adff">{{Session::get("exito")}}</p>
        @endif
        @if(Session::has("error"))
         <p style="color: #ff7070">{{Session::get("error")}}</p>
        @endif
         <form method="POST" action="{{ route("admin.noticias.update", $noticia->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
        <label>Título:</label>
        <input  class =" form-control" name="titulo" type="text" value="{{ $noticia->titulo }}" required >
        </div>
        <div class="form-group">
        <label>Fecha:</label>
        <input class =" form-control" name="fecha" value="{{ $noticia->fecha }}"type="date">
        </div>
        <div class="form-group">
        <label>Autor:</label>
        <input class =" form-control" name="autor" value="{{ $noticia->autor }}" type="text">
        </div>
        <div class="form-group">
        <label>Cuerpo:</label>
        <textarea class =" form-control"  rows="5" name="cuerpo" >{{$noticia->cuerpo}}</textarea>
        </div>
        <div class="form-group">
        <label>Foto:</label>
        <input class =" form-control"  name="foto" value="{{ $noticia->foto }}" type="text">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Actualizar noticia</button>
        </div>
    </form>
        
       
    </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Pie de la tabla de lista de noticias
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
