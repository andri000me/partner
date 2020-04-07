 <?php
defined('BASEPATH') or exit('No direct script access allowed');

class Comment_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('comments', $data);
        return $this->db->affected_rows();
    }

    public function update($data, $where)
    {
        $this->db->update('comments', $data, $where);
    }

    public function delete($where)
    {
        $this->db->delete('comments', $where);
    }

    public function get($where = NULL)
    {
        $this->db->select("*, DATE_FORMAT(date, '%d %M %Y') as tanggal");
        $this->db->from('comments');
        $this->db->join('tickets', 'tickets.id_ticket = comments.id_ticket', 'left');
        $this->db->join('ps_tickets', 'ps_tickets.id_ps_ticket = comments.id_ps_ticket', 'left');
        $this->db->join('users', 'users.id_user = comments.id_user', 'left');
        $this->db->join('partners', 'partners.id_partner = tickets.id_partner', 'left');
        $this->db->join('agents', 'agents.id_agent = tickets.id_agent', 'left');
        $this->db->join('leads', 'leads.id_leads = tickets.id_leads', 'left');
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }
}
