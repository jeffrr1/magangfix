<?php

namespace App\Controllers;
use ProxmoxVE\Proxmox; 
require '..\vendor\autoload.php';
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
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
        $id = $allNodes['data'][0]['node'];

        $qemu = $proxmox->get('/nodes/'.$id.'/qemu');
        $data['qemu'] = $qemu;


        // print_r($allNodes);
        return view('dashboard/home', $data);
    }
}
