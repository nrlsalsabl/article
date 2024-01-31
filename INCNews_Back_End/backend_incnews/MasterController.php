<?php
require_once 'koneksi.php';
require '_encryption.php';

class MasterController
{

  /**
   * Logs in a user with the given username and password POSTed. Though true
   * REST doesn't believe in sessions, it is often desirable for an AJAX server.
   *
   * @url POST /SaveUser
   */
  public function SaveUser()

  {
    $con = new Connection();
    $EmailUser  = $_POST['EmailUser'];
    $UserName = $_POST['UserName'];
    $PasswordUser = $_POST['PasswordUser'];
    $create_date = date("Y-m-d H:i:s");
    if ($EmailUser) {
      if ($UserName) {
        if ($PasswordUser) {


          $CheckUser = "SELECT * FROM `tb_user` WHERE `email` = '$EmailUser' ";
          $ResCheckUser = $con->query($CheckUser);
          $cek = mysqli_num_rows($ResCheckUser);

          if ($cek == 0) {
            $QryInsert = "INSERT INTO `tb_user`( `user`, `email`, `password`, `created_at`) VALUES ('$UserName','$EmailUser','$PasswordUser','$create_date')";
            $ResInsArs = $con->query($QryInsert);
            if ($ResInsArs) {
              $sts = true;
              $msg = "User berhasil terdaftar";
            } else {
              $sts = false;
              $msg = "User gagal terdaftar";
            }
          } else {
            $sts = false;
            $msg = "User sudah terdaftar";
          }
        } else {
          $sts = false;
          $msg = "password tidak boleh kosong";
        }
      } else {
        $sts = false;
        $msg = "Username Tidak Boleh Kosong";
      }
    } else {
      $sts = false;
      $msg = "Email Tidak Boleh Kosong";
    }

    $arr = array(
      "status"  => $sts,
      "message" => $msg,
    );

    return $arr;
  }

  /**
   * Logs in a user with the given username and password POSTed. Though true
   * REST doesn't believe in sessions, it is often desirable for an AJAX server.
   *
   * @url POST /LoginUser
   */
  public function LoginUser()

  {
    $con = new Connection();
    $EmailUser  = $_POST['EmailUser'];
    $PasswordUser = $_POST['PasswordUser'];
    $create_date = date("Y-m-d H:i:s");
    if ($EmailUser) {
        if ($PasswordUser) { 
          $CheckUser = "SELECT * FROM `tb_user` WHERE `email` = '$EmailUser' AND `password` = '$PasswordUser'";
          $ResCheckUser = $con->query($CheckUser);
          $cek = mysqli_num_rows($ResCheckUser);
          if ($cek > 0) {
            $sts = true;
            $msg = "Berhasil Login";
          } else {
            $sts = false;
            $msg = "User belum terdaftar";
          }
        } else {
          $sts = false;
          $msg = "password tidak boleh kosong";
        }
    } else {
      $sts = false;
      $msg = "Email Tidak Boleh Kosong";
    }

    $arr = array(
      "status"  => $sts,
      "message" => $msg,
    );

    return $arr;
  }
}
