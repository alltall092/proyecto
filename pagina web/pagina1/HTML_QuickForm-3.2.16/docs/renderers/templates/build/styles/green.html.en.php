<!--  $Id$ --> 
 
<tr> 
    <td align="right" valign="top" class="green"><?php if ($t->required)  {?><font color="red">*</font><?php }?><b><?php echo $t->label;?>:</b></td> 
    <td valign="top" align="left" class="green"> 
    <?php if ($t->error)  {?><font color="red"><?php echo $t->error;?></font><br /><?php }?> 
    <?php echo $t->html;?>
    <?php if ($t->label_2)  {?><br /><span style="font-size: 75%"><?php echo $t->label_2;?></span><?php }?>
    </td> 
</tr>