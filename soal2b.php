<?php
include "db/koneksi.php";

$search = isset($_GET['q']) ? $_GET['q'] : '';

$sql = "SELECT hobi, COUNT(DISTINCT person_id) AS jumlah_person
        FROM hobi
        WHERE hobi LIKE '%$search%'
        GROUP BY hobi
        ORDER BY jumlah_person DESC";
$result = $koneksi->query($sql);
?>

<form method="get">
    Cari Hobi: <input type="text" name="q" value="<?= htmlspecialchars($search) ?>">
    <button type="submit">Search</button>
    <button type="button" onclick="window.location='<?= basename(__FILE__) ?>'">Reset</button>
</form>

<h2>Hasil Pencarian</h2>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Hobi</th>
        <th>Jumlah Person</th>
    </tr>
    <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?= htmlspecialchars($row['hobi']) ?></td>
        <td><?= $row['jumlah_person'] ?></td>
    </tr>
    <?php } ?>
</table>
