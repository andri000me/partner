<?php

//fungsi untuk cek apakah sudah ada session login? jika sudah, maka akan redirect ke halaman dashboard meskipun mau masuk ke halaman login kecuali sudah logout
function check_already_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('userid');
    if ($user_session) {
        redirect('dashboard');
    }
}

//fungsi untuk cek apakah sudah ada session login? jika belum, maka akan redirect ke halaman login meskipun mau masuk ke halaman dashboard kecuali sudah login
function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('userid');
    if (!$user_session) {
        redirect('auth');
    }
}

function check_access_level_user()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('level');
    if ($user_session != 1) {
        redirect('dashboard');
        // echo "<script>alert('Anda harus masuk sebagai user')</script>";
    }
}

function check_access_level_admin1()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('level');
    if ($user_session != 2) {
        redirect('dashboard');
        // echo "<script>alert('Anda harus masuk sebagai Admin level 1')</script>";
    }
}

function check_access_level_admin2()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('level');
    if ($user_session != 3) {
        redirect('dashboard');
        // echo "<script>alert('Anda harus masuk sebagai Admin level 2')</script>";
    }
}

function check_access_level_superuser()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('level');
    if ($user_session == 1 || $user_session == 6) {
        redirect('status');
        // echo "<script>alert('Anda harus masuk sebagai Admin level 2')</script>";
    }
}

function check_nik($nik)
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('nik');
    if ($user_session != $nik) {
        redirect('dashboard');
        // echo "<script>alert('Anda harus masuk sebagai Admin level 2')</script>";
    }
}

function selisih_tanggal($end_date)
{
    $now = date('Y-m-d H:i:s');

    $diff = strtotime($now) - strtotime($end_date);
    $fullDays    = floor($diff / (60 * 60 * 24));
    $fullHours   = floor(($diff - ($fullDays * 60 * 60 * 24)) / (60 * 60));
    $fullMinutes = floor(($diff - ($fullDays * 60 * 60 * 24) - ($fullHours * 60 * 60)) / 60);
    if ($fullDays == 0 && $fullHours == 0 && $fullMinutes == 0) {
        $selisih = "Baru Saja.";
    } else if ($fullDays == 0 && $fullHours == 0) {
        $selisih = "$fullMinutes menit yang lalu.";
    } else if ($fullDays == 0) {
        $selisih = "$fullHours jam $fullMinutes menit yang lalu .";
    } else if ($fullDays == 1) {
        $selisih = "$fullDays hari $fullHours jam yang lalu.";
    } else {
        $selisih = "$fullDays hari yang lalu.";
    }
    return $selisih;
}
