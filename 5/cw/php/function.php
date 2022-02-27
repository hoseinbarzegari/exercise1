<?php

function LogChangeName($oldname, $newname, $folder)
{
    $address = "$folder/LogChangeName.txt";
    $LogChangeName = fopen($address, "a+");
    $oldnamenewname = "$oldname => $newname \n";
    fwrite($LogChangeName, $oldnamenewname);
    fclose( $LogChangeName);
}
function LogUploadFile($oldname, $newname, $Description , $size, $folder) {
    $address= "$folder/logfiles/$newname.txt";
    $LogUploadFile = fopen($address, "a+");
    $detail="old name = $oldname \n";
    $detail.="new name = $newname \n";
    $detail.="Description = $Description \n";
    $detail.="size = $size \n";
    fwrite($LogUploadFile, $detail);
    fclose($LogUploadFile);
}