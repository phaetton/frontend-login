<?php
function rfsu_api_registro(){
    register_rest_route(
        "rfsu",
        "registro",
        array(
            'methods'=>'GET',
            'callback'=>'rfsu_registro_callback'
        )
        );
}

function rfsu_registro_callback($request){
    return "mi primer api";
    // return $request->get_params();
}

add_action('rest_api_init','rfsu_api_registro');