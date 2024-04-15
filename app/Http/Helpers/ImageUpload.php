<?php

use Illuminate\Http\UploadedFile;

function uploadImage(UploadedFile $file, $folder = 'storage/images', $fileName = null)
{
    // Generate a unique file name if not provided
    $fileName = $fileName ?: time() . '_' . $file->getClientOriginalName();

    // Move the uploaded file to the specified folder
    $file->move(public_path($folder), $fileName);

    // Return the path to the uploaded image
    return $folder . '/' . $fileName;
}