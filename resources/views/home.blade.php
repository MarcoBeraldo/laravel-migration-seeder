<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trains</title>
</head>
<body>
    <h1>Treni</h1>
    <table>
        <thead>
            <th>Company</th>
            <th>From</th>
            <th>To</th>
            <th>Departure time</th>
            <th>Arrival time</th>
            <th>Train code</th>
            <th>Coach Nr</th>
            <th>In Time</th>
            <th>Deleted</th>
        </thead>
        <tbody>
            @forelse($trains as $train)
            <tr>
                <td>{{$train->company}}</td>
                <td>{{$train->from}}</td>
                <td>{{$train->to}}</td>
                <td>{{$train->departure_time}}</td>
                <td>{{$train->arrival_time}}</td>
                <td>{{$train->train_code}}</td>
                <td>{{$train->coach_nr}}</td>
                <td>
                    @if($train->is_deleted)
                        Deleted
                    @elseif(!$train->in_time)
                        Late
                    @endif
                </td>
                
            </tr>
        @empty
        <tr colspan="8">
            <td></td>
        </tr>
        @endforelse
        </tbody>
    </table>
</body>
</html>