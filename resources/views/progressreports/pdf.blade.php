<head>
<style type="text/css">

.styled-table {
    border-collapse: collapse;
    margin: 40px auto 0 auto;
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
    display: inline;
}

#left{
    float: left;
    margin-top: 25px;
    margin-left: 292.437px;
    margin-bottom: 25px;
}

#right{
    float: right;
    margin-top: 25px;
    margin-right: 292.437px;
    margin-bottom: 25px;
}

.styled-table thead tr {
    background-color: #009fe5;
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
    border-bottom: 2px solid #009fe5;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: black;
}

.container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}
</style>
</head>
        <div class="container">
                    
            <h1 class="header0">
                <img src="{{ asset('assets/images/SU-Logo-1.svg') }}" class="logo">
                <br>
                    Strathmore University
                    <br>
                    Progress Report
                    <br>
                    {{ Auth::user()->course_name }}
            </h1>

            <h2 class="header1">
                <div id="left">
                    Student Name: {{ Auth::user()->name }}
                    <br>
                    Admission No: {{ Auth::user()->reg_id }}
                </div>
                <div id="right">
                    Fee Balance:  {{ Auth::user()->fee_balance()}}
                    <br>
                    Downloaded: {{ date('d-m-Y H:iA') }}
                </div> 
            </h2>

        </div>

        <div id="averages">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th colspan="4" style="text-align:center;">AVERAGES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td >Units Completed</td>
                        <td style="border-right:1px solid #333;">{{$courses_count}}</td>
                        <td>Total Marks</td>
                        <td>{{$gpa_total}}</td>
                    </tr>
                    <tr>
                        <td>Average Mark</td>
                        <td style="border-right:1px solid #333;">{{$gpa}}</td>
                        <td>Average Grade</td>
                        <td>{{$gpa_grade}}</td>
                    </tr>
                    <tr>  
                        <td style="border-right:1px solid #333;">Specialization</td>
                        <td colspan="3"></td>           
                    </tr>
                    <tr>    
                        <td>
                        Minimum required credits: 168 <br>
                        Minimum required compulsory credits: 108
                        </td>
                    </tr>
                    <tr>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="key">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th colspan="4" style="text-align:center;">KEY</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>OB</td>
                        <td style="border-right:1px solid #333;">Obligatory/Compulsory Unit</td>
                        <td>OP</td>
                        <td>Optional/Elective Unit</td>
                    </tr>
                    <tr>
                        <td>*</td>
                        <td style="border-right:1px solid #333;">Repeat Course</td>
                        <td>**</td>
                        <td>Passed Retake Examination</td>
                    </tr>
                    <tr>             
                    </tr>
                </tbody>
            </table>
        </div>

    <div id="table">
            <table class="styled-table">
            <thead>
                <tr>
                    <th>Subject Code</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Year</th>
                    <th>Credits</th>
                    <th>Score</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                <tr>
                    <td> {{ $course->course->code }}</td>
                    <td> {{ $course->course->name }}</td>
                    <td> {{ $course->course->type }}</td>
                    <td> {{ $course->course->year }}</td>
                    <td> {{ $course->course->credits }}</td>
                    <td> {{ $course->total }}</td>
                    <td> {{ $course->grade }}</td>
                </tr>
                @endforeach
            
                <tr class="active-row">
                    <td></td>
                    <td>Average GPA</td>
                    <td>{{$gpa}}</td>
                    <td>Mean Grade</td>
                    <td>{{$gpa_grade}}</td>
                    <td></td>
                    <td></td>
                </tr>
            
            </tbody>
        </table>
    </div> 
        