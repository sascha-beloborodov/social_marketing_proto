@extends('templates.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Content Type
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($contentType, ['route' => ['contentTypes.update', $contentType->id], 'method' => 'patch']) !!}

                        @include('templates.content_types.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection