<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

function adddata(){
    $this->load->view("header");

    if($this->input->post("submit")){
       $name = $this->input->post("name");
       $email = $this->input->post("email");
       $phone = $this->input->post("phone");
       $password = $this->input->post("password");

       $this->db->insert("users",array(

        "name"      =>  $name,
        "email"     =>  $email,
        "phone"     =>  $phone,
        "password"  =>  $password

       ));
       $this->session->set_flashdata("success","User added successfully");
       redirect(base_url() . "dashboard");

    }


    $this->load->view("addData");
    $this->load->view("footer");
}

function viewdata(){
    $this->load->view("header");

    $data['results']=$this->db->get("users")->result();

    if($this->input->get("delete_user")) {
        $this->db->delete('users',array("id" => $this->input->get("delete_user")));
        
        $this->session->set_flashdata("success","User Deleted.");
        redirect(base_url(). "dashboard/users");
    }


    $this->load->view("viewData", $data);
    $this->load->view("footer");
}

function editdata(){
    $this->load->view("header");

    $data['result']=$this->db->where("id='".$this->uri->segment(3)."'")->get("users")->row();

    if($this->input->post("edit_submit")){
        $name = $this->input->post("name");
        $email = $this->input->post("email");
        $phone = $this->input->post("phone");
        $password = $this->input->post("password"); 
        
        $this->db->update("users",array(
            "name"      =>  $name,
            "email"     =>  $email,
            "phone"     =>  $phone,
            "password"  =>  $password
        ),array("id"=>$data['result']->id));

        $this->session->set_flashdata("success","User update successfully");
        redirect(base_url() . "dashboard/users");

    }

    $this->load->view("editData", $data);
    $this->load->view("footer");
}

}