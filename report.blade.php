@extends('frontend/master')

@section('index')
<div class="container mt-4">

    <h3 class="text-center mb-4">My Reports</h3>

    @if($appointements->count() == 0)
        <div class="alert alert-info">
            No reports available yet
        </div>
    @endif

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th> patinetname</th>
                <th>Date</th>
                <th>Status</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            @foreach($appointements as $app)
            <tr>
                <td>{{ $app->id }}</td>
                <td>{{$app->name}}</td>
                <td>{{ $app->pr_date }}</td>
                <td>{{ $app->status }}</td>
                <td>
                     @if($app->status == 'completed')
                     <a href="{{ url('patient/report',$app->id) }}" class="btn btn-primary btn-sm">
                         View Report
                     </a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
