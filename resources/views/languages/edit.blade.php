@extends('varenykyAdmin::app')

@section('title', __('varenykyLocale::admin.languages.edit.title'))

@section('content_header')
    <strong>{{ __('varenykyLocale::admin.languages.edit.title') }}</strong>
@stop

@section('save-btn', route('admin.languages.update', $language))
@section('back-btn', route('admin.languages.index'))

@section('content')
    <form action="{{ route('admin.languages.update', $language) }}" method="POST" id="nopulpForm" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card border p-3">
                    <div class="form-group mb-3">
                        <label for="page_name"
                            class="@if ($errors->has('name')) text-danger @endif">{{ __('varenyky::labels.name') }}</label>
                        <input id="page_name" type="text" placeholder="{{ __('varenyky::labels.name') }}..."
                            name="name" class="form-control @if ($errors->has('name')) is-invalid @endif"
                            value="{{ $language->name }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="iso"
                            class="@if ($errors->has('iso')) text-danger @endif">{{ __('varenykyLocale::labels.iso') }}</label>
                        <input id="iso" type="text" placeholder="{{ __('varenykyLocale::labels.iso') }}..."
                            name="iso" class="form-control @if ($errors->has('name')) is-invalid @endif"
                            value="{{ $language->iso }}">
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
