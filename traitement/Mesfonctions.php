<?php
         function checkExtention($filename,$extentionarray)
         {
             $file_Extention=strtolower(substr(strrchr($filename,'.'),1));
             if(in_array($file_Extention,$extentionarray))
             return true;
             return false;
         }
         function check_img_ext($filename) 
         {
             $imageExtent=array('jpg','png','jpeg','gif','pdf','xml','text','html','css');
             return checkExtention($filename,$imageExtent);
         }
         function move_file($sourcefile,$destpath,$destfile)
         {
             if(!is_dir($destpath))
             {
                 mkdir($destpath);
             }
             $hdc=date('dmy_h',time());
             $destination=$destpath."/".$hdc.$destfile;
             if(move_uploaded_file($sourcefile,$destination))
             {
                return $destination;
             }
             else
             {
                 echo"Le deplacement du fichier est sans succes";
                 return null;
             }
            }
        ?>