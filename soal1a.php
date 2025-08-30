<?php
if (!isset($_POST['step'])) {
    ?>
    <form method="post">
        <input type="hidden" name="step" value="1">

        <label>Inputkan Jumlah Baris:</label>
        <input type="number" name="rows" min="1" required>
        <br><br>

        <label>Inputkan Jumlah Kolom :</label>
        <input type="number" name="cols" min="1" required>
        <br><br>

        <button type="submit">SUBMIT</button>
    </form>
    <?php
}

elseif ($_POST['step'] == "1") {
    $rows = (int)$_POST['rows'];
    $cols = (int)$_POST['cols'];

    echo "Jumlah Baris: $rows | Jumlah Kolom: $cols";
}
?>
