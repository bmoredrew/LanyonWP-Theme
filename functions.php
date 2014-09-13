<?php
foreach ( glob( dirname( __FILE__ ) . '/inc/*.php' ) as $file )
	include $file;