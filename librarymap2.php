<?php 

// DEMONSTRATION OF HOW A MORE WIDELY FUNCTIONAL NAVIGATION PAGE MIGHT WORK.  TG. 01/04/2017

// Basically librarymap.php with a few reformattings and a dummy study room drop down.


 // Put the locations into an array
 // Perhaps it would be good to adjust the co-ordinates to show approximately where a classmark starts within the block?
 
$locations = array(
	"a_classmark" => array (
		"title"=>"Classmark A",
		"code"=>"a_classmark",
		"floor"=>"Second floor",
		"directions"=>"up the main staircase and bear left",
		"subject"=>"Generalia, general periodicals, museums",
		"xpos"=>215,
		"ypos"=>570,
		"map"=>"uos_second_floor.png"
	),
	
		"b_classmark" => array (
		"title"=>"Classmark B",
		"code"=>"b_classmark",
		"floor"=>"Second floor",
		"directions"=>"up the main staircase and bear left",
		"subject"=>"Philosophy, Religion",
		"xpos"=>215,
		"ypos"=>570,
		"map"=>"uos_second_floor.png"
	),

		"c_classmark" => array (
		"title"=>"Classmark C",
		"code"=>"c_classmark",
		"floor"=>"Second floor",
		"directions"=>"up the main staircase and bear left",
		"subject"=>"History : general and Old World",
		"xpos"=>215,
		"ypos"=>570,
		"map"=>"uos_second_floor.png"
	),	
	
		"d-df_classmark" => array (
		"title"=>"Classmark D-DF",
		"code"=>"d-df_classmark",
		"floor"=>"Second floor",
		"directions"=>"up the main staircase and bear left",
		"subject"=>"History : general and Old World",
		"xpos"=>215,
		"ypos"=>570,
		"map"=>"uos_second_floor.png"
	),	

		"dg-dx_classmark" => array (
		"title"=>"Classmark DG-DX",
		"code"=>"dg-dx_classmark",
		"floor"=>"First floor",
		"directions"=>"up the main staircase and bear left",
		"subject"=>"History : general and Old World, Asian, African, Australasian",
		"xpos"=>110,
		"ypos"=>575,
		"map"=>"uos_first_floor.png"
	),		

		"e-f_classmark" => array (
		"title"=>"Classmark E-F",
		"code"=>"e-f_classmark",
		"floor"=>"First floor",
		"directions"=>"up the main staircase and bear left",
		"subject"=>"History : American",
		"xpos"=>110,
		"ypos"=>575,
		"map"=>"uos_first_floor.png"
	),			

		"g-gm_classmark" => array (
		"title"=>"Classmark G-GM",
		"code"=>"g-gm_classmark",
		"floor"=>"First floor",
		"directions"=>"up the main staircase and bear left",
		"subject"=>"Geography",
		"xpos"=>110,
		"ypos"=>575,
		"map"=>"uos_first_floor.png"
	),	

		"gn-gv_classmark" => array (
		"title"=>"Classmark GN-GV",
		"code"=>"gn-gv_classmark",
		"floor"=>"First floor",
		"directions"=>"up the main staircase and bear left",
		"subject"=>"Anthropology",
		"xpos"=>110,
		"ypos"=>575,
		"map"=>"uos_first_floor.png"
	),	

		"h-hc_classmark" => array (
		"title"=>"Classmark H-HC",
		"code"=>"h-hc_classmark",
		"floor"=>"First floor",
		"directions"=>"up the main staircase and bear left",
		"subject"=>"Sociology",
		"xpos"=>110,
		"ypos"=>575,
		"map"=>"uos_first_floor.png"
	),	

		"hc-hz_classmark" => array (
		"title"=>"Classmark HC-HZ",
		"code"=>"hc-hz_classmark",
		"floor"=>"First floor",
		"directions"=>"up the main staircase and bear right",
		"subject"=>"Sociology, Economics",
		"xpos"=>332,
		"ypos"=>615,
		"map"=>"uos_first_floor.png"
	),	

		"j_classmark" => array (
		"title"=>"Classmark J",
		"code"=>"j_classmark",
		"floor"=>"First floor",
		"directions"=>"up the main staircase and bear right",
		"subject"=>"Politics",
		"xpos"=>332,
		"ypos"=>615,
		"map"=>"uos_first_floor.png"
	),	

		"k_classmark" => array (
		"title"=>"Classmark K",
		"code"=>"k_classmark",
		"floor"=>"First floor",
		"directions"=>"at the front of the Library looking out onto IDS",
		"subject"=>"Law",
		"xpos"=>580,
		"ypos"=>833,
		"map"=>"uos_first_floor.png"
	),	


	"l_classmark" => array (
	"title"=>"Classmark L",
	"code"=>"l_classmark",
	"floor"=>"First floor",
	"directions"=>"At the front of the building",
	"subject"=>"Education",
	"xpos"=>655,
	"ypos"=>680,
	"map"=>"uos_first_floor.png"
	),

	"m_classmark" => array (
	"title"=>"Classmark M",
	"code"=>"m_classmark",
	"floor"=>"First floor",
	"directions"=>"At the front of the building",
	"subject"=>"Music",
	"xpos"=>655,
	"ypos"=>680,
	"map"=>"uos_first_floor.png"
	),

	"n_classmark" => array (
	"title"=>"Classmark N",
	"code"=>"n_classmark",
	"floor"=>"First floor",
	"directions"=>"At the front of the building. Continues on the other side of the staircase",
	"subject"=>"Fine Arts",
	"xpos"=>655,
	"ypos"=>680,
	"map"=>"uos_first_floor.png"
	),

	"p_classmark" => array (
	"title"=>"Classmark P",
	"code"=>"p_classmark",
	"floor"=>"Ground floor",
	"directions"=>"Pass the Information Hub and head to the back of the building",
	"subject"=>"Linguistics, language in general",
	"xpos"=>120,
	"ypos"=>560,
	"map"=>"uos_ground_floor.png"
	),

	"pa_classmark" => array (
	"title"=>"Classmark PA",
	"code"=>"pa_classmark",
	"floor"=>"Ground floor",
	"directions"=>"Pass the Information Hub and head to the back of the building",
	"subject"=>"Classical languages and literatures",
	"xpos"=>120,
	"ypos"=>560,
	"map"=>"uos_ground_floor.png"
	),

	"pb_classmark" => array (
	"title"=>"Classmark PB",
	"code"=>"pb_classmark",
	"floor"=>"Ground floor",
	"directions"=>"Pass the Information Hub and head to the back of the building",
	"subject"=>"Celtic languages and literatures",
	"xpos"=>120,
	"ypos"=>560,
	"map"=>"uos_ground_floor.png"
	),

	"pc_classmark" => array (
	"title"=>"Classmark PC",
	"code"=>"pc_classmark",
	"floor"=>"Ground floor",
	"directions"=>"Pass the Information Hub and head to the back of the building",
	"subject"=>"Romanic languages : Italian, French, Spanish, Portuguese",
	"xpos"=>120,
	"ypos"=>560,
	"map"=>"uos_ground_floor.png"
	),

	"pf_classmark" => array (
	"title"=>"Classmark PF",
	"code"=>"pf_classmark",
	"floor"=>"Ground floor",
	"directions"=>"Pass the Information Hub and head to the back of the building",
	"subject"=>"English language and literature",
	"xpos"=>120,
	"ypos"=>560,
	"map"=>"uos_ground_floor.png"
	),
	
	"pg_classmark" => array (
	"title"=>"Classmark PG",
	"code"=>"pg_classmark",
	"floor"=>"Ground floor",
	"directions"=>"Pass the Information Hub and head to the back of the building",
	"subject"=>"Slavonic languages and literatures",
	"xpos"=>120,
	"ypos"=>560,
	"map"=>"uos_ground_floor.png"
	),
	
	"ph_classmark" => array (
	"title"=>"Classmark PH",
	"code"=>"ph_classmark",
	"floor"=>"Ground floor",
	"directions"=>"Pass the Information Hub and head to the back of the building",
	"subject"=>"American language and literature",
	"xpos"=>120,
	"ypos"=>560,
	"map"=>"uos_ground_floor.png"
	),

	"pj_classmark" => array (
	"title"=>"Classmark PJ",
	"code"=>"pj_classmark",
	"floor"=>"Ground floor",
	"directions"=>"Pass the Information Hub and head to the back of the building",
	"subject"=>"Scandinavian languages and literatures",
	"xpos"=>120,
	"ypos"=>560,
	"map"=>"uos_ground_floor.png"
	),

	"pk_classmark" => array (
	"title"=>"Classmark PK",
	"code"=>"pk_classmark",
	"floor"=>"Ground floor",
	"directions"=>"Pass the Information Hub and head to the back of the building",
	"subject"=>"German language and literature",
	"xpos"=>120,
	"ypos"=>560,
	"map"=>"uos_ground_floor.png"
	),

	"pl-ppk_classmark" => array (
	"title"=>"Classmarks PL-PPK",
	"code"=>"pl-ppk_classmark",
	"floor"=>"Ground floor",
	"directions"=>"Pass the Information Hub and head to the back of the building",
	"subject"=>"Non-European languages and literatures",
	"xpos"=>120,
	"ypos"=>560,
	"map"=>"uos_ground_floor.png"
	),
	
	"pn_classmark" => array (
	"title"=>"Classmark PN",
	"code"=>"pn_classmark",
	"floor"=>"Ground floor",
	"directions"=>"Pass the Information Hub and head to the back of the building",
	"subject"=>"General literature, theatre, cinema",
	"xpos"=>120,
	"ypos"=>560,
	"map"=>"uos_ground_floor.png"
	),	

	"pq1-3_classmark" => array (
	"title"=>"Classmarks PQ 1-3",
	"code"=>"pq1-3_classmark",
	"floor"=>"Ground floor",
	"directions"=>"Pass the Information Hub and head to the back of the building",
	"subject"=>"French literature",
	"xpos"=>120,
	"ypos"=>560,
	"map"=>"uos_ground_floor.png"
	),	

	"pq4-5_classmark" => array (
	"title"=>"Classmarks PQ 4-5",
	"code"=>"pq4-5_classmark",
	"floor"=>"Ground floor",
	"directions"=>"Pass the Information Hub and head to the back of the building",
	"subject"=>"Italian literature",
	"xpos"=>120,
	"ypos"=>560,
	"map"=>"uos_ground_floor.png"
	),		

	"pq6-9_classmark" => array (
	"title"=>"Classmarks PQ 6-9",
	"code"=>"pq6-9_classmark",
	"floor"=>"Ground floor",
	"directions"=>"Pass the Information Hub and head to the back of the building",
	"subject"=>"Spanish and Portuguese literatures",
	"xpos"=>120,
	"ypos"=>560,
	"map"=>"uos_ground_floor.png"
	),	

	"pr_classmark" => array (
	"title"=>"Classmark PR",
	"code"=>"pr_classmark",
	"floor"=>"Ground floor",
	"directions"=>"Pass the Information Hub and head to the back of the building",
	"subject"=>"Overseas literatures in English",
	"xpos"=>120,
	"ypos"=>560,
	"map"=>"uos_ground_floor.png"
	),
	
	"pt_classmark" => array (
	"title"=>"Classmark PT",
	"code"=>"pt_classmark",
	"floor"=>"Ground floor",
	"directions"=>"Pass the Information Hub and head to the back of the building",
	"subject"=>"Overseas literatures in Germanic languages",
	"xpos"=>120,
	"ypos"=>560,
	"map"=>"uos_ground_floor.png"
	),
	
	"pz1-2_classmark" => array (
	"title"=>"Classmarks PZ 1-2",
	"code"=>"pz1-2_classmark",
	"floor"=>"Ground floor",
	"directions"=>"Pass the Information Hub and head to the back of the building",
	"subject"=>"Science Fiction Book Club titles",
	"xpos"=>120,
	"ypos"=>560,
	"map"=>"uos_ground_floor.png"
	),	

	"pz3-9_classmark" => array (
	"title"=>"Classmarks PZ 3-9",
	"code"=>"pz3-9_classmark",
	"floor"=>"Ground floor",
	"directions"=>"Pass the Information Hub and head to the back of the building",
	"subject"=>"Children’s Literature",
	"xpos"=>120,
	"ypos"=>560,
	"map"=>"uos_ground_floor.png"
	),	
	
	"q_classmark" => array (
	"title"=>"Classmark Q",
	"code"=>"q_classmark",
	"floor"=>"Ground floor",
	"directions"=>"just behind the self issue machines",
	"subject"=>"General science",
	"xpos"=>328,
	"ypos"=>580,
	"map"=>"uos_ground_floor.png"
	),

	"qa_classmark" => array (
	"title"=>"Classmark QA",
	"code"=>"qa_classmark",
	"floor"=>"Ground floor",
	"directions"=>"just behind the self issue machines",
	"subject"=>"Systems analysis and control theory",
	"xpos"=>328,
	"ypos"=>580,
	"map"=>"uos_ground_floor.png"
	),

	"qb_classmark" => array (
	"title"=>"Classmark QB",
	"code"=>"qb_classmark",
	"floor"=>"Ground floor",
	"directions"=>"just behind the self issue machines",
	"subject"=>"Astronomy",
	"xpos"=>328,
	"ypos"=>580,
	"map"=>"uos_ground_floor.png"
	),
	
	"qc_classmark" => array (
	"title"=>"Classmark QC",
	"code"=>"qc_classmark",
	"floor"=>"Ground floor",
	"directions"=>"just behind the self issue machines",
	"subject"=>"Terrestrial and cosmic physics",
	"xpos"=>328,
	"ypos"=>580,
	"map"=>"uos_ground_floor.png"
	),	

	"qd_classmark" => array (
	"title"=>"Classmark QD",
	"code"=>"qd_classmark",
	"floor"=>"Ground floor",
	"directions"=>"just behind the self issue machines",
	"subject"=>"Pure mathematics",
	"xpos"=>328,
	"ypos"=>580,
	"map"=>"uos_ground_floor.png"
	),
	
	"qe_classmark" => array (
	"title"=>"Classmark QE",
	"code"=>"qe_classmark",
	"floor"=>"Ground floor",
	"directions"=>"just behind the self issue machines",
	"subject"=>"Applied mathematics, computing",
	"xpos"=>328,
	"ypos"=>580,
	"map"=>"uos_ground_floor.png"
	),

	"qg_classmark" => array (
	"title"=>"Classmark QG",
	"code"=>"qg_classmark",
	"floor"=>"Ground floor",
	"directions"=>"just behind the self issue machines",
	"subject"=>"Physics",
	"xpos"=>328,
	"ypos"=>580,
	"map"=>"uos_ground_floor.png"
	),	

	"qj_classmark" => array (
	"title"=>"Classmark QJ",
	"code"=>"qj_classmark",
	"floor"=>"Ground floor",
	"directions"=>"just behind the self issue machines",
	"subject"=>"Chemistry",
	"xpos"=>328,
	"ypos"=>580,
	"map"=>"uos_ground_floor.png"
	),	
	
	"qm_classmark" => array (
	"title"=>"Classmark QM",
	"code"=>"qm_classmark",
	"floor"=>"Ground floor",
	"directions"=>"just behind the self issue machines",
	"subject"=>"Biochemistry",
	"xpos"=>328,
	"ypos"=>580,
	"map"=>"uos_ground_floor.png"
	),	
	
	"qp_classmark" => array (
	"title"=>"Classmark QP",
	"code"=>"qp_classmark",
	"floor"=>"Ground floor",
	"directions"=>"just behind the self issue machines",
	"subject"=>"Biology",
	"xpos"=>328,
	"ypos"=>580,
	"map"=>"uos_ground_floor.png"
	),	

	"qr_classmark" => array (
	"title"=>"Classmark QR",
	"code"=>"qr_classmark",
	"floor"=>"Ground floor",
	"directions"=>"just behind the self issue machines",
	"subject"=>"Microbiology",
	"xpos"=>328,
	"ypos"=>580,
	"map"=>"uos_ground_floor.png"
	),		

	"qs_classmark" => array (
	"title"=>"Classmark QS",
	"code"=>"qs_classmark",
	"floor"=>"Ground floor",
	"directions"=>"just behind the self issue machines",
	"subject"=>"Botany",
	"xpos"=>328,
	"ypos"=>580,
	"map"=>"uos_ground_floor.png"
	),	
	
	"qu_classmark" => array (
	"title"=>"Classmark QU",
	"code"=>"qu_classmark",
	"floor"=>"Ground floor",
	"directions"=>"just behind the self issue machines",
	"subject"=>"Zoology",
	"xpos"=>328,
	"ypos"=>580,
	"map"=>"uos_ground_floor.png"
	),	

	"qy_classmark" => array (
	"title"=>"Classmark QY",
	"code"=>"qy_classmark",
	"floor"=>"Ground floor",
	"directions"=>"just behind the self issue machines",
	"subject"=>"Human physiology",
	"xpos"=>328,
	"ypos"=>580,
	"map"=>"uos_ground_floor.png"
	),
	
	"qz_classmark" => array (
	"title"=>"Classmark QZ",
	"code"=>"qz_classmark",
	"floor"=>"Ground floor",
	"directions"=>"just behind the self issue machines",
	"subject"=>"Experimental and developmental psychology",
	"xpos"=>328,
	"ypos"=>580,
	"map"=>"uos_ground_floor.png"
	),

	
	"r_classmark" => array (
	"title"=>"Classmark R",
	"code"=>"r_classmark",
	"floor"=>"Ground floor",
	"directions"=>"just behind the self issue machines",
	"subject"=>"Medicine",
	"xpos"=>330,
	"ypos"=>580,
	"map"=>"uos_ground_floor.png"
	),

	"s_classmark" => array (
	"title"=>"Classmark S",
	"code"=>"s_classmark",
	"floor"=>"Ground floor",
	"directions"=>"just behind the self issue machines",
	"subject"=>"Agriculture, horticulture, forestry",
	"xpos"=>330,
	"ypos"=>580,
	"map"=>"uos_ground_floor.png"
	),

	"t_classmark" => array (
	"title"=>"Classmark T",
	"code"=>"t_classmark",
	"floor"=>"Ground floor",
	"directions"=>"at the front of the building, beyond CEC",
	"subject"=>"Technology, applied sciences",
	"xpos"=>530,
	"ypos"=>835,
	"map"=>"uos_ground_floor.png"
	),

	"u_classmark" => array (
	"title"=>"Classmark U",
	"code"=>"u_classmark",
	"floor"=>"Ground floor",
	"directions"=>"at the front of the building, beyond CEC",
	"subject"=>"Military science",
	"xpos"=>530,
	"ypos"=>835,
	"map"=>"uos_ground_floor.png"
	),

	"v_classmark" => array (
	"title"=>"Classmark V",
	"code"=>"v_classmark",
	"floor"=>"Ground floor",
	"directions"=>"at the front of the building, beyond CEC",
	"subject"=>"Naval science",
	"xpos"=>530,
	"ypos"=>835,
	"map"=>"uos_ground_floor.png"
	),

	"y_classmark" => array (
	"title"=>"Classmark Y",
	"code"=>"y_classmark",
	"floor"=>"Ground floor",
	"directions"=>"at the front of the building, beyond CEC",
	"subject"=>"Statistical data",
	"xpos"=>530,
	"ypos"=>835,
	"map"=>"uos_ground_floor.png"
	),

	"z_classmark" => array (
	"title"=>"Classmark Z",
	"code"=>"z_classmark",
	"floor"=>"Ground floor",
	"directions"=>"at the front of the building, beyond CEC",
	"subject"=>"Books, librarianship, bibliography",
	"xpos"=>530,
	"ypos"=>835,
	"map"=>"uos_ground_floor.png"
	),

// Anything that comes across as Core collection gets the same map
// This will become obsolete after Summer of 2017 when the Core is moved to main shelves
// And this code can be removed
	
		"core" => array (
		"title"=>"Core collection",
		"code"=>"core",
		"floor"=>"Ground floor",
		"directions"=>"Behind the Information Hub",
		"subject"=>"all subjects",
		"xpos"=>467,
		"ypos"=>153,
		"map"=>"uos_ground_floor.png"
	),		
	
);
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>University maps</title>
		<script src="http://www.sussex.ac.uk/assets/js/libs/jquery/jquery-1.7.1.min.js" type="text/javascript"></script>
		<style type="text/css" media="all">

		/* experiment trying to get the image to resize responsively */
		/* #floorplan {
			height: auto; 
			width: 100%; 
			}
		.responsive-image {
		height: auto;
		width: 60%;
		} */

		/* Library formatting */
		h1,h2,h3,h4,h5,h6{font-weight:normal;color:#034c5b}.feature h1,.feature h2,.feature h3,.feature h4,.feature h5,.feature h6{color:inherit}h1{font-family:Georgia,serif;font-size:1.7em}#content h1{line-height:1.1em}h2{font-size:1.4em}h3{font-size:1.3em}h4{font-size:1.2em}h5{font-size:1.1em}body,a:hover,#breadcrumbs ul a,#nav li a{color:#244857}a{color:#11718f}#content,div.feature{color:#35535f}#topnav li a,#subnav li a{color:#fff}#breadcrumbs{font-size:.85em}a,#breadcrumbs a:hover{text-decoration:underline}a:hover,#topnav a,#subnav a,#nav a,#breadcrumbs a{text-decoration:none}#content{line-height:1.4em}body,#breadcrumbs,#footer{background-color:#e1e8eb;border-color:#9f9f9f}#page{background-image:url("images/in_page_bottom.png")}#header{background-image:url("images/in_page_top.png")}#topnav li{background:#095972 url("images/in_topnav.png") no-repeat scroll top left;border-bottom:1px solid #fff;border-radius:12px 12px 0 0}#topnav li a{background:transparent url("images/rounded_topright.png") no-repeat scroll top right}#topnav li:hover{background-color:#2b697c;background-image:url("images/in_topnav_hover.png")}#topnav li.active{background-image:url("images/in_topnav_active.png")}#subnav,#topnav li.active{background-color:#0ba0c8}#subnav,#subnav li.first a{border-top-left-radius:12px}#subnav li.first a{background:transparent url("images/rounded_topleft.png") no-repeat scroll top left}#subnav li.active a,#subnav li a:hover{background-color:#0db7df}#topnav li.active{border-bottom:1px solid #0ba0c8}#subnav li a{border-right:1px dotted #fff}#subnav li.last a{border-right:0}#nav li{border-bottom:1px dotted #b7b7b7}#nav li a:hover,#nav li.active a{background:transparent url("images/breadcrumb_arrow.gif") no-repeat scroll 8px center}#nav li li a:hover,#nav li li.active a{background-position:23px center}#topnav{float:right}#topnav li a{padding:10px 20px}#topnav li{margin-left:1px}#subnav li.clear{float:none;display:block}#subnav li a{padding:10px}#subnav li,#subnav,#subnav ul,#subnav a{padding:0}#nav li a{padding-left:20px}#nav li li a{padding-left:35px}#page_title{margin:6px 0 15px 0;padding-bottom:5px;border-bottom:2px solid #ddd}.swatch2,.swatch2fg,.swatch4,.swatch4fg,.swatch5,.swatch5fg,.swatch7,.swatch7fg{color:#35535f !important}.swatch1,.swatch1fg,.swatch3,.swatch3fg{color:#fff !important}.swatch1,.swatch1bg{background-color:#0ba0ca !important}.swatch2,.swatch2bg{background-color:#c2e6ef !important}.swatch3,.swatch3bg{background-color:#096347 !important}.swatch4,.swatch4bg{background-color:#9c9 !important}.swatch5,.swatch5bg{background-color:#0e7c9c !important}.swatch6,.swatch6bg{background-color:#d0eeee !important}.swatch7,.swatch7bg{background-color:#fff !important}
		/* End of Library formatting */
		
			#itsmap
			{
				position:relative;
				width: 1500px;
				/* stop the information box from clipping when it extends beyond the floorplan.  TG.  29/03/2017 */
				//overflow:hidden;
				font-family: Arial, sans-serif;
				
			}
			.map-locations 
			{
				position: relative;
				height: 0px;
			}
			.map-location 
			{
				background: url('http://www.sussex.ac.uk/its/images/map-pointer-white.png') top left no-repeat;
				position: absolute;
				padding-left: 22px;
				max-width: 300px;

	height: auto;
	width: auto\9; /* IE8 */
			}
			.map-location-content
			{
				padding: 10px;
				border: 1px solid #666;
				border-left: 0px solid #efefef;
	max-width: 100%;
	height: auto;
	width: auto\9; /* IE8 */
	
			}
			div.mainpanel {
				background: #fff;
				clear:both;
			}
			div.mainpanel p:last-child {
				margin-bottom: 0px;
			}
			div.mainpanel ol.instructions {
				list-style: decimal;
			}
			div.mainpanel ol li { 
				margin-top: 10px;
			}
			div.header_row { float:left; }
			div.header_cell {width: 80px; float: left; font-size: 75%;}
			
			div.map-marker { background: #000; }
			a.marker { color: #000; }
			div.map-location-content { 	background: #fff; box-shadow: 10px 10px rgba(0, 0, 0, 0.2); }
			div.info_panel { display: none; }
			div.cf { clear: both; height: 1px; }
			
			.info_panel { border: 1px solid #333; padding:10px; margin-bottom: 10px; position: absolute; width: 400px; background: #fff; box-shadow: 10px 10px rgba(0, 0, 0, 0.2);}
			.spacer { height: 5px; clear: left; width: 100%;}
			
			.close_box {position:absolute; top:0px; right:0px; width: 60px; padding: 5px; background: #eeeeee; cursor: pointer; text-transform: uppercase; font-size: 80%; text-align: center;}
			.close_box:hover { background: #aaaaaa; }
			
		</style>
	</head>
	<body>
	
	<!-- Calling in appropriate values from the array -->
		  <?php
	
	// Get the location appended to the url
		  
		  if(isset($_REQUEST["location"])) {
			$l = $_REQUEST["location"];
			$location = $l;	
			}
			
	// .. or give a default if no classmark is set
        // It might be neater to do something tidier here - maybe give a message?
	// Or just hide the image and give the navigation dropdowns?

			 if(empty($_REQUEST["location"])) {
				$location = 'a_classmark';	
			}

        // Get the location appended to the url

                  if(isset($_REQUEST["sequence"])) {
                        $l = $_REQUEST["sequence"];
                        $sequence = $l;
                        }

       // Give a default sequence if no sequence is passed in the url
       // Stops the page reporting an error

                      if(empty($_REQUEST["sequence"])) {
                               $sequence = 'MAIN';
                       }

//  Add a default value
$display_classmark = '';

// Get a human readable version of the classmark from the URL
					    if(isset($_REQUEST["classmark"])) {
                        $l = $_REQUEST["classmark"];
                        $display_classmark = $l;
                        }

	// Remove first and last character		
	$display_classmark=trim($display_classmark, "()");

	// Give a default if not set to avoid error messages when navigating from the drop downs
	if(empty($_REQUEST["classmark"])) {
             $display_classmark = 'Where to find:';
                       }	

					   
// Pick up any Core collection items and send all classmarks to the same map location

if ($sequence == 'CORE') {
$location = 'core';
//echo '<h1>Sequence is: ' . $sequence . '</h1>';

}

// Changes for classmarks that span different locations- e.g. 'd-df_classmark'

elseif (preg_match("/d[a-f]/",$location)) {
  $location = 'd-df_classmark'; 
}

elseif (preg_match("/d[g-x]/",$location)) {
  $location = 'dg-dx_classmark';
}

elseif (preg_match("/^[e-f]/",$location)) {
  $location = 'e-f_classmark';
}

elseif (preg_match("/^g[a-f]/",$location)) {
  $location = 'g-gm_classmark';
}

elseif (preg_match("/^g[n-v]/",$location)) {
  $location = 'gn-gv_classmark';
}

// HC splits between two different areas

elseif (preg_match("/^hc/",$location)) {
	$classmark_range = split (" ", $display_classmark); 
	
		if ($classmark_range[1] < 4000) {
			$location = 'h-hc_classmark';
				}
		else {
			$location = 'hc-hz_classmark';
				}	
}

// end of separating the HCs


elseif (preg_match("/^h[a-b]/",$location)) {
  $location = 'h-hc_classmark';
}

elseif (preg_match("/^h[d-z]/",$location)) {
  $location = 'hc-hz_classmark';
}

// Direct any Dewey classmark to Education

elseif (preg_match("/^[0-9]/",$location)) {
  $location = 'l_classmark';
}

elseif (preg_match("/^pa/",$location)) {
  $location = 'pa_classmark';
}

elseif (preg_match("/^pb/",$location)) {
  $location = 'pb_classmark';
}

elseif (preg_match("/^pc/",$location)) {
  $location = 'pc_classmark';
}

elseif (preg_match("/^pf/",$location)) {
  $location = 'pf_classmark';
}

elseif (preg_match("/^pg/",$location)) {
  $location = 'pg_classmark';
}

elseif (preg_match("/^ph/",$location)) {
  $location = 'ph_classmark';
}

elseif (preg_match("/^pj/",$location)) {
  $location = 'pj_classmark';
}

elseif (preg_match("/^pk/",$location)) {
  $location = 'pk_classmark';
}

elseif (preg_match("/^p[l-p]/",$location)) {
  $location = 'pl-ppk_classmark';
}

elseif (preg_match("/^pn/",$location)) {
  $location = 'pn_classmark';
}

elseif (preg_match("/^pq[1-3]/",$location)) {
  $location = 'pq1-3_classmark';
}

elseif (preg_match("/^pq[4-5]/",$location)) {
  $location = 'pq4-5_classmark';
}

elseif (preg_match("/^pq[6-9]/",$location)) {
  $location = 'pq6-9_classmark';
}

elseif (preg_match("/^pr/",$location)) {
  $location = 'pr_classmark';
}

elseif (preg_match("/^pt/",$location)) {
  $location = 'pt_classmark';
}

elseif (preg_match("/^pz[1-2]/",$location)) {
  $location = 'pz1-2_classmark';
}

elseif (preg_match("/^pz[3-9]/",$location)) {
  $location = 'pz3-9_classmark';
}

elseif (preg_match("/^qa/",$location)) {
  $location = 'qa_classmark';
}

elseif (preg_match("/^qb/",$location)) {
  $location = 'qb_classmark';
}

elseif (preg_match("/^qc/",$location)) {
  $location = 'qc_classmark';
}

elseif (preg_match("/^qd/",$location)) {
  $location = 'qd_classmark';
}

elseif (preg_match("/^qe/",$location)) {
  $location = 'qe_classmark';
}

elseif (preg_match("/^qg/",$location)) {
  $location = 'qg_classmark';
}

elseif (preg_match("/^qj/",$location)) {
  $location = 'qj_classmark';
}

elseif (preg_match("/^qm/",$location)) {
  $location = 'qm_classmark';
}

elseif (preg_match("/^qp/",$location)) {
  $location = 'qp_classmark';
}

elseif (preg_match("/^qr/",$location)) {
  $location = 'qr_classmark';
}

elseif (preg_match("/^qs/",$location)) {
  $location = 'qs_classmark';
}

elseif (preg_match("/^qu/",$location)) {
  $location = 'qu_classmark';
}

elseif (preg_match("/^qy/",$location)) {
  $location = 'qy_classmark';
}

elseif (preg_match("/^qz/",$location)) {
  $location = 'qz_classmark';
}

// Anything not stipulated above can be trimmed to the first character
else {
  $location = substr($location,0,1);
}


// Take care of split location classmarks that start with a single letter, e.g. D 1234

if ($location == 'd') {
  $location = 'd-df_classmark';
}

elseif ($location == 'g') {
  $location = 'g-gm_classmark';
}

elseif ($location == 'h') {
  $location = 'h-hc_classmark';
}


if (strlen($location) <= 2) {
$addToEnd = '_classmark';
$location = $location . $addToEnd;
	}

// End of reformatting the URL parameters

		  $place = $locations[$location];

		  ?>

<!-- Navigate by classmark -->
<!-- Excludes Core Collection, as this depends on sequence instead of location -->
<!-- It makes the drop down misleading, and only applies until June 2017 anyway -->

<h1>University of Sussex Library</h1>
<h2>Finding your way around:</h2>

<table>
<tr>
<th align='left'>By classmark</th>
<td>
	<form action="librarymap2.php" id="classmarkform">

	<select name="location" form="classmarkform" onchange="this.form.submit()">

	<?php

  		foreach ( $locations as $var ) {

			if ($var['code'] != 'core') {
    			echo '<option value="' . $var['code'] . '">' . $var["title"] . '</option>';
			}
	}
	?>
	</select>
</td>

</form>
</tr>


<!-- Navigate by subject -->

<tr>

<th align='left'>By subject</th>
<td>
<form action="librarymap2.php" id="subjectform">

<select name="location" form="subjectform" onchange="this.form.submit()">

	<?php

// Sort the array by subject instead of classmark

//Create index rows
foreach ($locations as $row) {
  foreach ($row as $key => $value){
    ${$key}[]  = $value; //Creates $subject (and the others)
  }  
}

// Now perform the sort
array_multisort($subject, SORT_ASC, $locations);
// End of array sorting

  		foreach ( $locations as $var ) {
			
		if ($var['code'] != 'core') {
    			echo '<option value="' . $var['code'] . '">' . $var["subject"] . '</option>';
			}
		}
	?>

</select>
 </form>

</td>
</tr>

<!-- place marker for study rooms.  Functionality yet to be developed -->
<tr>

<th>Study rooms</th>

<form action="librarymap2.php" id="studyroomform">

<td>
<select name="roomlist" form="studyroomform">
  <option value="volvo">0.1</option>
  <option value="saab">0.2</option>
  <option value="opel">0.3</option>
  <option value="audi">etc</option>
</select>

</td>

</form>

<!-- End of place marker for study rooms -->

</tr>
</table>



<!-- end of drop down navigation -->

					<?php echo '<h3>' . $place["floor"] . '</h3>' ?>	 
		  
		  
		  
		<div class="mainpanel">
			<div id="itsmap" style="position:relative;">
				<div class="map-locations">

					<?php echo '<div class="map-location" style="top:' .  $place["xpos"] . 'px;left:' .  $place["ypos"] . 'px;">' ?>
										
					<!-- ?php echo '<div class="map-location-content"><b>' .  $place["title"] . ': ' .  $place["subject"] . '</b><br /> <br /><mark>' . $place["floor"]. ' - ' . $place["directions"] . '</mark>' ? -->
					<?php echo '<div class="map-location-content"><b><mark>' . $display_classmark . '</mark><br /><br />' .  $place["title"] . ': ' .  $place["subject"] . '</b><br /> <br />' . $place["floor"]. ' - ' . $place["directions"] ?>

					
						</div>

					</div> 

				</div>


				<?php
				// Making the image 60% seems to keep the detail and yet show on a standard screen
				
				echo '<img src=' .  $place["map"] . ' alt="Library floorplan" width="60%"/>';
	
				?>	
				

			</div>
		</div>
		<br />
		
		
	
		
		<script type="text/javascript">
			//show/hide the flags
			$(document).ready(function()
			{
				  //hide and re-show the location flags
				  //little charade necessary to fix a location bug in IE7
				  $(".map-location").hide();
				  $(".map-location").show();
  
				  //show the controls
				  $(".map-controls").show();
  
				  //hide again if clicking individual markers
				  $(".marker").click(function(e)
				  {
					e.preventDefault(); 
					$(this).parent().next().toggle();
				  });
  
				  //
				  $(".panel_link").click(function(e)
				  {
				  	e.preventDefault();
					$(".info_panel").hide();
					var segment = $(this).attr('id');
					var roomId = "#location" + segment.replace("panel_link","");
					var pageWidth = $("#itsmap").width();
					if(e.pageX > (pageWidth/2)) {
						xPoint = "20px";
					} else {
						xPoint = "490px";
					}
					if(e.pageY > 1400) {
						yPoint = "850px";
					} else {
						yPoint = (e.pageY-100) + "px";
					}
					$(roomId).css("left",xPoint);
					$(roomId).css("top",yPoint);
					$(roomId).show();
				  });
  
				  $(".close_box").click(function(e)
				  {
					$(".info_panel").hide();
				  });
			});
		</script>
	</body>
</html>
