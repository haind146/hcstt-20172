<?php
/**
 * Created by PhpStorm.
 * User: Nguyễn Bá Khải
 * Date: 4/10/2018
 * Time: 10:57 PM
 */
require_once ("MenhDe.class.php");
require_once ("Luat.class.php");
require_once ("DieuKien.class.php");

class SuyDienTien
{
    public function suydien($listluat,$listmenhde,$mdketluan){
        $giathiet = array();
        foreach($listmenhde as $md){
            $mdnew = new MenhDe();
            $mdnew->id=$md->id;
            $mdnew->noidung=$md->noidung;
            $mdnew->dochinhxac=$md->dochinhxac;
            array_push($giathiet,$mdnew);
        }
        $cacLuatThoaMan =$this->loc($listluat,$giathiet);
        while(count($cacLuatThoaMan)>0 and !$this->Check_KL_in_TL($mdketluan,$giathiet)){
            echo (count($cacLuatThoaMan)." ".count($giathiet));
            echo ("count");
            foreach ($cacLuatThoaMan as $luat){
                $luat->printLuat();
                echo ("Vler");
                $flag=true;
                foreach($giathiet as $menhde){
                    if($menhde->id==$luat->menhdekq_obj->id){
                        $flag=false;
                    }
                }
                $min=2;
                foreach($luat->dieukien_obj->listMenhde as $mde){
                    if($mde->dochinhxac <$min){
                        $min=$mde->dochinhxac;
                    }
                }
//                echo ("Đọ chính xác: ".$min);
                if($flag){
                    $luat->menhdekq_obj->dochinhxac=$min*$luat->dochinhxac;
//                    echo ("Giả thiset: ".$luat->menhdekq_obj->id." ".$luat->menhdekq_obj->dochinhxac);
                    array_push($giathiet,$luat->menhdekq_obj);
                }
            }
            $cacLuatThoaMan=$this->loc($listluat,$giathiet);
        }
        return $this->Check_KL_in_TL($mdketluan,$giathiet);
    }
    public function Check_KL_in_TL($menhdeketluan,$listmenhdegt){
        foreach ($listmenhdegt as $k)
        {
            if($menhdeketluan->id==$k->id) {
                return true;
            }
        }
        return false;
    }
    public function loc($listluat,$tapmenhde){
        $result =   array();
        foreach ($listluat as $luat){
            $listmdluat = $luat->dieukien_obj->listMenhde;
            $flag= true;
            foreach ($listmdluat as $menhde){
                $flag2= false;
                foreach($tapmenhde as $menhdedaco){
                    if($menhde->id==$menhdedaco->id){
                        $flag2=true;
                        break;
                    }
                }
                $flag=($flag && $flag2);

            }
            foreach ($tapmenhde as $menhdedaco){
                if($menhdedaco->id==$luat->menhdekq_obj->id){
                    $flag=false;
                }
            }
            if($flag){
                array_push($result,$luat);
            }
        }
        return $result;
    }
}


$md = new MenhDe();
$md->id=1;
$md->dochinhxac=1;
$md2 = new MenhDe();
$md2->id=2;
$md2->dochinhxac=1;
$md3 = new MenhDe();
$md3->id=3;
$md3->dochinhxac=1;
$md4 = new MenhDe();
$md4->id=4;
$md4->dochinhxac=1;
$dk= new DieuKien();
array_push($dk->listMenhde,$md);
array_push($dk->listMenhde,$md2);
$dk2 = new DieuKien();
array_push($dk2->listMenhde,$md3);
$luat1 = new Luat();
$luat1->dieukien_obj=$dk;
$luat1->menhdekq_obj=$md3;
$luat1->dochinhxac=0.5;
$luat2 = new Luat();
$luat2->dieukien_obj=$dk2;
$luat2->dochinhxac=0.4;
$luat2->menhdekq_obj=$md4;
$luat3 = new Luat();
$luat3->dieukien_obj=$dk2;
$luat3->menhdekq_obj=$md;
$luat3->dochinhxac=0.3;
$listluat = array();
array_push($listluat,$luat1);
array_push($listluat,$luat2);
array_push($listluat,$luat3);
$listmd =array();
array_push($listmd,$md);
array_push($listmd,$md2);

$sd = new SuyDienTien();
if($sd->suydien($listluat,$listmd,$md4)){
    echo ("Dúng");
}
?>