<script>
$( document ).ready(function() {
	console.log( "ready!" );
	$( '<div class="sideswitch"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>' ).prependTo( ".sidebar" );

	$('<div class="sideswitch"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>').prependTo('.mainbar');

	$( ".sideswitch" ).click(function() {
		$('body').toggleClass('sideswitch-wide');
	});
});
</script>

<style>
.sideswitch {
	position: absolute;
	right: 0;
	top: 0;
	width: 3.5em;
	height: 3.5em;
	line-height: 3.5em;
	text-align: center;
	cursor: pointer;
	z-index: 100;
}

.sideswitch:hover {
	/*background: #eee;*/
}

.sideswitch-wide .sidebar {
	display: none;
}

.sideswitch .fa-chevron-right {
	display: none;
}

.sideswitch-wide .sideswitch .fa-chevron-right {
	display: inline-block;
}

.sideswitch-wide .sideswitch .fa-chevron-left {
	display: none;
}

.sideswitch-wide .sideswitch {
	left: 0em;
	top: 0;
	background: #fff;
	width: 1.5em;
	border-right: 1px solid #ddd;
	border-bottom: 1px solid #ddd;
	border-top: 1px solid #ddd;
}

@media screen and (max-width: 50em) {
	.sideswitch .fa-chevron-left {
		display: none;
	}
}

@media screen and (min-width: 50em) {
	.sideswitch-wide .mainbar {
		width: 100%;
	}
}

@media screen and (min-width: 50em) {
	.sideswitch-wide .bars-with-sidebar-left:before {
		background: none;
	}
}

@media screen and (min-width: 50em) {
	.sideswitch-wide .mainbar .form .buttons {
		width: 100% !important;
		left: 0 !important;
	}
}
</style>