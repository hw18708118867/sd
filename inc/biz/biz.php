<?php

function biz_url_ck( $BIZ_URLDB )
{
		return 1;
}


function info_ck( )
{
}

function module_ck( $type )
{
	
								return 1;
	
}

if ( !function_exists( "AvoidGather" ) )
{
				exit( "F" );
}
unset( $BIZ_URLDB );
if ( 20100310 < date( "Ymd" ) )
{
}

$BIZ_MODULEDB[] = "house";
$BIZ_MODULEDB[] = "life";
$BIZ_MODULEDB[] = "fenlei";
$BIZ_MODULEDB[] = "coupon";
$BIZ_MODULEDB[] = "gift";
$BIZ_MODULEDB[] = "hr";
$BIZ_MODULEDB[] = "shop";
$BIZ_MODULEDB[] = "tg";

$life_more = 1;
$IS_BIZPhp168 = 1;
$IS_BIZ = 1;
biz_url_ck( $BIZ_URLDB );
?>
