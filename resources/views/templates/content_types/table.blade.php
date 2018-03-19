@section('css')
    @include('templates.layouts.datatables_css')
@endsection

{!! $dataTable->table(['width' => '100%', "scrollX" => true], true) !!}

@section('scripts')
    @include('templates.layouts.datatables_js')
    {!! $dataTable->scripts() !!}
@endsection