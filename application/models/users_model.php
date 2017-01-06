<?php

/*
 *
 * -------------------------------------------------------
 * Class name:        Users
 * Creation date:  06.01.2017
 * -------------------------------------------------------
 */

// **********************
// Class declaration
// **********************

class Users_model extends CI_Model {

    // **********************
    // Attribute Declaration
    // **********************

    private $id;   // Key Attribute
    private $first_name;   // DataType: varchar(255)
    private $last_name;   // DataType: varchar(255)
    private $username;   // DataType: varchar(50)
    private $password;   // DataType: varchar(255)
    private $email;   // DataType: varchar(100)
    private $activated;   // DataType: tinyint(1)
    private $banned;   // DataType: tinyint(1)
    private $ban_reason;   // DataType: varchar(255)
    private $new_password_key;   // DataType: varchar(50)
    private $new_password_requested;   // DataType: datetime
    private $new_email;   // DataType: varchar(100)
    private $new_email_key;   // DataType: varchar(50)
    private $last_ip;   // DataType: varchar(40)
    private $last_login;   // DataType: datetime
    private $is_admin;   // DataType: tinyint(1)
    private $created;   // DataType: datetime
    private $modified;   // DataType: timestamp
    private $database;
    var $hm;

    // **********************
    // Constructor Method
    // **********************

    function __construct() {
        parent::__construct();
    }

    // **********************
    // Getter Methods
    // **********************

    function get_id() {
        return $this->id;
    }

    function get_first_name() {
        return $this->first_name;
    }

    function get_last_name() {
        return $this->last_name;
    }

    function get_username() {
        return $this->username;
    }

    function get_password() {
        return $this->password;
    }

    function get_email() {
        return $this->email;
    }

    function get_activated() {
        return $this->activated;
    }

    function get_banned() {
        return $this->banned;
    }

    function get_ban_reason() {
        return $this->ban_reason;
    }

    function get_new_password_key() {
        return $this->new_password_key;
    }

    function get_new_password_requested() {
        return $this->new_password_requested;
    }

    function get_new_email() {
        return $this->new_email;
    }

    function get_new_email_key() {
        return $this->new_email_key;
    }

    function get_last_ip() {
        return $this->last_ip;
    }

    function get_last_login() {
        return $this->last_login;
    }

    function get_is_admin() {
        return $this->is_admin;
    }

    function get_created() {
        return $this->created;
    }

    function get_modified() {
        return $this->modified;
    }

    // **********************
    // Setter Methods
    // **********************

    function set_id($value) {
        $this->id = $value;
    }

    function set_first_name($value) {
        $this->first_name = $value;
    }

    function set_last_name($value) {
        $this->last_name = $value;
    }

    function set_username($value) {
        $this->username = $value;
    }

    function set_password($value) {
        $this->password = $value;
    }

    function set_email($value) {
        $this->email = $value;
    }

    function set_activated($value) {
        $this->activated = $value;
    }

    function set_banned($value) {
        $this->banned = $value;
    }

    function set_ban_reason($value) {
        $this->ban_reason = $value;
    }

    function set_new_password_key($value) {
        $this->new_password_key = $value;
    }

    function set_new_password_requested($value) {
        $this->new_password_requested = $value;
    }

    function set_new_email($value) {
        $this->new_email = $value;
    }

    function set_new_email_key($value) {
        $this->new_email_key = $value;
    }

    function set_last_ip($value) {
        $this->last_ip = $value;
    }

    function set_last_login($value) {
        $this->last_login = $value;
    }

    function set_is_admin($value) {
        $this->is_admin = $value;
    }

    function set_created($value) {
        $this->created = $value;
    }

    function set_modified($value) {
        $this->modified = $value;
    }

    // **********************
    // Init Method
    // **********************

    function init($row) {
        $this->id = $row->id;
        $this->first_name = $row->first_name;
        $this->last_name = $row->last_name;
        $this->username = $row->username;
        $this->password = $row->password;
        $this->email = $row->email;
        $this->activated = $row->activated;
        $this->banned = $row->banned;
        $this->ban_reason = $row->ban_reason;
        $this->new_password_key = $row->new_password_key;
        $this->new_password_requested = $row->new_password_requested;
        $this->new_email = $row->new_email;
        $this->new_email_key = $row->new_email_key;
        $this->last_ip = $row->last_ip;
        $this->last_login = $row->last_login;
        $this->is_admin = $row->is_admin;
        $this->created = $row->created;
        $this->modified = $row->modified;
    }

