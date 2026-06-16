<!DOCTYPE html>
<html>
<head>
    <title>Lab Test Report</title>
    <style>
        body { font-family: Arial; font-size: 12px; }
        h2,h3 { text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 8px; text-align: left; }
    </style>
</head>
<body>

<h2>MKLab Diagnostic Center</h2>
<h3>Patient Test Report</h3>

<p><strong>Patient:</strong> {{ $appointement->name }}</p>
<p><strong>Phone:</strong> {{ $appointement->phone }}</p>
<p><strong>Date & Time:</strong> {{ $appointement->pr_date }} {{ $appointement->pr_time }}</p>
<p><strong>Address:</strong> {{ $appointement->addrress }}</p>

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
        @foreach($results as $r)
        <tr>
            <td>{{ $r->test_name }}</td>
            <td>{{ $r->results }}</td>
            <td>{{ $r->remarks }}</td>
            <td>{{ $r->doctor_name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<p style="text-align:center; margin-top:30px;">Doctor Signature: _____________________</p>

</body>
</html>
