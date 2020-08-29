<?php
session_start();

$nombre = $_SESSION['usuario'];
print_r($nombre['ID']);