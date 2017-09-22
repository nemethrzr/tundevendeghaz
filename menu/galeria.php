<div class="container">
<div class="content">
    <h2>Szállás külső képe, szobák fotói, látnivalók a környezetében</h2>
</div>
    
</div>
<div class="container mt40">


<?php 




    $dir = './img/';
    $thumb_dir = 'thumbnails';

    $result = array(); 

       $cdir = scandir($dir); 
       foreach ($cdir as $key => $value) 
       { 
          if (!in_array($value,array(".",".."))) 
          { 
             if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
             { 
               // $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
             } 
             else 
             { 
                $result[] = $value; 
             } 
          } 
       } 

     /*  print_r($result);
       print_r(count($result));*/

       /* count-ot osztom 4-el mert 4 oszlopban lesznek a képek */

      $array = array();
        foreach ($result as $item) {
            $array[] = '<div class="panel panel-default">
                        <div class="panel-body">
                            <a href="'.$dir.DIRECTORY_SEPARATOR.$item.'" title="" class="zoom" data-lightbox="images" data-title="sd" data-footer="sd" data-type="image" data-toggle="lightbox">
                                <img src="'.$dir.DIRECTORY_SEPARATOR.$thumb_dir.DIRECTORY_SEPARATOR.$item.'" alt="" />
                                <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                            </a>
                        </div>
                        
                        </div>';
        
        }       

       
       
       $count = round(count($result)/4);
       
        $j=0;
        $col = 0;
        $div = array();
        for ($i=0; $i < count($array) ; $i++) { 
            if($j<$count){
                $div[$col][] = $array[$i];
                //echo $array[$i];
            }else{
                $col++;
                $j=0;
                $div[$col][] = $array[$i];
                //$div[]=$i;
                continue;
            }
            $j++;
        }


        $output='<div>';
        foreach ($div as $key => $value) {
            //col-xs-12 col-sm-6 col-md-3
            $output.= '<article class="col-xs-6 col-sm-6 col-md-3">';
            foreach ($value as $val) {
                
                $output.=$val;

            }
            $output.='</article>';
        }
        $output.='</div>';


//var_dump($div);
?>


<section class="row">
    
    <?php echo $output; ?>
</section>










</div>