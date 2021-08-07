@component('mail::message')
Hello {{$name}},  <br>
Your have been invoiced a new amount

To view it, follow the link below
@component('mail::button', ['url' => $link])
View Fee Invoice
@endcomponent

Sincerely,  
Strathmore University
@endcomponent