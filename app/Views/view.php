<!DOCTYPE html>
  <head>
  </head>
  <body>
    <table>
     <tr>
      <td><strong>Nume</strong></td>
      <td><strong>Imagine</strong></td>
      <td colspan="3" align="center"><strong>Actions</strong></td>
    </tr> 
     <?php foreach($images1 as $var){?>
     <tr>
         <td><?php echo $var['title'];?></td>
         <td><img src="<?php echo base_url($var['image']);?>" width="100" height="100"></td>
         <td><?php echo anchor(array('ImageController/view/',$var['id']),'View'); ?></td>
         <td><?php echo anchor(array('ImageController/edit/',$var['id']),'Edit'); ?></td>
         <td><?php echo anchor(array('ImageController/delete/',$var['id']),'Delete',array('onclick' => "return confirm('Do you want delete this record')")); ?></td>
      </tr>     
     <?php }?>  
   </table
<br><br>
<?php echo anchor(array('ImageController/upload/'),'Upload another image'); ?>

  </body>
</html>