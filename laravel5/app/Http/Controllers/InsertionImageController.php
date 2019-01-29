<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class InsertionImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getImage(Request $request)
    {
        request()->validate([
        'nomevent' => ['required', 'max:100'],
        'description' => [ 'required', 'max:300']
                        
        ]);

        if (isset($_POST['submit'])) 

        {
            $file = $_FILES['file'];
            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['file']['error'];
            $fileType = $_FILES['file']['type'];

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpg', 'jpeg', 'png');
        if(empty($fileActualExt))
        {
                    $newname ='images/cesi-logo.png';
                    $idusr =Auth::user() ->id;
                    $var =$_POST['nomevent'];
                    $var2 =$_POST['description'];
                    DB::connection ('mysql2')->insert('insert into idees (nom,description,image,id_users) values (?,?,?,?)',[$var,$var2,$newname,$idusr]);


        }else{



                    if (in_array($fileActualExt, $allowed))
                    {
                        if ($fileError === 0) 
                         {
                            if ($fileSize < 20000000) 
                            {
                                $fileNameNew = uniqid('', true).".".$fileActualExt;
                                $fileDestination = 'upload/'.$fileNameNew;
                                move_uploaded_file($fileTmpName, $fileDestination);

                            }else{echo "Vous fichiers est trop gros!";}


                        }else {echo "Il y a eu une erreur!";}
                                
                        
                    }else {
                        echo "Vous ne pouvez pas envoyé des fichiers de ce type !";
                    }
                
                  $newname ="upload/".$fileNameNew;
                    $idusr =Auth::user() ->id;
                    $var =$_POST['nomevent'];
                    $var2 =$_POST['description'];
                    DB::connection ('mysql2')->insert('insert into idees (nom,description,image,id_users) values (?,?,?,?)',[$var,$var2,$newname,$idusr]);

               }
             
    }
}
