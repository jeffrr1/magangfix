<?php

namespace App\Controllers;
// require_once 'vendor\autoload.php';
use App\Models\Vpshistory;
use App\Models\Serverhistory;
use ProxmoxVE\Proxmox; 
require '..\vendor\autoload.php';

class Home extends BaseController
{
    public function index()
    {
        // realm and port defaults to 'pam' and '8006' but you can specify them like so
        $credentials = [
            'hostname' => '149.202.84.209',  // Also can be an IP
            'username' => 'API',
            'password' => 'J3Su54$hXZ3Rvr002J3Su54$hXZ3Rvr',
        ];
        
        // realm and port defaults to 'pam' and '8006' but you can specify them like so
        $credentials = [
            'hostname' => '149.202.84.209',
            'username' => 'API',
            'password' => 'J3Su54$hXZ3Rvr002J3Su54$hXZ3Rvr',
            'realm' => 'pve',
            'port' => '8006',
        ];
        
        // Then simply pass your credentials when creating the API client object.
        $proxmox = new Proxmox($credentials);
        
        $allNodes = $proxmox->get('/nodes/');

        $data['nodes'] = $allNodes;

        // print_r($allNodes);
        return view('layout/master', $data);
        
      
    }
    public function simpan(){
        $datavps = [
            'name' =>$this->request->getpost('name'),
        ];
        $vps = new Vpshistory();
        $simpan = $vps->simpan($datavps);
        return redirect('Vps');
    }
    public function simpanServer(){
        $dataserver =[
            'name'=> $this->request->getpost('name'),
        ];
        $server = new Serverhistory();
        $simpan = $server->simpanServer($dataserver);
        return redirect('detailserver');
    }
}