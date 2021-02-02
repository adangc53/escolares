<?php
define('DB_HOST', 'localhost');
define('DB_DATABASE', 'syscolares');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
include("../src/adodb5/adodb.inc.php");

$Cn = NewADOConnection('mysqli');
$Cn->Connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
//$Cn->SetFetchMode(ADODB_FETCH_ASSOC);

function Ejecuta($sentencia)
{
    global $Cn;
    if ($Cn->Execute($sentencia) === false)
    return 'error al insertar'.$Cn->ErrorMsg().'<BR>';
    else{ 
        return "1"; 
    }   
}

function validusr($usr)
{
    global $Cn;
    $sql = "SELECT user,pass FROM users WHERE user = '{$usr}'";
    return $Cn->Execute($sql);
}


function agregarusr($user,$pass)
{
    $pwdEnc = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "Insert into users(user, pass) values('{$user}', '{$pwdEnc}')";
    return Ejecuta($sql);
}
function Deluser($user)
{
    
    $sql = "Delete from users where user= '{$user}'";
    return Ejecuta($sql);
}
function UpdateUser($user,$pass)
{
    $pwdEnc = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "update users set pass='{$pwdEnc}' where user= '{$user}'";
    return Ejecuta($sql);
}
//----------------------home-----------------


function consultaUsers($user){
    global $Cn;
    $s="SELECT user,pass FROM users WHERE user='{$user}' ";
    
        return $Cn->Execute($s);
}

function ConsltUsers(){
    global $Cn;
    $s="SELECT user,pass FROM users  ";
    
        return $Cn->Execute($s);
}
//-----------------------------------------------------
//--- Constancias ------------------------------------
function InsertConstancia($folio,$nc,$fecha){
    global $Cn;
    $s="insert into constancias(Folio,NoControl,Date,departamento) values('{$folio}','{$nc}','{$fecha}','constancias')";
    
        return $Cn->Execute($s);
}

function selectConstancia(){
    global $Cn;
    $s="select * from constancias where departamento='constancias'";
        return $Cn->Execute($s);
}

function DelConstancia($folio){
    global $Cn;
    $s="DELETE FROM constancias where Folio ='{$folio}'";
    return $Cn->Execute($s);
}
function UpdateConstancias($folio,$nc,$date){
    global $Cn;
    $s="UPDATE constancias set NoControl= {$nc}, Date='{$date}' Where Folio={$folio}";
    return $Cn -> Execute($s);
    }
/////////titulacion////////////////////////////////////////////////////////////////
function InsertTitulacion($folio,$nc,$fecha){
    global $Cn;
    $s="insert into constancias(Folio,NoControl,Date,departamento) values('{$folio}','{$nc}','{$fecha}','titulacion')";
    
        return $Cn->Execute($s);
}
function selectTitulacion(){
    global $Cn;
    $s="select * from constancias where departamento='titulacion'";
        return $Cn->Execute($s);
}
function selectBecas(){
    global $Cn;
    $s="select * from constancias where departamento='Becas'";
        return $Cn->Execute($s);
}
///////////////Becas////////////////7
function InsertBecas($folio,$nc,$fecha){
    global $Cn;
    $s="insert into constancias(Folio,NoControl,Date,departamento) values('{$folio}','{$nc}','{$fecha}','Becas')";
    
        return $Cn->Execute($s);
}
//////////////graficas ///////////////
function consultagrafica(){
    global $Cn;
    $sql="SELECT COUNT(folio) as total FROM constancias";
    return $Cn->Execute($sql);
}
?>