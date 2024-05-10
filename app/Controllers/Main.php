<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ComponentsType;
use App\Models\Component;
use App\Models\Vyrobce;
use App\Models\Parametr;

class Main extends BaseController
{
    var $typC;
    var $com;
    var $vyrobce;
    var $parametr;
    var $config;
    public function __construct(){
        $this->typC = new ComponentsType();
        $this->com = new Component();
        $this->vyrobce = new Vyrobce();
        $this->parametr = new Parametr();
        $this->config = new \Config\MyConfig();
    }
    
    public function index()
    {   
    }
    public function getType()
    {
        $data["typC"] = $this->typC->findall();
        echo view("componetsType", $data);
    }
    public function getKomponent($url)
    {
        $oof =  $this->config->itemsForPage;
        $data["com"] = $this->com->join('typkomponent', 'komponent.typKomponentid = typkomponent.idKomponent',"inner");
        $data["com"] = $this->com->where('url',$url)->paginate($oof);
        $data["pager"] = $this->com->pager;
        echo view("components", $data);
    }
    public function getInfo($id)
    {
        $data["com"] = $this->com->join('vyrobce', 'komponent.vyrobce_id = vyrobce.idVyrobce',"inner")->join('parametr', 'komponent.id = parametr.komponent_id',"inner")->join('nazevparametr', 'nazevparametr.id = parametr.nazevParametr_id',"inner")->find($id); 
        $data["parametr"] = $this->parametr->join('nazevparametr', 'nazevparametr.id = parametr.nazevParametr_id',"inner")->where("komponent_id", $id)->findall();
        echo view("compInfo", $data);
    }
}