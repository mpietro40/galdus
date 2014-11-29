<form method="POST">
<h3><?php i18n('i18n_lang_menu/TITLE');?></h3>
<label>
    <?php i18n('i18n_lang_menu/LI_CLASS_LABEL'); ?>
    <input type="text" class="text" style="width: 200px;" name="li-class" value="<?php echo $config->class;?>">
</label>
<table id="lang-table">
    <tr>
        <th><?php i18n('i18n_lang_menu/LANG_CODE');?></th>
        <th><?php i18n('i18n_lang_menu/LANG_TEXT');?></th>
    </tr>
    <?php foreach($config->languages->children() as $lang): ?>
        <tr>
            <td><?php echo $lang->code;?></td>
            <td><input type="text" class="text" style="width: 100px;" name="<?php echo $lang->code;?>[text]" value="<?php echo $lang->text;?>"></td>
        </tr>
    <?php endforeach;?>
</table>
<input type="submit" class="submit" name="submit-settings" value="<?php i18n('BTN_SAVESETTINGS');?>">
</form>
