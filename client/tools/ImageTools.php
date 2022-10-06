<?php

class ImageTools
{

  static function directorioUpload()
  {
    return $_SERVER['DOCUMENT_ROOT']
      . DIRECTORY_SEPARATOR . 'client'
      . DIRECTORY_SEPARATOR . 'assets'
      . DIRECTORY_SEPARATOR . 'uploads'
      . DIRECTORY_SEPARATOR;
  }

  static function pathUpload()
  {
    return '/client/assets/uploads/';
  }

  static function extensionDeArchivo($nombre)
  {
    $lista = explode('.', $nombre);
    $extension = $lista[count($lista) - 1];
    return $extension;
  }
  static function subirImagen($imagen, $tipo, $id)
  {
    $destino = ImageTools::directorioUpload();
    $destino = $destino . $tipo . DIRECTORY_SEPARATOR;
    $ext = ImageTools::extensionDeArchivo($imagen['name']);
    $uuid = uniqid('', true);
    $nombre = "$tipo-$id-$uuid.$ext";
    $destino = $destino . $nombre;
    $path = move_uploaded_file($imagen['tmp_name'], $destino);
    $path = ImageTools::pathUpload() . "$tipo/" . $nombre;
    return $path;
  }

  static function borrarImagen($path, $tipo)
  {
    $destino = ImageTools::directorioUpload();
    $destino = $destino . $tipo . DIRECTORY_SEPARATOR;
    $lista = explode('/', $path);
    $nombre = $lista[count($lista) - 1];
    $destino = $destino . $nombre;
    echo $destino;
    return unlink($destino);
  }
}
