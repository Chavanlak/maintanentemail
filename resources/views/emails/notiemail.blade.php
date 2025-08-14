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
@component('mail::panel')
    แจ้งซ่อมจากสาขา {{$NotiData['branchname']}}
@endcomponent


@component('mail::panel')
    ที่สังกัดกับโซน {{$NotiData['zonename']}}
@endcomponent

@component('mail::panel')
    ซ่อมอุปกรณ์ {{$NotiData['equipmentname']}}
@endcomponent

@component('mail::button', ['url' => $NotiData['linkmail']])
ไฟล์การเเจ้งซ่อม
@endcomponent

{{-- Thank you for your purchase! --}}

@endcomponent
