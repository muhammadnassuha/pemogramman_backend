<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    // Menyimpan data hewan dalam array
    protected $animals = ["kucing", "ayam", "ikan"];

    // Menampilkan data hewan
    public function index()
    {
        echo "Data hewan:<br>";
        foreach ($this->animals as $index => $animal) {
            echo "Index $index: " . $animal . "<br>";
        }
    }

    // Menambahkan hewan baru
    public function store(Request $request)
    {
        // Menggunakan array_push untuk menambahkan hewan
        array_push($this->animals, $request->nama);

        echo "Menambahkan hewan baru: " . $request->nama . "<br>";
        echo "Data hewan saat ini:<br>";
        foreach ($this->animals as $index => $animal) {
            echo "Index $index: " . $animal . "<br>";
        }
    }

    // Mengupdate data hewan berdasarkan ID
    public function update(Request $request, $id)
    {
        // Mengupdate nama hewan
        $this->animals[$id] = $request->nama;

        echo "Mengupdate data hewan id $id: " . $request->nama . "<br>";
        echo "Data hewan saat ini:<br>";
        foreach ($this->animals as $index => $animal) {
            echo "Index $index: " . $animal . "<br>";
        }
    }

    // Menghapus data hewan berdasarkan ID
    public function destroy($id)
    {
        // Menghapus data hewan menggunakan unset
        unset($this->animals[$id]);

        echo "Menghapus data hewan id $id.<br>";
        echo "Data hewan saat ini:<br>";
        foreach ($this->animals as $index => $animal) {
            echo "Index $index: " . $animal . "<br>";
        }
    }
}
