<?php

class HttpTools
{
  static function redirect($to)
  {
    return header('Location:' . $to);
  }
}
