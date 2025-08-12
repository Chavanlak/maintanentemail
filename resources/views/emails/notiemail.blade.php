{{-- @component('mail::message')
{{$NotiData['title']}}

Noti-picture data is




@foreach ($NotiData['img'] as $imgitem)
<img src="data:image/jpeg;base64,{{ $imgitem }}" width="100" height="100">

@endforeach


Thank you for your purchase!

@endcomponent --}}
<!DOCTYPE html>

<html>

<head>

    <title>Base64 Image</title>

</head>

<body>

    <h1>Look at this image!</h1>

    <p>This image is embedded directly in the email content.</p>

    @foreach ($NotiData['img'] as $imgitem)
            <img src="data:{{ $imgitem['mime'] }};base64,{{ $imgitem['data'] }}" alt="Embedded Logo">
        {{-- <p>{{ $imgitem['mime'] }}</p> --}}
    @endforeach

</body>

</html>

{{-- <!DOCTYPE html>
<html>
<head>
    <title>อีเมลแจ้งซ่อม</title>
</head>
<body>
    <h1>รายละเอียดการแจ้งซ่อม</h1>
    <p>รายละเอียด: {{ $NotiData['detail'] }}</p>

    <h2>รูปภาพประกอบ</h2>
    @foreach ($data['img'] as $index => $imgItem)
        <img src="data:{{ $NotiData['mime'][$index] }};base64,{{ $imgItem }}" alt="รูปภาพประกอบ" style="max-width: 100%; height: auto;">
    @endforeach
</body>
</html> --}}
