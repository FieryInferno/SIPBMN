<?php
            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetTitle('Daftar Produk');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');
            $pdf->AddPage();
            $i=0;
            $html='<h3>Data Transaksi Peminjaman Buku</h3>
                    <table cellspacing="1" bgcolor="#666666" cellpadding="2">
                        <tr bgcolor="#ffffff">
                            <th width="5%" align="center">No</th>
                            <th width="35%" align="center">Judul Buku</th>
                            <th width="45%" align="center">ID Buku</th>
                            <th width="15%" align="center">Nama Peminjam</th>
							<th width="15%" align="center">ID Peminjam</th>
							<th width="15%" align="center">Tanggal Pinjam</th>
							<th width="15%" align="center">Tanggal Kembali</th>
							<th width="15%" align="center">Status/th>
							<th width="15%" align="center">Keterangan</th>
                        </tr>';
            foreach ($peminjaman as $row) 
                {
                    $i++;
                    $html.='<tr bgcolor="#ffffff">
                            <td align="center">'.$i.'</td>
                            <td>'.$row['judul_buku'].'</td>
                            <td>'.$row['id_buku'].'</td>
							<td>'.$row['nama_peminjam'].'</td>
							<td>'.$row['id_peminjam'].'</td>
							<td>'.$row['tgl_pinjam'].'</td>
							<td>'.$row['tgl_kembali'].'</td>
							<td>'.$row['status'].'</td>
							<td>'.$row['ket'].'</td>
                        </tr>';
                }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, true, false, true, false, false, '');
            $pdf->Output('data peminjaman.pdf', 'I');
?>