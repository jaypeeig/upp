<?php

if (!function_exists('render_template'))
 {
   function render_template($view, $data) {

      $ci =& get_instance();

       $template = new stdClass();
       $inner_template = new stdClass();

       $template->header = $ci->load->view('_partials/__header', $data, true);
       $inner_template->inner_content = $template->content = $ci->load->view($view, $data, true);
       $template->footer = $ci->load->view('_partials/__footer', $data, true);

       if ($ci->auth->is_logged_in()) {
         $template->content = $ci->load->view('dashboard/main', $inner_template, true);
       }

      $ci->output->set_status_header(200,'OK');
  		$ci->load->view('_partials/layout', $template);

   }
 }

 if (!function_exists(' return_ajax'))
  {
    function return_ajax($data) {
      echo json_encode($data, JSON_UNESCAPED_SLASHES);
    }
  }
