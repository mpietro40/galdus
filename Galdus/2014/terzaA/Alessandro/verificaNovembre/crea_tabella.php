<?php function crea_tabella() {
    for ($x=1; $x <= 12; $x++) { ?>
        <tr><?php for ($y=1; $y <=12 ; $y++) {
            $r = $x*$y; ?>
            <td><?php echo $r; ?></td>
        <?php } ?></tr>
    <?php }
}
$crea_tabella = crea_tabella(); ?>


