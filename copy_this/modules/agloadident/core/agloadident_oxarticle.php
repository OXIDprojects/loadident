<?php

class agloadident_oxarticle extends agloadident_oxarticle_parent{
    
    public function loadByIdent($sIdent){
        $oDb = oxDb::getDb();
        $sView  = getViewName('oxarticles');
        $sQ = 'SELECT oxid FROM ' . $sView . ' WHERE agloadid = ' . $oDb->quote($sIdent);
        $sOxid = $oDb->GetOne($sQ);
        return $this->load($sOxid);
    }
    
}