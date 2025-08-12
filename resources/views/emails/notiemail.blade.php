{{-- @component('mail::message')
{{$NotiData['title']}}

Noti-picture data is




@foreach ($NotiData['img'] as $imgitem)
<img src="data:image/jpeg;base64,{{ $imgitem }}" width="100" height="100">

@endforeach


Thank you for your purchase!

@endcomponent --}}
@component('mail::message')
{{$NotiData['title']}}
Noti repair link

@component('mail::button', ['url' => $NotiData['linkmail']])
Look at this link
@endcomponent

Thank you for your purchase!

@endcomponent
