<?php

sleep(1);

        dumpf($_POST);

        $this->parse_page($this->router->get_request_app(), "Index", $_POST['layout'], array(

        'epic' => 'super coolvalue',
        'varr' => ['one cool value', 'another one']

));