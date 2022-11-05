<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;
use CodeIgniter\Controller;
helper('form');

class Login extends Controller
{
    public function index()
    {
        //return view('templates/login');
    }

    public function init(){
        $session = session();
        $username = $session->get('username');
        if($username != null || $username != ""){
            $result['m_mahasiswa'] = '';
            $result['username'] = $username;
            return view('templates/topbar').view('templates/sidebar', $result).view('templates/footer');
        }else{
            return view('login/login');
        }
    }

    public function loginuser()
    {
        $session = session();
        $newdata = [
            'username'  => 'mahasiswa',
            'email'     => 'mahasiswa@mail.com',
            'logged_in' => true,
        ];
        
        $session->set($newdata);
        $result['m_mahasiswa'] = '';
        $result['username'] = $newdata['username'];
        return view('templates/topbar').view('templates/sidebar', $result).view('templates/footer'); 
    }

    public function logoutuser(){
        $session = session();
        $array_items = ['username', 'email', 'logged_in'];
        $session->remove($array_items);
        return view('login/login');
    }
}