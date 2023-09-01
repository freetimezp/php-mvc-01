<?php

class Model
{
    //you can only extends one Class but can add many traits
    //add trait Database to this Model
    use Database;

    function test()
    {
        $query = "SELECT * FROM users";
        $result = $this->query($query);
        show($result);
    }
}
