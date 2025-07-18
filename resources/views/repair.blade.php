<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>หน้ารายการแจ้งซ่อม</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            padding: 30px;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h2>ยินดีต้อนรับ คุณ {{ session('staffname') }}</h2>
        <p>คุณเข้าสู่ระบบแล้ว</p>
        <a href="/logout" class="btn btn-danger mt-3">ออกจากระบบ</a>
    </div>
</body>
</html>
