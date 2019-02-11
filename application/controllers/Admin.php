<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function index(){
        $data['stat'] = array(
                    'author' => $this->db->count_all_results('author'),
                    'books' => $this->db->count_all_results('books')
        );

        $name = "blocks/main";
        $this->template->admin_view($data,$name);
    }

    //Метод добавляет данные
    public function add($page){
        $data[] = '';
        
        if ($this->input->post('add')) {

			//Записываем поля формы в массивы
            $add['author'] = $this->input->post('author');
            $add['nameBooks'] = $this->input->post('nameBooks');
            $add['priceBooks'] = $this->input->post('priceBooks');
            $add['numberBooks'] = $this->input->post('numberBooks');  
			
			//Разрушаем массивы которые не передаются в модель
            foreach ($add as $key=>$val)
            {
                if(!$add[$key])
                {
                    unset($add[$key]);
                }
            }

            $this->Admin_model->add($page,$add);
			
			//Вызываю страницу "операция прошла успешно"
            $data['info'] = "Операция прошла успешно!";
            $name = 'info';
			//Передаю значения в библиотеку шаблона
            $this->template->admin_view($data,$name);
        }
        else {
			//Вызов соответствующей страницы редактирования
            $name = 'add/'.$page;
            $this->template->admin_view($data,$name);
        }
    }

    //Метод выводит список объектов, а так же позволяет удалять их
    public function pagelist($page)
    {
        $data[] = '';
        if ($this->input->post('del')) {
            $id = $this->input->post('id');
                                
            $this->Admin_model->del_object($page,$id);
                
            $data['info'] = "Операция прошла успешно!";
            $name = 'info';
            $this->template->admin_view($data,$name);
        }
        else {
            $data['edit'] = $this->Admin_model->get_pagelist($page);
            if ($page == 'books') {
                $name = 'edit/booklist';
            }
            elseif ($page == 'author') {
                 $name = 'edit/authorlist';
            } 
            
            $this->template->admin_view($data,$name);  
        }
    }
    
    //Метод редактирует выбранный объект
    public function edit($page,$id = ''){
		
		//Позволяет заполнять формы редактирования объектов  данными этого объекта
        $data['pages_info'] = $this->Admin_model->get_info($page,$id);

        if($this->input->post('edit'))
        {   
			
			//Записываем поля формы в массивы
            $edit['author'] = $this->input->post('author');
            $edit['nameBooks'] = $this->input->post('nameBooks');
            $edit['priceBooks'] = $this->input->post('priceBooks');
            $edit['numberBooks '] = $this->input->post('numberBooks ');
             
			//Разрушаем массивы которые не передаются в модель
            foreach ($edit as $key=>$val)
            {
                if(!$edit[$key])
                {
                    unset($edit[$key]);
                }
            }
                
            $this->Admin_model->edit($page,$id,$edit);
            
			//Вызываю страницу "операция прошла успешно"
            $data['info'] = "Операция прошла успешно!";
            $name = 'info';
			//Передаю значения в библиотеку шаблона
            $this->template->admin_view($data,$name);
        }

        else
        {
			//Вызов соответствующей страницы редактирования
            $name = 'edit/'.$page;
            $this->template->admin_view($data,$name);
        }
    }
}    