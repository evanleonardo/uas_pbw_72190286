@php
    try {
        if(DB::connection()->getPdo()) {
            echo "Dapat terkoneksi ke basis data dengan berhasil <b>".DB::connection()->getDatabaseName()."</b>";
        }
    } catch(Exeption $e) {
        echo "Tidak dapat terkoneksi". $e;
    }
@endphp