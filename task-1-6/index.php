<table>
    <tr>
        <?php for ($i = 1; $i <= 10; $i++) { ?>
            <td>
                <center>
                    <?php echo $i; ?>
                </center>
            </td>
        <?php } ?>
    </tr>
    <?php for ($i = 2; $i <= 10; $i++) { ?>
        <tr>
            <td>
                <center>
                    <?php echo $i; ?>
                </center>
            </td>
            <?php for ($j = 2; $j <= 10; $j++) { ?>
                <td>
                    <center>
                        <?php if ((($i % 2) != 0 && ($j % 2) != 0)) {
                            echo "[" . $i * $j . "]";
                        } elseif ((($i % 2) == 0 && ($j % 2) == 0)) {
                            echo "(" . $i * $j . ")";
                        } else {
                            echo $i * $j;
                        } ?>
                    </center>
                </td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>