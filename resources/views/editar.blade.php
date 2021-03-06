@extends('adminlte::page')

@section('title', 'Editar Cliente')

@section('content_header')
    <h1>Editar Cliente</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            
                <div class="box box-primary">
                        <!-- form start -->
                        <form role="form" method="POST">
                          <div class="box-body">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="exampleInputEmail1">ID</label>
                                <input type="text" class="form-control" name="id_form" value="{{ $id }}" readonly>
                              </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Nome</label>
                              <input type="text" class="form-control" name="nome_form" value="{{ $nome }}" required>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Telefone</label>
                              <input type="text" class="form-control" name="telefone_form" value="{{ $telefone }}" required>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Idade</label>
                              <input type="number" class="form-control" name="idade_form" value="{{ $idade }}" required>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">E-mail</label>
                              <input type="email" class="form-control" name="email_form" value="{{ $email }}" required>
                            </div>
                          </div>
                          <!-- /.box-body -->
            
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Salvar Novo</button>
                          </div>
                        </form>
                      </div>
@stop