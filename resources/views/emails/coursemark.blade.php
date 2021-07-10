@component('mail::message')
Hello {{$name}},  <br>
Your courseworkmarks have been updated

To view them, follow the link below
@component('mail::button', ['url' => $link])
View Marks
@endcomponent

Sincerely,  
Strathmore University
@endcomponent