<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "tugaspbw");

if (mysqli_connect_error()) {
  echo "Failed to connect to MySQL : " . mysqli_connect_error();
  exit();
}