<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> 
<!--  Id: flexy-dynamic.html,v 1.3 2003/05/21 13:27:59 avb Exp  --> 
<html> 
<head> 
    <title>Flexy template for Object renderer</title> 
    <style type="text/css"> 
    body, td, th { 
        font-family: sans-serif; 
        color: Navy; 
        background-color: #EEE; 
        font-size: smaller; 
        white-space: nowrap; 
    } 
     
    .maintable { 
        border: thin dashed #D0D0D0; 
        background-color: #EEE; 
    } 
     
    .header { 
        color: #FFF; 
        background-color: #999; 
    } 
     
    .green { 
        background-color : #CFC; 
        color: black; 
    }
    .error { 
        color: red; 
    }
    </style> 
     
</head> 
<body> 
 
<?php echo $t->form->javascript;?>

<?php if ($this->options['strict'] || (isset($t->form) && method_exists($t->form, 'outputHeader'))) echo $t->form->outputHeader();?>
<table border="0" class="maintable" align="center"> 
    <?php if ($this->options['strict'] || (isset($t->form) && method_exists($t->form, 'outputHeader'))) echo $t->form->outputHeader();?>
    <?php echo $t->form->hidden;?> 
     
    <?php if ($this->options['strict'] || (is_array($t->form->sections)  || is_object($t->form->sections))) foreach($t->form->sections as $sec) {?> 
        <tr> 
            <td class="header" colspan="2"> 
            <b><?php echo htmlspecialchars($sec->header);?></b></td> 
        </tr> 
               
        <?php if ($this->options['strict'] || (is_array($sec->elements)  || is_object($sec->elements))) foreach($sec->elements as $elem) {?> 
            <?php if ($elem->style)  {?> 
              <?php if ($this->options['strict'] || (isset($elem) && method_exists($elem, 'outputStyle'))) echo $elem->outputStyle();?>
            <?php } else {?>
		<?php if ($this->options['strict'] || (isset($elem) && method_exists($elem, 'isButton'))) if ($elem->isButton()) { ?> 
                    <?php if ($this->options['strict'] || (isset($elem) && method_exists($elem, 'notFrozen'))) if ($elem->notFrozen()) { ?> 
                    <tr>    
                        <td>&nbsp;</td> 
                        <td align="left"><?php echo $elem->html;?></td> 
                    </tr> 
                    <?php }?> 
                <?php } else {?> 
                    <tr> 
                    <?php if ($this->options['strict'] || (isset($elem) && method_exists($elem, 'isType'))) if ($elem->isType("textarea")) { ?>                
                        <td colspan="2"> 
                            <?php if ($elem->required)  {?><span class="error">*</span><?php }?>
                            <?php if ($elem->error)  {?><span class="error"><?php }?>
                            <b><?php echo $elem->label;?>:</b><br />
                            <?php if ($elem->error)  {?></span><?php }?>
                    <?php } else {?> 
                        <td align="right" valign="top"> 
                            <?php if ($elem->required)  {?><span class="error">*</span><?php }?>
                            <?php if ($elem->error)  {?><span class="error"><?php }?>
                            <b><?php echo $elem->label;?>:</b>
                            <?php if ($elem->error)  {?></span><?php }?>
                        </td> 
                        <td> 
                    <?php }?>  
                    <?php if ($elem->error)  {?><div class="error"><?php echo htmlspecialchars($elem->error);?></div><?php }?> 
                    <?php if ($this->options['strict'] || (isset($elem) && method_exists($elem, 'isType'))) if ($elem->isType("group")) { ?> 
                        <?php if ($this->options['strict'] || (is_array($elem->elements)  || is_object($elem->elements))) foreach($elem->elements as $gitem) {?> 
                            <?php echo $gitem->label;?> 
                            <?php echo $gitem->html;?><?php if ($gitem->required)  {?><span class="error">*</span>*</span><?php }?>
                            <?php if ($elem->separator)  {?><?php echo $elem->separator;?><?php }?>
                        <?php }?> 
                    <?php } else {?> 
                        <?php echo $elem->html;?> 
                    <?php }?> 
                    </td> 
                    </tr> 
                <?php }?> 
            <?php }?>    
        <?php }?> 
     <?php }?>
        <?php if ($t->form->requirednote)  {?>
        <tr> 
            <td>&nbsp;</td> 
            <td valign="top"><?php echo $t->form->requirednote;?></td> 
        </tr> 
        <?php }?> 
     
    </form>    
</table> 

&nbsp; 
<p><b>Collected Errors:</b><br /> 
<?php if ($this->options['strict'] || (is_array($t->form->errors)  || is_object($t->form->errors))) foreach($t->form->errors as $name => $error) {?> 
    <span class="error"><?php echo $error;?></span> in element [<?php echo $name;?>]<br /> 
<?php }?> 
</p> 
 
&nbsp; 
<p><strong>Best Practice: </strong><br /> 
Use only one dynamic form template like this for your <br /> 
Flexy driven project. You include this where <br /> 
to place a form with the formdata object rendered by <br /> 
Object QuickForm Renderer as option:</p> 
 
<pre style="font-size: 12px;"> 
<strong>&lt;include file=form-dynamic.tpl form=<?php echo htmlspecialchars($t->formdata);?>&gt;</strong> 
</pre> 
 
&nbsp; 
<p><strong>The used &quot;Dynamic&quot; Object </strong></p> 
<pre style="font-size: 12px;"> 
<?php echo htmlspecialchars($t->dynamic_object);?> 
</pre> 
 
</body> 
</html>