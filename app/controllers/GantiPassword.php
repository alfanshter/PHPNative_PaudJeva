<?php

class GantiPassword extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Ganti Password';
        $this->view('gantipassword/gantipassword', $data);
    }

    public function update()
    {
        //cek password lama dan baru 
        if ($_POST['password_baru'] == $_POST['ulangi_password']) {
            //cek password
            if ($this->model('UsersModel')->cekpassword($_POST) > 0) {
                //ubah password
                if ($this->model('UsersModel')->gantipassword($_POST) > 0) {
                    Flasher::setMessage('Berhasil', 'diupdate', 'success');
                    header('location: ' . base_url . '/gantipassword');
                } else {
                    Flasher::setMessage('gagal', 'diupdate', 'danger');
                    header('location: ' . base_url . '/gantipassword');
                }
            } else {
                Flasher::setMessage('gagal', 'Password salah', 'danger');
                header('location: ' . base_url . '/gantipassword');
            }
        } else {
            Flasher::setMessage('gagal', 'Password tidak sama', 'danger');
            header('location: ' . base_url . '/gantipassword');
        }
    }
}
