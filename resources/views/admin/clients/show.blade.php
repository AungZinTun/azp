@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.client.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.client.fields.name')</th>
                            <td field-key='name'>{{ $client->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.client.fields.category')</th>
                            <td field-key='category'>{{ $client->category->name ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.client.fields.date')</th>
                            <td field-key='date'>{{ $client->date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.client.fields.photo')</th>
                            <td field-key='photo'>
                                @foreach ($client->photo as $singlePhoto)
                                    <span class="label label-info label-many">{{ $singlePhoto->photo1 }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.client.fields.phone')</th>
                            <td field-key='phone'>{{ $client->phone }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.clients.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop

@section('javascript')
    @parent

    <script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
    <script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script>
        $(function(){
            moment.updateLocale('{{ App::getLocale() }}', {
                week: { dow: 1 } // Monday is the first day of the week
            });
            
            $('.date').datetimepicker({
                format: "{{ config('app.date_format_moment') }}",
                locale: "{{ App::getLocale() }}",
            });
            
        });
    </script>
            
@stop
