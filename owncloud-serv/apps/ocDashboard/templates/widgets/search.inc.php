<table class="ocDashboardTable">
    <tr>
        <td><input name ="keyword" class="keyword" type="text" size="30" /></td>
    </tr>
    <tr>
        <td>
            <select name="engine" class="engine">
                <?php
                    foreach( $additionalparams['engines'] as $key => $engine) {
                        $selected = "";
                        if($key == $additionalparams['engine']) {
                            $selected = "selected='selected'";
                        }
                        print_unescaped("<option value='".$key."' ".$selected.">".$engine."</option>");
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <input type="hidden" name="lang" value="<?php print_unescaped($additionalparams['lang']); ?>">
            <input type="button" class="searchSubmit" id="ocDashboardSearchSubmit" name="submit" value="<?php print_unescaped($l->t( "Search" )); ?>">
        </td>
    </tr>
</table>