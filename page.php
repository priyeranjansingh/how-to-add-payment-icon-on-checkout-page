//add icon to payment gateway
function custom_payment_gateway_icon( $icon, $id ) {
    if ( $id === 'stripe' ) {
        return '<img style="width:50px; id="'.$id.'" src="/wp-content/uploads/2021/03/visa.png" >'; 
    }else if($id === 'ppcp-gateway'){
        return '<img style="width:50px;" id="'.$id.'" src="/wp-content/uploads/2021/03/paypal.png" >'; 
    } else {
        return $icon;
    }
}
add_filter( 'woocommerce_gateway_icon', 'custom_payment_gateway_icon', 10, 2 );
