<?php
include("KontrakView.php");
include("presenter/ProsesPasien.php");


class FormUpdateView implements KontrakView
{
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
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $result = $this->prosespasien->getPasienById($id);
            if ($result) {
                $pasien = $result->fetch_assoc();

                $dataForm = "
                <form action='update.php' method='POST'>
                    <input type='hidden' name='id' value='{$id}'>
                    <div class='form-group'>
                        <label for='nik'>NIK:</label>
                        <input type='text' class='form-control' id='nik' name='nik' value='{$pasien['nik']}' required>
                    </div>
                    <div class='form-group'>
                        <label for='nama'>Nama:</label>
                        <input type='text' class='form-control' id='nama' name='nama' value='{$pasien['nama']}' required>
                    </div>
                    <div class='form-group'>
                        <label for='tempat'>Tempat Lahir:</label>
                        <input type='text' class='form-control' id='tempat' name='tempat' value='{$pasien['tempat']}' required>
                    </div>
                    <div class='form-group'>
                        <label for='tl'>Tanggal Lahir:</label>
                        <input type='date' class='form-control' id='tl' name='tl' value='{$pasien['tl']}' required>
                    </div>
                    <div class='form-group'>
                        <label for='gender'>Jenis Kelamin:</label>
                        <select class='form-control' id='gender' name='gender' required>
                            <option value='Laki-laki' " . ($pasien['gender'] == 'Laki-laki' ? 'selected' : '') . ">Laki-laki</option>
                            <option value='Perempuan' " . ($pasien['gender'] == 'Perempuan' ? 'selected' : '') . ">Perempuan</option>
                        </select>
                    </div>
                    <div class='form-group'>
                        <label for='email'>Email:</label>
                        <input type='email' class='form-control' id='email' name='email' value='{$pasien['email']}' required>
                    </div>
                    <div class='form-group'>
                        <label for='telp'>Telepon:</label>
                        <input type='tel' class='form-control' id='telp' name='telp' value='{$pasien['telp']}' required>
                    </div>
                    <button name='submit' type='submit' class='btn btn-primary'>Update</button>
                </form>";
            }
        }else if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $this->prosespasien->update($id, $_POST);
            header("Location: index.php");
            exit();
        }
            
        
        $title = 'Update Data Pasien';

        // Membaca template skinForm.html
        $this->tpl = new Template("templates/skinform.html");

        // Mengganti kode FORM dengan form yang sudah diproses
        $this->tpl->replace("FORM", $dataForm);
        $this->tpl->replace("TITLE", $title);

        // Menampilkan ke layar
        $this->tpl->write();
    }
}
