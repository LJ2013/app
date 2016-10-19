<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\mine\Facades;
use Illuminate\Support\Facades\Facade;
/**
 * Description of FacadeTestFace
 *
 * @author zhanglianjun
 */
class FacadeTest extends Facade{
    
    protected static function getFacadeAccessor() {
        return 'facadetest';
    }
}
