<?php

class Formmodel extends CI_MODEL
{
    public function insertCas($data)
    {
        $this->db->insert('form', $data);
    }

    public function getData()
    {
        $query = $this->db->get('form');
        return $query->result();
    }

    public function status($application_id)
    {
		$this->db->set('status', '1', FALSE);
        $this->db->where('Id', $application_id);
        $this->db->update('form');
    }

    public function statusdto($application_id)
    {
		$this->db->set('status', '2', FALSE);
        $this->db->where('Id', $application_id);
        $this->db->update('form');
    }

    public function statusjd($application_id)
    {
		$this->db->set('status', '3', FALSE);
        $this->db->where('Id', $application_id);
        $this->db->update('form');
    }

    public function rejectform($application_id)
    {
        $this->db->set('status', '4', FALSE);
        $this->db->where('Id', $application_id);
        $this->db->update('form');
    }

    public function viewForm($id)
    {
        $query = $this->db->query("select * from form where Id=$id");
        return $query;
    }

    public function viewStatus($id)
    {
        $query = $this->db->query("select status from form where Id=$id");
        return $query;
    }
}



?>