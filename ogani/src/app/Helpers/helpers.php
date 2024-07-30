<?php
// format number
if (!function_exists('formatCurrency')) {
    function formatCurrency($amount) {
        return number_format($amount, 2, ',', ',');
    }
}

// lowercase
if(!function_exists('lowercaseText')){
    function lowercaseText($text){
        return strtolower($text);
    }
}
// remove spaces
if (!function_exists('removeSpaces')) {
    function removeSpaces($text) {
        return str_replace(' ', '', $text);
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
// translate class status order
if(!function_exists('translateClassStatusOrder')){
    function translateClassStatusOrder($value){
        if($value === '1'){
            return 'warning';
        }elseif($value === '2'){
            return 'primary';
        }elseif($value === '3'){
            return 'success';
        }else{
            return "danger";
        }
    }
}
// check role edit information user
if(!function_exists('checkRoleEditInformationUser')){
    function checkRoleEditInformationUser($authUserId, $userId){
        if($authUserId !== $userId){
            return 'disabled';
        }
    }
}

// calc %
if(!function_exists('calculateDiscountedPrice')){
    function calculateDiscountedPrice($originalPrice, $discountPercentage)
    {
        // Tính số tiền giảm giá
        $discountAmount = ($originalPrice * $discountPercentage) / 100;
        
        // Tính giá sau khi giảm giá
        $discountedPrice = $originalPrice - $discountAmount;
        
        return $discountedPrice;
    }
}