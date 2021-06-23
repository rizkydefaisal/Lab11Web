<?php
namespace App\Controllers;
use App\Models\ArtikelModel;
class Artikel extends BaseController
{
public function view($slug)
{

$model = new ArtikelModel();
$artikel = $model->where(['slug' => $slug])->first();

//Menampilkan error apabila data tidak ada.
if (|$artikel)
{
    throw PageNotFoundException::forPageNotFound();
}

$title=$artikel['judul'];
return view('artikel/detail', compact('artikel', 'title'));
return view('artikel/index', compact('artikel', 'title'));
}
}