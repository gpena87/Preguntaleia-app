@extends('layouts.master')
@section('title')
    @lang('translation.Editable_Table')
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Tables @endslot
        @slot('title') Editable Table @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Users</h4>
                    <div class="table-responsive">
                        <table class="table table-editable table-nowrap align-middle table-edits">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User Name</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Type</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                            <form action="{{ route('users.update', $user->id) }}"method="POST">
                                @csrf
                                @method('PUT')
                                <tr data-id="{{ $user->id }}">
                                    <td style="width: 80px">{{ $user->id }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <input type="number" name="type_user" value="{{ $user->type_user }}">
                                    </td>
                                    <td style="width: 100px">
                                        <button type="submit" title="Edit">
                                        </button>
                                        <td>
                                    </td>
                                    </td>
                                </tr>
                                </form>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection

@section('script')
    <script src="{{ URL::asset('/assets/libs/table-edits/table-edits.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/table-editable.init.js') }}"></script>
@endsection
