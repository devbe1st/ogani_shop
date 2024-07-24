<?php
// format number
if (!function_exists('formatCurrency')) {
    function formatCurrency($amount) {
        return number_format($amount, 0, ',', '.');
    }
}

// check disable account
if(!function_exists('checkDisableAccount')){
    function checkDisableAccount($value){
        if($value == null){
            return 'No verify';
        }else{
            return 'Verified';
        }
    }
}

// translate class disable account
if(!function_exists('translateClassDisableAccount')){
    function translateClassDisableAccount($value){
        if($value === null){
            return 'danger';
        }else{
            return 'success';
        }
    }
}

// translate class role account
if(!function_exists('translateClassRoleAccount')){
    function translateClassRoleAccount($value){
        if($value === 'admin'){
            return 'danger';
        }elseif($value === 'staff'){
            return 'primary';
        }else{
            return 'success';
        }
    }
}

// translate class status custom
if(!function_exists('translateClassStatusCustom')){
    function translateClassStatusCustom($value){
        if($value === 0){
            return 'eye-off text-danger';
        }else{
            return 'eye text-success';
        }
    }
}
