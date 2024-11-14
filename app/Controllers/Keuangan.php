<?php

namespace App\Controllers;

class Keuangan extends BaseController
{
    public function masuk(): string
    {
        return view('keuangan/keu_masuk');
    }

    public function keluar(): string
    {
        return view('keuangan/keu_keluar');
    }
}
