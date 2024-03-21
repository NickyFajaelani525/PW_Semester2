<?php
    $nama = $_GET['nama_lengkap'];
    $mata_kuliah =$_GET['matkul'];
    $nilai_uts =$_GET['nilai_uts'];
    $nilai_uas =$_GET['nilai_uas'];
    $nilai_tugas =$_GET['nilai_tugas'];


    //buat total
    $total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) /3;
    $grade;
    $Predikat;
    $status;


    //Buat lulus atau tidak lulus
    if ($total_nilai >=70){
        $status = "LULUS";

    }
    else{
        $status ="GAGAL";

    }


    //buat perhitungan IF untuk mencari GET
    if ($total_nilai >= 85){
        $grade="A";

    }

    elseif ($total_nilai >= 70){
        $grade="B";

    }   

    elseif ($total_nilai >= 50){
        $grade="C";

    }
    
    elseif ($total_nilai >= 30){
        $grade="D";

    }    
    else{
        $grade = "E";

    }


    //buat perhitungan SWITCH untuk mencari predikat
    switch ($grade){
        case "A":
            $Predikat = 'Sangat Memuaskan';
            break;

        case "B":
            $Predikat = 'Memuaskan';
            break;   
                
        case "C":
            $Predikat = 'Cukup';
            break;
        case "D":
            $Predikat = 'Kurang';
            break;        
        default:
        $Predikat = "Tidak ada";
        break;


    }



    //Cetak hasil:
    echo "Nama: $nama <br>"; 
    echo 'Matkul:' . $mata_kuliah .'<br>'; 
    echo 'Nilai UTS:' . $nilai_uts .'<br>'; 
    echo 'Nilai UAS:' . $nilai_uas .'<br>'; 
    echo 'Nilai Tugas:' . $nilai_tugas .'<br>';
    echo 'Grade:' .$grade . '<br>';
    echo 'Predikat:' . $Predikat . '<br>';
    echo 'Status:' . $status;


?> 
