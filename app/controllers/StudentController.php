<?php
 
namespace App\Controllers;
 
class StudentController{
 
public function index()
{
    echo '<h1> Daftar siswa </h1>';
    echo '<p> menampilkan daftar siswa </p>';
}
 
public function create()
{
    echo '<h1> Ditambah siswa siswa </h1>';
    echo '<p> Menampilkan form tambah siswa </p>';
}
 
}