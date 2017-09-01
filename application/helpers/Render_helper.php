<?php

if (!function_exists('render_template'))
 {
   function render_template($view, $data) {

      $ci =& get_instance();

       $template = new stdClass();
       $template->header = $ci->load->view('_partials/__header', $data, true);
       $template->content = $ci->load->view($view, $data, true);
       $template->footer = $ci->load->view('_partials/__footer', $data, true);

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
