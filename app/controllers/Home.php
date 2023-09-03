<?php

class Home extends Controller
{
    public function index()
    {
        $model = new Model;
        $model->test();

        //get data with WHERE query
        //$arr['id'] = 1;
        //$arr['name'] = 'Evgen';
        //$result = $model->where($arr);
        //show($result);

        //try insert query
        //$arr['name'] = 'EvgenTest';
        //$arr['age'] = 25;
        //$result = $model->insert($arr);

        //try delete query
        //$model->delete(6);

        $this->view('home');
    }
}
