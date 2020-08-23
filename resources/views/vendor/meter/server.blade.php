@extends('meter::layout.layout')

@section('content')
    @component('meter::components.chart', ['chart' => $cpuChart, 'title' => trans('dashboard.server_cpu_usage')])@endcomponent
    @component('meter::components.chart', ['chart' => $diskSpaceChart, 'title' => trans('dashboard.server_disk_space_usage')])@endcomponent
    @component('meter::components.chart', ['chart' => $serverMemoryChart, 'title' => trans('dashboard.server_memory_usage')])@endcomponent
    @component('meter::components.chart', ['chart' => $connectionsChart, 'title' => trans('dashboard.server_http_connections_count')])@endcomponent
@endsection

