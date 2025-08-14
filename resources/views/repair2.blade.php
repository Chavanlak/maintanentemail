<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repair</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Icons (MDI) -->
    <link href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="navbar-brand" href="#">MaintenanceRepairSystem</a>

            <!-- Toggle button for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Right-side content -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" href="/logout" title="Logout">
                            <span class="mdi mdi-logout mdi-24px"></span>
                            <span class="ms-1 d-none d-lg-inline">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>

    </nav>
    <div class="card">
        {{-- <div class="card-header">
      เลือกสาขาที่คุณต้องการ
    </div> --}}
        <div class="card-body">
            <blockquote class="blockquote mb-0">

                <form action="/repair/submit" method="POST" onsubmit="return validateForm();"
                    class="p-3 bg-light rounded shadow-sm " enctype="multipart/form-data">
                    @csrf


                    <div class="mb-3">
                        <label for="category" class="form-label fw-bold">
                            <i class="mdi mdi-wrench-outline"></i> เลือกอุปกรณ์ที่ต้องการเเจ้งซ่อม
                        </label>
                        <select name="category" id="category" class="form-select" required>
                            <option value="">-- เลือกอุปกรณ์ที่ต้องการเเจ้งซ่อม --</option>
                            {{-- <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option> --}}
                            @foreach ($equipment as $eqm)
                                <option value="{{ $eqm->equipmentId }}">{{ $eqm->equipmentName }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label fw-bold">
                            <i class="mdi mdi-wrench-outline"></i>รายละเอียดเเจ้งซ่อม

                        </label>
                        <textarea name="detail" id=""></textarea>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="mail" class="form-label fw-bold">
                            <i class="mdi mdi-wrench-outline"></i> เลือกอีเมลสาขา
                        </label>
                        <select name="mail" id="mail" class="form-select" required>
                            <option value="">-- เลือกอีเมลสาขา--</option>
                            @foreach ($branchmail as $mail1)
                                <option value="{{ $mail1->email}}">{{ $mail1->email }}</option>
                            @endforeach
                        </select>
                    </div> --}}
              
                    <div class="mb-3">
                        <label for="zoneMail" class="form-label fw-bold">
                            <i class="mdi mdi-wrench-outline"></i> เลือกอีเมลโซน
                        </label>
                        <select name="zoneMail" id="" class="form-select" required>
                            <option value="">-- เลือกอีเมลโซน--</option>
                            
                            @foreach ($zoneEmail as $mail2)
                                <option value="{{ $mail2->email}}">{{ $mail2->email }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label fw-bold">
                            <i class="mdi mdi-wrench-outline"></i> อีเมลที่ต้องการเเจ้งซ่อม
                        </label>
                         <input type="text" name="mail" id="branch" class="form-control mb-3" placeholder="เมลเเจ้งซ่อม" required>
                    </div>
                    {{-- <input type="text" name="email1" id="branch" class="form-control mb-3" placeholder="เมลสาขา" required> --}}
                    {{-- <input type="text" name="email2" id="branch" class="form-control mb-3" placeholder="เมลโซน" required>
                    <input type="text" name="email3" id="branch" class="form-control mb-3" placeholder="เมลรับเเจ้งซ่อม" required>
                    <div class="mb-3"> --}}
                        <input type="file" name="filepic[]" multiple>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            <i class="mdi mdi-arrow-right-bold-circle-outline"></i> ไปต่อ
                        </button>
                    </div>
                </form>

        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function validateForm() {
            const branch = document.getElementById('branch').value;
            const zone = document.getElementById('zone').value;
            const category = document.getElementById('category').value;

            if (!branch || !zone || !category) {
                alert('กรุณาเลือกข้อมูลให้ครบทุกช่องก่อนกดไปต่อ');
                return false;
            }
            return true;
        }
    </script>

</body>

</html>
