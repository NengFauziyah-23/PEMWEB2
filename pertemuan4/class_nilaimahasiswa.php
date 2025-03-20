<?php 

class NilaiMahasiswa{
    public $nama;
    public $matakuliah;
    public $nilai_tugas;
    public $nilai_uts;
    public $nilai_uas;
    public const PERESENTASE_UTS = 0.25;
    public const PERESENTASE_UAS = 0.3;
    public const PERESENTASE_TUGAS = 0.45;
    /**
     * Konstanta untuk nilai Kriteria Ketuntasan Minimal (KKM)
     */
    public const KKM = 60;

    public function getNilaiAkhir(){
        $nilai = self::PERESENTASE_UTS * $this->nilai_uts
                 + self::PERESENTASE_UAS * $this->nilai_uas
                 + self::PERESENTASE_TUGAS * $this->nilai_tugas;
        return $nilai;
    }

    public function kelulusan(){
        if($this->getNilaiAkhir() >= self::KKM){
            return "LULUS";
        } else {
            return "TIDAK LULUS";
        }
    }

}
?>