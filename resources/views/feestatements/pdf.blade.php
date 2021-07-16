<head>
<style type="text/css">

.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
    background-color: #D92B30;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #D92B30;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #D92B30;
}
</style>
</head>

        <h1 class="styled-table th" style="font-size:15px;">
             Strathmore University
        </h1>
        
        <h2 class="styled-table th" style="color:#324B90">
        Progress Report- {{ Auth::user()->reg_id }}- {{ Auth::user()->name}} 
        </h2>

    <table class="styled-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Year</th>
            <th>Credits</th>
            <th>Score</th>
            <th>Grade</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($courses as $course)
        <tr>
            <td> {{ $course->course->name }}</td>
            <td> {{ $course->course->year }}</td>
            <td> {{ $course->course->credits }}</td>
            <td> {{ $course->total }}</td>
            <td> {{ $course->grade }}</td>
        </tr>
        @endforeach
      
    </tbody>
</table>