if($_FILES['image']['name']!=''){
  $filename=$_FILES['image']['name'];
  $extensions=pathinfo($filename,PATHINFO_EXTENSION);//get the extension of a file that you wanted to upload.
  $validextension=array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF');
  if(in_array($extensions,$validextension)){
      $name="images/".$filename;
      move_uploaded_file($_FILES['image']['tmp_name'],$name);//uploaded file
      echo '<img src="'.$name.'" /><br><br>
        <button data-path="'.$name.'" id="delete_btn">Delete</button>';
   }else{
      echo "<script>alert('Please Upload right File')</script>";
   }


}else{
echo "<script>alert('Please Upload File')</script>";

}
