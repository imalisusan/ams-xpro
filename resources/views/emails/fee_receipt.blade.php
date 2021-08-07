@component('mail::message')
Hello {{$name}},  <br>
We have received a new payment from you

To view the receipt, follow the link below
@component('mail::button', ['url' => $link])
View Fee Receipt
@endcomponent

Sincerely,  
Strathmore University
@endcomponent