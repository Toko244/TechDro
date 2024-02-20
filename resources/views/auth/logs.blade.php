@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <div class="card-header">
                Authentication Log for {{ $user->name }}
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th class="w-15">Log Name</th>
                            <th>Login/logout</th>
                            <th class="w-15">User ID</th>
                            <th>Browser</th>
                            <th class="w-15">User Ip_address</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activityLogs as $log)
                            @php
                                $properties = json_decode($log->properties, true);
                            @endphp
                            <tr>
                                <td>{{ $log->id }}</td>
                                <td>{{ $log->log_name }}</td>
                                <td>{{ $log->description }}</td>
                                <td>{{ $log->subject_id }}</td>
                                <td>{{ $properties['browser'] ?? '-' }}</td>
                                <td>{{ $properties['ip_address'] ?? '-' }}</td>
                                <td>{{ $log->created_at }}</td>
                                <td>{{ $log->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
