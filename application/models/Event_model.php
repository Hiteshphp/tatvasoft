<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends CI_Model {

    var $tableName;
    
    public function __construct()
    {
        parent::__construct();
        $this->tableName = 'events';
    }

    public function getEvents($id = '')
    {
        if(!empty($id))
        {
            $this->db->select('e.*, em.id emid, em.title, em.start_date, em.end_date, em.status, em.created_time, em.recurrence_type');
        }
        else
        {
            $this->db->select('em.id emid, em.title, em.start_date, em.end_date, em.status, em.created_time, em.recurrence_type');
        }
        $this->db->from('events_master em');
        if(!empty($id))
        {
            $this->db->join('events e', 'e.event_id = em.id', 'LEFT');
            $this->db->where('em.id', $id);
        }
        $this->db->where('em.status', 1);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function add($data = array())
    {
        $result = $this->db->insert('events_master', $data);
        return $result;
    }
    
    public function addEvent($data = array())
    {
        $result = $this->db->insert('events', $data);
        return $result;
    }
    
    public function delete($id)
    {
        $this->db->where('id', $id);
        $result = $this->db->update('events_master', array('status' => 0));
        return $result;
    }
    
    public function checkExist($field, $value, $id = '')
    {
        $this->db->where($field, $value);
        if(!empty($id))
        {
            $this->db->where('id <>', $id);
        }
        $result = $this->db->get('events_master')->row_array();
        return $result;
    }

}
