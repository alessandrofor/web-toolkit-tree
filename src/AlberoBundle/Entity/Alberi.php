<?php

namespace AlberoBundle\Entity;

class Alberi
{


    function creaArrayAlbero($elements){


        $elements[] = $elements[0];

        $lastParent = "rootElement";
        $parentList = array();
        $parentList[] = $lastParent;
        $tree = array();

        $num = (count($elements)>1000 ? 1000 : count($elements));

        for ($i = 0; $i < $num-1; $i++) {
            $currentElement = $elements[$i];
            $nextElement = $elements[$i + 1];
            $nextParent = ("" == trim($nextElement->parent) ? "rootElement" : $nextElement->parent);
            $currentParent = ("" == trim($currentElement->parent) ? "rootElement" : $currentElement->parent);

            if($currentElement->id == $nextParent){
                $parentList[] = $nextParent;
                $tree['apriAlbero@@'. $currentElement->text] = $currentElement->id;
            }elseif($currentParent == $nextParent){
                $tree[$currentElement->text] = $currentElement->id;
            }
            else{
                $found = false;
                $appoParentList = array();
                foreach ($parentList as $key => $finding) {
                    if($found){
                        $tree[$currentElement->text] = $currentElement->id;
                        $tree['chiudiAlbero@@' . $currentParent .$finding. '@@' . $currentElement->id] = 'chiudiAlbero';
                    }else{
                        $appoParentList[]=$finding;
                    }
                    if($finding==$nextParent){
                        $found = true;
                    }
                }
                $parentList=$appoParentList;
            }
        }
        for ($i = count($parentList)-2; $i >= 0 ; $i--) {
            $tree['chiudiAlbero@@'.$parentList[$i].$i.'@@bottom']='chiudiAlbero';
        }

        return $tree;
    }
}