<?php
include("KontrakView.php");
include("presenter/ProsesPasien.php");


class FormAddView implements KontrakView{
    private $prosespasien;
    private $tpl;

    function __construct()
    {
        // constructor
        $this->prosespasien = new ProsesPasien();
    }

    function tampil()
    {
        $dataForm = "";
        $dataForm = "
            <form action='create.php' method='POST'>
                <div class='form-group'>
                    <label for='nik'>NIK:</label>
                    <input type='text' class='form-control' id='nik' name='nik' required>
                </div>
                <div class='form-group'>
                    <label for='nama'>Nama:</label>
                    <input type='text' class='form-control' id='nama' name='nama' required>
                </div>
                <div class='form-group'>
                    <label for='tempat'>Tempat Lahir:</label>
                    <input type='text' class='form-control' id='tempat' name='tempat' required>
                </div>
                <div class='form-group'>
                    <label for='tl'>Tanggal Lahir:</label>
                    <input type='date' class='form-control' id='tl' name='tl' required>
                </div>
                <div class='form-group'>
                    <label for='gender'>Jenis Kelamin:</label>
                    <select class='form-control' id='gender' name='gender' required>
                        <option value='Laki-laki'>Laki-laki</option>
                        <option value='Perempuan'>Perempuan</option>
                    </select>
                </div>
                <div class='form-group'>
                    <label for='email'>Email:</label>
                    <input type='email' class='form-control' id='email' name='email' required>
                </div>
                <div class='form-group'>
                    <label for='telp'>Telepon:</label>
                    <input type='tel' class='form-control' id='telp' name='telp' required>
                </div>
                <button name='submit' type='submit' class='btn btn-primary'>Tambah</button>
            </form>";

        if (isset($_POST['submit'])) {
            $this->prosespasien->add($_POST);
            header("location:index.php");
        }

        $title = 'Tambah Data Pasien';

        // Membaca template skin.html
        $this->tpl = new Template("templates/skinForm.html");

        // Mengganti kode Data_Tabel dengan data yang sudah diproses
        $this->tpl->replace("FORM", $dataForm);
        $this->tpl->replace("TITLE", $title);

        // Menampilkan ke layar
        $this->tpl->write();
    }
}
