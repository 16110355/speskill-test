<?php
class FindNeedle {
    public $arr = array('red','blue','yellow','black','grey');

    public function check($n){
        
        for( $i=0; $i<count($this->arr); $i++){
            if( $this->arr[$i] == $n)
                return $i;
        }   
    }
}

$data = new FindNeedle();

$data->input = 'blue';

echo $data->check($data->input);
?>