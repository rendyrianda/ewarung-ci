<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    }
}

function is_logged_in2()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth2');
    }
}
