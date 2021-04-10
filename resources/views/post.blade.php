@extends('master')

@section('content')
    <table class="table table-bordered" id="users-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>author</th>
            <th>Title</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Updated At</th>
        </tr>
        </thead>
    </table>
@stop

@push('scripts')
    <script>
        $(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('post.gettable') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'author', name: 'author' },
                    { data: 'title', name: 'trans.title' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' },
                    {data: 'emp.name',name:'emp.name', searchable: true}
                ]
            });
        });
    </script>
@endpush
