
<?php
function fibonacci($banyakBilangan)
{
    //   Membuat 2 Angka Awal
    $angkaSebelumnya = 0;
    $angkaSekarang = 1;

    //   Simpan Angka Awal 
    $angka = "$angkaSebelumnya $angkaSekarang";

    for ($i = 0; $i < $banyakBilangan - 2; $i++) {
        // hitung angka fibonacci
        $output = $angkaSekarang + $angkaSebelumnya;
        // hasilnya ditambahkan ke string $angka
        $angka = $angka . " $output";

        //siapkan angka  untuk perhitungan berikutnya
        $angkaSebelumnya = $angkaSekarang;
        $angkaSekarang = $output;
    }
    return $angka;
}
echo fibonacci($_POST['bilangan']);
?>