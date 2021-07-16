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
        Fee Statement- {{ Auth::user()->reg_id }}- {{ Auth::user()->name}} 
        </h2>

    <table class="styled-table">
    <thead>
        <tr>
            <th>Date</th>
            <th>Document Number</th>
            <th>Document Type</th>
            <th>Type</th>
            <th>Amount</th>
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
            <td> {{ $feestatement->amount }}</td>
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
            <td>Total Invoiced</td>
            <td>{{ $invoice }}</td>
            <td>Total Paid</td>
            <td>{{ $receipt }}</td>
            <td>Difference</td>
            <td>{{$difference}}</td>
        </tr>
      
    </tbody>
</table>