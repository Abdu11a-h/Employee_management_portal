<?php
function generate_validation($_post)
{
    $html = '';

    foreach ($_post as $key => $post) {
        if ($key != 'tbl_id') {
            $html .= '$this->form_validation->set_rules("' . $key . '", "' . $key . '", "trim|required");';
        }
    }
    return $html;
}

function posted_fields($_post)
{
    $ci_this = &get_instance();
    $info    = array();
    foreach ($_post as $key => $post) {
        $info[$key] = clean_posted_value($ci_this->input->post($key));
    }

    return $info;
}

function clean_posted_value($value)
{
    return trim($value);
}

function last_query()
{
    $ci_this = &get_instance();
    echo $ci_this->db->last_query();
    exit;
}

function pre_print($data)
{
    echo '<pre>';
    print_r($data);
    exit;
}

function encode($value)
{
    return base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($value)))))));
}

function decode($value)
{
    return base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($value)))))));
}







function monthyear($date)
{
    return date('M, Y', strtotime($date));
}

function dmy($date)
{
    return date('d, M Y', strtotime($date));
}

function dmytime($date)
{
    return date('d, M Y, h:i A', strtotime($date));
}

function dmyhm($date)
{
    return dmytime($date);
}

function hoursmin($date)
{
    return date('h:i A', strtotime($date));
}

function format_datetime()
{
    $date = new DateTime('now', new DateTimeZone('Asia/Karachi'));
    return $date->format('Y-m-d H:i:s');
}

function format_time()
{
    $date = new DateTime('now', new DateTimeZone('Asia/Karachi'));
    return $date->format('H:i:s');
}















?>