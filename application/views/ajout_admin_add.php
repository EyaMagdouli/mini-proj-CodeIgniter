<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Article</title>
</head>
<body>
<form method="post" action="<?php echo site_url('Ajout_admin/savingdataadmin'); ?>"> 
<strong><?php if(isset($totalFiles)) echo "Successfully uploaded ".count($totalFiles)." files"; ?></strong>  
         
         <form method='post' action='/image-upload/post' enctype='multipart/form-data'>  
          
           <input type='file' name='files[]' multiple=""> <br/><br/>  
           <input type='submit' value='Upload' name='pic' />  
          
         </form>  
<?php  
  
 echo form_open('Ajout_admin/add_validation');  

  echo validation_errors();  

  echo "<p>name: ";  
  echo form_input('name', $this->input->post('name'));  
  echo "</p>";  

  echo "<p>Text: ";  
  echo form_input('text');  
  echo "</p>";  

  echo "</p>Price:";  
  echo form_input('price');  
  echo "</p>";  
 
  echo"<br>";
  echo form_submit('','save');

  echo form_close();  

  ?>
</body>
</html>