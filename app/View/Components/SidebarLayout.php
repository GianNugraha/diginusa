<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SidebarLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $role = session()->get('role');
        if($role == 0 ) {
            $lists = [
                ['name'=>'MAIN MENU', 'childs'=>[
                    ['name'=>'Dashboard', 'childs'=>false, 'link'=>'/home', 'icon'=>'dashboard'],
                ], 'icon'=>false],
                ['name'=>'TRANSACTIONS', 'childs'=>[
                    ['name'=>'LAPORAN KEUANGAN', 'childs'=>false, 'link'=>'/laporan-keuangan', 'icon'=>'bill'],
                ], 'icon'=>false],
                // ['name'=>'SETTINGS', 'childs'=>[
                //     ['name'=>'USER SETTING', 'childs'=>false, 'link'=>route('user.profile', session()->get('userid')), 'icon'=>'user-level'],
                // ], 'icon'=>false],
            ];

        // Menu Admin
        }else if($role == 1 ){
            $lists = [
                ['name'=>'MAIN MENU', 'childs'=>[
                    ['name'=>'Dashboard', 'childs'=>false, 'link'=>'/home', 'icon'=>'dashboard'],
                ], 'icon'=>false],
                ['name'=>'TRANSACTIONS', 'childs'=>[
                    ['name'=>'LAPORAN KEUANGAN', 'childs'=>false, 'link'=>'/laporan-keuangan', 'icon'=>'bill'],
                ], 'icon'=>false],
                // ['name'=>'SETTINGS', 'childs'=>[
                //     ['name'=>'USER SETTING', 'childs'=>false, 'link'=>route('user.profile', session()->get('userid')), 'icon'=>'user-level'],
                // ], 'icon'=>false],
            ];
        }

        return view('layouts.sidebar-base', compact('lists'));
    }
}
