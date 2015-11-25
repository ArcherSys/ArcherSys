<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div id="view" class="cb">
    <div id="bottom-pane">
        <div id="column-container">
            <?php echo (isset($this->scope["viewcontent"]) ? $this->scope["viewcontent"] : null);?>

            <div class="cb"></div>
        </div>
    </div>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>