    // **********************
    // Select / Get all users
    // **********************

    function select($criteria = null) {

        $this->db->select('*');
        if (is_array($criteria)) {
            $this->db->where($criteria);
        }
        $query = $this->db->get('users');
        return $query->result();
    }

    // **********************
    // Get users by id
    // **********************

    function get_users($id) {

        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('users');

        foreach ($query->result() as $users) {
            $this->init($users);
            return $users;
        }
    }

    // **********************
    // Delete users
    // **********************

    public function delete($criteria = null) {
        if ($criteria != null) {
            $this->db->delete('users', array($criteria));
            return $this->db->affected_rows();
        } else {
            $this->db->where('id', $this->id);
            $this->db->delete('users');
            return $this->db->affected_rows();
        }
        return 0;
    }

    // **********************
    // Insert users
    // **********************

    function insert() {
        if (isset($this->first_name))
            $data['first_name'] = $this->first_name;
        if (isset($this->last_name))
            $data['last_name'] = $this->last_name;
        if (isset($this->username))
            $data['username'] = $this->username;
        if (isset($this->password))
            $data['password'] = $this->password;
        if (isset($this->email))
            $data['email'] = $this->email;
        if (isset($this->activated))
            $data['activated'] = $this->activated;
        if (isset($this->banned))
            $data['banned'] = $this->banned;
        if (isset($this->ban_reason))
            $data['ban_reason'] = $this->ban_reason;
        if (isset($this->new_password_key))
            $data['new_password_key'] = $this->new_password_key;
        if (isset($this->new_password_requested))
            $data['new_password_requested'] = $this->new_password_requested;
        if (isset($this->new_email))
            $data['new_email'] = $this->new_email;
        if (isset($this->new_email_key))
            $data['new_email_key'] = $this->new_email_key;
        if (isset($this->last_ip))
            $data['last_ip'] = $this->last_ip;
        if (isset($this->last_login))
            $data['last_login'] = $this->last_login;
        if (isset($this->is_admin))
            $data['is_admin'] = $this->is_admin;
        if (isset($this->created))
            $data['created'] = $this->created;
        if (isset($this->modified))
            $data['modified'] = $this->modified;

        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }

    // **********************
    // Update users
    // **********************

    function update($criteria = null) {
        if (isset($this->id))
            $data['id'] = $this->id;
        if (isset($this->first_name))
            $data['first_name'] = $this->first_name;
        if (isset($this->last_name))
            $data['last_name'] = $this->last_name;
        if (isset($this->username))
            $data['username'] = $this->username;
        if (isset($this->password))
            $data['password'] = $this->password;
        if (isset($this->email))
            $data['email'] = $this->email;
        if (isset($this->activated))
            $data['activated'] = $this->activated;
        if (isset($this->banned))
            $data['banned'] = $this->banned;
        if (isset($this->ban_reason))
            $data['ban_reason'] = $this->ban_reason;
        if (isset($this->new_password_key))
            $data['new_password_key'] = $this->new_password_key;
        if (isset($this->new_password_requested))
            $data['new_password_requested'] = $this->new_password_requested;
        if (isset($this->new_email))
            $data['new_email'] = $this->new_email;
        if (isset($this->new_email_key))
            $data['new_email_key'] = $this->new_email_key;
        if (isset($this->last_ip))
            $data['last_ip'] = $this->last_ip;
        if (isset($this->last_login))
            $data['last_login'] = $this->last_login;
        if (isset($this->is_admin))
            $data['is_admin'] = $this->is_admin;
        if (isset($this->created))
            $data['created'] = $this->created;
        if (isset($this->modified))
            $data['modified'] = $this->modified;

        if ($this->id > 0) {
            $this->db->where('id', $this->id);
            $this->db->update('users', $data);
            return $this->db->affected_rows();
        } elseif ($criteria != null) {
            $this->db->where($criteria);
            $this->db->update('users', $data);
            return $this->db->affected_rows();
        } else {
            return 0;
        }
    }

    // **********************
    // Count records
    // **********************

    function count() {
        $this->db->select('*');
        $this->db->from('users');
        $query = $this->db->get();
        return $query->num_rows();
    }

    // **********************
    // Fetch records
    // **********************

