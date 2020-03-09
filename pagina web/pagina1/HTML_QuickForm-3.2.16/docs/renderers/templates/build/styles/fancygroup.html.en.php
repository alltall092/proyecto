<tr> 
    <td valign="top" align="right"> 
        <?php if ($t->required)  {?><span class="error">*</span><?php }?>
        <?php if ($t->error)  {?><span class="error"><?php }?>
        <b><?php echo $t->label;?>:</b>
        <?php if ($t->error)  {?></span><?php }?>
    </td> 
    <td> 
    <?php if ($t->error)  {?><div class="error"><?php echo htmlspecialchars($t->error);?></div><?php }?> 
    <table cellspacing="2" border="0"> 
        <?php if ($this->options['strict'] || (is_array($t->elements)  || is_object($t->elements))) foreach($t->elements as $gitem) {?> 
        <tr> 
            <?php if ($this->options['strict'] || (isset($gitem) && method_exists($gitem, 'isType'))) if ($gitem->isType("radio")) { ?> 
            <td colspan="2" class="green"> 
                <?php echo $gitem->html;?>
            </td> 
            <?php } else {?> 
            <td class="green" align="right"> 
                <?php if ($gitem->required)  {?><span class="error">*</span><?php }?> 
                <?php echo $gitem->label;?> 
            </td> 
            <td class="green"> 
                <?php echo $gitem->html;?>                          
            </td>             
            <?php }?> 
        </tr> 
        <?php }?> 
    </table> 
    </td> 
</tr>