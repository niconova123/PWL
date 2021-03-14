<?php

    $dayz= date("D");
    switch ($dayz) {
        case 'Sun':
            $hari="minggu";
            # code...
            break;
            
        case 'Mon':
            $hari="senin";
            # code...
            break;

        case 'Tue':
            $hari="selasa";
            # code...
            break;

        case 'Wed':
            $hari="rabu";
            # code...
            break;

        case 'Thu':
            $hari="kamis";
            # code...
            break;
            
        case 'Fri':
            $hari="jumat";
            # code...
            break;

        case 'Sat':
            $hari="sabtu";
            # code...
            break;
        
        default:
            $hari="libur nasional";
            # code...
            break;
    }

    echo "hari ini adalah hari <b>$hari</b>";
?>