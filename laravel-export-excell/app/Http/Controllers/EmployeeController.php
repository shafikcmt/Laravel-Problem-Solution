<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
class EmployeeController extends Controller
{
    public function addEmployee(){
        $employees = [
            ['name'=>'sofik','email'=>'sofik@gmail.com','phone'=>'1234567890','sallery'=>'20000','department'=>'Compuer'],
            ['name'=>'rofik','email'=>'rofik@gmail.com','phone'=>'1234567891','sallery'=>'21000','department'=>'civil'],
            ['name'=>'mannan','email'=>'mannan@gmail.com','phone'=>'1234567892','sallery'=>'22000','department'=>'mechanical'],
            ['name'=>'masum','email'=>'masum@gmail.com','phone'=>'1234567893','sallery'=>'23000','department'=>'Refrajaration'],
            ['name'=>'Muslima','email'=>'muslima@gmail.com','phone'=>'1234567894','sallery'=>'24000','department'=>'graphics'],
            ['name'=>'rima','email'=>'rima@gmail.com','phone'=>'1234567895','sallery'=>'25000','department'=>'history'],
            ['name'=>'kalam','email'=>'kalam@gmail.com','phone'=>'1234567896','sallery'=>'26000','department'=>'arts']
        ];
        Employee::insert($employees);
        return "Records are inserted";
    }
}
