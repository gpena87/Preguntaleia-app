@extends('layouts.master')
@section('title')
@lang('translation.Basic_Elements')
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Forms @endslot
@slot('title') Basic Elements @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            <form action="{{ route('users.update', $user->id) }}"method="POST">  
                <h4 class="card-title">Textual inputs</h4>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">User Name</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="{{$user->username}}" name="username">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-search-input" class="col-md-2 col-form-label">Name</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="{{$user->name}}" name="name">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                    <div class="col-md-10">
                        <input class="form-control" type="email" value="{{$user->email}}" id="example-email-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-number-input" class="col-md-2 col-form-label">Type</label>
                    <div class="col-md-10">
                        <input class="form-control" type="number" value="{{$user->type_user}}" name="type_user">
                    </div>
                </div>
                    @csrf
                    @method('PUT')
                    <td><button type="submit" title="Edit">Editar</button></td>
                </form>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" title="Delete" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">Eliminar</button>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection