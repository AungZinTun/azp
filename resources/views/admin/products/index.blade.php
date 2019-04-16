@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.products.title')</h3>
    @can('product_create')
    <p>
        <a href="{{ route('admin.products.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($products) > 0 ? 'datatable' : '' }} @can('product_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('product_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.products.fields.category')</th>
                        <th>@lang('quickadmin.products.fields.tag')</th>
                        <th>@lang('quickadmin.products.fields.photo1')</th>
                        <th>@lang('quickadmin.products.fields.album')</th>
                        <th>@lang('quickadmin.album.fields.description')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($products) > 0)
                        @foreach ($products as $product)
                            <tr data-entry-id="{{ $product->id }}">
                                @can('product_delete')
                                    <td></td>
                                @endcan

                                <td field-key='category'>
                                    @foreach ($product->category as $singleCategory)
                                        <span class="label label-info label-many">{{ $singleCategory->name }}</span>
                                    @endforeach
                                </td>
                                <td field-key='tag'>
                                    @foreach ($product->tag as $singleTag)
                                        <span class="label label-info label-many">{{ $singleTag->name }}</span>
                                    @endforeach
                                </td>
                                <td field-key='photo1'>@if($product->photo1)<a href="{{ asset(env('UPLOAD_PATH').'/' . $product->photo1) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $product->photo1) }}"/></a>@endif</td>
                                <td field-key='album'>{{ $product->album->title ?? '' }}</td>
<td field-key='description'>{{ isset($product->album) ? $product->album->description : '' }}</td>
                                                                <td>
                                    @can('product_view')
                                    <a href="{{ route('admin.products.show',[$product->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('product_edit')
                                    <a href="{{ route('admin.products.edit',[$product->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('product_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.products.destroy', $product->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="9">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('product_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.products.mass_destroy') }}';
        @endcan

    </script>
@endsection