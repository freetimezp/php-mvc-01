<?php

class Home extends Controller
{
    public function index()
    {
        $model = new Model;
        $model->test();

        //get data with WHERE query
        $arr['id'] = 1;
        $arr['name'] = 'Evgen';
        $result = $model->where($arr);
        //show($result);

        $this->view('home');
    }
}
