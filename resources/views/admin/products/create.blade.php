@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.products.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.products.store'], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('category', trans('quickadmin.products.fields.category').'', ['class' => 'control-label']) !!}
                    <button type="button" class="btn btn-primary btn-xs" id="selectbtn-category">
                        {{ trans('quickadmin.qa_select_all') }}
                    </button>
                    <button type="button" class="btn btn-primary btn-xs" id="deselectbtn-category">
                        {{ trans('quickadmin.qa_deselect_all') }}
                    </button>
                    {!! Form::select('category[]', $categories, old('category'), ['class' => 'form-control select2', 'multiple' => 'multiple', 'id' => 'selectall-category' ]) !!}
                    <p class="help-block"></p>
                    @if($errors->has('category'))
                        <p class="help-block">
                            {{ $errors->first('category') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('tag', trans('quickadmin.products.fields.tag').'', ['class' => 'control-label']) !!}
                    <button type="button" class="btn btn-primary btn-xs" id="selectbtn-tag">
                        {{ trans('quickadmin.qa_select_all') }}
                    </button>
                    <button type="button" class="btn btn-primary btn-xs" id="deselectbtn-tag">
                        {{ trans('quickadmin.qa_deselect_all') }}
                    </button>
                    {!! Form::select('tag[]', $tags, old('tag'), ['class' => 'form-control select2', 'multiple' => 'multiple', 'id' => 'selectall-tag' ]) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tag'))
                        <p class="help-block">
                            {{ $errors->first('tag') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('photo1', trans('quickadmin.products.fields.photo1').'', ['class' => 'control-label']) !!}
                    {!! Form::file('photo1', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('photo1_max_size', 8) !!}
                    {!! Form::hidden('photo1_max_width', 6000) !!}
                    {!! Form::hidden('photo1_max_height', 6000) !!}
                    <p class="help-block"></p>
                    @if($errors->has('photo1'))
                        <p class="help-block">
                            {{ $errors->first('photo1') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('album_id', trans('quickadmin.products.fields.album').'', ['class' => 'control-label']) !!}
                    {!! Form::select('album_id', $albums, old('album_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('album_id'))
                        <p class="help-block">
                            {{ $errors->first('album_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent

    <script>
        $("#selectbtn-category").click(function(){
            $("#selectall-category > option").prop("selected","selected");
            $("#selectall-category").trigger("change");
        });
        $("#deselectbtn-category").click(function(){
            $("#selectall-category > option").prop("selected","");
            $("#selectall-category").trigger("change");
        });
    </script>

    <script>
        $("#selectbtn-tag").click(function(){
            $("#selectall-tag > option").prop("selected","selected");
            $("#selectall-tag").trigger("change");
        });
        $("#deselectbtn-tag").click(function(){
            $("#selectall-tag > option").prop("selected","");
            $("#selectall-tag").trigger("change");
        });
    </script>
@stop