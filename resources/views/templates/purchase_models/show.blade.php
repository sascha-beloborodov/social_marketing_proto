@extends('templates.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Purchase Model
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('templates.purchase_models.show_fields')
                    <a href="{!! route('purchaseModels.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
