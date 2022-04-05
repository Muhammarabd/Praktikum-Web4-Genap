<?php

include_once '../konten/header.php';
require_once 'class_mahasiswa.php';

$mahasiswa1 = new Mahasiswa('0110121172', 'Bryan', '2020', 'Hubungan Internasional', '3.5');
$mahasiswa2 = new Mahasiswa('0110121188', 'Afra', '2021', 'Teknik Industri', '3.9');

$nim = $mahasiswa1->nim;

$arr_mahasiswa = [$mahasiswa1, $mahasiswa2];

?>
<table>
      <thead>
            <tr>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Tahun Angkatan</th>
                  <th>Prodi</th>
                  <th>IPK</th>
            </tr>
      </thead>
      <tbody>
      <?php $iterasi = 1; foreach($arr_mahasiswa as $arr) :?>
            <tr>
                  <td><?= $iterasi++; ?></td>
                  <td><?= $arr[ 'nim' ]; ?></td>
                  <td><?= $arr[ 'nama' ]; ?></td>
                  <td><?= $arr[ 'thn_angkatan' ]; ?></td>
                  <td><?= $arr[ 'prodi' ]; ?></td>
                  <td><?= $arr[ 'ipk' ]; ?></td>
            </tr>
      <?php endforeach; ?>
      </tbody>
</table>
<?php include_once '../konten/footer.php';
