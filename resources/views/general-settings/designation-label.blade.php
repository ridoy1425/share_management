@extends('ui.admin_panel.master')

@section('title', 'Designation Label')

@section('style')

@endsection

@section('content_title')
    <h4 class="mt-2">Designation Label</h4>
@endsection

@section('main_content')
    <div class="row page-content">
        <div class="container">
            {{-- message alert --}}
            <div class="alert_message mt-2">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul style="margin-bottom: 0rem;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (Session::has('success'))
                    <div class="alert alert-success" role="success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if (Session::has('error'))
                    <div class="alert alert-danger" role="success">
                        {{ Session::get('error') }}
                    </div>
                @endif
            </div>

            {{-- card-body start --}}
            <div class="card card-default">
                <div class=" ml-auto mb-2 mt-2 mr-3">
                    <a class="btn btn-warning" href="{{ url('designation/label/create') }}">Add New Label</a>
                </div>
                <div class="card-body">
                    <table class="table" id="table_id">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Designation Label</th>
                                <th scope="col">Designation Label</th>
                                <th scope="col">Designation Label</th>
                                <th scope="col">Designation Label</th>
                                <th scope="col">Designation Label</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($labels as $label)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $label->label }}</td>
                                    <td>
                                        <a href="{{ URL('designation/label/edit', $label->id) }}"><i
                                                class="fas fa-edit"></i></a>
                                        <a href="{{ URL('designation/label/edit', $label->id) }}"><i
                                                class="fas fa-edit"></i></a>
                                        <a style="color:red;" href="{{ URL('/designation/label/delete', $label->id) }}"><i
                                                class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- card-body end --}}
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable({
                rowHeight: 20,
            });
        });
    </script>
@endsection
