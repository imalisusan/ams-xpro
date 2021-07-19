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
             Student Statement
        </h1>
        
        <h2 class="header1">
            <div id="left">
                Admission No: {{ Auth::user()->reg_id }}
                <br>
                Program: All 
            </div>
            <div id="right">
                Student Name: {{ Auth::user()->name }}
                <br>
                Statement Date: {{ date('d-m-Y') }}
            </div> 
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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Debit</td>
            <td>Credit</td>
        </tr>
    </thead>
    <tbody>
        @php
        $invoice = NULL;
        $receipt = NULL;
        @endphp
        @foreach ($feestatements as $feestatement)
        <tr>
            <td class="center-text-data"> {{ $feestatement->date}}</td>
            <td class="center-text-data"> {{ $feestatement->document_number }}</td>
            <td class="center-text-data"> {{ $feestatement->document_type }}</td>
            <td class="center-text-data"> {{ $feestatement->type }}</td>
            <td class="right-text-data">
                @if ($feestatement->type == "Debit")
                    {{number_format((double)$feestatement->amount, 2, '.', '')}}
                @else
                    0.00
                @endif
            </td>
            <td class="right-text-data">
                @if ($feestatement->type == "Credit")
                    {{number_format((double)$feestatement->amount, 2, '.', '')}}
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
            <td>Total</td>
            <td></td>
            <td></td>
            <td></td>
            <td class="right-text-data">{{number_format((double)$invoice, 2, '.', '')}}</td>
            <td class="right-text-data">{{number_format((double)$receipt, 2, '.', '')}}</td>
            
        </tr>
        <tr class="active-row">
            <td>Balance</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="right-text-data">{{number_format((double)$difference, 2, '.', '')}}</td>
        </tr>
      
    </tbody>
</table>