<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

//Метод добавляет данные в БД
function add($page,$add)
    {
        $this->db->insert($page,$add);
    }

//Метод выводит список объектов из БД и возвращает их ввиде массива
function get_pagelist($page)
    {
        $query = $this->db->get($page);
        return $query->result_array();
    }

//Метод редактирует данные в БД
function edit($page,$id,$edit)
    {
        $this->db->where('id',$id);
        $this->db->update($page,$edit);
    }

//Метод удаляет данные из БД
function del_object($page,$id)
    {
        $this->db->where('id',$id);
        $this->db->delete($page);
    }

//Метод позволяет заполнять формы редактирования объектов  данными этого объекта
function get_info($page,$id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get($page);
        return $query->row_array();
    }
}    