<?php
/* --------------------------------------------------------------- *
 *        WARNING: ALL CHANGES IN THIS FILE WILL BE LOST
 *
 *   Source language file: W:\fshl/lang/PHPCB_lang.php
 *       Language version: 1.29 (Sign:SHL)
 *
 *            Target file: W:\fshl/fshl_cache/PHPCB_lang.php
 *             Build date: Mon 24.1.2011 18:17:43
 *
 *      Generator version: 0.4.11
 * --------------------------------------------------------------- */
class PHPCB_lang
{
var $trans,$flags,$data,$delim,$class,$keywords;
var $version,$signature,$initial_state,$ret,$quit;
var $pt,$pti,$generator_version;
var $names;

function PHPCB_lang () {
	$this->version=1.29;
	$this->signature="SHL";
	$this->generator_version="0.4.11";
	$this->initial_state=0;
	$this->trans=array(0=>array(0=>array(0=>0,1=>0),1=>array(0=>3,1=>0),2=>array(0=>2,1=>-1),3=>array(0=>6,1=>0),4=>array(0=>5,1=>0),5=>array(0=>7,1=>0),6=>array(0=>11,1=>0),7=>array(0=>11,1=>0),8=>array(0=>1,1=>-1)),1=>array(0=>array(0=>10,1=>0),1=>array(0=>10,1=>0)),2=>array(0=>array(0=>10,1=>1)),3=>array(0=>array(0=>3,1=>0),1=>array(0=>3,1=>0),2=>array(0=>11,1=>-1),3=>array(0=>10,1=>1)),4=>array(0=>array(0=>10,1=>0),1=>array(0=>10,1=>0)),5=>array(0=>array(0=>10,1=>0),1=>array(0=>5,1=>0),2=>array(0=>5,1=>0),3=>array(0=>3,1=>0),4=>array(0=>4,1=>0),5=>array(0=>5,1=>0)),6=>array(0=>array(0=>10,1=>0),1=>array(0=>6,1=>0),2=>array(0=>6,1=>0),3=>array(0=>6,1=>0)),7=>array(0=>array(0=>9,1=>0),1=>array(0=>10,1=>1),2=>array(0=>8,1=>0)),8=>array(0=>array(0=>10,1=>1)),9=>array(0=>array(0=>10,1=>1)),11=>null);
	$this->flags=array(0=>0,1=>4,2=>5,3=>4,4=>4,5=>4,6=>4,7=>4,8=>0,9=>0,11=>8);
	$this->delim=array(0=>array(0=>"_COUNTAB",1=>"\$",2=>"ALPHA",3=>"'",4=>"\"",5=>"NUMBER",6=>"?>",7=>"}",8=>"<?"),1=>array(0=>"<?php",1=>"<?"),2=>array(0=>"!SAFECHAR"),3=>array(0=>"\$",1=>"{",2=>"}",3=>"!SAFECHAR"),4=>array(0=>"}",1=>"SPACE"),5=>array(0=>"\"",1=>"\\\\",2=>"\\\"",3=>"\$",4=>"{\$",5=>"_COUNTAB"),6=>array(0=>"'",1=>"\\\\",2=>"\\'",3=>"_COUNTAB"),7=>array(0=>"x",1=>"!NUMBER",2=>"NUMBER"),8=>array(0=>"!NUMBER"),9=>array(0=>"!HEXNUM"),11=>null);
	$this->ret=10;
	$this->quit=11;
	$this->names=array(0=>"OUT",1=>"DUMMY_PHP",2=>"FUNCTION",3=>"VAR",4=>"VAR_STR",5=>"QUOTE",6=>"QUOTE1",7=>"NUM",8=>"DEC_NUM",9=>"HEX_NUM",10=>"_RET",11=>"_QUIT");
	$this->data=array(0=>null,1=>null,2=>null,3=>null,4=>null,5=>null,6=>null,7=>null,8=>null,9=>null,11=>"");
	$this->class=array(0=>null,1=>"xlang",2=>null,3=>"php-var",4=>"php-var",5=>"php-quote",6=>"php-quote",7=>"php-num",8=>"php-num",9=>"php-num",11=>"xlang");
	$this->keywords=array(0=>"php-keyword",1=>array("block"=>1,"snippet"=>1,"link"=>1,"plink"=>1,"abstract"=>1,"and"=>1,"array"=>1,"break"=>1,"case"=>1,"catch"=>1,"class"=>1,"clone"=>1,"const"=>1,"continue"=>1,"declare"=>1,"default"=>1,"do"=>1,"else"=>1,"elseif"=>1,"enddeclare"=>1,"endfor"=>1,"endforeach"=>1,"endif"=>1,"endswitch"=>1,"endwhile"=>1,"extends"=>1,"final"=>1,"for"=>1,"foreach"=>1,"function"=>1,"global"=>1,"goto"=>1,"if"=>1,"implements"=>1,"interface"=>1,"instanceof"=>1,"namespace"=>1,"new"=>1,"or"=>1,"private"=>1,"protected"=>1,"public"=>1,"static"=>1,"switch"=>1,"throw"=>1,"try"=>1,"use"=>1,"var"=>1,"while"=>1,"xor"=>1,"__CLASS__"=>1,"__DIR__"=>1,"__FILE__"=>1,"__FUNCTION__"=>1,"__METHOD__"=>1,"__NAMESPACE__"=>1,"die"=>1,"echo"=>1,"empty"=>1,"exit"=>1,"eval"=>1,"include"=>1,"include_once"=>1,"isset"=>1,"list"=>1,"require"=>1,"require_once"=>1,"return"=>1,"print"=>1,"unset"=>1,"true"=>1,"false"=>1,"null"=>1),2=>false);
}

// OUT
function getw0 (&$s, $i, $l) {
	$o = false;
	$start = $i;
	while($i<$l) {
		$p=$i;
		$c1=$s[$p++];
		$c2=$c1.$s[$p];
		if(($c1=="\t"||$c1=="\n")){
			return array(0,$c1,$o,1,$i-$start);
		}
		if($c1=="\$"){
			return array(1,"\$",$o,1,$i-$start);
		}
		if(ctype_alpha($c1)){
			return array(2,$c1,$o,1,$i-$start);
		}
		if($c1=="'"){
			return array(3,"'",$o,1,$i-$start);
		}
		if($c1=="\""){
			return array(4,"\"",$o,1,$i-$start);
		}
		if(ctype_digit($c1)){
			return array(5,$c1,$o,1,$i-$start);
		}
		if($c2=="?>"){
			return array(6,"?>",$o,2,$i-$start);
		}
		if($c1=="}"){
			return array(7,"}",$o,1,$i-$start);
		}
		if($c2=="<?"){
			return array(8,"<?",$o,2,$i-$start);
		}
		$o.=$c1;
		$i++;
	}
	return array(-1,-1,$o,-1,-1);
}

// DUMMY_PHP
function getw1 (&$s, $i, $l) {
	$o = false;
	$start = $i;
	while($i<$l) {
		$p=$i;
		$c1=$s[$p++];
		$c2=$c1.$s[$p++];
		$c3=$c2.$s[$p++];
		$c4=$c3.$s[$p++];
		$c5=$c4.$s[$p];
		if($c5=="<?php"){
			return array(0,"<?php",$o,5,$i-$start);
		}
		if($c2=="<?"){
			return array(1,"<?",$o,2,$i-$start);
		}
		$o.=$c1;
		$i++;
	}
	return array(-1,-1,$o,-1,-1);
}

// FUNCTION
function getw2 (&$s, $i, $l) {
	$o = false;
	$start = $i;
	while($i<$l) {
		$c1=$s[$i];
		if(!($c1=='_'||ctype_alnum($c1))){
			return array(0,$c1,$o,1,$i-$start);
		}
		$o.=$c1;
		$i++;
	}
	return array(-1,-1,$o,-1,-1);
}

// VAR
function getw3 (&$s, $i, $l) {
	$o = false;
	$start = $i;
	while($i<$l) {
		$c1=$s[$i];
		if($c1=="\$"){
			return array(0,"\$",$o,1,$i-$start);
		}
		if($c1=="{"){
			return array(1,"{",$o,1,$i-$start);
		}
		if($c1=="}"){
			return array(2,"}",$o,1,$i-$start);
		}
		if(!($c1=='_'||ctype_alnum($c1))){
			return array(3,$c1,$o,1,$i-$start);
		}
		$o.=$c1;
		$i++;
	}
	return array(-1,-1,$o,-1,-1);
}

// VAR_STR
function getw4 (&$s, $i, $l) {
	$o = false;
	$start = $i;
	while($i<$l) {
		$c1=$s[$i];
		if($c1=="}"){
			return array(0,"}",$o,1,$i-$start);
		}
		if(ctype_space($c1)){
			return array(1,$c1,$o,1,$i-$start);
		}
		$o.=$c1;
		$i++;
	}
	return array(-1,-1,$o,-1,-1);
}

// QUOTE
function getw5 (&$s, $i, $l) {
	$o = false;
	$start = $i;
	while($i<$l) {
		$p=$i;
		$c1=$s[$p++];
		$c2=$c1.$s[$p];
		if($c1=="\""){
			return array(0,"\"",$o,1,$i-$start);
		}
		if($c2=="\\\\"){
			return array(1,"\\\\",$o,2,$i-$start);
		}
		if($c2=="\\\""){
			return array(2,"\\\"",$o,2,$i-$start);
		}
		if($c1=="\$"){
			return array(3,"\$",$o,1,$i-$start);
		}
		if($c2=="{\$"){
			return array(4,"{\$",$o,2,$i-$start);
		}
		if(($c1=="\t"||$c1=="\n")){
			return array(5,$c1,$o,1,$i-$start);
		}
		$o.=$c1;
		$i++;
	}
	return array(-1,-1,$o,-1,-1);
}

// QUOTE1
function getw6 (&$s, $i, $l) {
	$o = false;
	$start = $i;
	while($i<$l) {
		$p=$i;
		$c1=$s[$p++];
		$c2=$c1.$s[$p];
		if($c1=="'"){
			return array(0,"'",$o,1,$i-$start);
		}
		if($c2=="\\\\"){
			return array(1,"\\\\",$o,2,$i-$start);
		}
		if($c2=="\\'"){
			return array(2,"\\'",$o,2,$i-$start);
		}
		if(($c1=="\t"||$c1=="\n")){
			return array(3,$c1,$o,1,$i-$start);
		}
		$o.=$c1;
		$i++;
	}
	return array(-1,-1,$o,-1,-1);
}

// NUM
function getw7 (&$s, $i, $l) {
	$o = false;
	$start = $i;
	while($i<$l) {
		$c1=$s[$i];
		if($c1=="x"){
			return array(0,"x",$o,1,$i-$start);
		}
		if(!ctype_digit($c1)){
			return array(1,$c1,$o,1,$i-$start);
		}
		if(ctype_digit($c1)){
			return array(2,$c1,$o,1,$i-$start);
		}
		$o.=$c1;
		$i++;
	}
	return array(-1,-1,$o,-1,-1);
}

// DEC_NUM
function getw8 (&$s, $i, $l) {
	$o = false;
	$start = $i;
	while($i<$l) {
		$c1=$s[$i];
		if(!ctype_digit($c1)){
			return array(0,$c1,$o,1,$i-$start);
		}
		$o.=$c1;
		$i++;
	}
	return array(-1,-1,$o,-1,-1);
}

// HEX_NUM
function getw9 (&$s, $i, $l) {
	$o = false;
	$start = $i;
	while($i<$l) {
		$c1=$s[$i];
		if(!ctype_xdigit($c1)){
			return array(0,$c1,$o,1,$i-$start);
		}
		$o.=$c1;
		$i++;
	}
	return array(-1,-1,$o,-1,-1);
}

}
