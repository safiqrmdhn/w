<?php

class api {
    function hitung($tanggal){
        $explode= explode("-", $tanggal);
        $hari= $explode[2];
        $tahun= $explode[0];
        $bulan = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        
        if ($explode[1] == "10" || $explode[1] == "11" || $explode[1] == "12"){
            $bln=$explode[1];
        }else {
            $arr = str_split($explode[1]);
            $bln=$arr[1];
        }
            $bln = $bulan[$bln];

            $date = [$hari, $bln, $tahun];
        

        //hari masehi
        if ($tahun % 4 ==0){
            $a = ['',31,29,31,30,31,30,31,31,30,31,30,31];
        }
        else {
            $a = ['',31,28,31,30,31,30,31,31,30,31,30,31];
        }

        (integer)$siklus = ($explode[0]-1)/4;
        (integer)$sisaSiklus = ($explode[0]-1) % 4;
    
     if ($sisaSiklus !== 0 ){
         $sisaSiklus = $sisaSiklus * 365;
        }
    $hariSiklus = $siklus * 1461;
        $w = $explode[1];
        
       $q = 0;
            for ($i=1; $i<$w; $i++){
                $q = $q+$a[$i];
            }
       $haridalamTahun = $q + $explode[2];

    $jumlahHari = $hariSiklus + $sisaSiklus + $haridalamTahun;
    return $jumlahHari;

    }
}

$api = new api();

$tgl = $api->hitung("2020-06-12");
var_dump($tgl);
// var_dump($api->hitung(""));


$pertama = $_GET['pertama'];
$kedua = $_GET['kedua'];
$data = array(
    'date' => array(
        array(
            'tanggal' => $pertama,
            'hari' => $pertama, 
            'pasaran' => $pertama
        ),
        array(
            'tanggal' => $pertama,
            'hari' => $pertama, 
            'pasaran' => $pertama
        )
    ),
    'result' => array(
        'nama' => $pertama,
        'detail' => $pertama
        
    )
);
$response=json_encode($data);
echo($response);
echo($pertama);
?>

