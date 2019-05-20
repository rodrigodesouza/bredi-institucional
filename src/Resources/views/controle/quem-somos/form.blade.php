
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
    <h1 class="page-header">Quem Somos <small>header small text goes here...</small></h1>
    <!-- end page-header -->
    <div class="row">
        <div class="col-lg-9">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    </div>
                    <h4 class="panel-title">Quem Somos</h4>
                </div>
                <div class="panel-body">
                    {!! Form::model($sobre,['route' => 'brediinstitucional::controle.quem-somos.update', 'files' => true]) !!}
                        <fieldset>
                            {{-- <legend class="m-b-15">Quem somos</legend> --}}
                            <div class="form-group">
                                <label for="titulo">Titulo</label>
                                {!! Form::text('titulo', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                            <div class="form-group">
                                <label for="subtitulo">Subtitulo</label>
                                {!! Form::text('subtitulo', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label for="capa">Capa</label>
                                @if(isset($sobre->imagem) and !empty($sobre->imagem))
                                    <img src="{{ route('imagem.render', 'empresa/g/' . $sobre->imagem) }}" alt="">
                                @endif
                                {!! Form::file('capa', ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label for="conteudo">Conteúdo</label>
                                {!! Form::textarea('conteudo', null, ['class' => 'form-control summernote']) !!}
                            </div>
                            <div class="form-group">
                                <label for="imagem">Imagens</label>
                                {!! Form::file('imagem', ['class' => 'form-control']) !!}
                            </div>
                            @can('brediinstitucional::controle.quem-somos.update')
                                <button type="submit" class="btn btn-md btn-primary m-r-5">Salvar</button>
                            @endcan
                        </fieldset>
                    {!! Form::close() !!}
                    <br>
                    {{--<legend class="m-b-15">Galeria</legend>
                    <table class="table table-striped table-condensed">
                        <thead>
                            <tr>
                                <th width="10%">PREVIEW</th>
                                <th>FILE INFO</th>
                                <th width="1%"></th>
                            </tr>
                        </thead>
                        <tbody class="files">
                            <tr data-id="empty" style="display: none;">
                                <td colspan="4" class="text-center text-muted p-t-30 p-b-30">
                                    <div class="m-b-10"><i class="fa fa-file fa-3x"></i></div>
                                    <div>No file selected</div>
                                </td>
                            </tr>
                        <tr class="template-upload fade show in">
                            <td>
                                <span class="preview"><canvas width="80" height="7"></canvas></span>
                            </td>
                            <td>
                                <div class="alert alert-secondary p-10 m-b-0">
                                    <dl class="m-b-0">
                                        <dt class="text-inverse">File Name:</dt>
                                        <dd class="name">sprite_1.fw.png</dd>
                                        <dt class="text-inverse m-t-10">File Size:</dt>
                                        <dd class="size">422.94 KB</dd>
                                    </dl>
                                </div>
                                <strong class="error text-danger"></strong>
                            </td>
                            <td nowrap="">
                                    <button class="btn btn-primary start width-100 p-r-20 m-r-3">
                                        <i class="fa fa-upload fa-fw pull-left m-t-2 m-r-5 text-inverse"></i>
                                        <span>Start</span>
                                    </button>
                                
                                
                                    <button class="btn btn-default cancel width-100 p-r-20">
                                        <i class="fa fa-trash fa-fw pull-left m-t-2 m-r-5 text-muted"></i>
                                        <span>Excluir</span>
                                    </button>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>--}}

                </div> <!-- panel-body -->
                
            </div>
            <!-- end panel -->

        </div>
    </div>
    
@stop
