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

.header-zero{
    font-family: sans-serif;
    text-align: center;
    font-size: 1em;

}

.header-one{
    font-family: sans-serif;
    font-size: 1em;
    font-weight: normal;
    text-align: left;
    display: inline;
}

#left{
    float: left;
    margin-left: 300px;
    margin-top: 30px;
}

#right{
    float: right;
    margin-right: 300px;
    margin-top: 30px;
}
.pri-header{
    background-color: #009fe5;
    color: #ffffff;
}

.sec-header{
   background-color: #0073a5;
   color: #ffffff;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
    text-align: center;
}

.styled-table tbody tr {
    border-bottom: 1px solid #ddddddt;
   text-align: center;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009fe5;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #000000;
}
.logo{
    height: 40px;
}

.column-span{
    colspan: "2";
}
</style>
</head>

        <h1 class="header-zero">
            <img class="logo" src="{{ asset('assets/images/SU-Logo-1.svg') }}">
            <br>
            Strathmore University
            <br>
            Student Statement
        </h1>
            <h2 class="header-one">
                <div id="left">
                    Admission Number: {{ Auth::user()->reg_id }}
                <br>
                Program: All
                </div>
                <div id="right">
                    Student Name: {{ Auth::user()->name }}
                    <br>
                    Statement Date: 
                </div>
                
            {{-- Fee Statement- {{ Auth::user()->reg_id }}- {{ Auth::user()->name}}  --}}
            </h2>
   

    <table class="styled-table">
    <thead>
        <tr class="pri-header">
            <th>Date</th>
            <th>Document Number</th>
            <th>Document Type</th>
            <th>Type</th>
            <th colspan="2">Amount</th>
        </tr>
        <tr class="sec-header">
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th>Debit</th>
            <th>Credit</th>
        </tr>
    </thead>
    <tbody>
        @php
        $invoice = NULL;
        $receipt = NULL;
        @endphp
        @foreach ($feestatements as $feestatement)
        <tr>
            <td> {{ $feestatement->date}}</td>
            <td> {{ $feestatement->document_number }}</td>
            <td> {{ $feestatement->document_type }}</td>
            <td> {{ $feestatement->type }}</td>
            <td>
                @if ($feestatement->document_type == "Invoice")
                    {{$feestatement->amount}}
                @else
                    0.00
                @endif
            </td>
            <td>
                @if ($feestatement->document_type == "Receipt")
                    {{$feestatement->amount}}
                @else
                    0.00
                @endif
            </td>

        </tr>
        @php
            
            if($feestatement->document_type == "Receipt")
            {
                $receipt += $feestatement->amount; 
            }
            else
            {
                $invoice += $feestatement->amount; 
            }
            @endphp
        @endforeach
       

        @php 
        $difference = $invoice-$receipt;
        $difference=  substr($difference, 1);
        

        if($difference < 0)
        {
            $difference = "- ".$difference;
        }
        else
        {
            $difference = "+ ".$difference;
        }

        @endphp

        <tr class="active-row">
            <td>Total </td>
            <td></td>
            <td></td>
            <td></td>
            <td>{{ $invoice }}</td>
            <td>{{ $receipt }}</td>
        </tr>
        <tr class="active-row">
            <td>Balance</td>
            <td></td>
            <td></td>
            <td></td>
            <td>

            </td>
            <td>{{$difference}}</td>
        </tr>
      
    </tbody>
</table>