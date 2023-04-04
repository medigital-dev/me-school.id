<?php

namespace App\Controllers;

class Auth extends BaseController
{
    protected $userAccountModel;
    protected $userRequestResetPasswordModel;
    protected $validation;

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->userAccountModel = new \App\Models\UserAccountModel();
        $this->userRequestResetPasswordModel = new \App\Models\UserRequestResetPasswordModel();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data = [
            'pageTitle' => 'Sign In - CMS meSchool',
            'validation' => $this->validation
        ];

        return view('auth/signin', $data);
    }

    public function ajaxLogin()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $userAccount = $this->userAccountModel->where('nama_pengguna_user', $username)->first();
        if (!$userAccount) {
            $data = [
                'status' => false,
                'error' => 'Akun tidak ditemukan!'
            ];
            echo json_encode($data);
        } else {
            if (!password_verify($password, $userAccount['password_user'])) {
                $data = [
                    'status' => false,
                    'error' => 'Password salah!'
                ];
                echo json_encode($data);
            } else {
                $data = [
                    'id' => $userAccount['id_user'],
                    'sekolah' => $userAccount['nama_sekolah_user'],
                    'nama' => $userAccount['nama_pengelola_user'],
                    'username' => $userAccount['nama_pengguna_user'],
                    'email' => $userAccount['email_user'],
                    'aktif' => $userAccount['aktif_user']
                ];
                session()->set('meschool_user-session', $data);
                $data = [
                    'status' => true,
                    'nama' => $userAccount['nama_pengelola_user']
                ];
                echo json_encode($data);
            }
        }
    }

    public function cLogin()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $rulesValidation = [
            'username' => [
                'label' => 'Nama pengguna',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => '{field} harus diisikan!'
                ]
            ],
            'password' => [
                'label' => 'Kata sandi',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => '{field} harus diisikan!'
                ]
            ]
        ];
        if (!$this->validate($rulesValidation)) {
            session()->setFlashdata('notifikasi', 'error|Kesalahan input, silahkan cek keterangan pada masing-masing input.');
            return redirect()->to(base_url('auth'))->withInput()->with('validation', $this->validation);
        } else {
            $userAccount = $this->userAccountModel->where('nama_pengguna_user', $username)->first();
            if (!$userAccount) {
                session()->setFlashdata('notifikasi', 'error|Username tidak ditemukan!');
                return redirect()->to(base_url('auth'))->withInput()->with('validation', $this->validation);
            } else {
                if (!password_verify($password, $userAccount['password_user'])) {
                    session()->setFlashdata('notifikasi', 'error|Password salah!');
                    return redirect()->to(base_url('auth'))->withInput()->with('validation', $this->validation);
                } else {
                    $data = [
                        'id' => $userAccount['id_user'],
                        'sekolah' => $userAccount['nama_sekolah_user'],
                        'nama' => $userAccount['nama_pengelola_user'],
                        'username' => $userAccount['nama_pengguna_user'],
                        'email' => $userAccount['email_user'],
                        'aktif' => $userAccount['aktif_user']
                    ];
                    session()->setFlashdata('notifikasi', 'success|Sign in berhasil, mengarahkan ke halaman admin...');
                    session()->set('meschool_user-session', $data);
                    return redirect()->to(base_url('admin'));
                }
            }
        }
    }

    public function registrasi()
    {
        $data = [
            'pageTitle' => 'Registrasi - CMS meSchool',
            'validation' => $this->validation
        ];

        return view('auth/registrasi', $data);
    }

    public function setRegistrasi()
    {
        $namaSekolah = $this->request->getVar('namaSekolah');
        $nama = $this->request->getVar('nama');
        $username = $this->request->getVar('username');
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $rulesValidation = [
            'namaSekolah' => [
                'label' => 'Nama Sekolah',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisikan!'
                ]
            ],
            'nama' => [
                'label' => 'Nama Pengelola',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisikan!'
                ]
            ],
            'username' => [
                'label' => 'Nama Pengguna',
                'rules' => 'required|trim|is_unique[user_account.nama_pengguna_user]|min_length[6]',
                'errors' => [
                    'required' => '{field} harus diisikan!',
                    'is_unique' => '{field} sudah ada dalam database kami, silahkan ganti dengan {field} yang lain!',
                    'min_length' => '{field} minimal {param} karakter!'
                ]
            ],
            'email' => [
                'label' => 'Email aktif',
                'rules' => 'required|trim|is_unique[user_account.email_user]|valid_email',
                'errors' => [
                    'required' => '{field} harus diisikan!',
                    'is_unique' => '{field} sudah ada dalam database kami, silahkan ganti dengan {field} yang lain!',
                    'valid_email' => '{field} bukan dalam format email, mohon diganti sesuai format email! (contoh: nama@example.com)'
                ]
            ],
            'password' => [
                'label' => 'Kata sandi',
                'rules' => 'required|trim|min_length[8]',
                'errors' => [
                    'required' => '{field} harus diisikan!',
                    'min_length' => '{field} minimal {param} karakter!'
                ]
            ],
            'password2' => [
                'label' => 'ulangi kata sandi',
                'rules' => 'required|trim|min_length[8]|matches[password]',
                'errors' => [
                    'required' => 'Kolom {field} harus diisikan',
                    'matches' => 'Isian dari kolom {field} tidak sama dengan kolom Kata Sandi!',
                    'min_length' => 'Isian dari kolom {field} minimal {param} karakter!'
                ]
            ]
        ];

        if (!$this->validate($rulesValidation)) {
            session()->setFlashdata('notifikasi', 'error|Kesalahan input, silahkan cek keterangan pada masing-masing input.');
            return redirect()->to(base_url('auth/registrasi'))->withInput()->with('validation', $this->validation);
        } else {
            $kodeUnik = random_string('sha1') . '-' . random_string('md5');
            $data = [
                'kode_unique_user' => $kodeUnik,
                'nama_sekolah_user' => $namaSekolah,
                'nama_pengelola_user' => $nama,
                'nama_pengguna_user' => $username,
                'email_user' => $email,
                'password_user' => password_hash($password, PASSWORD_DEFAULT),
                'created_date_user' => date('Y-m-d H:i:s', time()),
                'aktif_user' => 0
            ];
            if ($this->userAccountModel->save($data)) {
                $confirmHref = base_url('auth/konfirmasiEmail') . '/' . $kodeUnik;
                $message = "<h1>Konfirmasi Email</h1>
                <p>
                Hi $nama - $namaSekolah, selesaikan pendaftaran yang anda lakukan di website <a href='https://meschool.net' target='_blank'>meschool.net</a> dengan mengeklik tautan di bawah ini.<br><br>
                <a href='$confirmHref' target='_blank'>$confirmHref</a>
                </p>
                <p>
                    Terimakasih.<br>
                    Administrator <a href='https://meschool.net' target='_blank'>meschool.net</a> - Send automatic by system.
                </p>
                ";
                $this->sendEmail($email, 'Konfirmasi Email', $message);
                session()->setFlashdata('notifikasi', 'success|Registrasi sukses, silahkan cek email yang didaftarkan');
                return redirect()->to(base_url('auth'));
            }
        }
    }

    private function sendEmail($to = null, $subject = null, $message = null, $attachment = null)
    {
        $email = \Config\Services::email();
        $emailConfig = [
            'protocol' => 'smtp',
            'mailPath' => '/usr/sbin/sendmail',
            'mailType' => 'html',
            'charset'  => 'iso-8859-1',
            'wordWrap' => true,
            'SMTPHost' => 'mail.smp2wonosari.sch.id',
            'SMTPUser' => 'no_reply@smp2wonosari.sch.id',
            'SMTPPass' => 'AeNggKLCO0R9',
            'SMTPPort' => 465,
            'SMTPCrypto' => 'ssl'
        ];
        $email->initialize($emailConfig);

        $email->setFrom('no-reply@meschool.net', 'Don\'t Reply This Email');
        $email->setTo($to);

        $email->setSubject($subject);
        $email->setMessage($message);
        $email->attach($attachment);

        return $email->send();
    }

    public function konfirmasiEmail($kode)
    {
        $result = $this->userAccountModel->where('kode_unique_user', $kode)->first();

        if ($result) {
            if ($result['aktif_user'] == 0) {
                if ($this->userAccountModel->update($result['id_user'], ['aktif_user' => 1])) {
                    session()->setFlashdata('notifikasi', 'success|Email berhasil diverifikasi');
                    return redirect()->to(base_url('auth'));
                }
            } else {
                session()->setFlashdata('notifikasi', 'info|Email sudah terverifikasi');
                return redirect()->to(base_url('auth'));
            }
        } else {
            session()->setFlashdata('notifikasi', 'error|Kesalahan kode verifikasi, silahkan hubungi pengembang.');
            return redirect()->to(base_url('auth'));
        }
    }

    public function lupapassword()
    {
        $data = [
            'pageTitle' => 'Lupa Password - CMS meSchool',
            'validation' => $this->validation
        ];

        return view('auth/lupapassword', $data);
    }

    public function setLupapassword()
    {
        $email = $this->request->getVar('email');

        $rulesValidation = [
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email|is_not_unique[user_account.email_user]',
                'errors' => [
                    'required' => 'Input {field} harus diisikan!',
                    'valid_email' => 'Input {field} harus dalam format email! (contoh: name@example.com)',
                    'is_not_unique' => '{field} yang diinputkan tidak ditemukan!'
                ]
            ]
        ];
        if (!$this->validate($rulesValidation)) {
            session()->setFlashdata('notifikasi', 'error|Kesalahan input, silahkan cek keterangan pada masing-masing input.');
            return redirect()->to(base_url('auth/lupapassword'))->withInput()->with('validation', $this->validation);
        } else {
            $result = $this->userAccountModel->where('email_user', $email)->first();
            if ($result) {
                $nama = $result['nama_pengelola_user'];
                $sekolah = $result['nama_sekolah_user'];
                $username = $result['nama_pengguna_user'];
                $kodeUnik = random_string('sha1') . '-' . random_string('md5');
                $data = [
                    'id_user' => $result['id_user'],
                    'email_user_request' => $email,
                    'date_user_request' => date('Y-m-d H:i:s'),
                    'date_accepted_request_by_user' => null,
                    'unique_code_user_request' => $kodeUnik,
                    'confirm_user_request' => 0
                ];
                $this->userRequestResetPasswordModel->save($data);

                $href = base_url('auth/konfirmasiResetPassword') . '/' . $kodeUnik;
                $tanggal = date('d/m/Y H:i:s');

                $message = "
                <h1>Reset Password Akun meSchool.net</h1>
                <p>
                    Hai $nama, seseorang telah melakukan permintaan untuk mengatur ulang password anda! Berikut informasi akun anda:<br>
                    Instansi: $sekolah<br>
                    Nama Pengelola: $nama<br>
                    Nama Pengguna: $username<br>
                    Email: $email<br><br>
                    <small><i>Permintaan dilakukan pada: $tanggal</i></small>
                </p>
                <p>
                    Untuk menyetujui perubahan password tersebut silahkan klik tautan dibawah ini.<br><br>
                    <a href='$href' target='_blank'>$href</a><br><br>
                    <strong style='color: red;'>Abaikan email ini jika anda tidak pernah mengganti password.</strong>
                </p>
                <p>
                    Terimakasih atas perhatiannya.<br>
                    Administrator <a href='https://meschool.net' target='_blank'>meschool.net</a> - Send automatic by system.
                </p>
                ";
                $this->sendEmail($email, 'Reset Password', $message);

                session()->setFlashdata('notifikasi', 'success|Kode verifikasi telah dikirim ke email yang anda inputkan. Silahkan cek email anda');
                return redirect()->to(base_url('auth'));
            }
        }
    }

    public function konfirmasiResetPassword($kode)
    {
        $result = $this->userRequestResetPasswordModel->where('unique_code_user_request', $kode)->first();
        if ($result) {
            $requestDate = date_create_from_format('Y-m-d H:i:s', $result['date_user_request']);
            $nowDate = date_create();
            $selisiDate = date_diff($requestDate, $nowDate);
            if ($selisiDate->i > 5) {
                session()->setFlashdata('notifikasi', 'error|Kode Verifikasi expired, silahkan mengirim permintaan reset password!');
                return redirect()->to(base_url('auth/lupapassword'));
            } else if ($result['confirm_user_request'] != 0) {
                session()->setFlashdata('notifikasi', 'error|Pengaturan ulang kata sandi sudah pernah di konfirmasi!');
                return redirect()->to(base_url('auth/lupapassword'));
            } else {
                $data = [
                    'pageTitle' => 'Reset Password - meSchool',
                    'validation' => $this->validation,
                    'user_account' => $result,
                    'kodeUnik' => $kode
                ];
                return view('auth/confirmresetpassword', $data);
            }
        } else {
            session()->setFlashdata('notifikasi', 'error|Kesalahan alamat url. Silahkan hubungi pengembang.');
            return redirect()->to(base_url('auth'));
        }
    }

    public function setconfirmresetpassword()
    {
        $id_user_request = $this->request->getVar('id_user_request');
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $kodeUnik = $this->request->getVar('kodeUnik');

        $rulesValidation = [
            'password' => [
                'label' => 'Password baru',
                'rules' => 'required|trim|min_length[8]',
                'errors' => [
                    'required' => '{field} harus diisikan!',
                    'min_length' => '{field} minimal {param} karakter',
                ]
            ],
            'password2' => [
                'label' => 'Ulangi password',
                'rules' => 'required|trim|min_length[8]|matches[password]',
                'errors' => [
                    'required' => 'Input {field} harus diisikan',
                    'min_length' => 'Input {field} minimal {param} karakter',
                    'matches' => 'Input {field} tidak sama dengan input Password baru'
                ]
            ]
        ];
        if (!$this->validate($rulesValidation)) {
            session()->setFlashdata('notifikasi', 'error|Kesalahan input, silahkan cek keterangan pada masing-masing input.');
            return redirect()->to(base_url('auth/konfirmasiResetPassword') . '/' . $kodeUnik)->withInput()->with('validation', $this->validation);
        } else {
            $user_account = $this->userAccountModel->where('email_user', $email)->first();
            $nama = $user_account['nama_pengelola_user'];
            $sekolah = $user_account['nama_sekolah_user'];
            $username = $user_account['nama_pengguna_user'];
            $tanggal = date('d-m-Y H:i:s', time());

            $dataUpdateUserAccount = [
                'password_user' => password_hash($password, PASSWORD_DEFAULT),
            ];
            $this->userAccountModel->update($user_account['id_user'], $dataUpdateUserAccount);

            $data = [
                'date_accepted_request_by_user' => date('Y-m-d H:i:s', time()),
                'confirm_user_request' => 1
            ];

            if ($this->userRequestResetPasswordModel->update($id_user_request, $data)) {
                $message = "
                    <h1>Password Akun meSchool.net telah dirubah</h1>
                    <p>
                        Hai $nama, seseorang telah melakukan permintaan untuk mengatur ulang password anda! Berikut informasi akun anda:<br>
                        Instansi: $sekolah<br>
                        Nama Pengelola: $nama<br>
                        Nama Pengguna: $username<br>
                        Email: $email<br><br>
                        Password Baru: <strong>$password</strong><br>
                        <small><i>Perubahan password ini dilakukan pada: $tanggal</i></small>
                    </p>
                    <p>
                        Terimakasih atas perhatiannya.<br>
                        Administrator <a href='https://meschool.net' target='_blank'>meschool.net</a> - Send automatic by system.
                    </p>
                ";
                $this->sendEmail($email, 'Password telah dirubah - meSchool.net', $message);
                session()->setFlashdata('notifikasi', 'success|Password telah diubah');
                return redirect()->to(base_url('auth'));
            }
        }
    }
}