    function fetch($limit, $start, $criteria = null, $group_by = null, $order_by = null) {
        $this->db->select('*');
        if ($criteria != null && is_array($criteria)) {
            if (count($criteria)) {
                foreach ($criteria as $key => $value) {
                    if (is_array($value)) {
                        $this->db->where_in($key, $value);
                    } else {
                        $this->db->where($criteria);
                    }
                }
            } else {
                $this->db->where($criteria);
            }
        }
        $this->db->from('users');
        if ($group_by != NULL) {
            $this->db->group_by($group_by);
        }

        if ($order_by != NULL) {
            $this->db->order_by($order_by);
        }
        $this->db->limit($limit, $start);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return false;
    }

    // **********************
    // Count records
    // **********************

    function fetch_count($criteria = null, $group_by = null, $order_by = null) {
        $this->db->select('*');
        if ($criteria != null && is_array($criteria)) {
            if (count($criteria)) {
                foreach ($criteria as $key => $value) {
                    if (is_array($value)) {
                        $this->db->where_in($key, $value);
                    } else {
                        $this->db->where($criteria);
                    }
                }
            } else {
                $this->db->where($criteria);
            }
        }
        $this->db->from('users');

        if ($group_by != NULL) {
            $this->db->group_by($group_by);
        }

        if ($order_by != NULL) {
            $this->db->order_by($order_by);
        }

        $query = $this->db->get();
        return $query->num_rows();
    }

    // **********************
    // Search records
    // **********************

    function search($search, $limit, $start, $criteria = null, $group_by = null, $order_by = null) {
        $this->db->select('*');
        $this->db->like('first_name', $search);
        $this->db->or_like('last_name', $search);
        $this->db->or_like('username', $search);
        $this->db->or_like('password', $search);
        $this->db->or_like('email', $search);
        $this->db->or_like('activated', $search);
        $this->db->or_like('banned', $search);
        $this->db->or_like('ban_reason', $search);
        $this->db->or_like('new_password_key', $search);
        $this->db->or_like('new_password_requested', $search);
        $this->db->or_like('new_email', $search);
        $this->db->or_like('new_email_key', $search);
        $this->db->or_like('last_ip', $search);
        $this->db->or_like('last_login', $search);
        $this->db->or_like('is_admin', $search);
        $this->db->or_like('created', $search);
        $this->db->or_like('modified', $search);
        if ($criteria != null && is_array($criteria)) {
            if (count($criteria)) {
                foreach ($criteria as $key => $value) {
                    if (is_array($value)) {
                        $this->db->where_in($key, $value);
                    } else {
                        $this->db->where($criteria);
                    }
                }
            } else {
                $this->db->where($criteria);
            }
        }
        $this->db->from('users');

        if ($group_by != NULL) {
            $this->db->group_by($group_by);
        }

        if ($order_by != NULL) {
            $this->db->order_by($order_by);
        }

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return false;
    }

    // **********************
    // Count records
    // **********************

    function search_count($search, $criteria = null, $group_by = null, $order_by = null) {
        $this->db->select('*');
        $this->db->like('first_name', $search);
        $this->db->or_like('last_name', $search);
        $this->db->or_like('username', $search);
        $this->db->or_like('password', $search);
        $this->db->or_like('email', $search);
        $this->db->or_like('activated', $search);
        $this->db->or_like('banned', $search);
        $this->db->or_like('ban_reason', $search);
        $this->db->or_like('new_password_key', $search);
        $this->db->or_like('new_password_requested', $search);
        $this->db->or_like('new_email', $search);
        $this->db->or_like('new_email_key', $search);
        $this->db->or_like('last_ip', $search);
        $this->db->or_like('last_login', $search);
        $this->db->or_like('is_admin', $search);
        $this->db->or_like('created', $search);
        $this->db->or_like('modified', $search);
        if ($criteria != null && is_array($criteria)) {
            if (count($criteria)) {
                foreach ($criteria as $key => $value) {
                    if (is_array($value)) {
                        $this->db->where_in($key, $value);
                    } else {
                        $this->db->where($criteria);
                    }
                }
            } else {
                $this->db->where($criteria);
            }
        }
        $this->db->from('users');
        if ($group_by != NULL) {
            $this->db->group_by($group_by);
        }

        if ($order_by != NULL) {
            $this->db->order_by($order_by);
        }
        $query = $this->db->get();
        return $query->num_rows();
    }

}

?>