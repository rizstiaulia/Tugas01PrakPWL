<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function show_postingan()
    {
        return view('admin.postingan');
    }

    public function show_arsip()
    {
        return view('admin.arsip');
    }

    public function show_kelolaakun()
    {
        return view('admin.kelolaakun');
    }

    public function show_penjualan()
    {
        return view('admin.penjualan');
    }

    public function show_kalender()
    {
        return view('admin.kalender');
    }

    public function show_Produk()
    {
        return view('admin.produk');
    }

    public function show_Inbox()
    {
        return view('admin.inbox');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
