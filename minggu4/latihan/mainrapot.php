        <?php
        function show(){
            $tugas  = 0;
            $uts    = 0;
            $uas    = 0;
            if(isset($_POST['simpan'])){
                $nim    = $_POST['nim'];
                $prodi  = $_POST['prodi'];
                $tugas  = $_POST['tugas'];
                $uts    = $_POST['uts'];   
                $uas    = $_POST['uas'];
                }


            $nilai_tugas    = 40 / 100 * $tugas;
            $nilai_uts      = 30 / 100 * $uts;
            $nilai_uas      = 30 / 100 * $uas;
            $nilai_akhir    = $nilai_tugas + $nilai_uts + $nilai_uas;
            $catatankhusus=array("catatan1" =>"Kehadiran >= 70 % ","catatan2" =>"Interaktif dikelas", "catatan3"=>"Tidak terlambat mengumpulkan tugas");

            if($nilai_akhir >= 85){
                $huruf =$nilai_akhir."(A)";
            }
            elseif($nilai_akhir >= 84 && $nilai_akhir <= 70){
                $huruf = $nilai_akhir."(B)";
            }
            elseif($nilai_akhir >= 69 && $nilai_akhir <= 60){
                $huruf = $nilai_akhir."(C)";
            }
            elseif($nilai_akhir >= 59 && $nilai_akhir <= 50){
                $huruf = $nilai_akhir."(D)";
            }
            elseif($nilai_akhir < 50){
                $huruf = $nilai_akhir."(E)";
            }
            else{
                $huruf  = "-";
            }
        ?>
       <table style="border:1px solid black;">
            <thead>
                <tr>
                    <th style="border:1px solid black;">Program Studi</th>
                    <th style="border:1px solid black;">NIM</th>
                    <th style="border:1px solid black;">Nilai Akhir</th>
                    <th style="border:1px solid black;">Status</th>
                    <th style="border:1px solid black;">Catatan Khusus</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border:1px solid black;">
                        <?php
                        if(isset($prodi)){
                            echo $prodi;
                        }
                        else{
                            echo "-";
                        }
                        
                        ?>
                    </td>
                    <td style="border:1px solid black;">
                        <?php
                         if(isset($nim)){
                            echo $nim;
                        }
                        else{
                            echo "-";
                        }
                        ?>
                    </td>
                    <td style="border:1px solid black;">
                        <?php
                            echo $huruf;
                        ?>
                    </td>
                    <td style="border:1px solid black;">
                        <?php
                            if($nilai_akhir >= 60){
                                echo "LULUS";
                            }else{
                                echo "TIDAK LULUS";
                            }
                        ?>
                    </td>
                    <td style="border:1px solid black;">
                        <ul>
                            <?php
                                if (isset($_POST['catatan1'])) {
                                    $catatan = $_POST['catatan1'];
                                    $catatankhusus = '<li>'.$catatan.'</li>';
                                    echo $catatankhusus;
                                    
                                }
                            
                                if (isset($_POST['catatan2'])) {
                                    $catatan = $_POST['catatan2'];
                                    $catatankhusus = '<li>'.$catatan.'</li>';
                                    echo $catatankhusus;
                                    
                                }
                            
                                if (isset($_POST['catatan3'])) {
                                    $catatan = $_POST['catatan3'];
                                    $catatankhusus = '<li>'.$catatan.'</li>';
                                    echo $catatankhusus;
                                }
                                
                                
                                
                            }
                            show();
                            ?>
                        </ul>
                    </td>
                </tr>
            </tbody>
       </table> 