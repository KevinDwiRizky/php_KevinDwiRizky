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
    ?>
    <form method="post">
        <input type="hidden" name="step" value="2">
        <input type="hidden" name="rows" value="<?= $rows ?>">
        <input type="hidden" name="cols" value="<?= $cols ?>">

        <table cellpadding="5" cellspacing="0">
            <?php for ($i = 1; $i <= $rows; $i++): ?>
                <tr>
                    <?php for ($j = 1; $j <= $cols; $j++): ?>
                        <td>
                            <?= $i . "." . $j ?> :
                            <input type="text" name="data[<?= $i ?>][<?= $j ?>]" required>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>

        <br>
        <button type="submit">SUBMIT</button>
    </form>
    <?php
}

elseif ($_POST['step'] == "2") {
    $data = $_POST['data'];
    ?>
    <div style="padding:10px; width:250px;">
        <?php foreach ($data as $i => $row): ?>
            <?php foreach ($row as $j => $val): ?>
                <?= $i . "." . $j ?> : <?= htmlspecialchars($val) ?> <br>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
    <?php
}

?>
