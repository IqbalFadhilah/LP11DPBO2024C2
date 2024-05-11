<?php

include("model/Template.class.php");
include("model/DB.class.php");
include("model/Pasien.class.php");
include("model/TabelPasien.class.php");
include("view/FormUpdateView.php");

$tp = new FormUpdateView();
$data = $tp->tampil();