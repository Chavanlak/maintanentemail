<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($branches as $bb)
      <p>{{$bb->MBranchInfo_Code }}</p>
      <p>{{$bb->MBranchInfo_Name }}</p>
  @endforeach
</body>
</html>