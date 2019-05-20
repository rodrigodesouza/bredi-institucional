
@extends('bredicoloradmin::layouts.controle')

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Library</a></li>
        <li class="breadcrumb-item active"><a href="javascript:;">Data</a></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Contatos Empresa <small>header small text goes here...</small></h1>
    <!-- end page-header -->
    <div class="row">
        <div class="col-lg-6">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    </div>
                    <h4 class="panel-title">Contatos Empresa</h4>
                </div>
                <div class="panel-body">
                    {!! Form::model($empresaContato,['route' => 'brediinstitucional::controle.empresa-contato.update', 'files' => true]) !!}
                        <fieldset>
                            {{-- <legend class="m-b-15">Quem somos</legend> --}}
                            <div class="form-group">
                                <label for="titulo">Titulo*</label>
                                {!! Form::text('titulo', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail*</label>
                                {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                            <div class="form-group telefones">
                                <label for="endereco">Telefones</label>
                                <div class="input-group m-b-10 linha_telefone">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <span class="fas fa-phone"></span>
                                        </span>
                                    </div>
                                    {!! Form::text('telefones[]', null, ['class' => 'form-control phone']) !!}
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary adicionar_linha"><span class="fa fa-plus"></span></button>
                                        <button type="button" class="btn btn-danger remover_linha"><span class="fa fa-minus"></span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereço Resumido</label>
                                {!! Form::text('endereco', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label for="endereco_completo">Endereço Completo</label>
                                {!! Form::text('endereco_completo', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label for="whatsapp">Whatsapp</label>
                                {!! Form::text('whatsapp', null, ['class' => 'form-control whatsapp']) !!}
                            </div>
                            <div class="form-group">
                                <label for="instagram">Instagram</label>
                                {!! Form::text('instagram', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                {!! Form::text('facebook', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label for="youtube">Youtube</label>
                                {!! Form::text('youtube', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label for="linkedin">Linkedin</label>
                                {!! Form::text('linkedin', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                {!! Form::text('twitter', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label for="google_plus">Google+</label>
                                {!! Form::text('google_plus', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label for="latitude">Latitude</label>
                                {!! Form::text('latitude', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label for="longitude">Longitude</label>
                                {!! Form::text('longitude', null, ['class' => 'form-control']) !!}
                            </div>
                            
                            @can('brediinstitucional::controle.empresa-contato.update')
                                <button type="submit" class="btn btn-md btn-primary m-r-5">Salvar</button>
                            @endcan
                        </fieldset>
                    {!! Form::close() !!}

                </div> <!-- panel-body -->
                
            </div>
            <!-- end panel -->

        </div>
    </div>
    
@stop
