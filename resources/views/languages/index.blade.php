@extends('varenykyAdmin::app')

@section('title', __('varenyky::admin.menu.index.title'))

@section('content_header')
    <strong>{{ __('varenyky::admin.menus.index.title') }}</strong>
@stop

@section('create-btn', route('admin.menus.create'))

@section('content')
    <div class="card border p-3">
        <table class="table">
            <thead>
                <tr class="">
                    <th>{{ __('varenyky::labels.name') }}</th>
                    <th>{{ __('varenyky::labels.slug') }}</th>
                    <th width="350"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($Lanuages as $Lanuage)
                    <tr>
                        <td>{{ $Lanuage->name }}</td>
                        <td align="right">
                            @include('varenykyAdmin::actions', ['route' => 'Lanuage', 'entity' => $Lanuage])
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">{{ __('varenyky::labels.empty') }}</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
