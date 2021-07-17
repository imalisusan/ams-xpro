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
           <div style="width:45%; height:40%;">
            <div style="float:left;">
                    <img src="{{ url('https://lh3.googleusercontent.com/proxy/YpldMaKE6DfrSizfmJjyFYYuCwsUw3h3VqpA0Bw09WvfxxyqKTvZf6EhTLRwy86d1f1pNZ64PnNo8Awbg5AQAXAGsXb4oUPqUV2zttSV2UNvGyglE1UprXO8hUfZK2hUS5cKG3yXYC_f32Z9Ug') }}" 
                    class=""  style="width:15%; height:15% float:left; margin-top: 5%; margin-left: 10%;" />
                    <h3 style=" float:right; font-size: 18px; margin-left: 0%; font-family: sans-serif; font-weight: normal;">
                            Strathmore University <br>
                        Progress Report <br>
                         {{ Auth::user()->name}} - {{ Auth::user()->reg_id }} <br>
                         Course:  {{ Auth::user()->course_name }} <br> 
                         Fee Balance:  {{ Auth::user()->fee_balance()}} <br>
                         Downloaded: 03-11-2020 09:14AM
                    </h3>
            </div>
        
           </div>
            <br>

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
                </tr>
            
            </tbody>
         </table>
    </div>