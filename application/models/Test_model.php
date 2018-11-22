<?php

// 命名规则：和controller同名加 _model 
class Test_model extends CI_Model {

  // config/autoload.php 配置了自动加载链接数据库实例
  // public function __construct(){
  //     $this->load->database();
  // }

  // 从数据库中查询数据 数据库查询构造 https://codeigniter.org.cn/user_guide/database/query_builder.html
  public function getTestData(){
    # return  array("Volvo","BMW","SAAB");
    # $this->load->database();
    $name = "xiaobing11";
    $id = 11;

    // $sql = "INSERT INTO TEST (ID, NAME) VALUES (".$this->db->escape($id).", ".$this->db->escape($name).")";
    // $this->db->query($sql);
    // echo $this->db->affected_rows();

    return  $this->db->get('TEST')->result();

  }
}
