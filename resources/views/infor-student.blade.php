<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    body {
        display: flex;
        justify-content: center;
    }

    .card {
        width: 95%;
    }
</style>
<div class="card mt-3 mb-3">
    <div class="card-header">
        <h1>Thông tin sinh viên</h1>
    </div>
    <div class="card-body ">
        <div class="mb-3">
            <div class="row mb-3">
                <div class="col col-md-6">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Mã Sinh Viên</span>
                        <input type="text" class="form-control" value="<?= $inforStudent['MaSV']?>" disabled>
                    </div>
                </div>
                <div class="col col-md-6">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Tên Sinh Viên</span>
                        <input type="text" class="form-control" value="<?= $inforStudent['Ten']?>" disabled>
                    </div>
                </div>

            </div>
            <div class="row mb-3">
                <div class="col col-md-6">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Ngày Sinh</span>
                        <input type="text" class="form-control" value="<?= $inforStudent['NgaySinh']?>" disabled>
                    </div>
                </div>
                <div class="col col-md-6">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Giới tính</span>
                        <input type="text" class="form-control" value="<?= $inforStudent['GioiTinh']?>" disabled>
                    </div>
                </div>

            </div>
            <div class="row mb-3">
                <div class="col col-md-6">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Quê quán</span>
                        <input type="text" class="form-control" value="<?= $inforStudent['QueQuan']?>" disabled>
                    </div>
                </div>
                <div class="col col-md-6">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Sở thích</span>
                        <?php $strSoThich = implode(', ', $inforStudent['SoThich']); ?>
                        <input type="text" class="form-control" value="<?= $strSoThich?>" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>