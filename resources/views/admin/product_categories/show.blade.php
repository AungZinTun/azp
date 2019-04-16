@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.product-categories.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.product-categories.fields.name')</th>
                            <td field-key='name'>{{ $product_category->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.product-categories.fields.description')</th>
                            <td field-key='description'>{!! $product_category->description !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.product-categories.fields.photo')</th>
                            <td field-key='photo'>@if($product_category->photo)<a href="{{ asset(env('UPLOAD_PATH').'/' . $product_category->photo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $product_category->photo) }}"/></a>@endif</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#products" aria-controls="products" role="tab" data-toggle="tab">Products</a></li>
<li role="presentation" class=""><a href="#client" aria-controls="client" role="tab" data-toggle="tab">Client</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="products">
<table class="table table-bordered table-striped {{ count($products) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.products.fields.category')</th>
                        <th>@lang('quickadmin.products.fields.tag')</th>
                        <th>@lang('quickadmin.products.fields.photo1')</th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($products) > 0)
            @foreach ($products as $product)
                <tr data-entry-id="{{ $product->id }}">
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
<div role="tabpanel" class="tab-pane " id="client">
<table class="table table-bordered table-striped {{ count($clients) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.client.fields.name')</th>
                        <th>@lang('quickadmin.client.fields.category')</th>
                        <th>@lang('quickadmin.client.fields.date')</th>
                        <th>@lang('quickadmin.client.fields.photo')</th>
                        <th>@lang('quickadmin.client.fields.phone')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($clients) > 0)
            @foreach ($clients as $client)
                <tr data-entry-id="{{ $client->id }}">
                    <td field-key='name'>{{ $client->name }}</td>
                                <td field-key='category'>{{ $client->category->name ?? '' }}</td>
                                <td field-key='date'>{{ $client->date }}</td>
                                <td field-key='photo'>
                                    @foreach ($client->photo as $singlePhoto)
                                        <span class="label label-info label-many">{{ $singlePhoto->photo1 }}</span>
                                    @endforeach
                                </td>
                                <td field-key='phone'>{{ $client->phone }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('client_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.clients.restore', $client->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('client_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.clients.perma_del', $client->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('client_view')
                                    <a href="{{ route('admin.clients.show',[$client->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('client_edit')
                                    <a href="{{ route('admin.clients.edit',[$client->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('client_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.clients.destroy', $client->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="10">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.product_categories.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


