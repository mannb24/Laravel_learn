<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function inforStudent()
    {
        $inforStudent = [
            'MaSV' => 'PH35073',
            'Ten' => 'Nguyễn Bá Mạnh',
            'NgaySinh' => '20/06/2004',
            'GioiTinh' => 'Nam',
            'QueQuan' => 'Vĩnh Phúc',
            'SoThich' => [
                'Bóng Đá',
                'Bóng chuyền',
                'Chơi game'
            ],
        ];
        return view('infor-student', compact('inforStudent'));
    }
}
