<?php

namespace App\Http\Traits;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Gate;

trait HasPermissionsTrait {

   public function get_user_permissions_by_user_id() {
        
        $request_user_pemissions = Http::get($this->url_dynamic().'users/insaf/read_modul_menu_by_user_id/'. session()->get('id'));

        $decode = $request_user_pemissions->json();
        $data_user_permissions = $decode[1][0]['rows'];
        $user_permissions = [];

        for($i = 0; $i < count($data_user_permissions); $i++)
        {
            $user_permissions[] = [
                'user_id' => $data_user_permissions[$i]['id_user'],
                'menu_id' => $data_user_permissions[$i]['id_menu'],
                'menu' => $data_user_permissions[$i]['menu'],
                'url' => $data_user_permissions[$i]['url'],
                'create' => $data_user_permissions[$i]['allow_create'],
                'read' => $data_user_permissions[$i]['allow_read'],
                'update' => $data_user_permissions[$i]['allow_update'],
                'delete' => $data_user_permissions[$i]['allow_delete'],
            ];
        }

        return $user_permissions;
  }

}