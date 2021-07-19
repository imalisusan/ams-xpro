<head>
<style type="text/css">

.styled-table {
    border-collapse: collapse;
    margin: 100px auto 0 auto;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.header0{
    text-align: center;
    font-size: 1em;
}

.logo{
    height: 50px;
}

.header1{
    font-size: 1em;
    font-weight: normal;
    display: inline;
}

#left{
    float: left;
    margin-top: 25px;
    margin-left: 292.437px;
}

#right{
    float: right;
    margin-top: 25px;
    margin-right: 292.437px;
}

.pri-header{
    background-color: #009fe5;
    color: white;
    text-align: center;
}

.sec-header{
    background-color: #0073a5;
    color: white;
    text-align: center
}

.center-text-data{
    text-align: center;
}

.right-text-data{
    text-align: right;
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
    border-bottom: 2px solid #009fe5;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: black;
}
</style>
</head>

        <h1 class="header0">
            <img src="{{ asset('assets/images/SU-Logo-1.svg') }}" class="logo">
            <br>
             Strathmore University
             <br>
            Examination Card
            <br>
            Authorization to Sit for University Exams
        </h1>

        
        <h2 class="header1">
            <div id="left">
                Admission No: {{ Auth::user()->reg_id }}
                <br>
                Course: {{ Auth::user()->course_name }}
                
            </div>
            <div id="right">
                Student Name: {{ Auth::user()->name }}
                <br>
                Downloaded On: {{ date('d-m-Y') }}
            </div> 
        </h2>

    <table class="styled-table">
    <thead>
        <tr class="pri-header">
            <th>Course Code</th>
            <th>Course Name</th>
            <th>Group</th>
            <th>Year</th>
        </tr>
      
    </thead>
    <tbody>
        
        @foreach ($courses as $course)
        <tr>
            <td class="center-text-data"> {{ $course->course->code}}</td>
            <td class="center-text-data"> {{ $course->course->name }}</td>
            <td class="center-text-data"> {{ $course->course->group }}</td>
            <td class="center-text-data"> {{ $course->course->year }}</td>
           
        </tr>
        @endforeach
        
   

       
      
    </tbody>
</table>
<br><br><br>

<div id="signature" style="width:20%; margin-left:40%;">
    <hr>
    &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;   
    Academic Registrar

</div>