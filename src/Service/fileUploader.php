<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class fileUploader
{
    private string $uploadDirectory;

    public function __construct(string $uploadDirectory)
    {
        $this->uploadDirectory = $uploadDirectory;
    }

    public function upload(UploadedFile $file): string
    {
        // Générer un nom de fichier unique
        $fileName = uniqid() . '.' . $file->guessExtension();

        // Déplacer le fichier vers le répertoire configuré
        $file->move($this->uploadDirectory, $fileName);

        // Retourner le nom du fichier pour stockage en base de données
        return $fileName;
    }
}
