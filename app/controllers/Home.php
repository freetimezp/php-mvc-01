<?php

class Home extends Controller
{
    public function index()
    {
        $user = new User;
        $user->test();

        //get data with WHERE query
        //$arr['id'] = 1;
        //$arr['name'] = 'Evgen';
        //$result = $model->where($arr);
        //show($result);

        //try findAll query
        $result = $user->findAll();
        //show($result);

        //try insert query
        //$arr['name'] = 'EvgenTest2';
        //$arr['age'] = 35;
        //$result = $user->insert($arr);

        //try delete query
        //$model->delete(6);

        //try update query
        //$arr['name'] = 'EvgenTest';
        //$arr['age'] = 31;
        //$model->update(2, $arr);

        $this->view('home');
    }
}
