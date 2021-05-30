<?php 
namespace App\Traits;

trait permissionTrait{

    public function hasPermission(){

        //Users

        if(!isset(auth()->user()->role['permissions']['user']['can-add']) && \Route::is('user.store')){
            return abort(401);
        }

        if(!isset(auth()->user()->role['permissions']['user']['can-list']) && \Route::is('user.index')){
            return abort(401);
        }

        if(!isset(auth()->user()->role['permissions']['user']['can-edit']) && \Route::is('user.update')){
            return abort(401);
        }

        if(!isset(auth()->user()->role['permissions']['user']['can-delete']) && \Route::is('user.destroy')){
            return abort(401);
        }

        //Role Permissions

         if(!isset(auth()->user()->role['permissions']['role']['can-list']) && \Route::is('roles.index')){
            return abort(401);
        }


        //info

        if(!isset(auth()->user()->role['permissions']['info']['can-list']) && \Route::is('info.index')){
            return abort(401);
        }
        if(!isset(auth()->user()->role['permissions']['info']['can-list']) && \Route::is('family.index')){
            return abort(401);
        }
        if(!isset(auth()->user()->role['permissions']['info']['can-list']) && \Route::is('emergency.index')){
            return abort(401);
        }
        if(!isset(auth()->user()->role['permissions']['info']['can-list']) && \Route::is('extra.index')){
            return abort(401);
        }
        
        //payments

        if(!isset(auth()->user()->role['permissions']['payment']['can-add']) && \Route::is('payment.store')){
            return abort(401);
        }

        if(!isset(auth()->user()->role['permissions']['payment']['can-list']) && \Route::is('payment.index')){
            return abort(401);
        }

        if(!isset(auth()->user()->role['permissions']['payment']['can-edit']) && \Route::is('payment.update')){
            return abort(401);
        }

        if(!isset(auth()->user()->role['permissions']['payment']['can-delete']) && \Route::is('payment.destroy')){
            return abort(401);
        }

        //notice

        if(!isset(auth()->user()->role['permissions']['notice']['can-list']) && \Route::is('notice.index')){
            return abort(401);
        }
    }
}
?>