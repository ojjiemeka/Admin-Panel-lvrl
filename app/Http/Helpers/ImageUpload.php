<?php

use Illuminate\Http\UploadedFile;

function uploadImage(UploadedFile $file, $folder = 'public/images', $fileName = null)
{
    // Generate a unique file name if not provided
    $fileName = $fileName ?: time() . '_' . $file->getClientOriginalName();

    // Move the uploaded file to the specified folder in storage
    $file->storeAs($folder, $fileName);

    // Return the path to the uploaded image within the storage folder
    return 'images/' . $fileName;
}