@component('mail::message')
# nuovo post 

CONGRATULAZIONI!!! un nuovo post è stato aggiunto al tuo boolpress

@component('mail::button', ['url' => route('admin.posts.show', $post)])
{{ $post->title }}
@endcomponent

Grazie, <br>
{{ config('app.name') }}
@endcomponent