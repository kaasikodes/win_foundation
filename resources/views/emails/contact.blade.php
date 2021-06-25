@component('mail::message')



<h1>{{$message->subject}}</h1>
<p>{{$message->content}}</p>

@component('mail::button', ['url' => '/messages'])
View All Messages on Site
@endcomponent

From,<br>
{{$message->person->name}}
@endcomponent
