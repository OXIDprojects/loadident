<?php

function smarty_function_agload( $params, &$smarty )
{
    $sType = isset( $params['type'] )?$params['type']:null;
    $sOxid  = isset( $params['oxid'] )?$params['oxid']:null;
    $sIdent = isset( $params['ident'] )?$params['ident']:null;
    $sArtnum  = isset( $params['artnum'] )?$params['artnum']:null;
    $sAssign  = isset( $params['assign'] )?$params['assign']:null;
    
    if ( $sType && ($sOxid || $sArtnum || $sIdent) && $sAssign ) {
        $oObject = oxNew( $sType );
        if($sArtnum){
            $oDb = oxDb::getDb();
            $sViewName = getViewName('oxarticles');
            $sOxid = $oDb->GetOne("SELECT oxid FROM $sViewName WHERE oxartnum = " . $oDb->quote($sArtnum));
        }elseif($sIdent){
            $oDb = oxDb::getDb();
            $sTableName = $oObject->getCoreTableName();
            $sOxid = $oDb->GetOne("SELECT oxid FROM $sTableName WHERE agloadid = " . $oDb->quote($sIdent));
        }
        $blLoaded = $oObject->load( $sOxid );
        
        if ( $blLoaded ) {
            $smarty->assign($sAssign, $oObject);
        }else{
            return "could not load object of type $sType with oxid $sOxid| ident $sIdent| artnum $sArtnum| $sTableName";
        }
    }else{
        return "could not load object of type $sType with oxid $sOxid| ident $sIdent| artnum $sArtnum";
    }

}