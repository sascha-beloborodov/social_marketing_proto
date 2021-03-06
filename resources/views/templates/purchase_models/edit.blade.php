@extends('templates.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Purchase Model
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($purchaseModel, ['route' => ['purchaseModels.update', $purchaseModel->id], 'method' => 'patch']) !!}

                        @include('templates.purchase_models.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection