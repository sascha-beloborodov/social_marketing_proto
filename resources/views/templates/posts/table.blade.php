@section('css')
    @include('templates.layouts.datatables_css')
@endsection

{!! $dataTable->table(['width' => '100%'], true) !!}

@section('scripts')
    @include('templates.layouts.datatables_js')
    {!! $dataTable->scripts() !!}
@endsection