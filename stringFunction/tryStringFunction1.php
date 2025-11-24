<?php

// menggabungkan array
var_dump(join(", ", [10, 20, 30, 40, 50]));

// mengubah menjadi array
var_dump(explode(" ", "Aufi Dhuha Mutaafif"));

// mengubah menjadi huruf kecil
var_dump(strtolower("AUFI DHUHA MUTAAFIF"));

// mengubah menjadi huruf besar
var_dump(strtoupper("aufi dhuha mutaafif"));

// menghapus spasi di awal dan diakhir namun tidak ditengah
var_dump(trim("    Aufi Dhuha        "));
var_dump(trim("    Aufi     Dhuha  "));

// mengambil karakter
var_dump(substr("Aufi Dhuha Mutaafif", 0, 3));
var_dump(substr("Aufi Dhuha Mutaafif", 1, 3));
var_dump(substr("Aufi Dhuha Mutaafif", 5, 2));
var_dump(substr("Aufi Dhuha Mutaafif", 2));
var_dump(substr("Aufi Dhuha Mutaafif", 7));