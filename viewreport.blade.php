@extends('frontend/master')

@section('index')
<style>
    body { font-family: Arial, sans-serif; }
    .card { margin-top: 20px; padding: 20px; }
    .header-section { text-align: center; margin-bottom: 20px; }
    .header-section h2 { margin-bottom: 5px; }
    .patient-info h4 { margin: 5px 0; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    table, th, td { border: 1px solid #ddd; }
    th, td { padding: 10px; text-align: left; }
    th { background-color: #f2f2f2; }
    .btn-download { margin-top: 20px; }
    @media print {
        .btn-download { display: none; }
    }
</style>
<div class="container mt-4 mb-3">
<div class="card">
    <div class="header-section">
        <h2>Appointment Report</h2>
        <p>Appointment ID: #{{ $appointement->id }}</p>
    </div>

    <div class="patient-info">
        <p>
            <span>Patient Name</span>
     <span class="ml-4">
        {{ $appointement->name }}
    </span>

        </p>
        <p>
            <span>Phone</span>
            <span class="ml-4">
                {{ $appointement->phone }}
            </span>

        </p>
        <p>
            <span>Appointment Date</span>
            <span class="ml-4">
                {{ $appointement->pr_date }}
            </span>

        </p>
        <p>

            <span>Fee</span>
            <span class="ml-4">
                {{ $appointement->fee }}
            </span>
        </p>
        <p>

            <span>Address</span>
            <span class="ml-4">
                {{ $appointement->addrress }}
            </span>
        </p>
        <p>
            <span>Received Time</span>
            <span class="ml-4">
                {{ $appointement->recieved_time }}
            </span>

        </p>

    </div>

    <hr>

    <table>
        <thead>
            <tr>
                <th>Test Name</th>
                <th>Result</th>
                <th>Remarks</th>
                <th>Doctor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($results as $result)
                <tr>
                    <td>{{ $result->test_name }}</td>
                    <td>{{ $result->results }}</td>
                    <td>{{ $result->remarks }}</td>
                    <td>{{ $result->doctor_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ url('patient/pdf', $appointement->id) }}" class="btn btn-primary btn-download">Download PDF</a>
</div>
</div>

@endsection
