<?php  

    if(!function_exists('calculate_discount')){
        function calculate_discount($price)
        {
            $result = $price * 0.5;
            return $result;
        }
    }

    if(!function_exists('format_price')){
        function format_price($price)
        {
            return 'Rp ' . number_format($price, 0, ',', '.');
        }
    }

?>