<?php

class TabelPasien extends DB
{
    function getPasien()
    {
        // Query mysql select data pasien
        $query = "SELECT * FROM pasien";
        // Mengeksekusi query
        return $this->execute($query);
    }

    function getPasienById($id)
    {
		// Query untuk mengambil data pasien berdasarkan ID
		$query = "SELECT * FROM pasien WHERE id = $id";
		return $this->execute($query);
    }

    function addPasien($data)
    {
		// Ambil nilai-nilai dari array $data
		$nik = $data['nik'];
		$nama = $data['nama'];
		$tempat = $data['tempat'];
		$tl = $data['tl'];
		$gender = $data['gender'];
		$email = $data['email'];
		$telp = $data['telp'];

		// Query untuk menambahkan pasien baru
		$query = "INSERT INTO pasien (nik, nama, tempat, tl, gender, email, telp) VALUES ('$nik', '$nama', '$tempat', '$tl', '$gender', '$email', '$telp')";

		// Eksekusi query
		return $this->execute($query);
    }

    function updatePasien($id, $data)
    {
		// Ambil nilai-nilai dari array $data
		$nik = $data['nik'];
		$nama = $data['nama'];
		$tempat = $data['tempat'];
		$tl = $data['tl'];
		$gender = $data['gender'];
		$email = $data['email'];
		$telp = $data['telp'];

		// Query untuk mengupdate data pasien
		$query = "UPDATE pasien SET nik='$nik', nama='$nama', tempat='$tempat', tl='$tl', gender='$gender', email='$email', telp='$telp' WHERE id=$id";

		// Eksekusi query
		return $this->execute($query);
    }

    function deletePasien($id)
    {
		// Query untuk menghapus data pasien
		$query = "DELETE FROM pasien WHERE id=$id";
		return $this->execute($query);
    }
}
