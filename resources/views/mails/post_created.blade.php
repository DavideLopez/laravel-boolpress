@component('mail::message')
# nuovo post 

congratulazioni un nuovo post è stato aggiunto al tuo blog 

@component('mail::button', ['url' => route('admin.posts.show', $post)])
{{ $post->title }}
@endcomponent

grazie, <br>
{{ config('app.name') }}
@endcomponent