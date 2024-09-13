<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;


route::get('/', function () {
    echo 'Trang chủ';
    echo "<br>";
    echo "<a href='/infor-student'><button>Thông tin sinh viên</button></a>";
});

// Tạo controller bằng lệnh php artisan make:controller Tên_control
route::get('list-sanpham', [SanPhamController::class, 'listSanPham']);

route::get('get-sanpham/{idSP}', [SanPhamController::class, 'detailSanPham']);

route::get('infor-student', [StudentController::class, 'inforStudent']);