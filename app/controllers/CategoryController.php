<?php


class CategoryController{



    public function all(){
        require_once MODELS_PATH.'Category.php';
        $model = new Category;
        $cats = $model->gatAll();
        require_once VIEWS_PATH.'pages/categories/index.php';
    }
}