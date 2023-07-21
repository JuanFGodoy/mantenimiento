@extends('adminlte::page')

@section('content')
<br>
<a class="btn btn-outline-success btn-sm mb-2" href="{{ url()->previous() }}"><i class="fa fa-arrow-left"></i> {{ __('Back')}}</a>

<div class="col-lg-12 margin-tb">
    @include('fragment.error')
    <div class="card border-light mb-3 shadow">
        <div class="card-header bg-success text-white"><i class="fa fa-building"></i> 
            {{ __('Edit')}} Informe Técnico
        </div>
        <div class="card-body">

            {!! Form::model($informes, ['method' => 'PATCH','route' => ['informe.update', $informes->id]]) !!}
                @include('informe.partials.form-edit')
            {!! Form::close() !!}

        </div>
    </div>
</div>

@endsection