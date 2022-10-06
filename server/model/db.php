<?php

class Conection
{
  private $con;

  function __construct()
  {
    $this->con = mysqli_connect(
      '127.0.0.1',
      'root',
      '1234',
      'blog_vanilla',
      3306
    );
  }

  function query($sql)
  {
    $response = mysqli_query($this->con, $sql);
    $table = [];
    while ($row = mysqli_fetch_assoc($response)) {
      $table[] = $row;
    }
    return $table;
  }

  function insert($sql)
  {
    $response = mysqli_query($this->con, $sql);
    if ($response === true) {
      return mysqli_insert_id($this->con);
    } else {
      return false;
    }
  }

  function update($sql)
  {
    $response = mysqli_query($this->con, $sql);
    return $response;
  }

  function delete($sql)
  {
    $response = mysqli_query($this->con, $sql);
    return $response;
  }
}
