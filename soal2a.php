<?php
include "db/koneksi.php";

$sql = "SELECT hobi, COUNT(DISTINCT person_id) AS jumlah_person
        FROM hobi
        GROUP BY hobi
        ORDER BY jumlah_person DESC";
$result = $koneksi->query($sql);
?>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Hobi</th>
        <th>Jumlah Person</th>
    </tr>
    <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['hobi'] ?></td>
        <td><?= $row['jumlah_person'] ?></td>
    </tr>
    <?php } ?>
</table>
