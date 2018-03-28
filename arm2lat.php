<?php

function arm2lat( $arm_string ) {

    $arm_string = str_replace('ու', 'u', $arm_string);

    $word_count = mb_strlen($arm_string);
    $arm2latstring = '';
    $check_first_char_with_vo = '';

    $alphabet = array( 'ւ'=>'v', 'ա'=>'a','բ'=>'b','գ'=>'G','դ'=>'D','ե'=>'E','զ'=>'Z','է'=>'E',
        'ը'=>'e','թ'=>'T','ժ'=>'J','ի'=>'I','լ'=>'L','խ'=>'KH','ծ'=>'C','կ'=>'K',
        'հ'=>'H','ձ'=>'DZ','ղ'=>'X','ճ'=>'CH','մ'=>'M','յ'=>'y','ն'=>'N','շ'=>'SH',
        'ո'=>'O','չ'=>'CH','պ'=>'P','ջ'=>'J', 'ռ'=>'R','ս'=>'S','վ'=>'V','տ'=>'T',
        'ր'=>'R','ց'=>'C','ու'=>'U','փ'=>'P','ք'=>'Q','և'=>'EV','օ'=>'O','ֆ'=>'F', 'u'=>'u');

    $converted_array =  utf8_str_split ($arm_string,0 );

    for($i = 0; $i < $word_count; $i++){

        $armenian_alphabet = mb_strtolower($converted_array[$i]);

        $arm2latstring .= !isset($alphabet[ $armenian_alphabet ])  ? ' ' : strtolower(  $alphabet[ $armenian_alphabet] ) ;
    }

    return $arm2latstring;
}

function utf8_str_split($str='',$len=1){
    return preg_split('/(?<=\G.{'.$len.'})/u', $str,-1,PREG_SPLIT_NO_EMPTY);
}


echo arm2lat( $arm_string );


?>