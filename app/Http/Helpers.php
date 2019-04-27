<?php


function currentUser(){
    if(Auth::check()) {
        return Auth::user() ;
    }else{
        return '';
    }
}
function impacto($val){
    $info = '';
    switch ($val) {
        case 1:
            $info = 'Extenso / Afectación Total';
            break;
        case 2:
            $info = 'Significativo / Afectación parcial';
            break;
        case 3:
            $info = 'Menor / Posible afectación';
            break;
    }
    
    return $info;
}
function urgencia($val){
    $info = '';
    switch ($val) {
        case 1:
            $info = 'Alta';
            break;
        case 2:
            $info = 'Media';
            break;
        case 3:
            $info = 'Baja';
            break;
    }
    return $info;
}

function setActive($uri)
{
    return Request::is($uri) ? 'm-menu__item--active' : '';
}
