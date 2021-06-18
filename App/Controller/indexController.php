<?php

class index extends Controller
{

    public function index()
    {
        self::viewRender("index","main");
    }
}
