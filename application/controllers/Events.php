<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Event_model');
    }

    public function index()
    {
        $data['events'] = $this->Event_model->getEvents();
        $data['main_view'] = $this->router->class.'/'.$this->router->method;
        $data['title'] = $this->router->class . ' Listing';
        $this->load->view('include/default', $data);
    }
    
    public function view($id = '')
    {
        if(!empty($id))
        {
            $checkExist = $this->Event_model->checkExist('id', $id);
            if(!empty($checkExist))
            {
                $data['eventData'] = $this->Event_model->getEvents($id);
                $data['totalRecurrence'] = count($data['eventData']);
                $data['main_view'] = $this->router->class.'/'.$this->router->method;
                $data['title'] = $this->router->class . ' Detail';
                $this->load->view('include/default', $data);
            }
            else
            {
                redirect(base_url() . $this->router->class);
            }
        }
        else
        {
            redirect(base_url() . $this->router->class);
        }
    }
    
    public function add()
    {
        if($this->input->post('data'))
        {
            $insertData = $postData = array();
            $repeat = 0;
            $recurrenceStr = '';
            $postData = $this->input->post('data');//pr($postData);
            
            if($postData['RepeatGroup'])
            {
                if($postData['RepeatGroup'] === 'Radiobutton2')
                {
                    $recurrenceStr = $postData['lstRepeatType'] . ' ' . $postData['lstEvery'];
                    $repeat = 1;
                }
                else if($postData['RepeatGroup'] === 'RadioButton3')
                {
                    $recurrenceStr = 'Every ' . $postData['lstRepeatOn'] . ' ' . $postData['lstRepeatWeek'] . ' of the ' . $postData['lstRepeatMonth'];
                    $repeat = 1;
                }
            }
            $insertData['title'] = $postData['title'];
            $insertData['start_date'] = date('Y-m-d', strtotime($postData['start_date']));
            $insertData['end_date'] = date('Y-m-d', strtotime($postData['end_date']));
            $insertData['recurrence'] = $repeat;
            $insertData['recurrence_type'] = $recurrenceStr;
            $insertData['status'] = 1;
            $insertData['created_time'] = date('Y-m-d H:i:s');
            $insertData['modified_time'] = date('Y-m-d H:i:s');
            $insert = $this->Event_model->add($insertData);
            if($insert)
            {
                $message = 'Events added successfully';
                $this->session->set_userdata('success_message', $message);
            }
            else
            {
                $message = 'Events add issue';
                $this->session->set_userdata('error_message', $message);
            }
            redirect(base_url() . $this->router->class);
        }
        $data['main_view'] = $this->router->class.'/'.$this->router->method;
        $data['title'] = $this->router->class . ' Add';
        $this->load->view('include/default', $data);
    }
    
    public function delete($id = '')
    {
        if(!empty($id))
        {
            $this->Event_model->delete($id);
            redirect(base_url() . $this->router->class);
        }
    }
    

}
