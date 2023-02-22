<?php require APPROOT . '/views/inc/header.php'; ?>


 <div class="showports"></div>
 <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-link" href="<?= URLROOT; ?>/ships" >Ships</a>
    <a class="nav-link" href="<?= URLROOT; ?>/ports">Ports</a>
    <a class="nav-link active" href="<?= URLROOT; ?>/cruises">Cruises</a>
    <a class="nav-link " href="<?= URLROOT; ?>/rooms">Rooms</a>
    <a class="nav-link" href="<?= URLROOT; ?>/roomtypes">Room Types</a>
    <a class="nav-link " href="<?= URLROOT; ?>/clientsreservations">Clients Reservations</a>


  </div>
</nav> 
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">.....</div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0"><a href="<?= URLROOT; ?>/ports" >lkqDNFIOD</a></div>
  <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0"><table class="table bg-light ">
  <div class="col-md-6 ">
    </div>
  <?php flash('cruise_message'); ?>
 <?php  



?>
  <div class="col-ml-6">
      <a class="btn btn-primary pull-right" href="<?php echo URLROOT; ?>/cruises/add"><i class="fa fa-pencil" aria-hidden="true"></i> Add Cruise</a>
    </div>
  <thead class="text-center">
    <tr>
      <th scope="col">N°</th> 
      <th scope="col">Nom</th>

      <th scope="col">Prix</th>
      <th scope="col">photo</th>
      <th scope="col">Nombre de nuits</th>
      <th scope="col">Port de depart</th>
      <th scope="col">Date de depart</th>
      <th scope="col">itineraire</th>
      <th scope="col">Ship</th>
      <th scope="col">Description</th>
      


    </tr>
  </thead> 
  <!-- for debbuging  -->
  <!-- <pre>
                    <?php print_r($data) ; ?>
                    <pre> -->
                      <!-- end debbuging -->
  <?php foreach($data['cruises'] as $cruise) : ?>
  <tbody class="text-center">
    <tr>
      <th scope="row" class="counterCell"></th>
      <td><?php echo $cruise->nom; ?></td>
      <td><?php printf("%.2f",$cruise->prix ) ; ?>DH</td>
      <td><img src="./<?php echo $cruise->image; ?>" width="80px"></td>
      <td><?php echo $cruise->nombre_nuits; ?></td>
      <td><?php echo $cruise->port_depart; ?></td>
      <td><?php echo $cruise->date_depart; ?></td>
      <td><?php echo  $cruise->itineraire ?></td> 
      <td><?php echo  $cruise->shipnom ?></td> 
      <td><?php echo  $cruise->descriptif ?></td> 
      <td><a class="btn btn-dark " href="<?php echo URLROOT; ?>/cruises/show/<?php echo $cruise->id; ?>">More</a>
</td>
   </tr>
  </tbody>
  <?php endforeach; ?>
</table></div>

<div class="pag">
                  <nav aria-label="Page navigation ">
                  <ul class="pagination">
                    <li class="page-item">
                    <?php for($i = 1 ; $i <= 5 ; $i++): ?>

                      <a class="page-link" href="<?= URLROOT?>/cruises?page=<?=$i-1;?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <?php for($i = 1 ; $i <= 11 ; $i++): ?>
                    <li class="page-item"><a class="page-link" href="<?= URLROOT?>/cruises?page=<?=$i;?>"><?= $i;?></a></li>
                    <?php endfor ;?>
                  

                    <li class="page-item">
                      <a class="page-link" href="<?= URLROOT?>/cruises?page=<?=$i+1;?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                    <?php endfor ;?>
                  </ul>
                  </nav>
                </div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>





















<!doctype html>
<html lang="en">
<head>
    
    
<title> Cruises – Amazing Cruises and Cruise Deals | Royal Caribbean Cruises</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="application-name" content="Royal Caribbean International"/>
<meta name="description" content="Cruise to unforgettable destinations with Royal Caribbean. Save with the best cruise deals and packages to the Caribbean and the Bahamas. Start your dream vacation with a cruise to Alaska, the Mediterranean, Mexico, or the South Pacific."/>
<meta name="keywords"/>
<meta http-equiv="content-language" content="en_US"/>
<meta name="twitter:site" content="@royalcaribbean"/>
<meta name="twitter:description"/>
<meta name="twitter:title" content="Royal Caribbean International"/>
<meta name="twitter:url" content="http://www.royalcaribbean.com"/>
<meta property="og:title" content=" Cruises – Amazing Cruises and Cruise Deals | Royal Caribbean Cruises"/>
<meta property="og:description" content="Cruise to unforgettable destinations with Royal Caribbean. Save with the best cruise deals and packages to the Caribbean and the Bahamas. Start your dream vacation with a cruise to Alaska, the Mediterranean, Mexico, or the South Pacific."/>
<meta property="og:image" content="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/2023/january/january-flash-3/Men_Women_entering_Up_up_and_away_HP_Jumbotron_1920_1080_FAM-NF_2x.jpg?$1440x600$"/>
<meta property="og:site_name" content="US English Homepage"/>
<meta property="og:email" content="reservationroyal2@rccl.com"/>
<meta property="og:phone_number" content="866-562-7625"/>
<meta name="p:domain_verify" content="5e9e64513e5d13bba8acda3cc0cf1175"/>
<meta name="format-detection" content="telephone=no"/>
<meta name="page-path" content="%2Fcontent%2Froyal%2Fusa%2Fenhttps%3A%2F%2F"/>
<meta name="replicated-date" content="1677009687128"/>

<link rel="icon" href="/etc/designs/royal/icons/favicon.ico"/>
<link rel="canonical" href="https://www.royalcaribbean.com"/>



    <link rel="alternate" href="https://www.royalcaribbean.com/swe/sv" hreflang="sv-se"/>

    <link rel="alternate" href="https://www.royalcaribbean.com/mex/es" hreflang="es-mx"/>

    <link rel="alternate" href="https://www.royalcaribbean.com" hreflang="en-us"/>

    <link rel="alternate" href="https://www.royalcaribbean.com/usa/es" hreflang="es-us"/>

    <link rel="alternate" href="https://www.royalcaribbean.com/esp/es" hreflang="es-es"/>

    <link rel="alternate" href="https://www.royalcaribbean.com/hkg/zh" hreflang="zh-hk"/>

    <link rel="alternate" href="https://www.royalcaribbean.com" hreflang="x-default"/>

    <link rel="alternate" href="https://www.royalcaribbean.com/nor/no" hreflang="no-no"/>

    <link rel="alternate" href="https://www.royalcaribbean.com/deu/de" hreflang="de-de"/>

    <link rel="alternate" href="https://www.royalcaribbean.com/gbr/en" hreflang="en-gb"/>

    <link rel="alternate" href="https://www.royalcaribbean.com/ita/it" hreflang="it-it"/>

    <link rel="alternate" href="https://www.royalcaribbean.com/sgp/en" hreflang="en-sg"/>

    <link rel="alternate" href="https://www.royalcaribbean.com/aus/en" hreflang="en-au"/>


    
    
<link rel="preload" href="/etc/designs/royal/fonts/Kapra-Regular-Opt.woff2" as="font" crossorigin/>
<link rel="preload" href="/etc/designs/royal/fonts/ProximaNova-Regular.woff2" as="font" crossorigin/>
<link rel="preload" href="/etc/designs/royal/fonts/ProximaNova-RegularIt.woff2" as="font" crossorigin/>
<link rel="preload" href="/etc/designs/royal/fonts/ProximaNova-Bold.woff2" as="font" crossorigin/>
<link rel="preload" href="/etc/designs/royal/fonts/ProximaNova-Light.woff2" as="font" crossorigin/>

    
    
<link rel="stylesheet" href="/etc.clientlibs/rccl-core/clientlibs/main.min.css?_=0.0.153" type="text/css">


    
    
<link rel="stylesheet" href="/etc.clientlibs/rci-structure/clientlibs/base.min.css?_=3.54.0" type="text/css">





    
    
<link rel="stylesheet" href="/etc.clientlibs/rccl-commons/clientlibs/components.min.css?_=0.0.164" type="text/css">


    
    
<link rel="stylesheet" href="/etc.clientlibs/rccl-hero-components/clientlibs/components.min.css?_=0.0.146" type="text/css">


    
    
<link rel="stylesheet" href="/etc.clientlibs/rccl-cruise-search/clientlibs/components.min.css?_=0.0.18" type="text/css">


    
    
<link rel="stylesheet" href="/etc.clientlibs/rccl-carousels/clientlibs/components.min.css?_=0.0.152" type="text/css">


    
    
<link rel="stylesheet" href="/etc.clientlibs/rccl-forms/clientlibs/components.min.css?_=0.0.43" type="text/css">



<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" media="print" onload="this.media='all'"/>



    <link type="text/css" href="/content/dam/royal/css/promos/standard-colors/White%20Font%20Mobile%202021.css" rel="stylesheet"/>
<link type="text/css" href="/content/dam/royal/css/temporary/updateRetargetingCaptionStyling.css" rel="stylesheet"/>
<link type="text/css" href="/content/dam/royal/css/temporary/updateHeroCountdownAligment.css" rel="stylesheet"/>
<link type="text/css" href="/content/dam/royal/css/temporary/homepageHeroBannerLeftGradient.css" rel="stylesheet"/>
<link type="text/css" href="/content/dam/royal/css/temporary/development/dog-385-header-overlaps-find-a-cruise-widget-workaround.css" rel="stylesheet"/>
<link type="text/css" href="/content/dam/royal/css/health-safety/healthSafety_pageComponents.css" rel="stylesheet"/>
<link type="text/css" href="/content/dam/royal/css/promos/hero_tall_gradient_fix.css" rel="stylesheet"/>
<link type="text/css" href="/content/dam/royal/css/temporary/new-pink-flag.css" rel="stylesheet"/>
<link type="text/css" href="/content/dam/royal/css/cruise-carousel-countdown-color-override.css" rel="stylesheet"/>
<link type="text/css" href="/content/dam/royal/css/temporary/toggle.css" rel="stylesheet"/>
<link type="text/css" href="/content/dam/royal/css/temporary/icon_bookNow.css" rel="stylesheet"/>









    
    <script>        
        var bookedPageSegments = ('4489324,6450583,6712992').split(',');
        var bookedPagePath = '\/booked';
                bookedPagePath = bookedPagePath && window.location.pathname !== '/' ? window.location.pathname + bookedPagePath : bookedPagePath;
                bookedPagePath += bookedPagePath ? window.location.search : '';
        var bookedPageTimeout = '500';
    </script>
    
    

  
    
  



  
    <!-- GLOBALIZATION - TEALIUM SYNC -->
    
  
  

<!-- Dynatrace Scripts -->

    
        <!-- GLOBALIZATION - DYNATRACE -->
        <script charset='UTF-8'>
window['adrum-start-time'] = new Date().getTime();
(function(config) {
  config.appKey = 'AD-AAB-AAU-AJK';
  config.adrumExtUrlHttp = 'http://cdn.appdynamics.com';
  config.adrumExtUrlHttps = 'https://cdn.appdynamics.com';
  config.beaconUrlHttp = 'http://pdx-col.eum-appdynamics.com';
  config.beaconUrlHttps = 'https://pdx-col.eum-appdynamics.com';
  config.xd = {
    enable: false
  };
  config.spa = {
    "spa2": true
  };
  config.navComplete = {
    maxResourceQuietTime: 500,
    maxXhrQuietTime: 500,
    maxInactiveTime: 500
  };
  var pageName = "";
  //set error page names
  switch (window.document.title) {
    case "Page Not Found | Royal Caribbean Cruises":
      pageName = "404 Error Page";
      break;
    case "Server Error | Royal Caribbean Cruises":
      pageName = "5xx Error Page";
      break;
  }
  //set AB test for new cruise search
  var AB_test = "";
  var scripts = document.head.querySelectorAll('script');
  for (let i = 0; i < scripts.length;i++) {
    if(scripts.item(i).outerHTML.includes('var cruiseAssetsBasePath = /cruiseassets/graph;') && !scripts.item(i).outerHTML.includes('https://cdn.appdynamics.com')) {
      AB_test = "Cruises_Graph";
      break;
    }
  }
  //send data to appd
  config.userEventInfo = {
    PageView: function(context) {
      return {
        userPageName: pageName,
        userData: {
          AB_test: AB_test
        },
        userDataLong: {
          cookieSize: encodeURIComponent('<q></q>' + document.cookie).length
        }
      };
    },
    Ajax: function (context) {
      return {
        userDataLong: {
          cookieSize: encodeURIComponent('<q></q>' + document.cookie).length
        }
      };
    }
  };
})
(window['adrum-config'] || (window['adrum-config'] = {}));
</script>
<script src='//cdn.appdynamics.com/adrum/adrum-latest.js?_=3.34.0'></script>
        
    


<!-- Monetate Scripts -->

    
    
        <!-- GLOBALIZATION MONETATE -->
        
        <!-- Begin Monetate ExpressTag Async v6.1. Place at start of document head. DO NOT ALTER. -->
<script type="text/javascript">
var monetateT = new Date().getTime();
(function() {
    var p = document.location.protocol;
    if (p == "http:" || p == "https:") {
        var m = document.createElement('script'); m.type = 'text/javascript'; m.async = true; m.src = (p == "https:" ? "https://s" : "http://") + "e.monetate.net/js/2/a-522094be/p/royalcaribbean.com/custom.js";
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(m, s);
    }
})();
</script>
<!-- End Monetate tag. -->
    


</head>
<body class="page ">
    <div class="page__main">
        
        <div id="rmkt_cont"></div>
        
	
	<!-- TODO: CREATE AND CALL JAVA METHOD IN PAGE HELPER CLASS, TO CHECK IF CURRENT USER HAS PERMISSIONS TO EDIT HEADER -->
	
	
	
	
		
		
	
	
	<div class="header__wrapper">
		


	<div id="marketRootPath" data-marketRootPath="/content/royal/usa" data-globalizationEnable="true" data-languagePage="en"></div>

<script type="text/javascript">
    var mainInitArray = new Array();
</script>

<script type="text/javascript">
	var DATA_CONFIG = {};
	try {
		DATA_CONFIG = {"jcr:mixinTypes": ["cq:ReplicationStatus"],"akamai_forward_paths": ["DEFAULT"],"akamai_strip_path_prefix": "/","akamai_suffixes": [".infinity.json"],"wuc": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"_SVN": {"swap": {"country-name": {"value": "Slovenia","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}}},"_ERI": {"swap": {"country-name": {"value": "Eritrea","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_SLE": {"swap": {"country-name": {"value": "Sierra Leone","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_GIB": {"swap": {"country-name": {"value": "Gibraltar","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_AND": {"swap": {"country-name": {"value": "Andorra","selector": "header .country"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"},"phone-number": {"selector": "header .call-us"}}},"_PRT": {"swap": {"country-name": {"value": "Portugal","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}}},"_UZB": {"swap": {"country-name": {"value": "Uzbekistan","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_YMD": {"swap": {"country-name": {"value": "Republic of Yemen","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_BRA": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"phone-number": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"value": "(11) 3090-7200","selector": "header .call-us-number"},"country-name": {"value": "Brasil","selector": "header .country"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}},"preserve": {"country-name": {"domain": "royalcaribbean.com.br","value": "Brasil"}}},"_CUR": {"swap": {"country-name": {"value": "Curacao","selector": "header .country"},"phone-number": {"value": "(833) 328-3260 / (669) 272-1083","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_KIR": {"swap": {"country-name": {"value": "Kiribati","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_CCK": {"swap": {"country-name": {"value": "Cocos Keeling Island","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_SEN": {"swap": {"country-name": {"value": "Senegal Republic","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_AFG": {"swap": {"country-name": {"value": "Afghanistan","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_ASM": {"swap": {"country-name": {"value": "American Samoa","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_TJK": {"swap": {"country-name": {"value": "Tajikistan","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_SAU": {"swap": {"country-name": {"value": "Saudi Arabia","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_BVT": {"swap": {"country-name": {"value": "Bouvet Island","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_BFA": {"swap": {"country-name": {"value": "Burkina Faso","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_CYP": {"swap": {"country-name": {"value": "Cyprus","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}}},"_ARE": {"swap": {"country-name": {"value": "United Arab Emirates","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_AGO": {"swap": {"country-name": {"value": "Angola","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_CPV": {"swap": {"country-name": {"value": "Cape Verde Islands","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_TUR": {"swap": {"country-name": {"value": "Turkey","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_GEO": {"swap": {"country-name": {"value": "Georgia","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_MCD": {"swap": {"country-name": {"value": "Macedonia","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_AUT": {"swap": {"country-name": {"value": "AUSTRIA","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"}}},"_ISR": {"swap": {"country-name": {"value": "Israel","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_SLB": {"swap": {"country-name": {"value": "Solomon Islands","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_VCT": {"swap": {"country-name": {"value": "St. Vincent & Grenadi","selector": "header .country"},"phone-number": {"value": "(833) 328-3260 / (669) 272-1083","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_LUX": {"swap": {"country-name": {"value": "Luxembourg","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}}},"_GUY": {"swap": {"country-name": {"value": "Guyana","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_MTO": {"swap": {"country-name": {"value": "Martinique","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_BGD": {"swap": {"country-name": {"value": "Bangladesh","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_ARM": {"swap": {"country-name": {"value": "Armenia","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_ATA": {"swap": {"country-name": {"value": "Antarctica","selector": "header .country"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"},"phone-number": {"selector": "header .call-us"}}},"_CHL": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"country-name": {"value": "Chile","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}},"preserve": {"country-name": {"domain": "royalcaribbean-espanol.com","value": "Chile"}}},"_MEX": {"swap": {"phone-number": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"value": "D.F. 55-5062-9200 / INT. 001855-877-3492","selector": "header .call-us-number"},"country-name": {"value": "Mexico","selector": "header .country"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}},"preserve": {"country-name": {"domain": "royalcaribbean-espanol.com","value": "México"}}},"_ANT": {"swap": {"country-name": {"value": "Netherlands Antilles","selector": "header .country"},"phone-number": {"value": "(833) 328-3260 / (669) 272-1083","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_HUN": {"swap": {"country-name": {"value": "Hungary","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}}},"_LVA": {"swap": {"country-name": {"value": "Latvia","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"}}},"_ZWE": {"swap": {"country-name": {"value": "Zimbabwe","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_BRB": {"swap": {"country-name": {"value": "Barbados","selector": "header .country"},"phone-number": {"value": "(833) 328-3260 / (669) 272-1083","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_LSO": {"swap": {"country-name": {"value": "Lesotho","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_CMR": {"swap": {"country-name": {"value": "Cameroon","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_NLD": {"swap": {"country-name": {"value": "Netherlands","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}}},"_TGO": {"swap": {"country-name": {"value": "Togo","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_PAN": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"country-name": {"value": "Panama","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}},"preserve": {"country-name": {"domain": "royalcaribbean-espanol.com","value": "Panamá"}}},"_BOL": {"swap": {"country-name": {"value": "Bolivia","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}},"preserve": {"country-name": {"domain": "royalcaribbean-espanol.com","value": "Bolivia"}}},"_ATF": {"swap": {"country-name": {"value": "French South. Territ","selector": "header .country"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"},"phone-number": {"selector": "header .call-us"}}},"_VGB": {"swap": {"country-name": {"value": "Virgin Islands (Brit)","selector": "header .country"},"phone-number": {"value": "(833) 328-3260 / (669) 272-1083","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_AIA": {"swap": {"country-name": {"value": "Anguilla","selector": "header .country"},"phone-number": {"value": "(833) 328-3260 / (669) 272-1083","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_MNP": {"swap": {"country-name": {"value": "Northern Mariana Isl","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_STK": {"swap": {"country-name": {"value": "St Kitts","selector": "header .country"},"phone-number": {"value": "(833) 328-3260 / (669) 272-1083","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_BIH": {"swap": {"country-name": {"value": "Bosnia and Herzegovina","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_POL": {"swap": {"country-name": {"value": "Poland","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}}},"_PRY": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"country-name": {"value": "Paraguay","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}},"preserve": {"country-name": {"domain": "royalcaribbean-espanol.com","value": "Paraguay"}}},"_FXX": {"swap": {"country-name": {"value": "Metropolitan France","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_COK": {"swap": {"country-name": {"value": "Cook Islands","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_STP": {"swap": {"country-name": {"value": "São Tomé and Príncipe","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_OTH": {"swap": {"country-name": {"value": "OTHER","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_TKL": {"swap": {"country-name": {"value": "Tokelau","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_FRA": {"swap": {"country-name": {"value": "France","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}}},"_CYM": {"swap": {"country-name": {"value": "Cayman Islands","selector": "header .country"},"phone-number": {"value": "(833) 328-3260 / (669) 272-1083","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_TON": {"swap": {"country-name": {"value": "Tonga Islands","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_PSE": {"swap": {"country-name": {"value": "Palestine","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_TTO": {"swap": {"country-name": {"value": "Trinidad and Tobago","selector": "header .country"},"phone-number": {"value": "(833) 328-3260 / (669) 272-1083","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_RWA": {"swap": {"country-name": {"value": "Rwanda","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_BTN": {"swap": {"country-name": {"value": "Bhutan","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_TWN": {"swap": {"country-name": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"value": "Taiwan, China","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_ZAF": {"swap": {"country-name": {"value": "South Africa","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_SGP": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"phone-number": {"value": "+65 6305 0033","selector": "header .call-us-number"},"country-name": {"value": "Singapore","selector": "header .country"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_PRI": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"country-name": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"value": "Puerto Rico/USA","selector": "header .country"},"phone-number": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"value": "(833) 328-3260 / (669) 272-1083","selector": "header .call-us-number"}},"poof": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"alert": {"selector": ".rcl_alert_slider_bottom"}},"preserve": {"country-name": {"domain": "royalcaribbean-espanol.com","value": "Puerto Rico/USA"}}},"_KAZ": {"swap": {"country-name": {"value": "Kazakhstan","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_ITA": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"phone-number": {"value": "02.89.73.21.73","selector": "header .call-us-number"},"country-name": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"value": "Italia","selector": "header .country"}}},"_TCD": {"swap": {"country-name": {"value": "Chad Republic","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_NIU": {"swap": {"country-name": {"value": "Niue","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_ATG": {"swap": {"country-name": {"value": "Antigua and Barbuda","selector": "header .country"},"phone-number": {"value": "(833) 328-3260 / (669) 272-1083","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_MWI": {"swap": {"country-name": {"value": "Malawi","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_CRI": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"country-name": {"value": "Costa Rica","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}},"preserve": {"country-name": {"domain": "royalcaribbean-espanol.com","value": "Costa Rica"}}},"_ESH": {"swap": {"country-name": {"value": "Western Sahara","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_CIV": {"swap": {"country-name": {"value": "Côte d'Ivoire","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_ETH": {"swap": {"country-name": {"value": "Ethiopia","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_GNQ": {"swap": {"country-name": {"value": "Equatorial Guinea","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_COL": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"country-name": {"value": "Colombia","selector": "header .country"},"phone-number": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"value": "01-800-518-9660","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}},"preserve": {"country-name": {"domain": "royalcaribbean-espanol.com","value": "Colombia"}}},"_LBR": {"swap": {"country-name": {"value": "Liberia","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_": {},"_TKM": {"swap": {"country-name": {"value": "Turkmenistan","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_IRL": {"swap": {"country-name": {"value": "Ireland","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_SWE": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"country-name": {"value": "Sverige","selector": "header .country"}}},"_HTI": {"swap": {"country-name": {"value": "Haiti","selector": "header .country"},"phone-number": {"value": "(833) 328-3260 / (669) 272-1083","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_CXR": {"swap": {"country-name": {"value": "Christmas Island","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_SOM": {"swap": {"country-name": {"value": "Somalia","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_REU": {"swap": {"country-name": {"value": "Reunion Island","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_LTU": {"swap": {"country-name": {"value": "Lithuania","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"}}},"_VEN": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"country-name": {"value": "Venezuela","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}},"preserve": {"country-name": {"domain": "royalcaribbean-espanol.com","value": "Venezuela"}}},"_IND": {"swap": {"country-name": {"value": "India","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_NAM": {"swap": {"country-name": {"value": "Namibia","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_RUE": {"swap": {"country-name": {"value": "Russia","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_LBY": {"swap": {"country-name": {"value": "Libya","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_CAN": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"phone-number": {"value": "(800) 762-0585","selector": "header .call-us-number"},"country-name": {"value": "Canada","selector": "header .country"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_TZA": {"swap": {"country-name": {"value": "Tanzania","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_DEU": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"phone-number": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"value": "00 800 76925227","selector": "header .call-us-number"},"country-name": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"value": "Deutschland/Österreich/Schweiz","selector": "header .country"}},"poof": {}},"_HMD": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"country-name": {"value": "Heard and McDonald Island","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_IDN": {"swap": {"country-name": {"value": "Indonesia","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_SJM": {"swap": {"country-name": {"value": "Svalbard and Jan Mayen Is","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_MCO": {"swap": {"country-name": {"value": "Monaco","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_PYF": {"swap": {"country-name": {"value": "French Polynesia","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_KHM": {"swap": {"country-name": {"value": "Cambodia","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_FSM": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"country-name": {"value": "Micronesia","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_ECU": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"country-name": {"value": "Ecuador","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}},"preserve": {"country-name": {"domain": "royalcaribbean-espanol.com","value": "Ecuador"}}},"_BEN": {"swap": {"country-name": {"value": "Benin","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_NGA": {"swap": {"country-name": {"value": "Nigeria","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_LAO": {"swap": {"country-name": {"value": "Laos","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_MAC": {"swap": {"country-name": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"value": "Macao, China","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_AZE": {"swap": {"country-name": {"value": "Azerbaijan","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_BGR": {"swap": {"country-name": {"value": "Bulgaria","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}}},"_NPL": {"swap": {"country-name": {"value": "Nepal","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_YUG": {"swap": {"country-name": {"value": "Yugoslavia","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_WSM": {"swap": {"country-name": {"value": "Samoa (Western Ind S)","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_SUR": {"swap": {"country-name": {"value": "Suriname","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_ESP": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"phone-number": {"value": "900 374 400","selector": "header .call-us-number"},"country-name": {"value": "España","selector": "header .country"}},"preserve": {"country-name": {"domain": "royalcaribbean.es","value": "España"}}},"_MOZ": {"swap": {"country-name": {"value": "Mozambique","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_TMP": {"swap": {"country-name": {"value": "East Timor","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_VNM": {"swap": {"country-name": {"value": "Vietnam","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_CAF": {"swap": {"country-name": {"value": "Central African Republic","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_NRU": {"swap": {"country-name": {"value": "Nauru","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_SHN": {"swap": {"country-name": {"value": "St Helena","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_UGA": {"swap": {"country-name": {"value": "Uganda","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_MSR": {"swap": {"country-name": {"value": "Montserrat","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_SRB": {"swap": {"country-name": {"value": "Serbia","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_KWT": {"swap": {"country-name": {"value": "Kuwait","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_CHS": {"swap": {"country-name": {"value": "SWITZERLAND","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_GRD": {"swap": {"country-name": {"value": "Grenada","selector": "header .country"},"phone-number": {"value": "(833) 328-3260 / (669) 272-1083","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_PNG": {"swap": {"country-name": {"value": "Papua New Guinea","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_GUF": {"swap": {"country-name": {"value": "French Guiana","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_COG": {"swap": {"country-name": {"value": "Republic of Congo","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_URY": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"country-name": {"value": "Uruguay","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}},"preserve": {"country-name": {"domain": "royalcaribbean-espanol.com","value": "Uruguay"}}},"_KGZ": {"swap": {"country-name": {"value": "Kyrgyzstan","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_VUT": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"country-name": {"value": "Vanuatu","selector": "header .country"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"},"phone-number": {"selector": "header .call-us"}}},"_SLV": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"country-name": {"value": "El Salvador","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}},"preserve": {"country-name": {"domain": "royalcaribbean-espanol.com","value": "El Salvador"}}},"_NFK": {"swap": {"country-name": {"value": "Norfolk Island","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_SMR": {"swap": {"country-name": {"value": "San Marino","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_GIN": {"swap": {"country-name": {"value": "Guinea","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_GTM": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"country-name": {"value": "Guatemala","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}},"preserve": {"country-name": {"domain": "royalcaribbean-espanol.com","value": "Guatemala"}}},"_GUM": {"swap": {"country-name": {"value": "Guam","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_USA": {"swap": {"phone-number": {"value": "(866) 562-7625","selector": "header .call-us-number"},"country-name": {"value": "United States","selector": "header .country"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_BHS": {"swap": {"country-name": {"value": "Bahamas","selector": "header .country"},"phone-number": {"value": "(833) 328-3260 / (669) 272-1083","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_KNA": {"swap": {"country-name": {"value": "St Kitts and Nevis","selector": "header .country"},"phone-number": {"value": "(833) 328-3260 / (669) 272-1083","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_KEN": {"swap": {"country-name": {"value": "Kenya","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_MYS": {"swap": {"country-name": {"value": "Malaysia","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_FJI": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"country-name": {"value": "Fiji Islands","selector": "header .country"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"},"phone-number": {"selector": "header .call-us"}}},"_PHL": {"swap": {"country-name": {"value": "Philippines","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_NIC": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"country-name": {"value": "Nicaragua","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}},"preserve": {"country-name": {"domain": "royalcaribbean-espanol.com","value": "Nicaragua"}}},"_TUV": {"swap": {"country-name": {"value": "Tuvalu","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_SVK": {"swap": {"country-name": {"value": "Slovakia","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}}},"_MNG": {"swap": {"country-name": {"value": "Mongolian People's Republic","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_UAE": {"swap": {"country-name": {"value": "Dubai","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_MRT": {"swap": {"country-name": {"value": "Mauritania","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_BWA": {"swap": {"country-name": {"value": "Botswana","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_BEL": {"swap": {"country-name": {"value": "Belgium","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}}},"_LKA": {"swap": {"country-name": {"value": "Sri Lanka","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"agency": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"idx18": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"_18881": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"bounce": {"domain": "","target": "/partner-booking?wuc=18881&referer&dest=%2F%3Fwuc%3D18881","excuses": {"acceptTerms": "Y"}},"swap": {"phone-number": {"value": "780 483 2573","selector": "header .call-us-number"}},"pluck": {"call-link": {"selector": "footer .links li a:contains('Contact Us')"}},"poof": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"country-name": {"selector": "header .countrySelector"},"travel-agent": {"selector": ".announcements > div > div:contains('Locate a Travel Agent')"}}}}},"_MLI": {"swap": {"country-name": {"value": "Mali Republic","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_MUS": {"swap": {"country-name": {"value": "Mauritius","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_UKR": {"swap": {"country-name": {"value": "Ukraine","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_OMN": {"swap": {"country-name": {"value": "Oman","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_HRV": {"swap": {"country-name": {"value": "Croatia","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}}},"_FRO": {"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"},"phone-number": {"selector": "header .call-us"}},"swap": {"country-name": {"value": "Faroe Islands","selector": "header .country"}}},"_LIE": {"swap": {"country-name": {"value": "Liechtenstein","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_VAT": {"swap": {"country-name": {"value": "Vatican City","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_MMR": {"swap": {"country-name": {"value": "Myanmar","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_PCN": {"swap": {"country-name": {"value": "Pitcairn Islands","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_DNK": {"swap": {"country-name": {"value": "Denmark","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"}}},"_BRN": {"swap": {"country-name": {"value": "Brunei Darussalam","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_TUN": {"swap": {"country-name": {"value": "Tunisia","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_MDA": {"swap": {"country-name": {"value": "Moldova","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_MYT": {"swap": {"country-name": {"value": "Mayotte Island","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_ZMB": {"swap": {"country-name": {"value": "Zambia","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_HND": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"country-name": {"value": "Honduras","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}},"preserve": {"country-name": {"domain": "royalcaribbean-espanol.com","value": "Honduras"}}},"_QAT": {"swap": {"country-name": {"value": "Qatar","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_ABW": {"swap": {"country-name": {"value": "Aruba","selector": "header .country"},"phone-number": {"value": "(833) 328-3260 / (669) 272-1083","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_LCA": {"swap": {"country-name": {"value": "St Lucia","selector": "header .country"},"phone-number": {"value": "(833) 328-3260 / (669) 272-1083","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_NCL": {"swap": {"country-name": {"value": "New Caledonia","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_ALB": {"swap": {"country-name": {"value": "Albania","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_FIN": {"swap": {"country-name": {"value": "Finland","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"}}},"_BDI": {"swap": {"country-name": {"value": "Burundi","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_GLP": {"swap": {"country-name": {"value": "Guadeloupe","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_DZA": {"swap": {"country-name": {"value": "Algeria","selector": "header .country"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"},"phone-number": {"selector": "header .call-us"}}},"_SGS": {"swap": {"country-name": {"value": "S. Georgia/S. Sandwich Is","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_PAK": {"swap": {"country-name": {"value": "Pakistan","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_WLF": {"swap": {"country-name": {"value": "Wallis and Futuna Island","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_FLK": {"swap": {"country-name": {"value": "Falkland Islands","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_DMA": {"swap": {"country-name": {"value": "Dominica","selector": "header .country"},"phone-number": {"value": "(833) 328-3260 / (669) 272-1083","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_BMU": {"swap": {"country-name": {"value": "Bermuda","selector": "header .country"},"phone-number": {"value": "+1-855-740-0265","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_ZAR": {"swap": {"country-name": {"value": "Zaire","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_CZE": {"swap": {"country-name": {"value": "Czech Republic","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}}},"_LBN": {"swap": {"country-name": {"value": "Lebanon","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_PAR": {"swap": {"country-name": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"value": "Islands","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_JPN": {"swap": {"country-name": {"value": "Japan","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_VIR": {"swap": {"country-name": {"value": "Virgin Islands (U.S.)","selector": "header .country"},"phone-number": {"value": "(833) 328-3260 / (669) 272-1083","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_BUR": {"swap": {"country-name": {"value": "Burma","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_BLZ": {"swap": {"country-name": {"value": "Belize","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_ISL": {"swap": {"country-name": {"value": "Iceland","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_GAB": {"swap": {"country-name": {"value": "Gabon","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_GMB": {"swap": {"country-name": {"value": "Gambia","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_HKG": {"swap": {"country-name": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"value": "Hong Kong, China","selector": "header .country"},"phone-number": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"value": "+852-3018-3463","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_GNB": {"swap": {"country-name": {"value": "Guinea-Bissau","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_ARG": {"swap": {"country-name": {"value": "Argentina","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}},"preserve": {"country-name": {"domain": "royalcaribbean-espanol.com","value": "Argentina"}}},"_YEM": {"swap": {"country-name": {"value": "Yemen","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_MAR": {"swap": {"country-name": {"value": "Morocco","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_CUB": {"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}},"swap": {"country-name": {"value": "Cuba","selector": "header .country"}}},"_NOR": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"country-name": {"value": "Norge","selector": "header .country"}}},"_KOR": {"swap": {"country-name": {"value": "South Korea","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_NZL": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"country-name": {"value": "New Zealand","selector": "header .country"},"phone-number": {"value": "0800-102-123","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_SPM": {"swap": {"country-name": {"value": "St Pierre and Miquelon","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_EGY": {"swap": {"country-name": {"value": "Egypt","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_CHN": {"swap": {"country-name": {"value": "China","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_MDG": {"swap": {"country-name": {"value": "Madagascar","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_MNE": {"swap": {"country-name": {"value": "Montenegro","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_JOR": {"swap": {"country-name": {"value": "Jordan","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_GHA": {"swap": {"country-name": {"value": "Ghana","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_TCA": {"swap": {"country-name": {"value": "Turks and Caicos Island","selector": "header .country"},"phone-number": {"value": "(833) 328-3260 / (669) 272-1083","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_SXM": {"swap": {"country-name": {"value": "SINT MAARTEN","selector": "header .country"},"phone-number": {"value": "(833) 328-3260 / (669) 272-1083","selector": "header .call-us-number"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_ROM": {"swap": {"country-name": {"value": "Romania","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}}},"_THA": {"swap": {"country-name": {"value": "Thailand","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_BON": {"swap": {"country-name": {"value": "Bonaire","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_IOT": {"swap": {"country-name": {"value": "British Indian Ocean","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_GRC": {"swap": {"country-name": {"value": "Greece","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}}},"_SWZ": {"swap": {"country-name": {"value": "Swaziland","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_DJI": {"swap": {"country-name": {"value": "Djibouti","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_GRL": {"swap": {"country-name": {"value": "Greenland","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_BLR": {"swap": {"country-name": {"value": "Belarus","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_PER": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"country-name": {"value": "Peru","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}},"preserve": {"country-name": {"domain": "royalcaribbean-espanol.com","value": "Perú"}}},"_BES": {"swap": {"country-name": {"value": "Bonaire","selector": "header .country"},"phone-number": {"value": "(833) 328-3260 / (669) 272-1083","selector": "header .call-us-number"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_COM": {"swap": {"country-name": {"value": "Comoros","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_MLT": {"swap": {"country-name": {"value": "Malta","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}}},"_STM": {"swap": {"country-name": {"value": "St Maarten","selector": "header .country"},"phone-number": {"value": "(833) 328-3260 / (669) 272-1083","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_MDV": {"swap": {"country-name": {"value": "Maldives","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_SYC": {"swap": {"country-name": {"value": "Seychelles Islands","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_MHL": {"swap": {"country-name": {"value": "Marshall Islands","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_JAM": {"swap": {"country-name": {"value": "Jamaica","selector": "header .country"},"phone-number": {"value": "(833) 328-3260 / (669) 272-1083","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_PLW": {"swap": {"country-name": {"value": "Palau","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_DOM": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"swap": {"country-name": {"value": "Dominican Republic","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}},"preserve": {"country-name": {"domain": "royalcaribbean-espanol.com","value": "República Dominicana"}}},"_BHR": {"swap": {"country-name": {"value": "Bahrain","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_IRQ": {"swap": {"country-name": {"value": "Iraq","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_EST": {"poof": {"phone-number": {"selector": "header .call-us"}},"swap": {"country-name": {"value": "Estonia","selector": "header .country"}}},"_AUS": {"swap": {"country-name": {"value": "Australia","selector": "header .country"},"phone-number": {"value": "1-800-754-500","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_UMI": {"swap": {"country-name": {"value": "U.S. Minor Out Islands","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_GBR": {"swap": {"country-name": {"value": "United Kingdom","selector": "header .country"}},"poof": {"phone-number": {"selector": "header .call-us"},"alert": {"selector": ".rcl_alert_slider_bottom"}}},"_SPR": {"swap": {"country-name": {"jcr:mixinTypes": ["cq:ReplicationStatus"],"value": "Islands","selector": "header .country"},"phone-number": {"value": "+1-305-341-0204","selector": "header .call-us-number"}},"poof": {"alert": {"selector": ".rcl_alert_slider_bottom"}}}}};
	} catch (we) {
		console.log("Error with DATA_CONFIG : " + we);
	}

</script>



	<script type="text/javascript">
		var RETARGET_ITINERARY_SHIP_DATA = {};
		try {

		} catch (tis) {
			console.log("Error initializing retarget data : " + tis);
		}
</script>





<div id="rciHeader">
    <rci-header inline-template :cas-tiers="{&#34;default&#34;:{&#34;assetName&#34;:&#34;pre-gold.svg&#34;,&#34;assetPath&#34;:&#34;/content/dam/royal/resources/icons/cas-tiers/pre-gold.svg&#34;,&#34;damTitle&#34;:&#34;Pre Gold CAS Tier&#34;,&#34;damDescription&#34;:&#34;Pre Gold CAS tier icon&#34;},&#34;diamond&#34;:{&#34;assetName&#34;:&#34;diamond.svg&#34;,&#34;assetPath&#34;:&#34;/content/dam/royal/resources/icons/cas-tiers/diamond.svg&#34;,&#34;damTitle&#34;:&#34;Diamond CAS Tier&#34;,&#34;damDescription&#34;:&#34;Diamond CAS tier icon&#34;},&#34;diamond-plus&#34;:{&#34;assetName&#34;:&#34;diamond-plus.svg&#34;,&#34;assetPath&#34;:&#34;/content/dam/royal/resources/icons/cas-tiers/diamond-plus.svg&#34;,&#34;damTitle&#34;:&#34;Diamond Plus CAS Tier&#34;,&#34;damDescription&#34;:&#34;Diamond Plus CAS tier icon&#34;},&#34;emerald&#34;:{&#34;assetName&#34;:&#34;emerald.svg&#34;,&#34;assetPath&#34;:&#34;/content/dam/royal/resources/icons/cas-tiers/emerald.svg&#34;,&#34;damTitle&#34;:&#34;Emerald CAS Tier&#34;,&#34;damDescription&#34;:&#34;Emerald CAS tier icon&#34;},&#34;gold&#34;:{&#34;assetName&#34;:&#34;gold.svg&#34;,&#34;assetPath&#34;:&#34;/content/dam/royal/resources/icons/cas-tiers/gold.svg&#34;,&#34;damTitle&#34;:&#34;Gold CAS Tier&#34;,&#34;damDescription&#34;:&#34;Gold CAS tier icon&#34;},&#34;platinum&#34;:{&#34;assetName&#34;:&#34;platinum.svg&#34;,&#34;assetPath&#34;:&#34;/content/dam/royal/resources/icons/cas-tiers/platinum.svg&#34;,&#34;damTitle&#34;:&#34;Platinum CAS Tier&#34;,&#34;damDescription&#34;:&#34;Platinum CAS tier icon&#34;},&#34;pre-gold&#34;:{&#34;assetName&#34;:&#34;pre-gold.svg&#34;,&#34;assetPath&#34;:&#34;/content/dam/royal/resources/icons/cas-tiers/pre-gold.svg&#34;,&#34;damTitle&#34;:&#34;Pre Gold CAS Tier&#34;,&#34;damDescription&#34;:&#34;Pre Gold CAS tier icon&#34;},&#34;pinnacle-club&#34;:{&#34;assetName&#34;:&#34;pinnacle-club.svg&#34;,&#34;assetPath&#34;:&#34;/content/dam/royal/resources/icons/cas-tiers/pinnacle-club.svg&#34;,&#34;damTitle&#34;:&#34;Pinnacle Club CAS Tier&#34;,&#34;damDescription&#34;:&#34;Pinnacle Club CAS tier icon&#34;}}" :logo-border="{&#34;assetName&#34;:&#34;royal-caribbean-logo-border.svg&#34;,&#34;assetPath&#34;:&#34;/content/dam/royal/resources/icons/logo/royal-caribbean-logo-border.svg&#34;,&#34;damTitle&#34;:&#34;Royal Caribbean Cruises&#34;,&#34;damDescription&#34;:&#34;Royal Caribbean Cruises&#34;}" :logo-crown-anchor="{&#34;assetName&#34;:&#34;royal-caribbean-logo-crown-anchor.svg&#34;,&#34;assetPath&#34;:&#34;/content/dam/royal/resources/icons/logo/royal-caribbean-logo-crown-anchor.svg&#34;,&#34;damTitle&#34;:&#34;Royal Caribbean Cruises&#34;,&#34;damDescription&#34;:&#34;Royal Caribbean Cruises&#34;}" :logo-no-border="{&#34;assetName&#34;:&#34;royal-caribbean-logo-no-border.svg&#34;,&#34;assetPath&#34;:&#34;/content/dam/royal/resources/icons/logo/royal-caribbean-logo-no-border.svg&#34;,&#34;damTitle&#34;:&#34;Royal Caribbean Cruises&#34;,&#34;damDescription&#34;:&#34;Royal Caribbean Cruises&#34;}" :sidenav-menu="{&#34;items&#34;:[{&#34;id&#34;:&#34;rciHeaderSideNavMenu-1&#34;,&#34;label&#34;:&#34;Favorites &amp; Watchlist&#34;,&#34;children&#34;:[{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-1-1&#34;,&#34;label&#34;:&#34;Favorites&#34;,&#34;link&#34;:&#34;/favorites&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-1-2&#34;,&#34;label&#34;:&#34;Watchlist&#34;,&#34;link&#34;:&#34;/watchlist&#34;}]},{&#34;id&#34;:&#34;rciHeaderSideNavMenu-2&#34;,&#34;label&#34;:&#34;Find a Cruise&#34;,&#34;children&#34;:[{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-2-1&#34;,&#34;label&#34;:&#34;&lt;b>Search Cruises&lt;/b>&#34;,&#34;link&#34;:&#34;/cruises&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-2-2&#34;,&#34;label&#34;:&#34;Cruise Deals&#34;,&#34;link&#34;:&#34;/cruise-deals&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-2-3&#34;,&#34;label&#34;:&#34;Weekend Cruises&#34;,&#34;link&#34;:&#34;/plan-a-cruise/weekend-getaway-cruises&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-2-4&#34;,&#34;label&#34;:&#34;Last Minute Cruises&#34;,&#34;link&#34;:&#34;/cruise-deals/last-minute-cruises&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-2-5&#34;,&#34;label&#34;:&#34;Family Cruises​&#34;,&#34;link&#34;:&#34;/plan-a-cruise/family-cruises&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-2-6&#34;,&#34;label&#34;:&#34;2023-2024 Cruises&#34;,&#34;link&#34;:&#34;/cruise-ships/cruise-schedule&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-2-7&#34;,&#34;label&#34;:&#34;Cruising Guides​&#34;,&#34;link&#34;:&#34;/guides&#34;}]},{&#34;id&#34;:&#34;rciHeaderSideNavMenu-3&#34;,&#34;label&#34;:&#34;Cruise Deals&#34;,&#34;link&#34;:&#34;/cruise-deals&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavMenu-4&#34;,&#34;label&#34;:&#34;Cruise Ships&#34;,&#34;children&#34;:[{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-4-1&#34;,&#34;label&#34;:&#34;&lt;b>All Cruise Ships&lt;/b>&#34;,&#34;link&#34;:&#34;/cruise-ships&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-4-2&#34;,&#34;label&#34;:&#34;Deck Plans&#34;,&#34;link&#34;:&#34;/cruise-ships/deck-plans&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-4-3&#34;,&#34;label&#34;:&#34;Cruise Dining&#34;,&#34;link&#34;:&#34;/cruise-dining&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-4-4&#34;,&#34;label&#34;:&#34;Onboard Activities&#34;,&#34;link&#34;:&#34;/cruise-activities&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-4-5&#34;,&#34;label&#34;:&#34;Cruise Rooms&#34;,&#34;link&#34;:&#34;/cruise-rooms&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-4-6&#34;,&#34;label&#34;:&#34;The Cruise Experience&#34;,&#34;link&#34;:&#34;/experience&#34;}]},{&#34;id&#34;:&#34;rciHeaderSideNavMenu-5&#34;,&#34;label&#34;:&#34;Destinations&#34;,&#34;children&#34;:[{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-5-1&#34;,&#34;label&#34;:&#34;&lt;b>All Cruise Destinations&lt;/b>&#34;,&#34;link&#34;:&#34;/cruise-destinations&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-5-2&#34;,&#34;label&#34;:&#34;Cruise Ports&#34;,&#34;link&#34;:&#34;/cruise-ports&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-5-3&#34;,&#34;label&#34;:&#34;Shore Excursions&#34;,&#34;link&#34;:&#34;/booked/shore-excursions&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-5-4&#34;,&#34;label&#34;:&#34;Perfect Day at CocoCay&#34;,&#34;link&#34;:&#34;/cococay-cruises&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-5-5&#34;,&#34;label&#34;:&#34;Caribbean Cruises&#34;,&#34;link&#34;:&#34;/caribbean-cruises&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-5-6&#34;,&#34;label&#34;:&#34;Bahamas Cruises​&#34;,&#34;link&#34;:&#34;/bahamas-cruises&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-5-7&#34;,&#34;label&#34;:&#34;Alaska Cruises&#34;,&#34;link&#34;:&#34;/alaska-cruises&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-5-8&#34;,&#34;label&#34;:&#34;European Cruises​&#34;,&#34;link&#34;:&#34;/european-cruises&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-5-9&#34;,&#34;label&#34;:&#34;Mediterranean Cruises​&#34;,&#34;link&#34;:&#34;/mediterranean-cruises&#34;}]},{&#34;id&#34;:&#34;rciHeaderSideNavMenu-6&#34;,&#34;label&#34;:&#34;Manage My Cruise​&#34;,&#34;children&#34;:[{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-6-1&#34;,&#34;label&#34;:&#34;Cruise Planner&#34;,&#34;link&#34;:&#34;/booked&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-6-2&#34;,&#34;label&#34;:&#34;Book a Flight&#34;,&#34;link&#34;:&#34;/flights/bookFlights&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-6-3&#34;,&#34;label&#34;:&#34;Book a Hotel&#34;,&#34;link&#34;:&#34;/programs/book-a-hotel&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-6-4&#34;,&#34;label&#34;:&#34;Check-In for My Cruise&#34;,&#34;link&#34;:&#34;/account/signin&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-6-5&#34;,&#34;label&#34;:&#34;Make a Payment&#34;,&#34;link&#34;:&#34;/reservation/lookup&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-6-6&#34;,&#34;label&#34;:&#34;Redeem Cruise Credit&#34;,&#34;link&#34;:&#34;/programs/redeem-future-cruise-credit&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-6-7&#34;,&#34;label&#34;:&#34;Update Guest Information&#34;,&#34;link&#34;:&#34;/reservation/lookup&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-6-8&#34;,&#34;label&#34;:&#34;Beverage Packages​&#34;,&#34;link&#34;:&#34;/booked/beverage-packages&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-6-9&#34;,&#34;label&#34;:&#34;Dining Packages​&#34;,&#34;link&#34;:&#34;/booked/dining-packages&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-6-10&#34;,&#34;label&#34;:&#34;Shore Excursions​&#34;,&#34;link&#34;:&#34;/booked/shore-excursions&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-6-11&#34;,&#34;label&#34;:&#34;Transportation&#34;,&#34;link&#34;:&#34;/plan-a-cruise/transportation&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-6-12&#34;,&#34;label&#34;:&#34;Royal Gifts&#34;,&#34;link&#34;:&#34;https://www.royalcaribbean.com/royalgifts/&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-6-13&#34;,&#34;label&#34;:&#34;My Account&#34;,&#34;link&#34;:&#34;/account/signin&#34;}]},{&#34;id&#34;:&#34;rciHeaderSideNavMenu-7&#34;,&#34;label&#34;:&#34;FAQ&#34;,&#34;children&#34;:[{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-7-1&#34;,&#34;label&#34;:&#34;&lt;b>All FAQs&lt;/b>&#34;,&#34;link&#34;:&#34;/faq&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-7-2&#34;,&#34;label&#34;:&#34;Boarding Requirements&#34;,&#34;link&#34;:&#34;/faq/topics/boarding-requirements&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-7-3&#34;,&#34;label&#34;:&#34;Future Cruise Credit​&#34;,&#34;link&#34;:&#34;/faq/topics/future-cruise-credit&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-7-4&#34;,&#34;label&#34;:&#34;Travel Documents​&#34;,&#34;link&#34;:&#34;/faq/topics/travel-documents&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-7-5&#34;,&#34;label&#34;:&#34;Check-in​ &amp; Boarding Pass&#34;,&#34;link&#34;:&#34;/faq/topics/online-check-in-boarding&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-7-6&#34;,&#34;label&#34;:&#34;Transportation​&#34;,&#34;link&#34;:&#34;/faq/topics/transportation-embarkation-pier&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-7-7&#34;,&#34;label&#34;:&#34;Perfect Day at CocoCay​&#34;,&#34;link&#34;:&#34;/faq/topics/perfect-day-island&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-7-8&#34;,&#34;label&#34;:&#34;Beverage Packages​&#34;,&#34;link&#34;:&#34;/faq/topics/beverage-package&#34;}]},{&#34;id&#34;:&#34;rciHeaderSideNavMenu-8&#34;,&#34;label&#34;:&#34;Perfect Day at CocoCay&#34;,&#34;link&#34;:&#34;/cococay-cruises&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavMenu-9&#34;,&#34;label&#34;:&#34;Icon of the Seas&#34;,&#34;link&#34;:&#34;/cruise-ships/icon-of-the-seas&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavMenu-10&#34;,&#34;label&#34;:&#34;Crown &amp; Anchor Society&#34;,&#34;link&#34;:&#34;/crown-anchor-society&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavMenu-11&#34;,&#34;label&#34;:&#34;Royal Caribbean Blog&#34;,&#34;link&#34;:&#34;https://www.royalcaribbean.com/blog&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavMenu-12&#34;,&#34;label&#34;:&#34;Contact Us&#34;,&#34;link&#34;:&#34;/resources/contact-us&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavMenu-13&#34;,&#34;label&#34;:&#34;Royal Caribbean Group&#34;,&#34;children&#34;:[{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-13-1&#34;,&#34;label&#34;:&#34;Royal Caribbean&#34;,&#34;link&#34;:&#34;/?icid=hprylc_wrnssn_hpr_hm_other_3667&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-13-2&#34;,&#34;label&#34;:&#34;Celebrity Cruises&#34;,&#34;link&#34;:&#34;https://www.celebritycruises.com/?icid=hpclbr_wrnssn_hpc_hm_other_3666&#34;},{&#34;id&#34;:&#34;rciHeaderSideNavSubmenu-13-3&#34;,&#34;label&#34;:&#34;Silversea&#34;,&#34;link&#34;:&#34;https://www.silversea.com/?icid=slvrsl_wrnssn_slv_hm_other_3665&#34;}]}]}" :transparent="true">
      <div class="header__base">
        <div class="header__content" :class="{'searchHaderVisible': showHeadersearch, 'searchHaderVisible--transparent': showHeadersearch && transparent && !externalPage, 'headerRead': isReady}">
          <rci-header-country-notification inline-template>
            
  <div class="headerCountryNotification__base" v-if="showComponent" v-cloak>
    <div class="header__toolbar">
      <div v-if="conflictMessage === 1" class="headerCountryNotification__copy" v-html="setI18n('conflictNotificationCookieSuggestion')">
      </div>
      <div v-else-if="conflictMessage === 2" class="headerCountryNotification__copy" v-html="setI18n('conflictNotificationGeolocationSuggestion')">              
      </div>
      <div v-else-if="conflictMessage === 3" class="headerCountryNotification__copy" v-html="setI18n('conflictNotificationMarketDefaultSuggestion')">              
      </div>  
      <div class="headerCountryNotification__dropdown">
        <select v-model="selectedOption" class="headerCountryNotification__options">
          <option v-if="selectedOption" v-bind:value="selectedOption">{{selectedOption.countryName}}</option>
          <option v-if="option" v-for="option in options" v-bind:value="option">{{option.countryName}}</option>
        </select>
        <div class="headerCountryNotification__icon fieldicon"></div>
      </div>
      <button class="headerCountryNotification__CTA" @click="continueCTA">Continue</button>
      <button class="header__button header__button--blue alert__button headerCountryNotification__close" @click="closeHandler">
        <figure class="header__buttonIcon">
          <img class="alert__buttonImage" src="/content/dam/royal/resources/icons/close-icon-white.svg"/>
        </figure>
      </button>
    </div>
    </div>

          </rci-header-country-notification>

          <div class="header__alerts">
            <rci-alerts inline-template>
  <div class="alerts__base">
    <div class="alerts__content" :class="{'alerts__content--visible': showAlerts}">
      <div v-for="item in activeAlerts" :key="item.id" class="alerts__item">
        <rci-alert inline-template :alert="item" :on-close="closeAlert">
          
  <div class="alert__base">
    <a :id="alert.id" class="alert__link" :href="alert.link">
      <span class="alert__title">{{alert.title}}</span>
      <span class="alert__description" v-html="alert.description"></span>
    </a>
    <button :id="'rciAlertClose-' + alert.id" class="header__button header__button--blue alert__button" @click="close">
      <figure class="header__buttonIcon">
        <img class="alert__buttonImage" src="/content/dam/royal/resources/icons/close-icon-blue.svg"/>
      </figure>
    </button>
  </div>

        </rci-alert>
      </div>
    </div>
  </div>
</rci-alerts>

          </div>
          <div class="header__notifications">
            <rci-notifications inline-template>
  <div class="notifications__base">
    <div class="notifications__content" :class="{'notifications__content--visible': showNotifications}">
      <div v-for="item in activeNotifications" :key="item.id" class="notifications__item">
        <rci-notification inline-template :notification="item" :on-close="closeNotification">
          
  <div class="notification__base">
      <div class="notification__content">
      <span class="notification__title">{{notification.title}}</span>
      <span class="notification__description" v-html="notification.description"></span>
      <a :id="notification.id" class="notification__link" :href="notification.link">
        <span>{{notification.link_label}}</span>
        <img class="notification__buttonImage" src="/content/dam/royal/resources/icons/caret-icon-white.svg"/>
      </a>
    </div>
    <button :id="'rcinotificationClose-' + notification.id" class="header__button header__button--blue notification__button" @click="close">
      <figure class="header__buttonIcon">
        <img class="notification__buttonImage" src="/content/dam/royal/resources/icons/close-icon-white.svg"/>
      </figure>
    </button>
  </div>

        </rci-notification>
      </div>
    </div>
  </div>
</rci-notifications>

          </div>

          
  <div class="rciHeaderSecondaryToolbar__base">
    <div class="header__toolbar">
      <div class="rciHeaderSecondaryToolbar__content">
        <rci-header-locale inline-template :loaded="!!globalization.code" :country="globalization.code" :country-name="globalization.countryName" :flag-path="globalization.flagPath">
          
  
  <div class="headerLocale__base" :class="{'headerLocale__base--visible': loaded}">
    <a id="rciHeaderCountrySelector" alt="" aria-label="a11yCountryFlagText" href="/resources/select-location" class="headerLocale__link">
      <span class="headerLocale__country">{{countryName}}</span>
      <figure class="headerLocale__icon">
        <img class="headerLocale__iconImage" :src="flagPath"/>
      </figure>
    </a>
  </div>

        </rci-header-locale>
        <rci-header-phone-number inline-template :loaded="!!globalization.code" :breakpoint="breakpoint" :phone-number="globalization.phoneNumber" :phone-number-path="phoneNumberPath">
          
  
  <div class="headerPhoneNumber__base" :class="{'headerPhoneNumber__base--visible': loaded}">
    <a id="rciHeaderPhoneNumber" class="headerPhoneNumber__link" :class="{'header__button': 'mobile' === breakpoint}" :href="phoneNumberPath" alt="" aria-label="a11yPhoneButtonAriaText">
      <span v-show="'mobile' !== breakpoint" class="headerPhoneNumber__value">{{phoneNumber}}</span>
      <div v-show="'mobile' === breakpoint" class="headerPhoneNumber_icon">

      </div>
    </a>
  </div>

        </rci-header-phone-number>
      </div>
    </div>
  </div>
 
            <rci-header-main-toolbar inline-template :breakpoint="breakpoint" :flag-path="globalization.flagPath" :logo="logo" :logo-path="logoPath" :phone-number="globalization.phoneNumber" :phone-number-path="phoneNumberPath" :transparent="transparent && !externalPage" :headersearchopen="showHeadersearch" :search-option="true" :toggles="toggles" :user="user" :on-toggle-search-header="toogleSearchHeader" :on-open-sidenav="toggleSideNav" :on-open-pricing-panel="openPricingPanel">
              
  

  <div class="headerMainToolbar__base">
    <div class="headerMainToolbar__background headerMainToolbar__background--transparent">

      <div class="header__toolbar">
        <div class="headerMainToolbar__content">
          <div class="headerMainToolbar__menu">
            <button id="rciHeaderOpenSidenav" alt="" aria-label="a11yMenuButtonAriaText" class="header__button headerMainToolbar__menuButton" @click="openSideNav">
              <div class="headerMainToolbar__menu__icon"></div>
            </button>
          </div>
          <div v-if="logo" class="headerMainToolbar__logo">
            <a id="rciHeaderLogo" class="headerMainToolbar__logoLink" :href="logoPath">
              <figure class="headerMainToolbar__logoImage">
                <img :src="logo.assetPath" :alt="logo.damDescription" :title="logo.damTitle"/>
                <figcaption>{{logo.damTitle}}</figcaption>
              </figure>
            </a>
          </div>
          <div class="headerMainToolbar__nav" v-show="breakpoint === 'desktop' || breakpoint === 'largeDesktop'">
            
  <div class="headerTopNav__base">
    <nav class="headerTopNav__menu">
      
        <div class="headerTopNav__item" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <a id="rciHeaderMenuItem-1" class="headerTopNav__link" href="/cruises" itemprop="url">
            FIND A CRUISE
          </a>
        </div>
      
        <div class="headerTopNav__item" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <a id="rciHeaderMenuItem-2" class="headerTopNav__link" href="/cruise-deals" itemprop="url">
            DEALS
          </a>
        </div>
      
        <div class="headerTopNav__item" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <a id="rciHeaderMenuItem-3" class="headerTopNav__link" href="/cruise-ships" itemprop="url">
            SHIPS
          </a>
        </div>
      
        <div class="headerTopNav__item" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <a id="rciHeaderMenuItem-4" class="headerTopNav__link" href="/cruise-destinations" itemprop="url">
            DESTINATIONS
          </a>
        </div>
      
        <div class="headerTopNav__item" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <a id="rciHeaderMenuItem-5" class="headerTopNav__link" href="/booked" itemprop="url">
            MANAGE MY CRUISE
          </a>
        </div>
      
      <div class="icons">
        <div v-if="toggles['show-user-favorites-feature']" class="headerMainToolbar__favorites">
          <a href="/favorites" class="header__button headerSidenav__button" id="rciFavoritesHeaderIcon">
            <div class="header__buttonIcon header__buttonIcon__favorites"></div>
          </a>
        </div>
        <div v-if="toggles['show-user-watchlist-feature']" class="headerMainToolbar__watchlist">
          <a href="/watchlist" class="header__button headerSidenav__button" id="rciWatchlistHeaderIcon">
            <div class="header__buttonIcon header__buttonIcon__watchlist"></div>
          </a>
        </div>
      </div>
      <rci-header-sign-in inline-template :user="user">
        
  <div class="headerSignIn__base" :class="{'headerSignIn__base--visible': loaded}" itemscope itemtype="https://schema.org/SiteNavigationElement">
    <a v-if="!user" id="rciHeaderSignIn" class="headerSignIn__link" :href="signInPath" itemprop="url">
      <span>Sign In</span>
    </a>
    <a v-if="user" id="rciHeaderUser" class="headerSignIn__user" :href="signedInUserPath" itemprop="url" data-cs-mask>
      <figure v-if="user.icon" class="headerSignIn__tier">
        <img class="headerSignIn__tierImage" :alt="user.icon.damDescription" :src="user.icon.assetPath" :title="user.icon.damTitle"/>
        <figcaption>{{user.icon.damTitle}}</figcaption>
      </figure>
      <span>{{user.firstName}}</span>
    </a>
  </div>

      </rci-header-sign-in>
    </nav>
  </div>

          </div>
          <div class="headerMainToolbar__search" v-cloak v-if="searchOption">
            <button class="header__button headerSidenav__button" id="rciSearchHeaderIcon" @click="toggleSearchHeder()">
              <div class="header__buttonIcon header__buttonIcon__search"></div>
            </button>
          </div>
          
  <div class="headerRightSection__base">
    <rci-header-phone-number inline-template :loaded="!!phoneNumber" :breakpoint="breakpoint" :phone-number="phoneNumber" :phone-number-path="phoneNumberPath">
      
  
  <div class="headerPhoneNumber__base" :class="{'headerPhoneNumber__base--visible': loaded}">
    <a id="rciHeaderPhoneNumber" class="headerPhoneNumber__link" :class="{'header__button': 'mobile' === breakpoint}" :href="phoneNumberPath" alt="" aria-label="a11yPhoneButtonAriaText">
      <span v-show="'mobile' !== breakpoint" class="headerPhoneNumber__value">{{phoneNumber}}</span>
      <div v-show="'mobile' === breakpoint" class="headerPhoneNumber_icon">

      </div>
    </a>
  </div>

    </rci-header-phone-number>
  </div>

        </div>
      </div>
    </div>
  </div>

            </rci-header-main-toolbar>
          <rci-header-search inline-template :breakpoint="breakpoint" :market-url-path="globalization.marketPath" :searchheader="showHeadersearch" :on-toggle-search-header="toogleSearchHeader" v-if="breakpoint === 'tablet' || breakpoint === 'desktop' || breakpoint === 'largeDesktop'">
            
    <div v-cloak class="headerSearch__holder" v-show="searchheader">
        <transition name="slide-fade">
    <div class="headerSearch" v-if="searchheader">
        <div class="headerSearch__base">
            <div class="headerSearch__base__container">
                <div class="headerSearch__base__container__searchbox">
                        <rci-header-search-box inline-template :market-url-path="marketUrlPath">
                                
        <div class="headerSearchBox">
                <input placeholder="Start your site search here" class="headerSearchBox__input" v-model="searchQuery" v-on:keyup="searchQuery = $event.target.value" v-on:keyup.enter="searchHandler" :disabled="searching" id="rciSearchInput"/>
                <div id="rciSearchInputIcon" class="headerSearchBox__icon" @click="searchHandler">
                </div>
            </div>

                        </rci-header-search-box>
                </div>
                <div class="headerSearch__base__container__close">
                      <button class="header__button header__button--blue headerSidenav__button" id="rciSearchClose" @click="closeSearchHeader()">
                        <div class="header__buttonIcon headerSidenav__closeIcon headerSidenav__closeIcon">
                        </div>
                    </button>
                 </div> 
        </div>
    </div>
    </div>

</div>

    </transition>

          </rci-header-search>
          <rci-header-sidenav inline-template :active="showSidenav" :flag-path="globalization.flagPath" :breakpoint="breakpoint" :country="globalization.code" :country-name="globalization.countryName" :menu="sidenavMenu" :search-option="true" :user="user" :on-close="toggleSideNav">
            
  
  <div class="headerSidenav__base" :class="{'headerSidenav__base--active': active}">
    <div class="headerSidenav__drawer">
      <div class="headerSidenav__toolbar">
        <rci-header-sign-in inline-template v-show="breakpoint === 'mobile' || breakpoint === 'tablet'" :user="user">
          
  <div class="headerSignIn__base" :class="{'headerSignIn__base--visible': loaded}" itemscope itemtype="https://schema.org/SiteNavigationElement">
    <a v-if="!user" id="rciHeaderSignIn" class="headerSignIn__link" :href="signInPath" itemprop="url">
      <span>Sign In</span>
    </a>
    <a v-if="user" id="rciHeaderUser" class="headerSignIn__user" :href="signedInUserPath" itemprop="url" data-cs-mask>
      <figure v-if="user.icon" class="headerSignIn__tier">
        <img class="headerSignIn__tierImage" :alt="user.icon.damDescription" :src="user.icon.assetPath" :title="user.icon.damTitle"/>
        <figcaption>{{user.icon.damTitle}}</figcaption>
      </figure>
      <span>{{user.firstName}}</span>
    </a>
  </div>

        </rci-header-sign-in>
        <button v-show="breakpoint !== 'mobile'" id="rciHeaderCloseSidenav" class="header__button header__button--blue headerSidenav__button" @click="close">
          <div class="header__buttonIcon headerSidenav__closeIcon headerSidenav__closeIcon">
          </div>
        </button>
      </div>
      <div class="headerSidenav__content">
        <div v-if="menu" class="headerSidenav__menu" :class="{'headerSidenav__menu--selected': showSubmenu}">
          <div class="headerSidenav__column headerSidenav__column--main">
            <ul>
              <li>
                <a alt="" aria-label="Favorites &amp; Watchlist" id="rciHeaderSideNavMenu-1" class="headerSidenav__link" tabindex="0" @click.prevent="selectSubmenu('rciHeaderSideNavMenu-1')" @keyup.enter.prevent="selectSubmenu('rciHeaderSideNavMenu-1')">
                  <span>Favorites &amp; Watchlist </span>
                    <div class="headerSidenav__linkIcon headerSidenav__linkIcon__caret headerSidenav__linkIcon__caret--right">
                    </div>
                </a>
                
              
                <a alt="" aria-label="Find a Cruise" id="rciHeaderSideNavMenu-2" class="headerSidenav__link" tabindex="1" @click.prevent="selectSubmenu('rciHeaderSideNavMenu-2')" @keyup.enter.prevent="selectSubmenu('rciHeaderSideNavMenu-2')">
                  <span>Find a Cruise </span>
                    <div class="headerSidenav__linkIcon headerSidenav__linkIcon__caret headerSidenav__linkIcon__caret--right">
                    </div>
                </a>
                
              
                
                <a tabindex="2" href="/cruise-deals" class="headerSidenav__link" id="rciHeaderSideNavMenu-3">
                  Cruise Deals
                </a>
              
                <a alt="" aria-label="Cruise Ships" id="rciHeaderSideNavMenu-4" class="headerSidenav__link" tabindex="3" @click.prevent="selectSubmenu('rciHeaderSideNavMenu-4')" @keyup.enter.prevent="selectSubmenu('rciHeaderSideNavMenu-4')">
                  <span>Cruise Ships </span>
                    <div class="headerSidenav__linkIcon headerSidenav__linkIcon__caret headerSidenav__linkIcon__caret--right">
                    </div>
                </a>
                
              
                <a alt="" aria-label="Destinations" id="rciHeaderSideNavMenu-5" class="headerSidenav__link" tabindex="4" @click.prevent="selectSubmenu('rciHeaderSideNavMenu-5')" @keyup.enter.prevent="selectSubmenu('rciHeaderSideNavMenu-5')">
                  <span>Destinations </span>
                    <div class="headerSidenav__linkIcon headerSidenav__linkIcon__caret headerSidenav__linkIcon__caret--right">
                    </div>
                </a>
                
              
                <a alt="" aria-label="Manage My Cruise​" id="rciHeaderSideNavMenu-6" class="headerSidenav__link" tabindex="5" @click.prevent="selectSubmenu('rciHeaderSideNavMenu-6')" @keyup.enter.prevent="selectSubmenu('rciHeaderSideNavMenu-6')">
                  <span>Manage My Cruise​ </span>
                    <div class="headerSidenav__linkIcon headerSidenav__linkIcon__caret headerSidenav__linkIcon__caret--right">
                    </div>
                </a>
                
              
                <a alt="" aria-label="FAQ" id="rciHeaderSideNavMenu-7" class="headerSidenav__link" tabindex="6" @click.prevent="selectSubmenu('rciHeaderSideNavMenu-7')" @keyup.enter.prevent="selectSubmenu('rciHeaderSideNavMenu-7')">
                  <span>FAQ </span>
                    <div class="headerSidenav__linkIcon headerSidenav__linkIcon__caret headerSidenav__linkIcon__caret--right">
                    </div>
                </a>
                
              
                
                <a tabindex="7" href="/cococay-cruises" class="headerSidenav__link" id="rciHeaderSideNavMenu-8">
                  Perfect Day at CocoCay
                </a>
              
                
                <a tabindex="8" href="/cruise-ships/icon-of-the-seas" class="headerSidenav__link" id="rciHeaderSideNavMenu-9">
                  Icon of the Seas
                </a>
              
                
                <a tabindex="9" href="/crown-anchor-society" class="headerSidenav__link" id="rciHeaderSideNavMenu-10">
                  Crown &amp; Anchor Society
                </a>
              
                
                <a tabindex="10" href="https://www.royalcaribbean.com/blog" class="headerSidenav__link" id="rciHeaderSideNavMenu-11">
                  Royal Caribbean Blog
                </a>
              
                
                <a tabindex="11" href="/resources/contact-us" class="headerSidenav__link" id="rciHeaderSideNavMenu-12">
                  Contact Us
                </a>
              
                <a alt="" aria-label="Royal Caribbean Group" id="rciHeaderSideNavMenu-13" class="headerSidenav__link" tabindex="12" @click.prevent="selectSubmenu('rciHeaderSideNavMenu-13')" @keyup.enter.prevent="selectSubmenu('rciHeaderSideNavMenu-13')">
                  <span>Royal Caribbean Group </span>
                    <div class="headerSidenav__linkIcon headerSidenav__linkIcon__caret headerSidenav__linkIcon__caret--right">
                    </div>
                </a>
                
              </li>
            </ul>
          </div>
          <div class="headerSidenav__column headerSidenav__column--submenu">
            <ul>
              <li class="submenu__backtomenu">
                <div id="rciHeaderSidenavBackToMenu" class="headerSidenav__link headerSidenav__linkBack" tabindex="0" @click="showSubmenu = false" @keyup.enter="showSubmenu = false">
                  <div role="link" aria-label="Back to Main Menu" class="headerSidenav__linkIcon headerSidenav__linkIcon__caret headerSidenav__linkIcon__caret--left">
                  </div>
                  <span>Back to Main Menu</span>
                </div>
              </li>
              
                <div class="sub_rciHeaderSideNavMenu-1 hidesubnav" :class="{ isActive : currentView == 'rciHeaderSideNavMenu-1' }">
                  <li>
                    <a alt="" aria-label="Favorites" id="rciHeaderSideNavSubmenu-1-1" class="headerSidenav__link" href="/favorites">
                      <span>Favorites</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Watchlist" id="rciHeaderSideNavSubmenu-1-2" class="headerSidenav__link" href="/watchlist">
                      <span>Watchlist</span>
                    </a>
                  </li>
                </div>
              
                <div class="sub_rciHeaderSideNavMenu-2 hidesubnav" :class="{ isActive : currentView == 'rciHeaderSideNavMenu-2' }">
                  <li>
                    <a alt="" aria-label="<b>Search Cruises</b>" id="rciHeaderSideNavSubmenu-2-1" class="headerSidenav__link" href="/cruises">
                      <span><b>Search Cruises</b></span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Cruise Deals" id="rciHeaderSideNavSubmenu-2-2" class="headerSidenav__link" href="/cruise-deals">
                      <span>Cruise Deals</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Weekend Cruises" id="rciHeaderSideNavSubmenu-2-3" class="headerSidenav__link" href="/plan-a-cruise/weekend-getaway-cruises">
                      <span>Weekend Cruises</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Last Minute Cruises" id="rciHeaderSideNavSubmenu-2-4" class="headerSidenav__link" href="/cruise-deals/last-minute-cruises">
                      <span>Last Minute Cruises</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Family Cruises​" id="rciHeaderSideNavSubmenu-2-5" class="headerSidenav__link" href="/plan-a-cruise/family-cruises">
                      <span>Family Cruises​</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="2023-2024 Cruises" id="rciHeaderSideNavSubmenu-2-6" class="headerSidenav__link" href="/cruise-ships/cruise-schedule">
                      <span>2023-2024 Cruises</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Cruising Guides​" id="rciHeaderSideNavSubmenu-2-7" class="headerSidenav__link" href="/guides">
                      <span>Cruising Guides​</span>
                    </a>
                  </li>
                </div>
              
                
              
                <div class="sub_rciHeaderSideNavMenu-4 hidesubnav" :class="{ isActive : currentView == 'rciHeaderSideNavMenu-4' }">
                  <li>
                    <a alt="" aria-label="<b>All Cruise Ships</b>" id="rciHeaderSideNavSubmenu-4-1" class="headerSidenav__link" href="/cruise-ships">
                      <span><b>All Cruise Ships</b></span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Deck Plans" id="rciHeaderSideNavSubmenu-4-2" class="headerSidenav__link" href="/cruise-ships/deck-plans">
                      <span>Deck Plans</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Cruise Dining" id="rciHeaderSideNavSubmenu-4-3" class="headerSidenav__link" href="/cruise-dining">
                      <span>Cruise Dining</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Onboard Activities" id="rciHeaderSideNavSubmenu-4-4" class="headerSidenav__link" href="/cruise-activities">
                      <span>Onboard Activities</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Cruise Rooms" id="rciHeaderSideNavSubmenu-4-5" class="headerSidenav__link" href="/cruise-rooms">
                      <span>Cruise Rooms</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="The Cruise Experience" id="rciHeaderSideNavSubmenu-4-6" class="headerSidenav__link" href="/experience">
                      <span>The Cruise Experience</span>
                    </a>
                  </li>
                </div>
              
                <div class="sub_rciHeaderSideNavMenu-5 hidesubnav" :class="{ isActive : currentView == 'rciHeaderSideNavMenu-5' }">
                  <li>
                    <a alt="" aria-label="<b>All Cruise Destinations</b>" id="rciHeaderSideNavSubmenu-5-1" class="headerSidenav__link" href="/cruise-destinations">
                      <span><b>All Cruise Destinations</b></span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Cruise Ports" id="rciHeaderSideNavSubmenu-5-2" class="headerSidenav__link" href="/cruise-ports">
                      <span>Cruise Ports</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Shore Excursions" id="rciHeaderSideNavSubmenu-5-3" class="headerSidenav__link" href="/booked/shore-excursions">
                      <span>Shore Excursions</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Perfect Day at CocoCay" id="rciHeaderSideNavSubmenu-5-4" class="headerSidenav__link" href="/cococay-cruises">
                      <span>Perfect Day at CocoCay</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Caribbean Cruises" id="rciHeaderSideNavSubmenu-5-5" class="headerSidenav__link" href="/caribbean-cruises">
                      <span>Caribbean Cruises</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Bahamas Cruises​" id="rciHeaderSideNavSubmenu-5-6" class="headerSidenav__link" href="/bahamas-cruises">
                      <span>Bahamas Cruises​</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Alaska Cruises" id="rciHeaderSideNavSubmenu-5-7" class="headerSidenav__link" href="/alaska-cruises">
                      <span>Alaska Cruises</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="European Cruises​" id="rciHeaderSideNavSubmenu-5-8" class="headerSidenav__link" href="/european-cruises">
                      <span>European Cruises​</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Mediterranean Cruises​" id="rciHeaderSideNavSubmenu-5-9" class="headerSidenav__link" href="/mediterranean-cruises">
                      <span>Mediterranean Cruises​</span>
                    </a>
                  </li>
                </div>
              
                <div class="sub_rciHeaderSideNavMenu-6 hidesubnav" :class="{ isActive : currentView == 'rciHeaderSideNavMenu-6' }">
                  <li>
                    <a alt="" aria-label="Cruise Planner" id="rciHeaderSideNavSubmenu-6-1" class="headerSidenav__link" href="/booked">
                      <span>Cruise Planner</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Book a Flight" id="rciHeaderSideNavSubmenu-6-2" class="headerSidenav__link" href="/flights/bookFlights">
                      <span>Book a Flight</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Book a Hotel" id="rciHeaderSideNavSubmenu-6-3" class="headerSidenav__link" href="/programs/book-a-hotel">
                      <span>Book a Hotel</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Check-In for My Cruise" id="rciHeaderSideNavSubmenu-6-4" class="headerSidenav__link" href="/account/signin">
                      <span>Check-In for My Cruise</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Make a Payment" id="rciHeaderSideNavSubmenu-6-5" class="headerSidenav__link" href="/reservation/lookup">
                      <span>Make a Payment</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Redeem Cruise Credit" id="rciHeaderSideNavSubmenu-6-6" class="headerSidenav__link" href="/programs/redeem-future-cruise-credit">
                      <span>Redeem Cruise Credit</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Update Guest Information" id="rciHeaderSideNavSubmenu-6-7" class="headerSidenav__link" href="/reservation/lookup">
                      <span>Update Guest Information</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Beverage Packages​" id="rciHeaderSideNavSubmenu-6-8" class="headerSidenav__link" href="/booked/beverage-packages">
                      <span>Beverage Packages​</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Dining Packages​" id="rciHeaderSideNavSubmenu-6-9" class="headerSidenav__link" href="/booked/dining-packages">
                      <span>Dining Packages​</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Shore Excursions​" id="rciHeaderSideNavSubmenu-6-10" class="headerSidenav__link" href="/booked/shore-excursions">
                      <span>Shore Excursions​</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Transportation" id="rciHeaderSideNavSubmenu-6-11" class="headerSidenav__link" href="/plan-a-cruise/transportation">
                      <span>Transportation</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Royal Gifts" id="rciHeaderSideNavSubmenu-6-12" class="headerSidenav__link" href="https://www.royalcaribbean.com/royalgifts/">
                      <span>Royal Gifts</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="My Account" id="rciHeaderSideNavSubmenu-6-13" class="headerSidenav__link" href="/account/signin">
                      <span>My Account</span>
                    </a>
                  </li>
                </div>
              
                <div class="sub_rciHeaderSideNavMenu-7 hidesubnav" :class="{ isActive : currentView == 'rciHeaderSideNavMenu-7' }">
                  <li>
                    <a alt="" aria-label="<b>All FAQs</b>" id="rciHeaderSideNavSubmenu-7-1" class="headerSidenav__link" href="/faq">
                      <span><b>All FAQs</b></span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Boarding Requirements" id="rciHeaderSideNavSubmenu-7-2" class="headerSidenav__link" href="/faq/topics/boarding-requirements">
                      <span>Boarding Requirements</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Future Cruise Credit​" id="rciHeaderSideNavSubmenu-7-3" class="headerSidenav__link" href="/faq/topics/future-cruise-credit">
                      <span>Future Cruise Credit​</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Travel Documents​" id="rciHeaderSideNavSubmenu-7-4" class="headerSidenav__link" href="/faq/topics/travel-documents">
                      <span>Travel Documents​</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Check-in​ &amp; Boarding Pass" id="rciHeaderSideNavSubmenu-7-5" class="headerSidenav__link" href="/faq/topics/online-check-in-boarding">
                      <span>Check-in​ &amp; Boarding Pass</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Transportation​" id="rciHeaderSideNavSubmenu-7-6" class="headerSidenav__link" href="/faq/topics/transportation-embarkation-pier">
                      <span>Transportation​</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Perfect Day at CocoCay​" id="rciHeaderSideNavSubmenu-7-7" class="headerSidenav__link" href="/faq/topics/perfect-day-island">
                      <span>Perfect Day at CocoCay​</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Beverage Packages​" id="rciHeaderSideNavSubmenu-7-8" class="headerSidenav__link" href="/faq/topics/beverage-package">
                      <span>Beverage Packages​</span>
                    </a>
                  </li>
                </div>
              
                
              
                
              
                
              
                
              
                
              
                <div class="sub_rciHeaderSideNavMenu-13 hidesubnav" :class="{ isActive : currentView == 'rciHeaderSideNavMenu-13' }">
                  <li>
                    <a alt="" aria-label="Royal Caribbean" id="rciHeaderSideNavSubmenu-13-1" class="headerSidenav__link" href="/?icid=hprylc_wrnssn_hpr_hm_other_3667">
                      <span>Royal Caribbean</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Celebrity Cruises" id="rciHeaderSideNavSubmenu-13-2" class="headerSidenav__link" href="https://www.celebritycruises.com/?icid=hpclbr_wrnssn_hpc_hm_other_3666">
                      <span>Celebrity Cruises</span>
                    </a>
                  </li>
                
                  <li>
                    <a alt="" aria-label="Silversea" id="rciHeaderSideNavSubmenu-13-3" class="headerSidenav__link" href="https://www.silversea.com/?icid=slvrsl_wrnssn_slv_hm_other_3665">
                      <span>Silversea</span>
                    </a>
                  </li>
                </div>
              
            </ul>
          </div>
        </div>
      </div>
      <div v-show="breakpoint === 'mobile'" class="headerSidenav__bottom">
        <rci-header-search-box inline-template v-if="searchOption">
              
        <div class="headerSearchBox">
                <input placeholder="Start your site search here" class="headerSearchBox__input" v-model="searchQuery" v-on:keyup="searchQuery = $event.target.value" v-on:keyup.enter="searchHandler" :disabled="searching" id="rciSearchInput"/>
                <div id="rciSearchInputIcon" class="headerSearchBox__icon" @click="searchHandler">
                </div>
            </div>

        </rci-header-search-box>
        <rci-header-locale inline-template :flag-path="flagPath" :loaded="!!countryName" :country="country" :country-name="countryName">
          
  
  <div class="headerLocale__base" :class="{'headerLocale__base--visible': loaded}">
    <a id="rciHeaderCountrySelector" alt="" aria-label="a11yCountryFlagText" href="/resources/select-location" class="headerLocale__link">
      <span class="headerLocale__country">{{countryName}}</span>
      <figure class="headerLocale__icon">
        <img class="headerLocale__iconImage" :src="flagPath"/>
      </figure>
    </a>
  </div>

        </rci-header-locale>
      </div>
    </div>
    <div v-show="active" class="headerSidenav__overlay" @click="close">
      <div class="headerSidenav__close">
        <button class="header__button headerSidenav__closeButton" @click="close">
          <div class="header__buttonIcon headerSidenav__closeIcon headerSidenav__closeIcon--white">
          </div>
        </button>
      </div>
    </div>
  </div>

          </rci-header-sidenav>
        </div>
      </div>
    </rci-header>
</div>


	</div>


        
    <div id="root">
        

	
	  
	
		<div class="layout-container__base layout-container__base--full-width layoutContainer__base--root">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="promoHero basicHero parbase aem-GridColumn aem-GridColumn--default--12">


  
  
  
  
  
  

  
  
  
  
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  

  
  
  
  
  

  <rc-promo-hero inline-template :breakpoint="breakpoint" :cookies="cookies" :globalization="globalization" :promotion="{&#34;id&#34;:&#34;63e6741d701649001a4ea874&#34;,&#34;campaignId&#34;:&#34;63e6741d701649001a4ea879&#34;,&#34;type&#34;:&#34;super_sale&#34;,&#34;title&#34;:&#34;Flash Sale Instant Savings&#34;,&#34;headline&#34;:&#34;This is all the vacations&#34;,&#34;description&#34;:&#34;&#34;,&#34;startDate&#34;:&#34;2023-02-22T05:00:00.000Z&#34;,&#34;endDate&#34;:&#34;2023-02-24T04:59:00.000Z&#34;,&#34;extended&#34;:false,&#34;perks&#34;:[{&#34;name&#34;:&#34;instantSavings&#34;,&#34;price&#34;:{&#34;currency&#34;:{&#34;code&#34;:&#34;USD&#34;},&#34;value&#34;:650.0},&#34;value&#34;:&#34;Up to $650 off&#34;},{&#34;name&#34;:&#34;percentOff&#34;,&#34;target&#34;:&#34;all&#34;,&#34;percent&#34;:30,&#34;value&#34;:&#34;+ 30% off all cruises&#34;},{&#34;name&#34;:&#34;kidsSailFree&#34;,&#34;value&#34;:&#34;+ Kids sail free*&#34;}],&#34;countdownEnabled&#34;:true,&#34;media&#34;:{&#34;images&#34;:[{&#34;key&#34;:&#34;largedesktop&#34;,&#34;relativePath&#34;:&#34;/content/dam/royal/promotions/2023/february/february-flash-4/Family_sliding_TidalWave_HP_Jumbotron_1920_1080_FAM-NF_2x.jpg&#34;,&#34;darkenFilter&#34;:true,&#34;textPlacementZone&#34;:false,&#34;textAlignment&#34;:&#34;left&#34;},{&#34;key&#34;:&#34;desktop&#34;,&#34;relativePath&#34;:&#34;/content/dam/royal/promotions/2023/february/february-flash-4/Family_sliding_TidalWave_HP_Jumbotron_1920_1080_FAM-NF_2x.jpg&#34;,&#34;darkenFilter&#34;:true,&#34;textPlacementZone&#34;:false,&#34;textAlignment&#34;:&#34;left&#34;},{&#34;key&#34;:&#34;mobile&#34;,&#34;relativePath&#34;:&#34;/content/dam/royal/promotions/2023/february/february-flash-4/Family_sliding_TidalWave_Vrt_Banner_880_1428_FAM-NF_2x.jpg&#34;,&#34;darkenFilter&#34;:true,&#34;textPlacementZone&#34;:false,&#34;textAlignment&#34;:&#34;left&#34;},{&#34;key&#34;:&#34;tablet&#34;,&#34;relativePath&#34;:&#34;/content/dam/royal/promotions/2023/february/february-flash-4/Family_sliding_TidalWave_HP_Mobile_750_910_FAM-NF_2x.jpg&#34;,&#34;darkenFilter&#34;:true,&#34;textPlacementZone&#34;:false,&#34;textAlignment&#34;:&#34;left&#34;}]},&#34;uiAttributes&#34;:{&#34;primaryColor&#34;:&#34;#ff6699&#34;,&#34;secondaryColor&#34;:&#34;#ffffff&#34;,&#34;countdownBackgroundColor&#34;:&#34;#ff6699&#34;,&#34;countdownTextColor&#34;:&#34;#ffffff&#34;,&#34;ctaLink&#34;:&#34;/cruises?promo\u003dfebruary-flash-sale-4-feb-2023\u0026sort\u003dby:PRICE|order:ASC\u0026icid\u003dctprmh_tctclp_ctp_hm_hero_3675&#34;,&#34;gradientStartColor&#34;:&#34;#25b7e6&#34;,&#34;gradientTransitionColor&#34;:&#34;&#34;,&#34;extendedBackgroundColor&#34;:&#34;#ff6699&#34;,&#34;extendedTextColor&#34;:&#34;#ffffff&#34;,&#34;ctaColor&#34;:&#34;solid_gold&#34;},&#34;contentExpirationDate&#34;:&#34;2023-02-24T04:59:00.000Z&#34;}" component-id="promoHero-479128273" hero-link="/cruises?promo=february-flash-sale-4-feb-2023&amp;sort=by:PRICE|order:ASC&amp;icid=ctprmh_tctclp_ctp_hm_hero_3675" thumbnail-rendition="96x40" @update-cookie="updateCookie" @update-promotions="updatePromotions">

    
    

    <div id="promoHero-479128273" rc-version="0.0.146" class="basicHero__base targetComponent basicHero__base--height-tall basicHero__base--left promoHero__base--active" :class="[{ 'promoHero__retargeting': retargetBanner }]" data-activity="Default" data-experience="Default" data-retargeting="false" data-customization="%7B%0A%20%20%22images%22:%20%5B%5D%0A%7D">
      <a class="basicHero__hyperlink " :href="link" tabindex="-1" @click="clickLink">
      <div class="basicHero__background ">
        
        
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="background" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/2023/february/february-flash-4/Family_sliding_TidalWave_HP_Jumbotron_1920_1080_FAM-NF_2x.jpg?$96x40$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/2023/february/february-flash-4/Family_sliding_TidalWave_Vrt_Banner_880_1428_FAM-NF_2x.jpg?$880x1428$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/2023/february/february-flash-4/Family_sliding_TidalWave_HP_Mobile_750_910_FAM-NF_2x.jpg?$1024x700$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/2023/february/february-flash-4/Family_sliding_TidalWave_HP_Jumbotron_1920_1080_FAM-NF_2x.jpg?$1440x600$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/2023/february/february-flash-4/Family_sliding_TidalWave_HP_Jumbotron_1920_1080_FAM-NF_2x.jpg?$1920x800$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basicHero__imageContainer basicHero__imageContainer--no-caption lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" alt="Family sliding TidalWave HP Jumbotron 1920 1080 FAM NF 2x" class="lazy-loading-image__item basicHero__image" src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/2023/february/february-flash-4/Family_sliding_TidalWave_HP_Jumbotron_1920_1080_FAM-NF_2x.jpg?$96x40$"/>
            <figcaption class="lazy-loading-image__caption basicHero__imageCaption">Family sliding TidalWave HP Jumbotron 1920 1080 FAM NF 2x</figcaption>
        </figure>
    </rc-lazy-loading-image>

      </div>
      <div class="basicHero__container basicHero__container--gradient">
        <div class="basicHero__content">
          <div v-if="false || retargetLockup" class="promoHero__section">
            <figure class="promoHero__lockupContainer">
              
              
              <figcaption class="promoHero__lockupImageCaption"></figcaption>
            </figure>
            
          </div>

          
            <div class="basicHero__section">
              
  
  
  
  
  
  
  
  
  
  
  

  <div class="basicHero__text">
    <h2 class="basicHero__textLine basicHero__textLine--medium" style="color: #FFFFFF; --mobileTextColor: #FFFFFF;">
      This is all the vacations
    </h2>
    
      
      
        
        
        
        
          <h1 class=" basicHero__textLine basicHero__textLine--large" style="color: #FFFFFF; --mobileTextColor: #FFFFFF;">
              Up to $650 off
          </h1>
          
        
      
    
  
      
      
        
        
        
        
          <h3 class=" basicHero__textLine basicHero__textLine--small" style="color: #FFFFFF; --mobileTextColor: #FFFFFF;">
              + 30% off all cruises
          </h3>
          
        
      
    
  
      
      
        
        
        
        
          <h3 class=" basicHero__textLine basicHero__textLine--small" style="color: #FFFFFF; --mobileTextColor: #FFFFFF;">
              + Kids sail free*
          </h3>
          
        
      
    
  </div>

            </div>
          

          
            <div class="promoHero__section" v-if="!retargetLockup">
              

  
  
  
  
  

  <hero-promotion-countdown inline-template custom-background-color="#ff6699" custom-extended-background-color="#ff6699" custom-extended-text-color="#ffffff" custom-text-color="#ffffff" has-no-image="false" promotion-end-date="2023-02-24T04:59:00.000Z" promotion-extended="false">
    <countdown class="heroCountdown__base" :class="{'heroCountdown__base--extended': extended, 'heroCountdown__base--active': active, 'heroCountdown__base--no-image': false}" ref="countdown" :leading-zero="type === 'countdown'" tag="div" :time="timeLeft" @countdownprogress="countdownprogress">
      <template slot-scope="props">
        <div v-if="!extended && type === 'days'" class="heroCountdown__countdown heroCountdown__days" v-bind:style="{ color: textColor, backgroundColor: backgroundColor }">
          ONLY {{ props.days }} DAYS LEFT
        </div>
        <div v-if="type === 'countdown' || extended" class="heroCountdown__countdown" v-bind:style="{ backgroundColor: backgroundColor }">
          <div v-if="extended" class="heroCountdown__extended" v-bind:style="{ backgroundColor: backgroundColor, color: textColor, borderRightColor: textColor }">Extended</div>
          <div class="heroCountdown__copy" v-bind:style="{ color: textColor }">SALE ENDS IN</div>
          <div class="heroCountdown__time" v-bind:style="{ color: textColor }">{{props.totalHours}}</div>
          <div class="heroCountdown__label" v-bind:style="{ color: textColor }">hrs</div>
          <div class="heroCountdown__time" v-bind:style="{ color: textColor }">{{props.minutes}}</div>
          <div class="heroCountdown__label" v-bind:style="{ color: textColor }">mins</div>
          <div class="heroCountdown__time" v-bind:style="{ color: textColor }">{{props.seconds}}</div>
          <div class="heroCountdown__label" v-bind:style="{ color: textColor }">secs</div>
        </div>
      </template>
    </countdown>
  </hero-promotion-countdown>

            </div>
          

          

          <div v-if="!retargetBanner && !retargetLockup" class="basicHero__cta promoHero__section">
            <div id="promoHeroCTAButton" class="basicHero__button solid_gold" role="link" tabindex="0">
              Book Now
            </div>
          </div>
        </div>
      </div>
        <div class="basicHero__trail-top-gradient" style="background-image: linear-gradient(transparent 90%, #25b7e6 100%);"> 
        </div>
      </a>
      <div class="promoHero__section">
        
  <hero-retarget inline-template :breakpoint="breakpoint" :cookies="cookies" :departure-code="departureCode" link-objective="product-view" :override-with-itinerary-background="false" @click-retarget-button="clickLink" @retarget-data="getRetargetData" @update-cookie="updateCookie">
    <div v-if="active" class="heroRetarget__base" :class="{ 'heroRetarget__base--active': Object.keys(rcclGuest).length > 0 }">
      <a class="heroRetarget__hyperlink" :href="hyperlink" @click="clickButton">
        <div class="heroRetarget__content">
          <div class="heroRetarget__caption">Your Cruise is Waiting</div>
          <div class="heroRetarget__title"> {{ rcclGuest.itineraryName }} <rc-dynamic-price inline-template v-if="breakpoint === 'MOBILE'" extended="true" :toggles="toggles" :globalization="globalization" :search="rcclGuest.searchQuery" service="https://www.royalcaribbean.com/ajax/cruises/price/lookup" timeout="5000" :on-get-price="getDynamicPrice">
              <span>
                <span class="dynamicPrice dynamicPrice--empty">From [price]</span>
              </span>
            </rc-dynamic-price>
          </div>
          <rc-dynamic-price inline-template v-if="breakpoint !== 'MOBILE'" extended="true" :toggles="toggles" format="<span class='heroRetarget__currency'>{0}</span>{1}" :globalization="globalization" :search="rcclGuest.searchQuery" service="https://www.royalcaribbean.com/ajax/cruises/price/lookup" timeout="5000" :on-get-price="getDynamicPrice">
            <div class="heroRetarget__bottom">
              <div class="heroRetarget__priceContainer">
                <div v-if="currency" class="heroRetarget__from">From {{ currency }}*</div>
                <div class="heroRetarget__price dynamicPrice">[price]</div>
              </div>
            </div>
          </rc-dynamic-price>
          <div class="heroRetarget__bottom">
            <div class="heroRetarget__cta">COMPLETE BOOKING</div>
          </div>
        </div>
      </a>
      <div class="heroRetarget__close">
        <button class="heroRetarget__close__button" @click="closeHandler">
          <img class="heroRetarget__close__button__icon" src="/content/dam/royal/resources/icons/close-icon-white.svg"/>
        </button>
      </div>
    </div>
  </hero-retarget>

      </div>
      <div class="basicHero__trail-bottom-gradient basicHero__trail-bottom-gradient--dark basicHero__trail-bottom-gradient--dark-white" style="background-image: linear-gradient(#25b7e6 45%, #FFFFFF 90%); --gradientEndColor: #25b7e6">
        
      </div>
    </div>
  </rc-promo-hero>

</div>
<div class="layoutContainer parbase aem-GridColumn aem-GridColumn--default--12">

	
	  
	
		<div class="layout-container__base layout-container__base--centered ">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="layoutContainer parbase aem-GridColumn aem-GridColumn--default--12">

	
	  
	
		<div class="layout-container__base layout-container__base-- ">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="cruiseSearchWidget parbase aem-GridColumn aem-GridColumn--default--12">


<cruise-search-widget inline-template v-cloak :breakpoint="breakpoint" :globalization="globalization" :cookies="cookies">
  <div class="cruise-search-widget__base" rc-version="0.0.18" :class="{ 'cruise-search-widget--active': !!activeFilter, 'cruise-search-widget__breakpoint--mobile': 'MOBILE' === breakpoint }">
  
    <transition name="skeleton-fade">
        <div class="cruise-search-widget__skeleton" v-if="!componentLoaded">
            <div class="skeleton__boxes">
            <div class="skeleton__box skeleton-style-box"></div>
            <div class="skeleton__box skeleton-style-box"></div>
            <div class="skeleton__box skeleton-style-box"></div>
            <div class="skeleton__box skeleton-style-box skeleton__box__cta"></div>
            </div>
        </div>
    </transition>


  <div class="v-cloak--display">
    
<div class="cruise-search-widget__title">Find a Cruise</div>

    
<div class="cruise-search-widget__toolbar">
  <!-- destinations filter -->
  <div id="rciCruiseSearchWidgetDestinationsFilter" class="cruise-search-widget__filter" :class="{'cruise-search-widget__filter--active': filterType.destinations === activeFilter}" tabindex="0" @click="selectFilter(filterType.destinations)">
  <div class="cruise-search-widget__filter__holder">
    <div class="cruise-search-widget__label">Cruising to</div>
    <div class="cruise-search-widget__selector">
      <span v-if="0 === selection.destinationRegionCode.length" class="cruise-search-widget__selection">Any Destination</span>
      <span v-else class="cruise-search-widget__selection">{{ getDestinationByValue(selection.destinationRegionCode[0])['label'] }}</span>
      <span v-if="1 >= selection.destinationRegionCode.length" class="cruise-search-widget__icon cruise-search-widget__icon__caret">
        <span class="cruise-search-widget__icon__caret__icon"></span>
      </span>
      <span v-else class="cruise-search-widget__badge">
        +{{ selection.destinationRegionCode.length - 1 }}
      </span>
    </div>
  </div>
  </div>
  <!-- departure ports filter -->
  <div id="rciCruiseSearchWidgetDeparturePortsFilter" class="cruise-search-widget__filter" :class="{ 'cruise-search-widget__filter--active': filterType.departurePorts === activeFilter }" tabindex="0" @click="selectFilter(filterType.departurePorts)">
  <div class="cruise-search-widget__filter__holder">
    <span class="cruise-search-widget__label">Departing from</span>
    <div class="cruise-search-widget__selector">
      <span v-if="0 === selection.departureCode.length" class="cruise-search-widget__selection">Any Departure Port</span>
      <span v-else class="cruise-search-widget__selection">{{ getDeparturePortByValue(selection.departureCode[0])['label'] }}</span>
      <span v-if="1 >= selection.departureCode.length" class="cruise-search-widget__icon cruise-search-widget__icon__caret">
        <span class="cruise-search-widget__icon__caret__icon"></span>
      </span>
      <span v-else class="cruise-search-widget__badge">
        +{{ selection.departureCode.length - 1 }}
      </span>
    </div>
    </div>
  </div>
  <!-- dates filter -->
  <div id="rciCruiseSearchWidgetDatesFilter" class="cruise-search-widget__filter" :class="{ 'cruise-search-widget__filter--active': filterType.dates === activeFilter }" tabindex="0" @click="selectFilter(filterType.dates)">
  <div class="cruise-search-widget__filter__holder">
    <span v-if="'MOBILE' === breakpoint" class="cruise-search-widget__label">Departing</span>
    <span v-else class="cruise-search-widget__label">Leaving</span>
    <div class="cruise-search-widget__selector">
      <span v-if="0 === selection.dates.length" class="cruise-search-widget__selection">Any Date</span>
      <span v-else class="cruise-search-widget__selection">{{ minDate.label }} <span v-if="minDate.id !== maxDate.id">- {{ maxDate.label }}</span></span>
      <span class="cruise-search-widget__icon">
        <span class="cruise-search-widget__icon__calendar"></span>
      </span>
    </div>
  </div>
  </div>
  <!-- cta -->
  <div class="cruise-search-widget__cta" :class="{ 'cruise-search-widget__cta--align-right': !hasPreSelection }">
    <button id="rciCruiseSearchWidgetSubmitButton" class="cruise-search-widget__button cruise-search-widget__button--blue" @click="submit">
      <span v-if="hasPreSelection">Search Again</span>
      <span v-else>Search Cruises</span>
    </button>
    <button v-if="hasPreSelection" id="rciCruiseSearchWidgetClearAllButton" class="cruise-search-widget__button" @click="reset">
      Start over
    </button>
  </div>
</div>

    
<div class="cruise-search-widget__dropdown" v-show="activeFilter">
  <div class="cruise-search-widget__dropdown-container">
    
<div v-if="'MOBILE' === breakpoint" class="cruise-search-widget__dropdown-header">
  <div class="cruise-search-widget__dropdown-header-container">
    <span class="cruise-search-widget__dropdown-back-button" @click="closeDropdown()">
        <img class="cruise-search-widget__dropdown-back-icon" src="/content/dam/royal/resources/icons/caret-icon-blue.svg"/>
    </span>
    <span v-if="filterType.destinations === activeFilter" class="cruise-search-widget__dropdown-title">
      Select Destination
    </span>
    <span v-if="filterType.departurePorts === activeFilter" class="cruise-search-widget__dropdown-title">
      Select Departure Ports
    </span>
    <span v-if="filterType.dates === activeFilter" class="cruise-search-widget__dropdown-title">
      Select Travel Dates
    </span>
    <button class="cruise-search-widget__dropdown-button" type="button" @click="closeDropdown()">
      Apply
    </button>
  </div>

</div>

    <div class="cruise-search-widget__dropdown-body">
      <cruise-search-widget-filter inline-template v-if="filterType.destinations === activeFilter" :filter-type="filterType.destinations" :options="destinations" :on-change="select">
        
<div class="cruise-search-widget-filter__base">
  <div v-if="hasChildren" class="cruise-search-widget-filter__tabs">
    <div v-for="(option, index) in options" :key="index" class="cruise-search-widget-filter__tab" :class="{'cruise-search-widget-filter__tab--active': index === activeTab }" @click="updateActiveTab(index)">
      {{ option.label }}
    </div>
  </div>
  <div class="cruise-search-widget-filter__options">
    <div v-for="item in items" :key="item.id" class="cruise-search-widget-filter__option">
      <input class="cruise-search-widget-filter__input" :checked="item.selected" :disabled="item.disabled" :id="item.type + '_' + item.id" :name="item.type" type="checkbox" :value="item.id" @change="change(item)"/>
      <label class="cruise-search-widget-filter__label" :for="item.type + '_' + item.id">
        {{ item.label }}
      </label>
    </div>
  </div>
</div>

      </cruise-search-widget-filter>

      <cruise-search-widget-filter inline-template v-if="filterType.departurePorts === activeFilter" :filter-type="filterType.departurePorts" has-children="true" :options="departurePorts" :on-change="select">
        
<div class="cruise-search-widget-filter__base">
  <div v-if="hasChildren" class="cruise-search-widget-filter__tabs">
    <div v-for="(option, index) in options" :key="index" class="cruise-search-widget-filter__tab" :class="{'cruise-search-widget-filter__tab--active': index === activeTab }" @click="updateActiveTab(index)">
      {{ option.label }}
    </div>
  </div>
  <div class="cruise-search-widget-filter__options">
    <div v-for="item in items" :key="item.id" class="cruise-search-widget-filter__option">
      <input class="cruise-search-widget-filter__input" :checked="item.selected" :disabled="item.disabled" :id="item.type + '_' + item.id" :name="item.type" type="checkbox" :value="item.id" @change="change(item)"/>
      <label class="cruise-search-widget-filter__label" :for="item.type + '_' + item.id">
        {{ item.label }}
      </label>
    </div>
  </div>
</div>

      </cruise-search-widget-filter>

      <cruise-search-widget-date-filter inline-template v-if="filterType.dates === activeFilter" :dates="dates" :min-date="minDate" :max-date="maxDate" :on-change="selectDate">
        
  <div class="cruise-search-widget-filter__base cruise-search-widget-filter__base--type-date">
    <div v-for="(months, year) in datesGroupByYear" :key="year" class="cruise-search-widget-filter__year">
      <div class="cruise-search-widget-filter__year-title"><span>{{ year }}</span></div>
      <div class="cruise-search-widget-filter__months">
        <div v-for="month in months" :key="month.id" class="cruise-search-widget-filter__month" :class="{ 'cruise-search-widget-filter__month--disabled': month.disabled, 'cruise-search-widget-filter__month--selected': minDate && maxDate && minDate.id < month.id && maxDate.id > month.id, 'cruise-search-widget-filter__month--selected-first': minDate && minDate.id === month.id, 'cruise-search-widget-filter__month--selected-last': maxDate && maxDate.id === month.id }">
          <input class="cruise-search-widget-filter__input" :checked="month.selected" :disabled="month.disabled" :id="month.type + '_' + month.id" :name="month.type" type="checkbox" :value="month.id" @change="change(month)"/>
          <label class="cruise-search-widget-filter__month-label" :for="month.type + '_' + month.id">
            {{ month.label }}
          </label>
        </div>
      </div>
    </div>
  </div>

      </cruise-search-widget-date-filter>
    </div>
  </div>
</div>

  </div>
</div>
</cruise-search-widget>

</div>
<div class="spacer parbase aem-GridColumn aem-GridColumn--default--12">

  
  <div id="spacerComponent-941116029" rc-version="0.0.164" class="spacer__base spacer__base--vertical-small">
    
  </div>

</div>
<div class="layoutContainer parbase aem-GridColumn aem-GridColumn--default--12">

	
	  
	
		<div class="layout-container__base layout-container__base--full-width toggleContent northeast">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="experienceContainer aem-GridColumn aem-GridColumn--default--12">
  
  <div id="experiencesContainer-517378880" data-experience-path="/Northeast/Northeast">
      <div class="xfpageRoyalNextGen xfpage page basicpage">

    



<div class="xf-content-height">
    


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="spacer parbase aem-GridColumn aem-GridColumn--default--12">

  
  <div id="spacerComponent-686861092" rc-version="0.0.164" class="spacer__base spacer__base--vertical-medium">
    
  </div>

</div>
<div class="basicTile parbase aem-GridColumn--default--none aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--offset--default--0">

  
  

  <rc-basic-tile inline-template :breakpoint="breakpoint" :globalization="globalization">
    <div id="basicTile-1204390488" rc-version="0.0.164" class="basic-tile__base basic-tile__base--aspect-ratio-square basic-tile__base--hoirzontal-alignment-center basic-tile__base--vertical-alignment-center">
      
    
    <div class="basic-tile__container">
        <a class="basic-tile__link" href="/cruises/?departureCode_BYE=true&location_PCC=true&icid=gtrgtn_tctclp_gtr_hm_tile2_3510" tabindex="0">
            <div class="basic-tile__background  basic-tile__background--gradient">
                
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/geotargeting/northeast/perfect-day-island-cococay-bahamas-hot-air-balloon.jpg?$40x40$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/geotargeting/northeast/perfect-day-island-cococay-bahamas-hot-air-balloon.jpg?$440x440$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/geotargeting/northeast/perfect-day-island-cococay-bahamas-hot-air-balloon.jpg?$440x440$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/geotargeting/northeast/perfect-day-island-cococay-bahamas-hot-air-balloon.jpg?$440x440$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/geotargeting/northeast/perfect-day-island-cococay-bahamas-hot-air-balloon.jpg?$520x520$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-tile__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/geotargeting/northeast/perfect-day-island-cococay-bahamas-hot-air-balloon.jpg?$40x40$"/>
            <figcaption class="lazy-loading-image__caption "></figcaption>
        </figure>
    </rc-lazy-loading-image>

            </div>
            <rc-dynamic-price inline-template default="$248" search="?departureCode_BYE=true&amp;location_PCC=true&amp;icid=gtrgtn_tctclp_gtr_hm_tile2_3510" service="https://www.royalcaribbean.com/ajax/cruises/price/lookup" timeout="5000" :globalization="globalization" :toggles="toggles">
                <div class="basic-tile__content">
                    <p><span class="detailsText">Cruises to Perfect Day</span></p>
<p><span class="heading2">from New York</span></p>
<p><span class="detailsText">STARTING FROM </span></p>
<p><span class="dynamicPrice heading3">[price]</span></p>
<p><span class="goldBtn">Book Now</span></p>

                </div>
            </rc-dynamic-price>
        </a>
    </div>

    </div>
  </rc-basic-tile>

</div>
<div class="basicTile parbase aem-GridColumn--default--none aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--offset--default--0">

  
  

  <rc-basic-tile inline-template :breakpoint="breakpoint" :globalization="globalization">
    <div id="basicTile-2064986437" rc-version="0.0.164" class="basic-tile__base basic-tile__base--aspect-ratio-square basic-tile__base--hoirzontal-alignment-center basic-tile__base--vertical-alignment-center">
      
    
    <div class="basic-tile__container">
        <a class="basic-tile__link" href="https://www.royalcaribbean.com/cruise-search?search=departurePort:FLL,MIA,PCN,TPA&icid=gtrgtn_tctclp_gtr_hm_tile2_3493" tabindex="0">
            <div class="basic-tile__background  basic-tile__background--gradient">
                
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/geotargeting/northeast/miami-florida-art-deco-buildings.jpg?$40x40$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/geotargeting/northeast/miami-florida-art-deco-buildings.jpg?$440x440$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/geotargeting/northeast/miami-florida-art-deco-buildings.jpg?$440x440$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/geotargeting/northeast/miami-florida-art-deco-buildings.jpg?$440x440$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/geotargeting/northeast/miami-florida-art-deco-buildings.jpg?$520x520$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-tile__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/geotargeting/northeast/miami-florida-art-deco-buildings.jpg?$40x40$"/>
            <figcaption class="lazy-loading-image__caption "></figcaption>
        </figure>
    </rc-lazy-loading-image>

            </div>
            <rc-dynamic-price inline-template default="$149" search="?search=departurePort:FLL,MIA,PCN,TPA&amp;icid=gtrgtn_tctclp_gtr_hm_tile2_3493" service="https://www.royalcaribbean.com/ajax/cruises/price/lookup" timeout="5000" :globalization="globalization" :toggles="toggles">
                <div class="basic-tile__content">
                    <p><span class="detailsText">Cruise from</span></p>
<p><span class="heading2">Florida</span></p>
<p><span class="detailsText">STARTING FROM </span></p>
<p><span class="dynamicPrice heading3">[price]</span></p>
<p><span class="goldBtn">Book Now</span></p>

                </div>
            </rc-dynamic-price>
        </a>
    </div>

    </div>
  </rc-basic-tile>

</div>
<div class="basicTile parbase aem-GridColumn--default--none aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--offset--default--0">

  
  

  <rc-basic-tile inline-template :breakpoint="breakpoint" :globalization="globalization">
    <div id="basicTile-974245162" rc-version="0.0.164" class="basic-tile__base basic-tile__base--aspect-ratio-square basic-tile__base--hoirzontal-alignment-center basic-tile__base--vertical-alignment-center">
      
    
    <div class="basic-tile__container">
        <a class="basic-tile__link" href="/cruises?search=startDate:2023-05-01~2023-09-15&icid=gtrgtn_tctclp_gtr_hm_tile2_3660" tabindex="0">
            <div class="basic-tile__background  basic-tile__background--gradient">
                
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/geotargeting/northeast/allure-of-the-seas-sunset-sailing-aerial.jpg?$40x40$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/geotargeting/northeast/allure-of-the-seas-sunset-sailing-aerial.jpg?$440x440$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/geotargeting/northeast/allure-of-the-seas-sunset-sailing-aerial.jpg?$440x440$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/geotargeting/northeast/allure-of-the-seas-sunset-sailing-aerial.jpg?$440x440$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/geotargeting/northeast/allure-of-the-seas-sunset-sailing-aerial.jpg?$520x520$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-tile__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/geotargeting/northeast/allure-of-the-seas-sunset-sailing-aerial.jpg?$40x40$"/>
            <figcaption class="lazy-loading-image__caption "></figcaption>
        </figure>
    </rc-lazy-loading-image>

            </div>
            <rc-dynamic-price inline-template default="$121" search="?search=startDate:2023-05-01~2023-09-15&amp;icid=gtrgtn_tctclp_gtr_hm_tile2_3660" service="https://www.royalcaribbean.com/ajax/cruises/price/lookup" timeout="5000" :globalization="globalization" :toggles="toggles">
                <div class="basic-tile__content">
                    <p><span class="detailsText">2023</span></p>
<p><span class="heading2">summer Getaways</span></p>
<p><span class="detailsText">STARTING FROM </span></p>
<p><span class="dynamicPrice heading3">[price]</span></p>
<p><span class="goldBtn">Book Now</span></p>

                </div>
            </rc-dynamic-price>
        </a>
    </div>

    </div>
  </rc-basic-tile>

</div>
<div class="basicTile parbase aem-GridColumn--default--none aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--offset--default--0">

  
  

  <rc-basic-tile inline-template :breakpoint="breakpoint" :globalization="globalization">
    <div id="basicTile-78617011" rc-version="0.0.164" class="basic-tile__base basic-tile__base--aspect-ratio-square basic-tile__base--hoirzontal-alignment-center basic-tile__base--vertical-alignment-center">
      
    
    <div class="basic-tile__container">
        <a class="basic-tile__link" href="/cruises/?country=USA&departureCode_BYE=true&shipCode_AN=true&shipCode_OA=true&icid=gtrgtn_tctclp_gtr_hm_tile2_3495" tabindex="0">
            <div class="basic-tile__background  basic-tile__background--gradient">
                
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/geotargeting/northeast/sunset-cruise-deck_520_520.jpg?$40x40$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/geotargeting/northeast/sunset-cruise-deck_520_520.jpg?$440x440$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/geotargeting/northeast/sunset-cruise-deck_520_520.jpg?$440x440$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/geotargeting/northeast/sunset-cruise-deck_520_520.jpg?$440x440$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/geotargeting/northeast/sunset-cruise-deck_520_520.jpg?$520x520$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-tile__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/geotargeting/northeast/sunset-cruise-deck_520_520.jpg?$40x40$"/>
            <figcaption class="lazy-loading-image__caption "></figcaption>
        </figure>
    </rc-lazy-loading-image>

            </div>
            <rc-dynamic-price inline-template default="$248" search="?country=USA&amp;departureCode_BYE=true&amp;shipCode_AN=true&amp;shipCode_OA=true&amp;icid=gtrgtn_tctclp_gtr_hm_tile2_3495" service="https://www.royalcaribbean.com/ajax/cruises/price/lookup" timeout="5000" :globalization="globalization" :toggles="toggles">
                <div class="basic-tile__content">
                    <p><span class="detailsText">Bold Balcony Deals from</span></p>
<p><span class="heading2">New York</span></p>
<p><span class="detailsText">STARTING FROM </span></p>
<p><span class="dynamicPrice heading3">[price]</span></p>
<p><span class="goldBtn">Book Now</span></p>

                </div>
            </rc-dynamic-price>
        </a>
    </div>

    </div>
  </rc-basic-tile>

</div>
<div class="spacer parbase aem-GridColumn aem-GridColumn--default--12">

  
  <div id="spacerComponent-1919195139" rc-version="0.0.164" class="spacer__base spacer__base--vertical-medium">
    
  </div>

</div>
<div class="layoutContainer parbase aem-GridColumn aem-GridColumn--default--12">

	
	  
	
		<div id="weather_layout" class="layout-container__base layout-container__base--full-width ">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    
    
</div>
</div>
		</div>
	
	

</div>
<div class="cruiseCarousel aem-GridColumn aem-GridColumn--default--12">

  
  
  
  
  <rc-cruise-carousel inline-template id="cruiseCarousel-1991025893" initial-search="departureCode_BOS=true&amp;departureCode_BYE=true&amp;departureCode_YQB=true" items-layout="card" legacy-market-language-path="%2Fcontent%2Froyal%2Fusa%2Fen" legacy-timeout="5000" :breakpoint="breakpoint" :cookies="cookies" :dictionary="{
      errorNoResultsLinkLabel: 'View All Cruises',
      errorNoResultsText: 'We have circled the globe and could not find any sailings that match your search.',
      itemCTALabelPlural: 'View {0} dates',
      itemCTALabelSingular: 'View 1 date',
      'itemPill_best-value': 'Best value',
      'itemPill_lowest-price': 'Lowest price',
      'itemPill_recommended': 'Recommended',
      itemPriceLabel: 'Starting from*',
      'itemPriceLabel_compact': 'per person from*',
      itemPriceValue: '{0}/person',
      'itemPriceValue_compact': '{0}',
      itemTitle: '{0} Night {1}',
      lastSearchTabLabel: 'Your Last Search',
      legacyShipSufix: 'of the Seas',
      searchItemDescription: 'in this category',
      searchItemLabel: 'View all',
      searchItemTitle: '{0} Itineraries',
    }" :globalization="globalization" :initial-tabs="[{&#34;searchURL&#34;:&#34;departureCode_BOS\u003dtrue\u0026departureCode_BYE\u003dtrue\u0026departureCode_YQB\u003dtrue&#34;}]" :show-item-pills="false" :show-last-search-tab="false" :toggles="toggles" @update-promotions="updatePromotions">
    <div id="cruiseCarousel-1991025893" rc-version="0.0.152" class="cruise-carousel__base cruise-carousel__theme--light">
      
	<div class="cruise-carousel__schema">
    
	</div>

      <div class="cruise-carousel__header cruise-carousel--centered">
        <h2 class="cruise-carousel__title">SAVE ON CRUISES FROM NEW YORK</h2>
        <p class="cruise-carousel__subtitle">Plus 30% off all cruises and Kids Sail Free</p>
        
      </div>
      
      <div class="cruise-carousel__search" style="background-color: transparent;">
        <div class="cruise-carousel__wrapper" :class="{ 'cruise-carousel__wrapper--loaded': loaded }">
          <div v-show="showLeftArrow" class="cruise-carousel__arrow cruise-carousel__arrow--left" @click="slideLeft">
          </div>
          <div ref="carousel" class="cruise-carousel__slider basic-carousel__scrollbar--hidden" :class="{
              'cruise-carousel__slider--scroll-smooth': smoothScrolling,
              'cruise-carousel__slider--align-left': alignLeft,
            }">
            <div v-for="(item, index) in items" :key="item.key" class="cruise-carousel__item"> 
            
  
	
    <rc-cruise-carousel-card-item layout="card" theme="default" :breakpoint="breakpoint" :item="item" :show-pills="showItemPills">
    </rc-cruise-carousel-card-item>
  
  

            </div>
            <div v-if="!!searchItem" class="cruise-carousel__item">
              <rc-cruise-carousel-search-item layout="card" :item="searchItem">
              </rc-cruise-carousel-search-item>
            </div>
          </div>
          <div v-show="showRightArrow" class="cruise-carousel__arrow cruise-carousel__arrow--right" @click="slideRight">
          </div>
        </div>
        
  <div class="cruise-carousel-skeleton__base" :class="{ 'cruise-carousel-skeleton--hidden': loaded }">
    <div class="cruise-carousel-skeleton__item cruise-carousel-skeleton__item--card">
      
      
        <div class="cruise-carousel-skeleton__item-image skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-title skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-price skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-description skeleton-style-box"></div>
      
      
    </div>
  
    <div class="cruise-carousel-skeleton__item cruise-carousel-skeleton__item--card">
      
      
        <div class="cruise-carousel-skeleton__item-image skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-title skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-price skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-description skeleton-style-box"></div>
      
      
    </div>
  
    <div class="cruise-carousel-skeleton__item cruise-carousel-skeleton__item--card">
      
      
        <div class="cruise-carousel-skeleton__item-image skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-title skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-price skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-description skeleton-style-box"></div>
      
      
    </div>
  
    <div class="cruise-carousel-skeleton__item cruise-carousel-skeleton__item--card">
      
      
        <div class="cruise-carousel-skeleton__item-image skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-title skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-price skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-description skeleton-style-box"></div>
      
      
    </div>
  
    <div class="cruise-carousel-skeleton__item cruise-carousel-skeleton__item--card">
      
      
        <div class="cruise-carousel-skeleton__item-image skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-title skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-price skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-description skeleton-style-box"></div>
      
      
    </div>
  
    <div class="cruise-carousel-skeleton__item cruise-carousel-skeleton__item--card">
      
      
        <div class="cruise-carousel-skeleton__item-image skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-title skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-price skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-description skeleton-style-box"></div>
      
      
    </div>
  </div>

        
	<div v-if="error" class="cruise-carousel-error__base cruise-carousel-error__layout--card" :class="{ 'cruise-carousel-error--loaded': loaded }">
    <p class="cruise-carousel-error__text">{{error.text}} <a class="cruise-carousel-error__link" :href="error.link.path">{{error.link.label}}</a></p>
	</div>

      </div>
    </div>
  </rc-cruise-carousel>
</div>

    
</div>

</div></div>

  </div>
</div>

    
</div>
</div>
		</div>
	
	

</div>
<div class="layoutContainer parbase aem-GridColumn aem-GridColumn--default--12">

	
	  
	
		<div class="layout-container__base layout-container__base--full-width default">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 aem-Grid--phone--12 ">
    
    <div class="basicTile parbase aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--tablet--6 aem-GridColumn--offset--phone--0 aem-GridColumn--default--3 aem-GridColumn--offset--default--0">

  
  

  <rc-basic-tile inline-template :breakpoint="breakpoint" :globalization="globalization">
    <div id="basicTile-1826074847" rc-version="0.0.164" class="basic-tile__base basic-tile__base--aspect-ratio-square basic-tile__base--hoirzontal-alignment-center basic-tile__base--vertical-alignment-center">
      
    
    <div class="basic-tile__container">
        <a class="basic-tile__link" href="/cruises/?durationCode_2to4=true&location_PCC=true&icid=yftl82_tctclp_hmp_hm_other_3452" tabindex="0">
            <div class="basic-tile__background  basic-tile__background--gradient">
                
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/special-mkgt/paid-search/perfect-day-up-up-and-away.jpg?$40x40$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/special-mkgt/paid-search/perfect-day-up-up-and-away.jpg?$440x440$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/special-mkgt/paid-search/perfect-day-up-up-and-away.jpg?$440x440$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/special-mkgt/paid-search/perfect-day-up-up-and-away.jpg?$440x440$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/special-mkgt/paid-search/perfect-day-up-up-and-away.jpg?$520x520$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-tile__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" alt="perfect day up up and away" class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/special-mkgt/paid-search/perfect-day-up-up-and-away.jpg?$40x40$"/>
            <figcaption class="lazy-loading-image__caption ">Perfect Day at CocoCay, OOH, Jordan &amp; Dani, May 1, 2019 shoot, aerial shot of Up Up and Away balloon flying over Splash Summit, Daredevil&#39;&#39;s Tower, and Thrill Waterpark, Mariner of the Seas docked at pier entrance</figcaption>
        </figure>
    </rc-lazy-loading-image>

            </div>
            <rc-dynamic-price inline-template default="$158" search="?durationCode_2to4=true&amp;location_PCC=true" service="https://www.royalcaribbean.com/ajax/cruises/price/lookup" timeout="5000" :globalization="globalization" :toggles="toggles">
                <div class="basic-tile__content">
                    <p><span class="detailsText">PERFECT DAY AT COCOCAY</span></p>
<p><span class="heading2">WEEKEND GETAWAYS</span></p>
<p><span class="detailsText">STARTING FROM </span></p>
<p><span class="dynamicPrice heading3">[price]</span></p>
<p><span class="goldBtn">Book Now</span></p>

                </div>
            </rc-dynamic-price>
        </a>
    </div>

    </div>
  </rc-basic-tile>

</div>
<div class="basicTile parbase aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--tablet--6 aem-GridColumn--offset--phone--0 aem-GridColumn--default--3 aem-GridColumn--offset--default--0">

  
  

  <rc-basic-tile inline-template :breakpoint="breakpoint" :globalization="globalization">
    <div id="basicTile-1826017312" rc-version="0.0.164" class="basic-tile__base basic-tile__base--aspect-ratio-square basic-tile__base--hoirzontal-alignment-center basic-tile__base--vertical-alignment-center">
      
    
    <div class="basic-tile__container">
        <a class="basic-tile__link" href="/cruises/?departureCode_BYE=true&departureCode_FLL=true&departureCode_GAL=true&departureCode_MIA=true&departureCode_PCN=true&departureCode_TPA=true&destinationRegionCode_BAHAM=true&destinationRegionCode_CARIB=true&durationCode_7to7=true&icid=cybrpd_tctclp_hmp_hm_other_3453" tabindex="0">
            <div class="basic-tile__background  basic-tile__background--gradient">
                
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/philipsburg-st-maarten/saint-maarten-philipsburg-aerial-coast-daytime.jpg?$40x40$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/philipsburg-st-maarten/saint-maarten-philipsburg-aerial-coast-daytime.jpg?$440x440$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/philipsburg-st-maarten/saint-maarten-philipsburg-aerial-coast-daytime.jpg?$440x440$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/philipsburg-st-maarten/saint-maarten-philipsburg-aerial-coast-daytime.jpg?$440x440$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/philipsburg-st-maarten/saint-maarten-philipsburg-aerial-coast-daytime.jpg?$520x520$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-tile__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" alt="Aerial View of the Coast, Philipsburg, St. Maarten" class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/philipsburg-st-maarten/saint-maarten-philipsburg-aerial-coast-daytime.jpg?$40x40$"/>
            <figcaption class="lazy-loading-image__caption ">Aerial View of the Coast, Philipsburg, St. Maarten</figcaption>
        </figure>
    </rc-lazy-loading-image>

            </div>
            <rc-dynamic-price inline-template default="$290" search="?departureCode_BYE=true&amp;departureCode_FLL=true&amp;departureCode_GAL=true&amp;departureCode_MIA=true&amp;departureCode_PCN=true&amp;departureCode_TPA=true&amp;destinationRegionCode_BAHAM=true&amp;destinationRegionCode_CARIB=true&amp;durationCode_7to7=true&amp;icid=cybrpd_tctclp_hmp_hm_other_3453" service="https://www.royalcaribbean.com/ajax/cruises/price/lookup" timeout="5000" :globalization="globalization" :toggles="toggles">
                <div class="basic-tile__content">
                    <p><span class="detailsText">7 NIGHT</span></p>
<p><span class="heading2">CARIBBEAN CRUISES</span></p>
<p><span class="detailsText">STARTING FROM </span></p>
<p><span class="dynamicPrice heading3">[price]</span></p>
<p><span class="goldBtn">Book Now</span></p>

                </div>
            </rc-dynamic-price>
        </a>
    </div>

    </div>
  </rc-basic-tile>

</div>
<div class="basicTile parbase aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--tablet--6 aem-GridColumn--offset--phone--0 aem-GridColumn--default--3 aem-GridColumn--offset--default--0">

  
  

  <rc-basic-tile inline-template :breakpoint="breakpoint" :globalization="globalization">
    <div id="basicTile-493976629" rc-version="0.0.164" class="basic-tile__base basic-tile__base--aspect-ratio-square basic-tile__base--hoirzontal-alignment-center basic-tile__base--vertical-alignment-center">
      
    
    <div class="basic-tile__container">
        <a class="basic-tile__link" href="/cruises/?dates_maxDate=08%252F31%252F2023&dates_minDate=01%252F01%252F2023&departureCode_BYE=true&icid=ncmpgn_tctclp_ncm_dlsprm_sec1tl_3548&icid=ncmpgn_tctclp_ncm_dlsprm_sec1tl_3548" tabindex="0">
            <div class="basic-tile__background  basic-tile__background--gradient">
                
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/launch-images/content-updates/abyss_OA_NY.jpg?$40x40$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/launch-images/content-updates/abyss_OA_NY.jpg?$440x440$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/launch-images/content-updates/abyss_OA_NY.jpg?$440x440$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/launch-images/content-updates/abyss_OA_NY.jpg?$440x440$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/launch-images/content-updates/abyss_OA_NY.jpg?$520x520$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-tile__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" alt="abyss OA NY" class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/launch-images/content-updates/abyss_OA_NY.jpg?$40x40$"/>
            <figcaption class="lazy-loading-image__caption ">abyss OA NY</figcaption>
        </figure>
    </rc-lazy-loading-image>

            </div>
            <rc-dynamic-price inline-template default="$299" search="?dates_maxDate=08%252F31%252F2023&amp;dates_minDate=01%252F01%252F2023&amp;departureCode_BYE=true&amp;icid=ncmpgn_tctclp_ncm_dlsprm_sec1tl_3548&amp;icid=ncmpgn_tctclp_ncm_dlsprm_sec1tl_3548" service="https://www.royalcaribbean.com/ajax/cruises/price/lookup" timeout="5000" :globalization="globalization" :toggles="toggles">
                <div class="basic-tile__content">
                    <p><span class="detailsText">2023</span></p>
<p><span class="heading2">SAIL FROM NEW YORK</span></p>
<p><span class="detailsText">STARTING FROM </span></p>
<p><span class="dynamicPrice heading3">[price]</span></p>
<p><span class="goldBtn">Book Now</span></p>

                </div>
            </rc-dynamic-price>
        </a>
    </div>

    </div>
  </rc-basic-tile>

</div>
<div class="basicTile parbase aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--tablet--6 aem-GridColumn--offset--phone--0 aem-GridColumn--default--3 aem-GridColumn--offset--default--0">

  
  

  <rc-basic-tile inline-template :breakpoint="breakpoint" :globalization="globalization">
    <div id="basicTile-1818573470" rc-version="0.0.164" class="basic-tile__base basic-tile__base--aspect-ratio-square basic-tile__base--hoirzontal-alignment-center basic-tile__base--vertical-alignment-center">
      
    
    <div class="basic-tile__container">
        <a class="basic-tile__link" href="/cruises/?destinationRegionCode_ALCAN=true&icid=lskdls_tctclp_lsk_dlsprm_sec1tl_3497" tabindex="0">
            <div class="basic-tile__background  basic-tile__background--gradient">
                
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/Alaska/alaska-juneau-glacier-couple-exploring-shore-excursion.jpg?$40x40$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/Alaska/alaska-juneau-glacier-couple-exploring-shore-excursion.jpg?$440x440$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/Alaska/alaska-juneau-glacier-couple-exploring-shore-excursion.jpg?$440x440$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/Alaska/alaska-juneau-glacier-couple-exploring-shore-excursion.jpg?$440x440$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/Alaska/alaska-juneau-glacier-couple-exploring-shore-excursion.jpg?$520x520$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-tile__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" alt="Couple Exploring a Glacier, Juneau, Alaska" class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/Alaska/alaska-juneau-glacier-couple-exploring-shore-excursion.jpg?$40x40$"/>
            <figcaption class="lazy-loading-image__caption ">Couple Exploring a Glacier, Juneau, Alaska</figcaption>
        </figure>
    </rc-lazy-loading-image>

            </div>
            <rc-dynamic-price inline-template default="$343" search="?destinationRegionCode_ALCAN=true&amp;icid=lskdls_tctclp_lsk_dlsprm_sec1tl_3497" service="https://www.royalcaribbean.com/ajax/cruises/price/lookup" timeout="5000" :globalization="globalization" :toggles="toggles">
                <div class="basic-tile__content">
                    <p><span class="detailsText">2023</span></p>
<p><span class="heading2">ALASKA CRUISES</span></p>
<p><span class="detailsText">STARTING FROM </span></p>
<p><span class="dynamicPrice heading3">[price]</span></p>
<p><span class="goldBtn">Book Now</span></p>

                </div>
            </rc-dynamic-price>
        </a>
    </div>

    </div>
  </rc-basic-tile>

</div>
<div class="spacer parbase aem-GridColumn aem-GridColumn--default--12">

  
  <div id="spacerComponent-1456925161" rc-version="0.0.164" class="spacer__base spacer__base--vertical-medium">
    
  </div>

</div>
<div class="layoutContainer parbase aem-GridColumn aem-GridColumn--default--12">

	
	  
	
		<div id="weather_layout" class="layout-container__base layout-container__base--full-width ">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    
    
</div>
</div>
		</div>
	
	

</div>
<div class="cruiseCarousel aem-GridColumn aem-GridColumn--default--12">

  
  
  
  
  <rc-cruise-carousel inline-template id="cruiseCarousel-587922545" initial-search="search=destination:BAHAM,CARIB|startDate:2023-02-01~2024-12-31" items-layout="card" legacy-market-language-path="%2Fcontent%2Froyal%2Fusa%2Fen" legacy-timeout="5000" :breakpoint="breakpoint" :cookies="cookies" :dictionary="{
      errorNoResultsLinkLabel: 'View All Cruises',
      errorNoResultsText: 'We have circled the globe and could not find any sailings that match your search.',
      itemCTALabelPlural: 'View {0} dates',
      itemCTALabelSingular: 'View 1 date',
      'itemPill_best-value': 'Best value',
      'itemPill_lowest-price': 'Lowest price',
      'itemPill_recommended': 'Recommended',
      itemPriceLabel: 'Starting from*',
      'itemPriceLabel_compact': 'per person from*',
      itemPriceValue: '{0}/person',
      'itemPriceValue_compact': '{0}',
      itemTitle: '{0} Night {1}',
      lastSearchTabLabel: 'Your Last Search',
      legacyShipSufix: 'of the Seas',
      searchItemDescription: 'in this category',
      searchItemLabel: 'View all',
      searchItemTitle: '{0} Itineraries',
    }" :globalization="globalization" :initial-tabs="[{&#34;searchURL&#34;:&#34;search\u003ddestination:BAHAM,CARIB|startDate:2023-02-01~2024-12-31&#34;,&#34;tabItems&#34;:[{&#34;countryCode&#34;:&#34;USA&#34;,&#34;currencySymbol&#34;:&#34;$&#34;,&#34;currency&#34;:&#34;USD&#34;,&#34;bookNowUrl&#34;:&#34;/booking/landing?country\u003dUSA\u0026packageCode\u003dNV04X028\u0026groupId\u003dNV04LAX-1005460504\u0026selectedCurrencyCode\u003dUSD\u0026sailDate\u003d2023-05-15\u0026shipCode\u003dNV&#34;,&#34;netPrice&#34;:&#34;159&#34;,&#34;formattedNetPrice&#34;:&#34;159&#34;,&#34;taxedAndFees&#34;:&#34;122.64&#34;,&#34;packageCode&#34;:&#34;NV04X028&#34;,&#34;sailDate&#34;:&#34;2023-05-15&#34;,&#34;startDate&#34;:&#34;2023-05-15&#34;,&#34;shipCode&#34;:&#34;NV&#34;,&#34;taxesFeesIncluded&#34;:false,&#34;itineraryName&#34;:&#34;4 NIGHT CATALINA \u0026 ENSENADA CRUISE&#34;,&#34;departureCode&#34;:&#34;LAX&#34;,&#34;numberOfNights&#34;:4,&#34;destinationCode&#34;:&#34;MEXCO&#34;,&#34;productViewUrl&#34;:&#34;/cruises/itinerary/4-night-catalina-ensenada-from-los-angeles-on-navigator/NV04LAX-1005460504?sail-date\u003d2025-04-28\u0026currency\u003dUSD&#34;,&#34;portSequence&#34;:&#34;LAX_CAT_ESE_LAX&#34;,&#34;groupId&#34;:&#34;NV04LAX-1005460504&#34;,&#34;masterSailDate&#34;:&#34;2025-04-28&#34;,&#34;masterPackageCode&#34;:&#34;NV04X035&#34;,&#34;numberOfSailings&#34;:58,&#34;numberOfSailingsLabel&#34;:&#34;view 58 dates&#34;,&#34;totalGroups&#34;:617,&#34;imagePath&#34;:&#34;/content/dam/royal/ports-and-destinations/ports/catalina-island-california/overview/beautiful-beach-cove-catalina-island-california.jpg&#34;,&#34;shipName&#34;:&#34;Navigator&#34;,&#34;portName&#34;:&#34;Los Angeles, California&#34;,&#34;imagePathMobile&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/catalina-island-california/overview/beautiful-beach-cove-catalina-island-california.jpg?$223x125$&#34;,&#34;imagePathTablet&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/catalina-island-california/overview/beautiful-beach-cove-catalina-island-california.jpg?$309x160$&#34;,&#34;imagePathDesktop&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/catalina-island-california/overview/beautiful-beach-cove-catalina-island-california.jpg?$316x164$&#34;,&#34;imagePathLargeDesktop&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/catalina-island-california/overview/beautiful-beach-cove-catalina-island-california.jpg?$316x164$&#34;,&#34;imageDAMTitle&#34;:&#34;Beautiful Beach Cove Catalina Island California&#34;,&#34;imageDAMDescription&#34;:&#34;Beautiful Beach Cove Catalina Island California&#34;},{&#34;countryCode&#34;:&#34;USA&#34;,&#34;currencySymbol&#34;:&#34;$&#34;,&#34;currency&#34;:&#34;USD&#34;,&#34;bookNowUrl&#34;:&#34;/booking/landing?country\u003dUSA\u0026packageCode\u003dNV04X029\u0026groupId\u003dNV04LAX-3628863594\u0026selectedCurrencyCode\u003dUSD\u0026sailDate\u003d2023-09-25\u0026shipCode\u003dNV&#34;,&#34;netPrice&#34;:&#34;190&#34;,&#34;formattedNetPrice&#34;:&#34;190&#34;,&#34;taxedAndFees&#34;:&#34;111.57&#34;,&#34;packageCode&#34;:&#34;NV04X029&#34;,&#34;sailDate&#34;:&#34;2023-09-25&#34;,&#34;startDate&#34;:&#34;2023-09-25&#34;,&#34;shipCode&#34;:&#34;NV&#34;,&#34;taxesFeesIncluded&#34;:false,&#34;itineraryName&#34;:&#34;4 NIGHT ENSENADA CRUISE&#34;,&#34;departureCode&#34;:&#34;LAX&#34;,&#34;numberOfNights&#34;:4,&#34;destinationCode&#34;:&#34;MEXCO&#34;,&#34;productViewUrl&#34;:&#34;/cruises/itinerary/4-night-ensenada-from-los-angeles-on-navigator/NV04LAX-3628863594?sail-date\u003d2024-02-12\u0026currency\u003dUSD&#34;,&#34;portSequence&#34;:&#34;LAX_ESE_LAX&#34;,&#34;groupId&#34;:&#34;NV04LAX-3628863594&#34;,&#34;masterSailDate&#34;:&#34;2024-02-12&#34;,&#34;masterPackageCode&#34;:&#34;NV04X030&#34;,&#34;numberOfSailings&#34;:2,&#34;numberOfSailingsLabel&#34;:&#34;view 2 dates&#34;,&#34;totalGroups&#34;:617,&#34;imagePath&#34;:&#34;/content/dam/royal/ports-and-destinations/ports/ensenada-mexico/overview/mexico-ensendada-la-bufadora-beach-cliffs-coast.jpg&#34;,&#34;shipName&#34;:&#34;Navigator&#34;,&#34;portName&#34;:&#34;Los Angeles, California&#34;,&#34;imagePathMobile&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/ensenada-mexico/overview/mexico-ensendada-la-bufadora-beach-cliffs-coast.jpg?$223x125$&#34;,&#34;imagePathTablet&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/ensenada-mexico/overview/mexico-ensendada-la-bufadora-beach-cliffs-coast.jpg?$309x160$&#34;,&#34;imagePathDesktop&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/ensenada-mexico/overview/mexico-ensendada-la-bufadora-beach-cliffs-coast.jpg?$316x164$&#34;,&#34;imagePathLargeDesktop&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/ensenada-mexico/overview/mexico-ensendada-la-bufadora-beach-cliffs-coast.jpg?$316x164$&#34;,&#34;imageDAMTitle&#34;:&#34;Mexico Ensendada La Bufadora Beach Cliff Coasts&#34;,&#34;imageDAMDescription&#34;:&#34;Mexico Ensendada La Bufadora Beach Cliff Coasts&#34;},{&#34;countryCode&#34;:&#34;USA&#34;,&#34;currencySymbol&#34;:&#34;$&#34;,&#34;currency&#34;:&#34;USD&#34;,&#34;bookNowUrl&#34;:&#34;/booking/landing?country\u003dUSA\u0026packageCode\u003dNV03X023\u0026groupId\u003dNV03LAX-1965470998\u0026selectedCurrencyCode\u003dUSD\u0026sailDate\u003d2025-01-03\u0026shipCode\u003dNV&#34;,&#34;netPrice&#34;:&#34;209&#34;,&#34;formattedNetPrice&#34;:&#34;209&#34;,&#34;taxedAndFees&#34;:&#34;111.79&#34;,&#34;packageCode&#34;:&#34;NV03X023&#34;,&#34;sailDate&#34;:&#34;2025-01-03&#34;,&#34;startDate&#34;:&#34;2025-01-03&#34;,&#34;shipCode&#34;:&#34;NV&#34;,&#34;taxesFeesIncluded&#34;:false,&#34;itineraryName&#34;:&#34;3 NIGHT ENSENADA CRUISE&#34;,&#34;departureCode&#34;:&#34;LAX&#34;,&#34;numberOfNights&#34;:3,&#34;destinationCode&#34;:&#34;MEXCO&#34;,&#34;productViewUrl&#34;:&#34;/cruises/itinerary/3-night-ensenada-from-los-angeles-on-navigator/NV03LAX-1965470998?sail-date\u003d2025-04-25\u0026currency\u003dUSD&#34;,&#34;portSequence&#34;:&#34;LAX_ESE_LAX&#34;,&#34;groupId&#34;:&#34;NV03LAX-1965470998&#34;,&#34;masterSailDate&#34;:&#34;2025-04-25&#34;,&#34;masterPackageCode&#34;:&#34;NV03X023&#34;,&#34;numberOfSailings&#34;:54,&#34;numberOfSailingsLabel&#34;:&#34;view 54 dates&#34;,&#34;totalGroups&#34;:617,&#34;imagePath&#34;:&#34;/content/dam/royal/ports-and-destinations/ports/ensenada-mexico/overview/mexico-ensendada-la-bufadora-beach-cliffs-coast.jpg&#34;,&#34;shipName&#34;:&#34;Navigator&#34;,&#34;portName&#34;:&#34;Los Angeles, California&#34;,&#34;imagePathMobile&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/ensenada-mexico/overview/mexico-ensendada-la-bufadora-beach-cliffs-coast.jpg?$223x125$&#34;,&#34;imagePathTablet&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/ensenada-mexico/overview/mexico-ensendada-la-bufadora-beach-cliffs-coast.jpg?$309x160$&#34;,&#34;imagePathDesktop&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/ensenada-mexico/overview/mexico-ensendada-la-bufadora-beach-cliffs-coast.jpg?$316x164$&#34;,&#34;imagePathLargeDesktop&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/ensenada-mexico/overview/mexico-ensendada-la-bufadora-beach-cliffs-coast.jpg?$316x164$&#34;,&#34;imageDAMTitle&#34;:&#34;Mexico Ensendada La Bufadora Beach Cliff Coasts&#34;,&#34;imageDAMDescription&#34;:&#34;Mexico Ensendada La Bufadora Beach Cliff Coasts&#34;},{&#34;countryCode&#34;:&#34;USA&#34;,&#34;currencySymbol&#34;:&#34;$&#34;,&#34;currency&#34;:&#34;USD&#34;,&#34;bookNowUrl&#34;:&#34;/booking/landing?country\u003dUSA\u0026packageCode\u003dLB3BH070\u0026groupId\u003dLB03FLL-3075456443\u0026selectedCurrencyCode\u003dUSD\u0026sailDate\u003d2024-01-05\u0026shipCode\u003dLB&#34;,&#34;netPrice&#34;:&#34;237&#34;,&#34;formattedNetPrice&#34;:&#34;237&#34;,&#34;taxedAndFees&#34;:&#34;111.52&#34;,&#34;packageCode&#34;:&#34;LB3BH070&#34;,&#34;sailDate&#34;:&#34;2024-01-05&#34;,&#34;startDate&#34;:&#34;2024-01-05&#34;,&#34;shipCode&#34;:&#34;LB&#34;,&#34;taxesFeesIncluded&#34;:false,&#34;itineraryName&#34;:&#34;3 NIGHT BAHAMAS \u0026 PERFECT DAY&#34;,&#34;departureCode&#34;:&#34;FLL&#34;,&#34;numberOfNights&#34;:3,&#34;destinationCode&#34;:&#34;BAHAM&#34;,&#34;productViewUrl&#34;:&#34;/cruises/itinerary/3-night-bahamas-from-fort-lauderdale-on-liberty/LB03FLL-3075456443?sail-date\u003d2025-04-18\u0026currency\u003dUSD&#34;,&#34;portSequence&#34;:&#34;FLL_NAS_PCC_FLL&#34;,&#34;groupId&#34;:&#34;LB03FLL-3075456443&#34;,&#34;masterSailDate&#34;:&#34;2025-04-18&#34;,&#34;masterPackageCode&#34;:&#34;LB3BH101&#34;,&#34;numberOfSailings&#34;:53,&#34;numberOfSailingsLabel&#34;:&#34;view 53 dates&#34;,&#34;totalGroups&#34;:617,&#34;imagePath&#34;:&#34;/content/dam/royal/ports-and-destinations/destinations/perfect-day/perfect-day-coco-cay-pier-sign.jpg&#34;,&#34;shipName&#34;:&#34;Liberty&#34;,&#34;portName&#34;:&#34;Fort Lauderdale, Florida&#34;,&#34;imagePathMobile&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/perfect-day/perfect-day-coco-cay-pier-sign.jpg?$223x125$&#34;,&#34;imagePathTablet&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/perfect-day/perfect-day-coco-cay-pier-sign.jpg?$309x160$&#34;,&#34;imagePathDesktop&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/perfect-day/perfect-day-coco-cay-pier-sign.jpg?$316x164$&#34;,&#34;imagePathLargeDesktop&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/perfect-day/perfect-day-coco-cay-pier-sign.jpg?$316x164$&#34;,&#34;imageDAMTitle&#34;:&#34;Perfect Day Coco Cay Pier Sign&#34;,&#34;imageDAMDescription&#34;:&#34;Coco Cay Pier Sign with Dare Devil\u0027s Peak in the Background&#34;},{&#34;countryCode&#34;:&#34;USA&#34;,&#34;currencySymbol&#34;:&#34;$&#34;,&#34;currency&#34;:&#34;USD&#34;,&#34;bookNowUrl&#34;:&#34;/booking/landing?country\u003dUSA\u0026packageCode\u003dRH03M023\u0026groupId\u003dRH03HFA-1821892403\u0026selectedCurrencyCode\u003dUSD\u0026sailDate\u003d2023-05-30\u0026shipCode\u003dRH&#34;,&#34;netPrice&#34;:&#34;242&#34;,&#34;formattedNetPrice&#34;:&#34;242&#34;,&#34;taxedAndFees&#34;:&#34;76.95&#34;,&#34;packageCode&#34;:&#34;RH03M023&#34;,&#34;sailDate&#34;:&#34;2023-05-30&#34;,&#34;startDate&#34;:&#34;2023-05-30&#34;,&#34;shipCode&#34;:&#34;RH&#34;,&#34;taxesFeesIncluded&#34;:false,&#34;itineraryName&#34;:&#34;3 NIGHT CYPRUS CRUISE CRUISE&#34;,&#34;departureCode&#34;:&#34;HFA&#34;,&#34;numberOfNights&#34;:3,&#34;destinationCode&#34;:&#34;EUROP&#34;,&#34;productViewUrl&#34;:&#34;/cruises/itinerary/3-night-cyprus--cruise-from-haifa-on-rhapsody/RH03HFA-1821892403?sail-date\u003d2023-09-19\u0026currency\u003dUSD&#34;,&#34;portSequence&#34;:&#34;HFA_QLI_HFA&#34;,&#34;groupId&#34;:&#34;RH03HFA-1821892403&#34;,&#34;masterSailDate&#34;:&#34;2023-09-19&#34;,&#34;masterPackageCode&#34;:&#34;RH03U020&#34;,&#34;numberOfSailings&#34;:2,&#34;numberOfSailingsLabel&#34;:&#34;view 2 dates&#34;,&#34;totalGroups&#34;:617,&#34;imagePath&#34;:&#34;/content/dam/royal/data/ports/limassol-cyprus/overview/limassol-cyprus-kourion-beach.jpg&#34;,&#34;shipName&#34;:&#34;Rhapsody&#34;,&#34;portName&#34;:&#34;Haifa, Israel&#34;,&#34;imagePathMobile&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/limassol-cyprus/overview/limassol-cyprus-kourion-beach.jpg?$223x125$&#34;,&#34;imagePathTablet&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/limassol-cyprus/overview/limassol-cyprus-kourion-beach.jpg?$309x160$&#34;,&#34;imagePathDesktop&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/limassol-cyprus/overview/limassol-cyprus-kourion-beach.jpg?$316x164$&#34;,&#34;imagePathLargeDesktop&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/limassol-cyprus/overview/limassol-cyprus-kourion-beach.jpg?$316x164$&#34;,&#34;imageDAMTitle&#34;:&#34;Kourion Beach Coast, Limassol, Cyprus&#34;,&#34;imageDAMDescription&#34;:&#34;Kourion Beach Coast, Limassol, Cyprus&#34;},{&#34;countryCode&#34;:&#34;USA&#34;,&#34;currencySymbol&#34;:&#34;$&#34;,&#34;currency&#34;:&#34;USD&#34;,&#34;bookNowUrl&#34;:&#34;/booking/landing?country\u003dUSA\u0026packageCode\u003dRH3BH066\u0026groupId\u003dRH03FLL-3075456751\u0026selectedCurrencyCode\u003dUSD\u0026sailDate\u003d2023-11-26\u0026shipCode\u003dRH&#34;,&#34;netPrice&#34;:&#34;247&#34;,&#34;formattedNetPrice&#34;:&#34;247&#34;,&#34;taxedAndFees&#34;:&#34;128.19&#34;,&#34;packageCode&#34;:&#34;RH3BH066&#34;,&#34;sailDate&#34;:&#34;2023-11-26&#34;,&#34;startDate&#34;:&#34;2023-11-26&#34;,&#34;shipCode&#34;:&#34;RH&#34;,&#34;taxesFeesIncluded&#34;:false,&#34;itineraryName&#34;:&#34;3 NIGHT BAHAMAS \u0026 PERFECT DAY CRUISE&#34;,&#34;departureCode&#34;:&#34;FLL&#34;,&#34;numberOfNights&#34;:3,&#34;destinationCode&#34;:&#34;BAHAM&#34;,&#34;productViewUrl&#34;:&#34;/cruises/itinerary/3-night-bahamas-from-fort-lauderdale-on-rhapsody/RH03FLL-3075456751?sail-date\u003d2023-11-26\u0026currency\u003dUSD&#34;,&#34;portSequence&#34;:&#34;FLL_PCC_NAS_FLL&#34;,&#34;groupId&#34;:&#34;RH03FLL-3075456751&#34;,&#34;masterSailDate&#34;:&#34;2023-11-26&#34;,&#34;masterPackageCode&#34;:&#34;RH3BH066&#34;,&#34;numberOfSailings&#34;:1,&#34;numberOfSailingsLabel&#34;:&#34;view 1 date&#34;,&#34;totalGroups&#34;:617,&#34;imagePath&#34;:&#34;/content/dam/royal/ports-and-destinations/destinations/perfect-day/perfect-day-coco-cay-thrillwater-park-colorful-slides.jpg&#34;,&#34;shipName&#34;:&#34;Rhapsody&#34;,&#34;portName&#34;:&#34;Fort Lauderdale, Florida&#34;,&#34;imagePathMobile&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/perfect-day/perfect-day-coco-cay-thrillwater-park-colorful-slides.jpg?$223x125$&#34;,&#34;imagePathTablet&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/perfect-day/perfect-day-coco-cay-thrillwater-park-colorful-slides.jpg?$309x160$&#34;,&#34;imagePathDesktop&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/perfect-day/perfect-day-coco-cay-thrillwater-park-colorful-slides.jpg?$316x164$&#34;,&#34;imagePathLargeDesktop&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/perfect-day/perfect-day-coco-cay-thrillwater-park-colorful-slides.jpg?$316x164$&#34;,&#34;imageDAMTitle&#34;:&#34;Perfect Day Coco Cay Thrill Water Park Slides&#34;,&#34;imageDAMDescription&#34;:&#34; Coco Cay Thrill Water Park Colorful Slides&#34;},{&#34;countryCode&#34;:&#34;USA&#34;,&#34;currencySymbol&#34;:&#34;$&#34;,&#34;currency&#34;:&#34;USD&#34;,&#34;bookNowUrl&#34;:&#34;/booking/landing?country\u003dUSA\u0026packageCode\u003dFR3BH073\u0026groupId\u003dFR03MIA-1887735893\u0026selectedCurrencyCode\u003dUSD\u0026sailDate\u003d2023-05-05\u0026shipCode\u003dFR&#34;,&#34;netPrice&#34;:&#34;249&#34;,&#34;formattedNetPrice&#34;:&#34;249&#34;,&#34;taxedAndFees&#34;:&#34;117.45&#34;,&#34;packageCode&#34;:&#34;FR3BH073&#34;,&#34;sailDate&#34;:&#34;2023-05-05&#34;,&#34;startDate&#34;:&#34;2023-05-05&#34;,&#34;shipCode&#34;:&#34;FR&#34;,&#34;taxesFeesIncluded&#34;:false,&#34;itineraryName&#34;:&#34;3 NIGHT BAHAMAS GETAWAY CRUISE&#34;,&#34;departureCode&#34;:&#34;MIA&#34;,&#34;numberOfNights&#34;:3,&#34;destinationCode&#34;:&#34;BAHAM&#34;,&#34;productViewUrl&#34;:&#34;/cruises/itinerary/3-night-bahamas-getaway-from-miami-on-freedom/FR03MIA-1887735893?sail-date\u003d2023-05-05\u0026currency\u003dUSD&#34;,&#34;portSequence&#34;:&#34;MIA_NAS_MIA&#34;,&#34;groupId&#34;:&#34;FR03MIA-1887735893&#34;,&#34;masterSailDate&#34;:&#34;2023-05-05&#34;,&#34;masterPackageCode&#34;:&#34;FR3BH073&#34;,&#34;numberOfSailings&#34;:1,&#34;numberOfSailingsLabel&#34;:&#34;view 1 date&#34;,&#34;totalGroups&#34;:617,&#34;imagePath&#34;:&#34;/content/dam/royal/data/ports/nassau-bahamas/pearl-island-nassau-bahamas-island.jpg&#34;,&#34;shipName&#34;:&#34;Freedom&#34;,&#34;portName&#34;:&#34;Miami, Florida&#34;,&#34;imagePathMobile&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/nassau-bahamas/pearl-island-nassau-bahamas-island.jpg?$223x125$&#34;,&#34;imagePathTablet&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/nassau-bahamas/pearl-island-nassau-bahamas-island.jpg?$309x160$&#34;,&#34;imagePathDesktop&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/nassau-bahamas/pearl-island-nassau-bahamas-island.jpg?$316x164$&#34;,&#34;imagePathLargeDesktop&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/nassau-bahamas/pearl-island-nassau-bahamas-island.jpg?$316x164$&#34;,&#34;imageDAMTitle&#34;:&#34;Aerial of Pearl Island, Nassau, Bahamas&#34;,&#34;imageDAMDescription&#34;:&#34;Aerial of Pearl Island, Nassau, Bahamas&#34;},{&#34;countryCode&#34;:&#34;USA&#34;,&#34;currencySymbol&#34;:&#34;$&#34;,&#34;currency&#34;:&#34;USD&#34;,&#34;bookNowUrl&#34;:&#34;/booking/landing?country\u003dUSA\u0026packageCode\u003dBR06P002\u0026groupId\u003dBR06LAX-2949900898\u0026selectedCurrencyCode\u003dUSD\u0026sailDate\u003d2023-04-17\u0026shipCode\u003dBR&#34;,&#34;netPrice&#34;:&#34;250&#34;,&#34;formattedNetPrice&#34;:&#34;250&#34;,&#34;taxedAndFees&#34;:&#34;222.23&#34;,&#34;packageCode&#34;:&#34;BR06P002&#34;,&#34;sailDate&#34;:&#34;2023-04-17&#34;,&#34;startDate&#34;:&#34;2023-04-17&#34;,&#34;shipCode&#34;:&#34;BR&#34;,&#34;taxesFeesIncluded&#34;:false,&#34;itineraryName&#34;:&#34;6 NIGHT PACIFIC COASTAL CRUISE&#34;,&#34;departureCode&#34;:&#34;LAX&#34;,&#34;numberOfNights&#34;:6,&#34;destinationCode&#34;:&#34;PACIF&#34;,&#34;productViewUrl&#34;:&#34;/cruises/itinerary/6-night-pacific-coastal-from-los-angeles-on-brilliance/BR06LAX-2949900898?sail-date\u003d2023-04-17\u0026currency\u003dUSD&#34;,&#34;portSequence&#34;:&#34;LAX_MRY_SFO_YVJ_YVR&#34;,&#34;groupId&#34;:&#34;BR06LAX-2949900898&#34;,&#34;masterSailDate&#34;:&#34;2023-04-17&#34;,&#34;masterPackageCode&#34;:&#34;BR06P002&#34;,&#34;numberOfSailings&#34;:1,&#34;numberOfSailingsLabel&#34;:&#34;view 1 date&#34;,&#34;totalGroups&#34;:617,&#34;imagePath&#34;:&#34;/content/dam/royal/ports-and-destinations/ports/monterey-california/lone-cypress-17-mile-drive-pebble-beach-california.jpg&#34;,&#34;shipName&#34;:&#34;Brilliance&#34;,&#34;portName&#34;:&#34;Los Angeles, California&#34;,&#34;imagePathMobile&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/monterey-california/lone-cypress-17-mile-drive-pebble-beach-california.jpg?$223x125$&#34;,&#34;imagePathTablet&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/monterey-california/lone-cypress-17-mile-drive-pebble-beach-california.jpg?$309x160$&#34;,&#34;imagePathDesktop&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/monterey-california/lone-cypress-17-mile-drive-pebble-beach-california.jpg?$316x164$&#34;,&#34;imagePathLargeDesktop&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/monterey-california/lone-cypress-17-mile-drive-pebble-beach-california.jpg?$316x164$&#34;,&#34;imageDAMTitle&#34;:&#34;The Lone Cypress, seen from the 17 Mile Drive, in Pebble Beach, California.&#34;,&#34;imageDAMDescription&#34;:&#34;The Lone Cypress, seen from the 17 Mile Drive, in Pebble Beach, California.&#34;},{&#34;countryCode&#34;:&#34;USA&#34;,&#34;currencySymbol&#34;:&#34;$&#34;,&#34;currency&#34;:&#34;USD&#34;,&#34;bookNowUrl&#34;:&#34;/booking/landing?country\u003dUSA\u0026packageCode\u003dSC03I186\u0026groupId\u003dSC03SIN-4263363446\u0026selectedCurrencyCode\u003dUSD\u0026sailDate\u003d2024-01-29\u0026shipCode\u003dSC&#34;,&#34;netPrice&#34;:&#34;256&#34;,&#34;formattedNetPrice&#34;:&#34;256&#34;,&#34;taxedAndFees&#34;:&#34;43.34&#34;,&#34;packageCode&#34;:&#34;SC03I186&#34;,&#34;sailDate&#34;:&#34;2024-01-29&#34;,&#34;startDate&#34;:&#34;2024-01-29&#34;,&#34;shipCode&#34;:&#34;SC&#34;,&#34;taxesFeesIncluded&#34;:false,&#34;itineraryName&#34;:&#34;3 NIGHT PENANG CRUISE&#34;,&#34;departureCode&#34;:&#34;SIN&#34;,&#34;numberOfNights&#34;:3,&#34;destinationCode&#34;:&#34;FAR.E&#34;,&#34;productViewUrl&#34;:&#34;/cruises/itinerary/3-night-penang-from-singapore-on-spectrum/SC03SIN-4263363446?sail-date\u003d2024-03-25\u0026currency\u003dUSD&#34;,&#34;portSequence&#34;:&#34;SIN_PEN_SIN&#34;,&#34;groupId&#34;:&#34;SC03SIN-4263363446&#34;,&#34;masterSailDate&#34;:&#34;2024-03-25&#34;,&#34;masterPackageCode&#34;:&#34;SC03I186&#34;,&#34;numberOfSailings&#34;:39,&#34;numberOfSailingsLabel&#34;:&#34;view 39 dates&#34;,&#34;totalGroups&#34;:617,&#34;imagePath&#34;:&#34;/content/dam/royal/data/ports/penang-malaysia/overview/penang-malaysia-city-hall.jpg&#34;,&#34;shipName&#34;:&#34;Spectrum&#34;,&#34;portName&#34;:&#34;Singapore, Singapore&#34;,&#34;imagePathMobile&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/penang-malaysia/overview/penang-malaysia-city-hall.jpg?$223x125$&#34;,&#34;imagePathTablet&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/penang-malaysia/overview/penang-malaysia-city-hall.jpg?$309x160$&#34;,&#34;imagePathDesktop&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/penang-malaysia/overview/penang-malaysia-city-hall.jpg?$316x164$&#34;,&#34;imagePathLargeDesktop&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/penang-malaysia/overview/penang-malaysia-city-hall.jpg?$316x164$&#34;,&#34;imageDAMTitle&#34;:&#34;Penang, Malaysia City Hall&#34;,&#34;imageDAMDescription&#34;:&#34;City Hall in George Town, a white colonial architecture building in Penang, Malaysia&#34;},{&#34;countryCode&#34;:&#34;USA&#34;,&#34;currencySymbol&#34;:&#34;$&#34;,&#34;currency&#34;:&#34;USD&#34;,&#34;bookNowUrl&#34;:&#34;/booking/landing?country\u003dUSA\u0026packageCode\u003dRD05R015\u0026groupId\u003dRD05LAX-2930185585\u0026selectedCurrencyCode\u003dUSD\u0026sailDate\u003d2023-05-06\u0026shipCode\u003dRD&#34;,&#34;netPrice&#34;:&#34;257&#34;,&#34;formattedNetPrice&#34;:&#34;257&#34;,&#34;taxedAndFees&#34;:&#34;225.16&#34;,&#34;packageCode&#34;:&#34;RD05R015&#34;,&#34;sailDate&#34;:&#34;2023-05-06&#34;,&#34;startDate&#34;:&#34;2023-05-06&#34;,&#34;shipCode&#34;:&#34;RD&#34;,&#34;taxesFeesIncluded&#34;:false,&#34;itineraryName&#34;:&#34;5 NIGHT PACIFIC COASTAL CRUISE&#34;,&#34;departureCode&#34;:&#34;LAX&#34;,&#34;numberOfNights&#34;:5,&#34;destinationCode&#34;:&#34;PACIF&#34;,&#34;productViewUrl&#34;:&#34;/cruises/itinerary/5-night-pacific-coastal-from-los-angeles-on-radiance/RD05LAX-2930185585?sail-date\u003d2023-05-06\u0026currency\u003dUSD&#34;,&#34;portSequence&#34;:&#34;LAX_MRY_SEA_YVJ_YVR&#34;,&#34;groupId&#34;:&#34;RD05LAX-2930185585&#34;,&#34;masterSailDate&#34;:&#34;2023-05-06&#34;,&#34;masterPackageCode&#34;:&#34;RD05R015&#34;,&#34;numberOfSailings&#34;:1,&#34;numberOfSailingsLabel&#34;:&#34;view 1 date&#34;,&#34;totalGroups&#34;:617,&#34;imagePath&#34;:&#34;/content/dam/royal/ports-and-destinations/ports/monterey-california/lone-cypress-17-mile-drive-pebble-beach-california.jpg&#34;,&#34;shipName&#34;:&#34;Radiance&#34;,&#34;portName&#34;:&#34;Los Angeles, California&#34;,&#34;imagePathMobile&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/monterey-california/lone-cypress-17-mile-drive-pebble-beach-california.jpg?$223x125$&#34;,&#34;imagePathTablet&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/monterey-california/lone-cypress-17-mile-drive-pebble-beach-california.jpg?$309x160$&#34;,&#34;imagePathDesktop&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/monterey-california/lone-cypress-17-mile-drive-pebble-beach-california.jpg?$316x164$&#34;,&#34;imagePathLargeDesktop&#34;:&#34;https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/monterey-california/lone-cypress-17-mile-drive-pebble-beach-california.jpg?$316x164$&#34;,&#34;imageDAMTitle&#34;:&#34;The Lone Cypress, seen from the 17 Mile Drive, in Pebble Beach, California.&#34;,&#34;imageDAMDescription&#34;:&#34;The Lone Cypress, seen from the 17 Mile Drive, in Pebble Beach, California.&#34;}]}]" :show-item-pills="false" :show-last-search-tab="false" :toggles="toggles" @update-promotions="updatePromotions">
    <div id="cruiseCarousel-587922545" rc-version="0.0.152" class="cruise-carousel__base cruise-carousel__theme--light">
      
	<div class="cruise-carousel__schema">
    
      <div itemscope itemtype="http://schema.org/Product">
        <a itemprop="url" href="/cruises/itinerary/4-night-catalina-ensenada-from-los-angeles-on-navigator/NV04LAX-1005460504?sail-date=2025-04-28&currency=USD">
          <img itemprop="image" src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/catalina-island-california/overview/beautiful-beach-cove-catalina-island-california.jpg?$440x248$" alt="Beautiful Beach Cove Catalina Island California" title="Beautiful Beach Cove Catalina Island California"/>
          <span itemprop="name">4 NIGHT CATALINA &amp; ENSENADA CRUISE</span>
          <span itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
            <span itemprop="priceCurrency">USD</span>
            <span itemprop="lowPrice">159</span>
          </span>
        </a>
      </div>
    
      <div itemscope itemtype="http://schema.org/Product">
        <a itemprop="url" href="/cruises/itinerary/4-night-ensenada-from-los-angeles-on-navigator/NV04LAX-3628863594?sail-date=2024-02-12&currency=USD">
          <img itemprop="image" src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/ensenada-mexico/overview/mexico-ensendada-la-bufadora-beach-cliffs-coast.jpg?$440x248$" alt="Mexico Ensendada La Bufadora Beach Cliff Coasts" title="Mexico Ensendada La Bufadora Beach Cliff Coasts"/>
          <span itemprop="name">4 NIGHT ENSENADA CRUISE</span>
          <span itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
            <span itemprop="priceCurrency">USD</span>
            <span itemprop="lowPrice">190</span>
          </span>
        </a>
      </div>
    
      <div itemscope itemtype="http://schema.org/Product">
        <a itemprop="url" href="/cruises/itinerary/3-night-ensenada-from-los-angeles-on-navigator/NV03LAX-1965470998?sail-date=2025-04-25&currency=USD">
          <img itemprop="image" src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/ensenada-mexico/overview/mexico-ensendada-la-bufadora-beach-cliffs-coast.jpg?$440x248$" alt="Mexico Ensendada La Bufadora Beach Cliff Coasts" title="Mexico Ensendada La Bufadora Beach Cliff Coasts"/>
          <span itemprop="name">3 NIGHT ENSENADA CRUISE</span>
          <span itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
            <span itemprop="priceCurrency">USD</span>
            <span itemprop="lowPrice">209</span>
          </span>
        </a>
      </div>
    
      <div itemscope itemtype="http://schema.org/Product">
        <a itemprop="url" href="/cruises/itinerary/3-night-bahamas-from-fort-lauderdale-on-liberty/LB03FLL-3075456443?sail-date=2025-04-18&currency=USD">
          <img itemprop="image" src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/perfect-day/perfect-day-coco-cay-pier-sign.jpg?$440x248$" alt="Coco Cay Pier Sign with Dare Devil&#39;s Peak in the Background" title="Perfect Day Coco Cay Pier Sign"/>
          <span itemprop="name">3 NIGHT BAHAMAS &amp; PERFECT DAY</span>
          <span itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
            <span itemprop="priceCurrency">USD</span>
            <span itemprop="lowPrice">237</span>
          </span>
        </a>
      </div>
    
      <div itemscope itemtype="http://schema.org/Product">
        <a itemprop="url" href="/cruises/itinerary/3-night-cyprus--cruise-from-haifa-on-rhapsody/RH03HFA-1821892403?sail-date=2023-09-19&currency=USD">
          <img itemprop="image" src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/limassol-cyprus/overview/limassol-cyprus-kourion-beach.jpg?$440x248$" alt="Kourion Beach Coast, Limassol, Cyprus" title="Kourion Beach Coast, Limassol, Cyprus"/>
          <span itemprop="name">3 NIGHT CYPRUS CRUISE CRUISE</span>
          <span itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
            <span itemprop="priceCurrency">USD</span>
            <span itemprop="lowPrice">242</span>
          </span>
        </a>
      </div>
    
      <div itemscope itemtype="http://schema.org/Product">
        <a itemprop="url" href="/cruises/itinerary/3-night-bahamas-from-fort-lauderdale-on-rhapsody/RH03FLL-3075456751?sail-date=2023-11-26&currency=USD">
          <img itemprop="image" src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/perfect-day/perfect-day-coco-cay-thrillwater-park-colorful-slides.jpg?$440x248$" alt=" Coco Cay Thrill Water Park Colorful Slides" title="Perfect Day Coco Cay Thrill Water Park Slides"/>
          <span itemprop="name">3 NIGHT BAHAMAS &amp; PERFECT DAY CRUISE</span>
          <span itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
            <span itemprop="priceCurrency">USD</span>
            <span itemprop="lowPrice">247</span>
          </span>
        </a>
      </div>
    
      <div itemscope itemtype="http://schema.org/Product">
        <a itemprop="url" href="/cruises/itinerary/3-night-bahamas-getaway-from-miami-on-freedom/FR03MIA-1887735893?sail-date=2023-05-05&currency=USD">
          <img itemprop="image" src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/nassau-bahamas/pearl-island-nassau-bahamas-island.jpg?$440x248$" alt="Aerial of Pearl Island, Nassau, Bahamas" title="Aerial of Pearl Island, Nassau, Bahamas"/>
          <span itemprop="name">3 NIGHT BAHAMAS GETAWAY CRUISE</span>
          <span itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
            <span itemprop="priceCurrency">USD</span>
            <span itemprop="lowPrice">249</span>
          </span>
        </a>
      </div>
    
      <div itemscope itemtype="http://schema.org/Product">
        <a itemprop="url" href="/cruises/itinerary/6-night-pacific-coastal-from-los-angeles-on-brilliance/BR06LAX-2949900898?sail-date=2023-04-17&currency=USD">
          <img itemprop="image" src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/monterey-california/lone-cypress-17-mile-drive-pebble-beach-california.jpg?$440x248$" alt="The Lone Cypress, seen from the 17 Mile Drive, in Pebble Beach, California." title="The Lone Cypress, seen from the 17 Mile Drive, in Pebble Beach, California."/>
          <span itemprop="name">6 NIGHT PACIFIC COASTAL CRUISE</span>
          <span itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
            <span itemprop="priceCurrency">USD</span>
            <span itemprop="lowPrice">250</span>
          </span>
        </a>
      </div>
    
      <div itemscope itemtype="http://schema.org/Product">
        <a itemprop="url" href="/cruises/itinerary/3-night-penang-from-singapore-on-spectrum/SC03SIN-4263363446?sail-date=2024-03-25&currency=USD">
          <img itemprop="image" src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/penang-malaysia/overview/penang-malaysia-city-hall.jpg?$440x248$" alt="City Hall in George Town, a white colonial architecture building in Penang, Malaysia" title="Penang, Malaysia City Hall"/>
          <span itemprop="name">3 NIGHT PENANG CRUISE</span>
          <span itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
            <span itemprop="priceCurrency">USD</span>
            <span itemprop="lowPrice">256</span>
          </span>
        </a>
      </div>
    
      <div itemscope itemtype="http://schema.org/Product">
        <a itemprop="url" href="/cruises/itinerary/5-night-pacific-coastal-from-los-angeles-on-radiance/RD05LAX-2930185585?sail-date=2023-05-06&currency=USD">
          <img itemprop="image" src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/monterey-california/lone-cypress-17-mile-drive-pebble-beach-california.jpg?$440x248$" alt="The Lone Cypress, seen from the 17 Mile Drive, in Pebble Beach, California." title="The Lone Cypress, seen from the 17 Mile Drive, in Pebble Beach, California."/>
          <span itemprop="name">5 NIGHT PACIFIC COASTAL CRUISE</span>
          <span itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
            <span itemprop="priceCurrency">USD</span>
            <span itemprop="lowPrice">257</span>
          </span>
        </a>
      </div>
    
	</div>

      <div class="cruise-carousel__header cruise-carousel--centered">
        <h2 class="cruise-carousel__title"> 30% OFF ALL CRUISES</h2>
        
        
      </div>
      
      <div class="cruise-carousel__search" style="background-color: transparent;">
        <div class="cruise-carousel__wrapper" :class="{ 'cruise-carousel__wrapper--loaded': loaded }">
          <div v-show="showLeftArrow" class="cruise-carousel__arrow cruise-carousel__arrow--left" @click="slideLeft">
          </div>
          <div ref="carousel" class="cruise-carousel__slider basic-carousel__scrollbar--hidden" :class="{
              'cruise-carousel__slider--scroll-smooth': smoothScrolling,
              'cruise-carousel__slider--align-left': alignLeft,
            }">
            <div v-for="(item, index) in items" :key="item.key" class="cruise-carousel__item"> 
            
  
	
    <rc-cruise-carousel-card-item layout="card" theme="default" :breakpoint="breakpoint" :item="item" :show-pills="showItemPills">
    </rc-cruise-carousel-card-item>
  
  

            </div>
            <div v-if="!!searchItem" class="cruise-carousel__item">
              <rc-cruise-carousel-search-item layout="card" :item="searchItem">
              </rc-cruise-carousel-search-item>
            </div>
          </div>
          <div v-show="showRightArrow" class="cruise-carousel__arrow cruise-carousel__arrow--right" @click="slideRight">
          </div>
        </div>
        
  <div class="cruise-carousel-skeleton__base" :class="{ 'cruise-carousel-skeleton--hidden': loaded }">
    <div class="cruise-carousel-skeleton__item cruise-carousel-skeleton__item--card">
      
      
        <div class="cruise-carousel-skeleton__item-image skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-title skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-price skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-description skeleton-style-box"></div>
      
      
    </div>
  
    <div class="cruise-carousel-skeleton__item cruise-carousel-skeleton__item--card">
      
      
        <div class="cruise-carousel-skeleton__item-image skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-title skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-price skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-description skeleton-style-box"></div>
      
      
    </div>
  
    <div class="cruise-carousel-skeleton__item cruise-carousel-skeleton__item--card">
      
      
        <div class="cruise-carousel-skeleton__item-image skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-title skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-price skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-description skeleton-style-box"></div>
      
      
    </div>
  
    <div class="cruise-carousel-skeleton__item cruise-carousel-skeleton__item--card">
      
      
        <div class="cruise-carousel-skeleton__item-image skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-title skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-price skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-description skeleton-style-box"></div>
      
      
    </div>
  
    <div class="cruise-carousel-skeleton__item cruise-carousel-skeleton__item--card">
      
      
        <div class="cruise-carousel-skeleton__item-image skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-title skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-price skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-description skeleton-style-box"></div>
      
      
    </div>
  
    <div class="cruise-carousel-skeleton__item cruise-carousel-skeleton__item--card">
      
      
        <div class="cruise-carousel-skeleton__item-image skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-title skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-price skeleton-style-box"></div>
        <div class="cruise-carousel-skeleton__item-description skeleton-style-box"></div>
      
      
    </div>
  </div>

        
	<div v-if="error" class="cruise-carousel-error__base cruise-carousel-error__layout--card" :class="{ 'cruise-carousel-error--loaded': loaded }">
    <p class="cruise-carousel-error__text">{{error.text}} <a class="cruise-carousel-error__link" :href="error.link.path">{{error.link.label}}</a></p>
	</div>

      </div>
    </div>
  </rc-cruise-carousel>
</div>

    
</div>
</div>
		</div>
	
	

</div>

    
</div>
</div>
		</div>
	
	

</div>
<div class="layoutContainer parbase aem-GridColumn aem-GridColumn--default--12">

	
	  
	
		<div id="icon-banner" class="layout-container__base layout-container__base--full-width ">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="openHtml parbase aem-GridColumn aem-GridColumn--default--12">

<div id="icon_Banner" style="margin: 1rem 0;">
    <a href="https://www.royalcaribbean.com/cruises/?country=USA&shipCode_IC=true&icid=cnfths_wrnssn_bkb_hm_ban_3584">
        <img style="width:100%;" class="pencil__full" src="/content/dam/royal/ships/icon/icon-banner/desktop_booknow.png">
        <img style="width:100%;" class="pencil__mobile" src="/content/dam/royal/ships/icon/icon-banner/mobile_booknow.png">
    </a>
</div</div>

    
</div>
</div>
		</div>
	
	

</div>
<div class="layoutContainer parbase aem-GridColumn aem-GridColumn--default--12">

	
	  
	
		<div class="layout-container__base layout-container__base-- ">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="spacer parbase aem-GridColumn aem-GridColumn--default--12">

  
  <div id="spacerComponent-1448519664" rc-version="0.0.164" class="spacer__base spacer__base--vertical-large">
    <hr class="spacer__ruler"/>
  </div>

</div>
<div class="text parbase aem-GridColumn aem-GridColumn--default--12">

<div id="text-1957397594" rc-version="0.0.164" class="text__base">
  <div style="text-align: center;"><span class="text-navy"><span class="heading2">GET ROYAL DEALS, SIGN UP TODAY</span></span></div>

</div></div>
<div class="spacer parbase aem-GridColumn aem-GridColumn--default--12">

  
  <div id="spacerComponent-1448569699" rc-version="0.0.164" class="spacer__base spacer__base--vertical-">
    
  </div>

</div>
<div class="emailSignUpForm parbase aem-GridColumn aem-GridColumn--default--12">

   
  <rc-email-sign-up-form inline-template :cookies="cookies" :globalization="globalization" v-cloak>
    <div id="rciEmailSignup-1512040571" rc-version="0.0.43" class="formMaterial__base v-cloak--visibility">
      <form class="form-email-sign-up" novalidate @submit.prevent="validateForm()">
          <div class="form-email-sign-up__base">
              <div class="form-email-sign-up__container" v-if="!formSuccess">
                  <div class="form-email-sign-up__form">
                      <div class="form-email-sign-up__input">
                        <md-input-container :disabled="sending" :class="getValidationClass('firstName')" md-theme="default">
                            <label for="rciFirstName">First Name</label>
                            <md-input name="first-name" id="rciFirstName" v-model="form.firstName" :disabled="sending" placeholder="First Name"></md-input>
                            <span class="md-error" v-if="!$v.form.firstName.required" id="rciFirstNameMissing">Missing First Name</span>
                        </md-input-container>
                      </div>
                      <div class="form-email-sign-up__input">
                        <md-input-container :disabled="sending" :class="getValidationClass('lastName')" md-theme="default">
                            <label for="rciLastName">Last Name</label>
                            <md-input name="last-name" id="rciLastName" v-model="form.lastName" :disabled="sending" placeholder="Last Name"></md-input>
                            <div class="md-error" v-if="!$v.form.lastName.required" id="rciLastNameMissing">Missing Last Name</div>
                        </md-input-container>
                      </div>
                      <div class="form-email-sign-up__input">
                        <md-input-container :disabled="sending" :class="getValidationClass('email')" md-theme="default">
                            <label for="rciEmailAddress">Email Address</label>
                            <md-input name="email" inputmode="email" id="rciEmailAddress" v-model="form.email" :disabled="sending" placeholder="Email Address"></md-input>
                            <md-icon class="md-icon fieldicon">mail_outline</md-icon>
                            <span class="md-error" v-if="!$v.form.email.required" id="rciEmailAddressMissing">Missing Email Address</span>
                            <span class="md-error" v-else-if="!$v.form.email.email" id="rciEmailAddressInvalid">Invalid Email Address</span>
                        </md-input-container>
                      </div>
                      <div class="form-email-sign-up__input">
                        <rccl-select id="rciCountry" :class="{'disabled': sending}" v-bind:requiredmessage="'Missing Country'" v-bind:placeholder="'Country/Location'" v-bind:sending="sending" v-model="form.selectedSignUpCountry">
                        
                            <option value="AUT"> AUSTRIA </option>
                        
                            <option value="AFG"> Afghanistan </option>
                        
                            <option value="ALB"> Albania </option>
                        
                            <option value="DZA"> Algeria </option>
                        
                            <option value="ASM"> American Samoa </option>
                        
                            <option value="AND"> Andorra </option>
                        
                            <option value="AGO"> Angola </option>
                        
                            <option value="AIA"> Anguilla </option>
                        
                            <option value="ATA"> Antarctica </option>
                        
                            <option value="ATG"> Antigua and Barbuda </option>
                        
                            <option value="ARG"> Argentina </option>
                        
                            <option value="ARM"> Armenia </option>
                        
                            <option value="ABW"> Aruba </option>
                        
                            <option value="AUS"> Australia </option>
                        
                            <option value="AZE"> Azerbaijan </option>
                        
                            <option value="BHS"> Bahamas </option>
                        
                            <option value="BHR"> Bahrain </option>
                        
                            <option value="BGD"> Bangladesh </option>
                        
                            <option value="BRB"> Barbados </option>
                        
                            <option value="BLR"> Belarus </option>
                        
                            <option value="BEL"> Belgium </option>
                        
                            <option value="BLZ"> Belize </option>
                        
                            <option value="BEN"> Benin </option>
                        
                            <option value="BMU"> Bermuda </option>
                        
                            <option value="BTN"> Bhutan </option>
                        
                            <option value="BOL"> Bolivia </option>
                        
                            <option value="BON"> Bonaire </option>
                        
                            <option value="BES"> Bonaire </option>
                        
                            <option value="BIH"> Bosnia and Herzegovina </option>
                        
                            <option value="BWA"> Botswana </option>
                        
                            <option value="BVT"> Bouvet Island </option>
                        
                            <option value="BRA"> Brasil </option>
                        
                            <option value="IOT"> British Indian Ocean </option>
                        
                            <option value="BRN"> Brunei Darussalam </option>
                        
                            <option value="BGR"> Bulgaria </option>
                        
                            <option value="BFA"> Burkina Faso </option>
                        
                            <option value="BUR"> Burma </option>
                        
                            <option value="BDI"> Burundi </option>
                        
                            <option value="KHM"> Cambodia </option>
                        
                            <option value="CMR"> Cameroon </option>
                        
                            <option value="CAN"> Canada </option>
                        
                            <option value="CPV"> Cape Verde Islands </option>
                        
                            <option value="CYM"> Cayman Islands </option>
                        
                            <option value="CAF"> Central African Republic </option>
                        
                            <option value="TCD"> Chad Republic </option>
                        
                            <option value="CHL"> Chile </option>
                        
                            <option value="CHN"> China </option>
                        
                            <option value="CXR"> Christmas Island </option>
                        
                            <option value="CCK"> Cocos Keeling Island </option>
                        
                            <option value="COL"> Colombia </option>
                        
                            <option value="COM"> Comoros </option>
                        
                            <option value="COK"> Cook Islands </option>
                        
                            <option value="CRI"> Costa Rica </option>
                        
                            <option value="HRV"> Croatia </option>
                        
                            <option value="CUB"> Cuba </option>
                        
                            <option value="CUR"> Curacao </option>
                        
                            <option value="CYP"> Cyprus </option>
                        
                            <option value="CZE"> Czech Republic </option>
                        
                            <option value="CIV"> Côte d&#39;Ivoire </option>
                        
                            <option value="DNK"> Denmark </option>
                        
                            <option value="DEU"> Deutschland/Österreich/Schweiz </option>
                        
                            <option value="DJI"> Djibouti </option>
                        
                            <option value="DMA"> Dominica </option>
                        
                            <option value="DOM"> Dominican Republic </option>
                        
                            <option value="UAE"> Dubai </option>
                        
                            <option value="TMP"> East Timor </option>
                        
                            <option value="ECU"> Ecuador </option>
                        
                            <option value="EGY"> Egypt </option>
                        
                            <option value="SLV"> El Salvador </option>
                        
                            <option value="GNQ"> Equatorial Guinea </option>
                        
                            <option value="ERI"> Eritrea </option>
                        
                            <option value="ESP"> España </option>
                        
                            <option value="EST"> Estonia </option>
                        
                            <option value="ETH"> Ethiopia </option>
                        
                            <option value="FLK"> Falkland Islands </option>
                        
                            <option value="FRO"> Faroe Islands </option>
                        
                            <option value="FJI"> Fiji Islands </option>
                        
                            <option value="FIN"> Finland </option>
                        
                            <option value="FRA"> France </option>
                        
                            <option value="GUF"> French Guiana </option>
                        
                            <option value="PYF"> French Polynesia </option>
                        
                            <option value="ATF"> French South. Territ </option>
                        
                            <option value="GAB"> Gabon </option>
                        
                            <option value="GMB"> Gambia </option>
                        
                            <option value="GEO"> Georgia </option>
                        
                            <option value="GHA"> Ghana </option>
                        
                            <option value="GIB"> Gibraltar </option>
                        
                            <option value="GRC"> Greece </option>
                        
                            <option value="GRL"> Greenland </option>
                        
                            <option value="GRD"> Grenada </option>
                        
                            <option value="GLP"> Guadeloupe </option>
                        
                            <option value="GUM"> Guam </option>
                        
                            <option value="GTM"> Guatemala </option>
                        
                            <option value="GIN"> Guinea </option>
                        
                            <option value="GNB"> Guinea-Bissau </option>
                        
                            <option value="GUY"> Guyana </option>
                        
                            <option value="HTI"> Haiti </option>
                        
                            <option value="HMD"> Heard and McDonald Island </option>
                        
                            <option value="HND"> Honduras </option>
                        
                            <option value="HKG"> Hong Kong, China </option>
                        
                            <option value="HUN"> Hungary </option>
                        
                            <option value="ISL"> Iceland </option>
                        
                            <option value="IND"> India </option>
                        
                            <option value="IDN"> Indonesia </option>
                        
                            <option value="IRQ"> Iraq </option>
                        
                            <option value="IRL"> Ireland </option>
                        
                            <option value="PAR"> Islands </option>
                        
                            <option value="ISR"> Israel </option>
                        
                            <option value="ITA"> Italia </option>
                        
                            <option value="JAM"> Jamaica </option>
                        
                            <option value="JPN"> Japan </option>
                        
                            <option value="JOR"> Jordan </option>
                        
                            <option value="KAZ"> Kazakhstan </option>
                        
                            <option value="KEN"> Kenya </option>
                        
                            <option value="KIR"> Kiribati </option>
                        
                            <option value="KWT"> Kuwait </option>
                        
                            <option value="KGZ"> Kyrgyzstan </option>
                        
                            <option value="LAO"> Laos </option>
                        
                            <option value="LVA"> Latvia </option>
                        
                            <option value="LBN"> Lebanon </option>
                        
                            <option value="LSO"> Lesotho </option>
                        
                            <option value="LBR"> Liberia </option>
                        
                            <option value="LBY"> Libya </option>
                        
                            <option value="LIE"> Liechtenstein </option>
                        
                            <option value="LTU"> Lithuania </option>
                        
                            <option value="LUX"> Luxembourg </option>
                        
                            <option value="MAC"> Macao, China </option>
                        
                            <option value="MCD"> Macedonia </option>
                        
                            <option value="MDG"> Madagascar </option>
                        
                            <option value="MWI"> Malawi </option>
                        
                            <option value="MYS"> Malaysia </option>
                        
                            <option value="MDV"> Maldives </option>
                        
                            <option value="MLI"> Mali Republic </option>
                        
                            <option value="MLT"> Malta </option>
                        
                            <option value="MHL"> Marshall Islands </option>
                        
                            <option value="MTO"> Martinique </option>
                        
                            <option value="MRT"> Mauritania </option>
                        
                            <option value="MUS"> Mauritius </option>
                        
                            <option value="MYT"> Mayotte Island </option>
                        
                            <option value="FXX"> Metropolitan France </option>
                        
                            <option value="MEX"> Mexico </option>
                        
                            <option value="FSM"> Micronesia </option>
                        
                            <option value="MDA"> Moldova </option>
                        
                            <option value="MCO"> Monaco </option>
                        
                            <option value="MNG"> Mongolian People&#39;s Republic </option>
                        
                            <option value="MNE"> Montenegro </option>
                        
                            <option value="MSR"> Montserrat </option>
                        
                            <option value="MAR"> Morocco </option>
                        
                            <option value="MOZ"> Mozambique </option>
                        
                            <option value="MMR"> Myanmar </option>
                        
                            <option value="NAM"> Namibia </option>
                        
                            <option value="NRU"> Nauru </option>
                        
                            <option value="NPL"> Nepal </option>
                        
                            <option value="NLD"> Netherlands </option>
                        
                            <option value="ANT"> Netherlands Antilles </option>
                        
                            <option value="NCL"> New Caledonia </option>
                        
                            <option value="NZL"> New Zealand </option>
                        
                            <option value="NIC"> Nicaragua </option>
                        
                            <option value="NGA"> Nigeria </option>
                        
                            <option value="NIU"> Niue </option>
                        
                            <option value="NFK"> Norfolk Island </option>
                        
                            <option value="NOR"> Norge </option>
                        
                            <option value="MNP"> Northern Mariana Isl </option>
                        
                            <option value="OTH"> OTHER </option>
                        
                            <option value="OMN"> Oman </option>
                        
                            <option value="PAK"> Pakistan </option>
                        
                            <option value="PLW"> Palau </option>
                        
                            <option value="PSE"> Palestine </option>
                        
                            <option value="PAN"> Panama </option>
                        
                            <option value="PNG"> Papua New Guinea </option>
                        
                            <option value="PRY"> Paraguay </option>
                        
                            <option value="PER"> Peru </option>
                        
                            <option value="PHL"> Philippines </option>
                        
                            <option value="PCN"> Pitcairn Islands </option>
                        
                            <option value="POL"> Poland </option>
                        
                            <option value="PRT"> Portugal </option>
                        
                            <option value="PRI"> Puerto Rico/USA </option>
                        
                            <option value="QAT"> Qatar </option>
                        
                            <option value="COG"> Republic of Congo </option>
                        
                            <option value="YMD"> Republic of Yemen </option>
                        
                            <option value="REU"> Reunion Island </option>
                        
                            <option value="ROM"> Romania </option>
                        
                            <option value="RUE"> Russia </option>
                        
                            <option value="RWA"> Rwanda </option>
                        
                            <option value="SGS"> S. Georgia/S. Sandwich Is </option>
                        
                            <option value="SXM"> SINT MAARTEN </option>
                        
                            <option value="CHS"> SWITZERLAND </option>
                        
                            <option value="WSM"> Samoa (Western Ind S) </option>
                        
                            <option value="SMR"> San Marino </option>
                        
                            <option value="SAU"> Saudi Arabia </option>
                        
                            <option value="SEN"> Senegal Republic </option>
                        
                            <option value="SRB"> Serbia </option>
                        
                            <option value="SYC"> Seychelles Islands </option>
                        
                            <option value="SLE"> Sierra Leone </option>
                        
                            <option value="SGP"> Singapore </option>
                        
                            <option value="SVK"> Slovakia </option>
                        
                            <option value="SVN"> Slovenia </option>
                        
                            <option value="SLB"> Solomon Islands </option>
                        
                            <option value="SOM"> Somalia </option>
                        
                            <option value="ZAF"> South Africa </option>
                        
                            <option value="KOR"> South Korea </option>
                        
                            <option value="LKA"> Sri Lanka </option>
                        
                            <option value="SHN"> St Helena </option>
                        
                            <option value="STK"> St Kitts </option>
                        
                            <option value="KNA"> St Kitts and Nevis </option>
                        
                            <option value="LCA"> St Lucia </option>
                        
                            <option value="STM"> St Maarten </option>
                        
                            <option value="SPM"> St Pierre and Miquelon </option>
                        
                            <option value="VCT"> St. Vincent &amp; Grenadi </option>
                        
                            <option value="SUR"> Suriname </option>
                        
                            <option value="SJM"> Svalbard and Jan Mayen Is </option>
                        
                            <option value="SWE"> Sverige </option>
                        
                            <option value="SWZ"> Swaziland </option>
                        
                            <option value="STP"> São Tomé and Príncipe </option>
                        
                            <option value="TWN"> Taiwan, China </option>
                        
                            <option value="TJK"> Tajikistan </option>
                        
                            <option value="TZA"> Tanzania </option>
                        
                            <option value="THA"> Thailand </option>
                        
                            <option value="TGO"> Togo </option>
                        
                            <option value="TKL"> Tokelau </option>
                        
                            <option value="TON"> Tonga Islands </option>
                        
                            <option value="TTO"> Trinidad and Tobago </option>
                        
                            <option value="TUN"> Tunisia </option>
                        
                            <option value="TUR"> Turkey </option>
                        
                            <option value="TKM"> Turkmenistan </option>
                        
                            <option value="TCA"> Turks and Caicos Island </option>
                        
                            <option value="TUV"> Tuvalu </option>
                        
                            <option value="UMI"> U.S. Minor Out Islands </option>
                        
                            <option value="UGA"> Uganda </option>
                        
                            <option value="UKR"> Ukraine </option>
                        
                            <option value="ARE"> United Arab Emirates </option>
                        
                            <option value="GBR"> United Kingdom </option>
                        
                            <option value="USA"> United States </option>
                        
                            <option value="URY"> Uruguay </option>
                        
                            <option value="UZB"> Uzbekistan </option>
                        
                            <option value="VUT"> Vanuatu </option>
                        
                            <option value="VAT"> Vatican City </option>
                        
                            <option value="VEN"> Venezuela </option>
                        
                            <option value="VNM"> Vietnam </option>
                        
                            <option value="VGB"> Virgin Islands (Brit) </option>
                        
                            <option value="VIR"> Virgin Islands (U.S.) </option>
                        
                            <option value="WLF"> Wallis and Futuna Island </option>
                        
                            <option value="ESH"> Western Sahara </option>
                        
                            <option value="YEM"> Yemen </option>
                        
                            <option value="YUG"> Yugoslavia </option>
                        
                            <option value="ZAR"> Zaire </option>
                        
                            <option value="ZMB"> Zambia </option>
                        
                            <option value="ZWE"> Zimbabwe </option>
                        
                    </rccl-select>
                      </div>
                  </div>
                  <div class="form-email-sign-up__button">
                    <md-spinner v-if="sending" :md-size="40" class="md-accent progress-spinner" md-indeterminate></md-spinner>
                    <md-button v-if="!sending" type="submit" class="md-raised md-primary md-elevation-0" md-theme="rccl" :md-ripple="false">Sign Up</md-button>
                  </div>
              </div>
              <div class="form-email-sign-up__error" v-if="!formSuccess">
                <div v-if="formError" class="form-email-sign-up__message--error"> There was an error processing your request. Please try again. </div>
              </div>
              <div v-if="formSuccess" class="form-email-sign-up__message--success">
                  <img src="/content/dam/royal/resources/icons/confirm-checkmark-form.svg"/>
                  <span>Thank you for signing up!</span>
              </div>
          </div>
          <div v-if="launchDarkly" class="form-email-sign-up__base">
              <p class="form-email-sign-up__disclaimer">
                 <span class="imageCaption">Sign up to receive information about our special offers and deals. You can unsubscribe at any time. For more details about how we use your information, view our <span class="text parbase"><a href="/resources/privacy-policy">Privacy Policy</a></span>.</span>
              </p>
              <p>&nbsp;</p>
          </div>
      </form>
    </div>
  </rc-email-sign-up-form>

</div>
<div class="spacer parbase aem-GridColumn aem-GridColumn--default--12">

  
  <div id="spacerComponent-2026562806" rc-version="0.0.164" class="spacer__base spacer__base--vertical-small">
    
  </div>

</div>
<div class="spacer parbase aem-GridColumn aem-GridColumn--default--12">

  
  <div id="spacerComponent-1054936659" rc-version="0.0.164" class="spacer__base spacer__base--vertical-medium">
    <hr class="spacer__ruler"/>
  </div>

</div>

    
</div>
</div>
		</div>
	
	

</div>
<div class="layoutContainer parbase aem-GridColumn aem-GridColumn--default--12">

	
	  
	
		<div class="layout-container__base layout-container__base--full-width ">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="text parbase aem-GridColumn aem-GridColumn--default--12">

<div id="text-752695620" rc-version="0.0.164" class="text__base">
  <h2 style="color: rgb(21,38,76);"><span class="subHeading">Ultimate World Cruise</span><br />
</h2>
<h2><span class="heading1"><span class="text-navy" style="letter-spacing: 0.0px;color: rgb(21,38,76);text-transform: uppercase;">THE MOST EPIC ADVENTURE EVER</span></span></h2>
<h3><span style="font-weight: normal;"><span class="p"><span class="text-darker-gray">The Ultimate World Cruise℠ takes you on a cultural exploration unlike any other. See it all — or pick a corner of the globe and explore every inch of it on any of four Ultimate World Cruise segments sailing late 2023 through mid-2024. Each voyage of 60+ nights dives deeper into every destination with immersive itineraries and once-in-a-lifetime adventures.</span></span></span></h3>

</div></div>
<div class="spacer parbase aem-GridColumn aem-GridColumn--default--12">

  
  <div id="spacerComponent-419350504" rc-version="0.0.164" class="spacer__base spacer__base--vertical-">
    
  </div>

</div>
<div class="layoutContainer parbase aem-GridColumn aem-GridColumn--default--12">

	
	  
	
		<div class="layout-container__base layout-container__base--full-width rcl_component">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="layoutContainer parbase aem-GridColumn aem-GridColumn--default--12">

	
	  
	
		<div id="altBlockSection" class="layout-container__base layout-container__base--full-width show-for-desktop show-for-tablet">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 aem-Grid--phone--12 ">
    
    <div class="basicTile parbase aem-GridColumn--offset--tablet--0 aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--newline aem-GridColumn--tablet--6 aem-GridColumn--offset--phone--0 aem-GridColumn--default--3 aem-GridColumn--offset--default--0">

  
  

  <rc-basic-tile inline-template :breakpoint="breakpoint" :globalization="globalization">
    <div id="basicTile-1730625969" rc-version="0.0.164" class="basic-tile__base basic-tile__base--aspect-ratio-vertical-banner basic-tile__base--hoirzontal-alignment-center basic-tile__base--vertical-alignment-center">
      
    
    <div class="basic-tile__container">
        <a class="basic-tile__link" href="https://www.royalcaribbean.com/ultimate-world-cruise/expeditions/capitals-of-culture-cruise/" tabindex="0">
            <div class="basic-tile__background  basic-tile__background--gradient">
                
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/content/destinations/baltic-sea/bergen-norway-colorful-houses.jpg?$40x80$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/content/destinations/baltic-sea/bergen-norway-colorful-houses.jpg?$440x880$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/content/destinations/baltic-sea/bergen-norway-colorful-houses.jpg?$440x880$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/content/destinations/baltic-sea/bergen-norway-colorful-houses.jpg?$440x880$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/content/destinations/baltic-sea/bergen-norway-colorful-houses.jpg?$520x1040$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-tile__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" alt="Bergen, Norway Colorful Houses" class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/content/destinations/baltic-sea/bergen-norway-colorful-houses.jpg?$40x80$"/>
            <figcaption class="lazy-loading-image__caption ">Bergen, Norway Colorful Houses</figcaption>
        </figure>
    </rc-lazy-loading-image>

            </div>
            <rc-dynamic-price inline-template service="https://www.royalcaribbean.com/ajax/cruises/price/lookup" timeout="5000" :globalization="globalization" :toggles="toggles">
                <div class="basic-tile__content">
                    <p><span class="heading2">Ultimate Europe &amp; Beyond Cruise</span><br />
</p>
<p><span class="detailsText">40 Destinations, 63 Nights</span></p>
<p><span class="blueBtn">EXPLORE MORE</span></p>

                </div>
            </rc-dynamic-price>
        </a>
    </div>

    </div>
  </rc-basic-tile>

</div>
<div class="basicTile parbase aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--tablet--6 aem-GridColumn--offset--phone--0 aem-GridColumn--default--3 aem-GridColumn--offset--default--0">

  
  

  <rc-basic-tile inline-template :breakpoint="breakpoint" :globalization="globalization">
    <div id="basicTile-1771202467" rc-version="0.0.164" class="basic-tile__base basic-tile__base--aspect-ratio-vertical-banner basic-tile__base--hoirzontal-alignment-center basic-tile__base--vertical-alignment-center">
      
    
    <div class="basic-tile__container">
        <a class="basic-tile__link" href="https://www.royalcaribbean.com/ultimate-world-cruise/expeditions/middle-east-mediterranean-cruise/" tabindex="0">
            <div class="basic-tile__background  basic-tile__background--gradient">
                
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/provence-toulon-france/overview/provence-france-lavender-fields-estate.jpg?$40x80$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/provence-toulon-france/overview/provence-france-lavender-fields-estate.jpg?$440x880$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/provence-toulon-france/overview/provence-france-lavender-fields-estate.jpg?$440x880$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/provence-toulon-france/overview/provence-france-lavender-fields-estate.jpg?$440x880$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/provence-toulon-france/overview/provence-france-lavender-fields-estate.jpg?$520x1040$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-tile__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" alt="Lavender Fields Estate, Provence, France " class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/provence-toulon-france/overview/provence-france-lavender-fields-estate.jpg?$40x80$"/>
            <figcaption class="lazy-loading-image__caption ">Lavender Fields Estate, Provence, France </figcaption>
        </figure>
    </rc-lazy-loading-image>

            </div>
            <rc-dynamic-price inline-template service="https://www.royalcaribbean.com/ajax/cruises/price/lookup" timeout="5000" :globalization="globalization" :toggles="toggles">
                <div class="basic-tile__content">
                    <p><span class="heading2">Ultimate Middle East &amp; Med Cruise</span><br />
</p>
<p><span class="detailsText">44 Destinations, 63 Nights</span></p>
<p><span class="blueBtn">EXPLORE MORE</span></p>

                </div>
            </rc-dynamic-price>
        </a>
    </div>

    </div>
  </rc-basic-tile>

</div>
<div class="basicTile parbase aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--tablet--6 aem-GridColumn--offset--phone--0 aem-GridColumn--default--3 aem-GridColumn--offset--default--0">

  
  

  <rc-basic-tile inline-template :breakpoint="breakpoint" :globalization="globalization">
    <div id="basicTile-1778704162" rc-version="0.0.164" class="basic-tile__base basic-tile__base--aspect-ratio-vertical-banner basic-tile__base--hoirzontal-alignment-center basic-tile__base--vertical-alignment-center">
      
    
    <div class="basic-tile__container">
        <a class="basic-tile__link" href="https://www.royalcaribbean.com/ultimate-world-cruise/expeditions/americas-antarctica-cruise/" tabindex="0">
            <div class="basic-tile__background  basic-tile__background--gradient">
                
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/arica-chile/overview/assets/parinacota-volcano-arica-chile-meadow-mountain-crop.jpg?$40x80$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/arica-chile/overview/assets/parinacota-volcano-arica-chile-meadow-mountain-crop.jpg?$440x880$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/arica-chile/overview/assets/parinacota-volcano-arica-chile-meadow-mountain-crop.jpg?$440x880$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/arica-chile/overview/assets/parinacota-volcano-arica-chile-meadow-mountain-crop.jpg?$440x880$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/arica-chile/overview/assets/parinacota-volcano-arica-chile-meadow-mountain-crop.jpg?$520x1040$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-tile__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" alt="Alpacas Grazing on the Shore  of Lake Chungara, Chile" class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/arica-chile/overview/assets/parinacota-volcano-arica-chile-meadow-mountain-crop.jpg?$40x80$"/>
            <figcaption class="lazy-loading-image__caption ">Alpacas Grazing on the Shore  of Lake Chungara, Chile</figcaption>
        </figure>
    </rc-lazy-loading-image>

            </div>
            <rc-dynamic-price inline-template service="https://www.royalcaribbean.com/ajax/cruises/price/lookup" timeout="5000" :globalization="globalization" :toggles="toggles">
                <div class="basic-tile__content">
                    <p><span class="heading2">Ultimate Americas Cruise</span></p>
<p><span class="detailsText">36 Destinations, 64 Nights</span></p>
<p><span class="blueBtn">EXPLORE MORE</span></p>

                </div>
            </rc-dynamic-price>
        </a>
    </div>

    </div>
  </rc-basic-tile>

</div>
<div class="basicTile parbase aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--tablet--6 aem-GridColumn--offset--phone--0 aem-GridColumn--default--3 aem-GridColumn--offset--default--0">

  
  

  <rc-basic-tile inline-template :breakpoint="breakpoint" :globalization="globalization">
    <div id="basicTile-1778646309" rc-version="0.0.164" class="basic-tile__base basic-tile__base--aspect-ratio-vertical-banner basic-tile__base--hoirzontal-alignment-center basic-tile__base--vertical-alignment-center">
      
    
    <div class="basic-tile__container">
        <a class="basic-tile__link" href="https://www.royalcaribbean.com/ultimate-world-cruise/expeditions/asia-south-pacific-cruise/" tabindex="0">
            <div class="basic-tile__background  basic-tile__background--gradient">
                
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/bora-bora-french-polynesia/overview/bora-bora-french-polynesia-palm-trees-crystal-clear-water.jpg?$40x80$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/bora-bora-french-polynesia/overview/bora-bora-french-polynesia-palm-trees-crystal-clear-water.jpg?$440x880$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/bora-bora-french-polynesia/overview/bora-bora-french-polynesia-palm-trees-crystal-clear-water.jpg?$440x880$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/bora-bora-french-polynesia/overview/bora-bora-french-polynesia-palm-trees-crystal-clear-water.jpg?$440x880$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/bora-bora-french-polynesia/overview/bora-bora-french-polynesia-palm-trees-crystal-clear-water.jpg?$520x1040$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-tile__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" alt="Palm Trees over Crystal Clear Water, Bora Bora, French Polynesia " class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/bora-bora-french-polynesia/overview/bora-bora-french-polynesia-palm-trees-crystal-clear-water.jpg?$40x80$"/>
            <figcaption class="lazy-loading-image__caption ">Palm Trees over Crystal Clear Water, Bora Bora, French Polynesia </figcaption>
        </figure>
    </rc-lazy-loading-image>

            </div>
            <rc-dynamic-price inline-template service="https://www.royalcaribbean.com/ajax/cruises/price/lookup" timeout="5000" :globalization="globalization" :toggles="toggles">
                <div class="basic-tile__content">
                    <p><span class="heading2">Ultimate Asia Pacific Cruise</span><br />
</p>
<p><span class="detailsText">40 Destinations, 87 Nights</span></p>
<p><span class="blueBtn">EXPLORE MORE</span></p>

                </div>
            </rc-dynamic-price>
        </a>
    </div>

    </div>
  </rc-basic-tile>

</div>

    
</div>
</div>
		</div>
	
	

</div>

    
</div>
</div>
		</div>
	
	

</div>
<div class="layoutContainer parbase aem-GridColumn aem-GridColumn--default--12">

	
	  
	
		<div class="layout-container__base layout-container__base--full-width rcl_component">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="layoutContainer parbase aem-GridColumn aem-GridColumn--default--12">

	
	  
	
		<div class="layout-container__base layout-container__base--full-width show-for-phone">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 aem-Grid--phone--12 ">
    
    <div class="basicTile parbase aem-GridColumn--offset--tablet--0 aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--newline aem-GridColumn--tablet--6 aem-GridColumn--offset--phone--0 aem-GridColumn--default--3 aem-GridColumn--offset--default--0">

  
  

  <rc-basic-tile inline-template :breakpoint="breakpoint" :globalization="globalization">
    <div id="basicTile-1571431137" rc-version="0.0.164" class="basic-tile__base basic-tile__base--aspect-ratio-square basic-tile__base--hoirzontal-alignment-center basic-tile__base--vertical-alignment-center">
      
    
    <div class="basic-tile__container">
        <a class="basic-tile__link" href="https://www.royalcaribbean.com/ultimate-world-cruise/expeditions/capitals-of-culture-cruise/" tabindex="0">
            <div class="basic-tile__background  basic-tile__background--gradient">
                
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/content/destinations/baltic-sea/bergen-norway-colorful-houses.jpg?$40x40$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/content/destinations/baltic-sea/bergen-norway-colorful-houses.jpg?$440x440$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/content/destinations/baltic-sea/bergen-norway-colorful-houses.jpg?$440x440$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/content/destinations/baltic-sea/bergen-norway-colorful-houses.jpg?$440x440$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/content/destinations/baltic-sea/bergen-norway-colorful-houses.jpg?$520x520$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-tile__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" alt="Bergen, Norway Colorful Houses" class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/content/destinations/baltic-sea/bergen-norway-colorful-houses.jpg?$40x40$"/>
            <figcaption class="lazy-loading-image__caption ">Bergen, Norway Colorful Houses</figcaption>
        </figure>
    </rc-lazy-loading-image>

            </div>
            <rc-dynamic-price inline-template service="https://www.royalcaribbean.com/ajax/cruises/price/lookup" timeout="5000" :globalization="globalization" :toggles="toggles">
                <div class="basic-tile__content">
                    <p><span class="heading2">Ultimate Europe &amp; Beyond Cruise</span><br />
</p>
<p><span class="detailsText"><b>40 Destinations, 63 Nights</b></span></p>
<p><span class="blueBtn">EXPLORE MORE</span></p>

                </div>
            </rc-dynamic-price>
        </a>
    </div>

    </div>
  </rc-basic-tile>

</div>
<div class="basicTile parbase aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--tablet--6 aem-GridColumn--offset--phone--0 aem-GridColumn--default--3 aem-GridColumn--offset--default--0">

  
  

  <rc-basic-tile inline-template :breakpoint="breakpoint" :globalization="globalization">
    <div id="basicTile-1931069205" rc-version="0.0.164" class="basic-tile__base basic-tile__base--aspect-ratio-square basic-tile__base--hoirzontal-alignment-center basic-tile__base--vertical-alignment-center">
      
    
    <div class="basic-tile__container">
        <a class="basic-tile__link" href="https://www.royalcaribbean.com/ultimate-world-cruise/expeditions/middle-east-mediterranean-cruise/" tabindex="0">
            <div class="basic-tile__background  basic-tile__background--gradient">
                
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/provence-toulon-france/overview/provence-france-lavender-fields-estate.jpg?$40x40$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/provence-toulon-france/overview/provence-france-lavender-fields-estate.jpg?$440x440$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/provence-toulon-france/overview/provence-france-lavender-fields-estate.jpg?$440x440$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/provence-toulon-france/overview/provence-france-lavender-fields-estate.jpg?$440x440$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/provence-toulon-france/overview/provence-france-lavender-fields-estate.jpg?$520x520$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-tile__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" alt="Lavender Fields Estate, Provence, France " class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/provence-toulon-france/overview/provence-france-lavender-fields-estate.jpg?$40x40$"/>
            <figcaption class="lazy-loading-image__caption ">Lavender Fields Estate, Provence, France </figcaption>
        </figure>
    </rc-lazy-loading-image>

            </div>
            <rc-dynamic-price inline-template service="https://www.royalcaribbean.com/ajax/cruises/price/lookup" timeout="5000" :globalization="globalization" :toggles="toggles">
                <div class="basic-tile__content">
                    <p><span class="heading2">Ultimate Middle East &amp; Med Cruise</span><br />
</p>
<p><span class="detailsText"><b>44 Destinations, 63 Nights</b></span></p>
<p><span class="blueBtn">EXPLORE MORE</span></p>

                </div>
            </rc-dynamic-price>
        </a>
    </div>

    </div>
  </rc-basic-tile>

</div>
<div class="basicTile parbase aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--tablet--6 aem-GridColumn--offset--phone--0 aem-GridColumn--default--3 aem-GridColumn--offset--default--0">

  
  

  <rc-basic-tile inline-template :breakpoint="breakpoint" :globalization="globalization">
    <div id="basicTile-1923567510" rc-version="0.0.164" class="basic-tile__base basic-tile__base--aspect-ratio-square basic-tile__base--hoirzontal-alignment-center basic-tile__base--vertical-alignment-center">
      
    
    <div class="basic-tile__container">
        <a class="basic-tile__link" href="https://www.royalcaribbean.com/ultimate-world-cruise/expeditions/americas-antarctica-cruise/" tabindex="0">
            <div class="basic-tile__background  basic-tile__background--gradient">
                
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/arica-chile/overview/assets/parinacota-volcano-arica-chile-meadow-mountain-crop.jpg?$40x40$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/arica-chile/overview/assets/parinacota-volcano-arica-chile-meadow-mountain-crop.jpg?$440x440$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/arica-chile/overview/assets/parinacota-volcano-arica-chile-meadow-mountain-crop.jpg?$440x440$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/arica-chile/overview/assets/parinacota-volcano-arica-chile-meadow-mountain-crop.jpg?$440x440$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/arica-chile/overview/assets/parinacota-volcano-arica-chile-meadow-mountain-crop.jpg?$520x520$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-tile__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" alt="Alpacas Grazing on the Shore  of Lake Chungara, Chile" class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/ports/arica-chile/overview/assets/parinacota-volcano-arica-chile-meadow-mountain-crop.jpg?$40x40$"/>
            <figcaption class="lazy-loading-image__caption ">Alpacas Grazing on the Shore  of Lake Chungara, Chile</figcaption>
        </figure>
    </rc-lazy-loading-image>

            </div>
            <rc-dynamic-price inline-template service="https://www.royalcaribbean.com/ajax/cruises/price/lookup" timeout="5000" :globalization="globalization" :toggles="toggles">
                <div class="basic-tile__content">
                    <p><span class="heading2">Ultimate Americas Cruise</span></p>
<p><span class="detailsText"><b>36 Destinations, 64 Nights</b></span></p>
<p><span class="blueBtn">EXPLORE MORE</span></p>

                </div>
            </rc-dynamic-price>
        </a>
    </div>

    </div>
  </rc-basic-tile>

</div>
<div class="basicTile parbase aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--tablet--6 aem-GridColumn--offset--phone--0 aem-GridColumn--default--3 aem-GridColumn--offset--default--0">

  
  

  <rc-basic-tile inline-template :breakpoint="breakpoint" :globalization="globalization">
    <div id="basicTile-1923625363" rc-version="0.0.164" class="basic-tile__base basic-tile__base--aspect-ratio-square basic-tile__base--hoirzontal-alignment-center basic-tile__base--vertical-alignment-center">
      
    
    <div class="basic-tile__container">
        <a class="basic-tile__link" href="https://www.royalcaribbean.com/ultimate-world-cruise/expeditions/asia-south-pacific-cruise/" tabindex="0">
            <div class="basic-tile__background  basic-tile__background--gradient">
                
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/bora-bora-french-polynesia/overview/bora-bora-french-polynesia-palm-trees-crystal-clear-water.jpg?$40x40$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/bora-bora-french-polynesia/overview/bora-bora-french-polynesia-palm-trees-crystal-clear-water.jpg?$440x440$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/bora-bora-french-polynesia/overview/bora-bora-french-polynesia-palm-trees-crystal-clear-water.jpg?$440x440$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/bora-bora-french-polynesia/overview/bora-bora-french-polynesia-palm-trees-crystal-clear-water.jpg?$440x440$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/bora-bora-french-polynesia/overview/bora-bora-french-polynesia-palm-trees-crystal-clear-water.jpg?$520x520$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-tile__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" alt="Palm Trees over Crystal Clear Water, Bora Bora, French Polynesia " class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/bora-bora-french-polynesia/overview/bora-bora-french-polynesia-palm-trees-crystal-clear-water.jpg?$40x40$"/>
            <figcaption class="lazy-loading-image__caption ">Palm Trees over Crystal Clear Water, Bora Bora, French Polynesia </figcaption>
        </figure>
    </rc-lazy-loading-image>

            </div>
            <rc-dynamic-price inline-template service="https://www.royalcaribbean.com/ajax/cruises/price/lookup" timeout="5000" :globalization="globalization" :toggles="toggles">
                <div class="basic-tile__content">
                    <p><span class="heading2">Ultimate Asia Pacific Cruise</span><br />
</p>
<p><span class="detailsText"><b>40 Destinations, 87 Nights</b></span></p>
<p><span class="blueBtn">EXPLORE MORE</span></p>

                </div>
            </rc-dynamic-price>
        </a>
    </div>

    </div>
  </rc-basic-tile>

</div>

    
</div>
</div>
		</div>
	
	

</div>

    
</div>
</div>
		</div>
	
	

</div>

    
</div>
</div>
		</div>
	
	

</div>
<div class="spacer parbase aem-GridColumn aem-GridColumn--default--12">

  
  <div id="spacerComponent-1222677098" rc-version="0.0.164" class="spacer__base spacer__base--vertical-small">
    
  </div>

</div>
<div class="layoutContainer parbase aem-GridColumn aem-GridColumn--default--12">

	
	  
	
		<div class="layout-container__base layout-container__base-- ">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="layoutContainer parbase aem-GridColumn aem-GridColumn--default--12">

	
	  
	
		<div class="layout-container__base layout-container__base--full-width rcl_component">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="layoutContainer parbase aem-GridColumn aem-GridColumn--default--12">

	
	  
	
		<div class="layout-container__base layout-container__base--full-width show-for-desktop show-for-tablet">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="basicTile parbase aem-GridColumn aem-GridColumn--default--12">

  
  

  <rc-basic-tile inline-template :breakpoint="breakpoint" :globalization="globalization">
    <div id="basicTile-1083158394" rc-version="0.0.164" class="basic-tile__base basic-tile__base--aspect-ratio-billboard basic-tile__base--hoirzontal-alignment-center basic-tile__base--vertical-alignment-center">
      
    
    <div class="basic-tile__container">
        <a class="basic-tile__link" href="https://www.royalcaribbean.com/cococay-cruises?icid=mschpl_tctclp_msc_hm_mod_3567" tabindex="0">
            <div class="basic-tile__background  basic-tile__background--gradient">
                
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/2021/june/june-monthly/Perfect_Day_at_CocoCay_Deals_Desktop_1440_360.jpg?$120x40$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/2021/june/june-monthly/Perfect_Day_at_CocoCay_Deals_Desktop_1440_360.jpg?$960x320$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/2021/june/june-monthly/Perfect_Day_at_CocoCay_Deals_Desktop_1440_360.jpg?$960x320$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/2021/june/june-monthly/Perfect_Day_at_CocoCay_Deals_Desktop_1440_360.jpg?$1320x440$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/2021/june/june-monthly/Perfect_Day_at_CocoCay_Deals_Desktop_1440_360.jpg?$1560x520$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-tile__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" alt="Perfect Day at CocoCay Deals Desktop 1440 360" class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/promotions/2021/june/june-monthly/Perfect_Day_at_CocoCay_Deals_Desktop_1440_360.jpg?$120x40$"/>
            <figcaption class="lazy-loading-image__caption ">Perfect Day at CocoCay Deals Desktop 1440 360</figcaption>
        </figure>
    </rc-lazy-loading-image>

            </div>
            <rc-dynamic-price inline-template service="https://www.royalcaribbean.com/ajax/cruises/price/lookup" timeout="5000" :globalization="globalization" :toggles="toggles">
                <div class="basic-tile__content">
                    <p><span class="subHeading">THIS IS A DAY UNLIKE ANY OTHER</span></p>
<p><span class="heading2">PERFECT DAY AT COCOCAY</span></p>
<p><span class="detailsText"> </span></p>
<p><span class="blueBtn">EXPLORE MORE</span></p>

                </div>
            </rc-dynamic-price>
        </a>
    </div>

    </div>
  </rc-basic-tile>

</div>

    
</div>
</div>
		</div>
	
	

</div>

    
</div>
</div>
		</div>
	
	

</div>
<div class="layoutContainer parbase aem-GridColumn aem-GridColumn--default--12">

	
	  
	
		<div class="layout-container__base layout-container__base--full-width rcl_component">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="layoutContainer parbase aem-GridColumn aem-GridColumn--default--12">

	
	  
	
		<div class="layout-container__base layout-container__base--full-width show-for-phone">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="basicTile parbase aem-GridColumn aem-GridColumn--default--12">

  
  

  <rc-basic-tile inline-template :breakpoint="breakpoint" :globalization="globalization">
    <div id="basicTile-969859077" rc-version="0.0.164" class="basic-tile__base basic-tile__base--aspect-ratio-square basic-tile__base--hoirzontal-alignment-center basic-tile__base--vertical-alignment-center">
      
    
    <div class="basic-tile__container">
        <a class="basic-tile__link" href="https://www.royalcaribbean.com/cococay-cruises?icid=mschpl_tctclp_msc_hm_mod_3567" tabindex="0">
            <div class="basic-tile__background ">
                
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/geotargeting/2022-geotargeting-setup/northeast/perfect-day-island-cococay-bahamas-hot-air-balloon.jpg?$40x40$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/geotargeting/2022-geotargeting-setup/northeast/perfect-day-island-cococay-bahamas-hot-air-balloon.jpg?$440x440$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/geotargeting/2022-geotargeting-setup/northeast/perfect-day-island-cococay-bahamas-hot-air-balloon.jpg?$440x440$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/geotargeting/2022-geotargeting-setup/northeast/perfect-day-island-cococay-bahamas-hot-air-balloon.jpg?$440x440$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/geotargeting/2022-geotargeting-setup/northeast/perfect-day-island-cococay-bahamas-hot-air-balloon.jpg?$520x520$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-tile__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" alt="Up Up and Away, Aerial View of the Island, Perfect Day at Coco Cay" class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/geotargeting/2022-geotargeting-setup/northeast/perfect-day-island-cococay-bahamas-hot-air-balloon.jpg?$40x40$"/>
            <figcaption class="lazy-loading-image__caption ">Up Up and Away, Aerial View of the Island, Perfect Day at Coco Cay</figcaption>
        </figure>
    </rc-lazy-loading-image>

            </div>
            <rc-dynamic-price inline-template service="https://www.royalcaribbean.com/ajax/cruises/price/lookup" timeout="5000" :globalization="globalization" :toggles="toggles">
                <div class="basic-tile__content">
                    <p><span class="subHeading">THIS IS A DAY UNLIKE ANY OTHER</span></p>
<p><span class="heading2">PERFECT DAY AT COCOCAY</span></p>
<p><span class="detailsText"> </span></p>
<p><span class="goldBtn">BOOK NOW</span></p>

                </div>
            </rc-dynamic-price>
        </a>
    </div>

    </div>
  </rc-basic-tile>

</div>

    
</div>
</div>
		</div>
	
	

</div>

    
</div>
</div>
		</div>
	
	

</div>

    
</div>
</div>
		</div>
	
	

</div>
<div class="spacer parbase aem-GridColumn aem-GridColumn--default--12">

  
  <div id="spacerComponent-824290764" rc-version="0.0.164" class="spacer__base spacer__base--vertical-small">
    
  </div>

</div>
<div class="layoutContainer parbase aem-GridColumn aem-GridColumn--default--12">

	
	  
	
		<div class="layout-container__base layout-container__base-- ">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="layoutContainer parbase aem-GridColumn aem-GridColumn--default--12">

	
	  
	
		<div class="layout-container__base layout-container__base-- ">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 aem-Grid--phone--12 ">
    
    <div class="basicTile parbase aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--tablet--6 aem-GridColumn--default--6 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0">

  
  

  <rc-basic-tile inline-template :breakpoint="breakpoint" :globalization="globalization">
    <div id="basicTile-214719848" rc-version="0.0.164" class="basic-tile__base basic-tile__base--aspect-ratio-jumbotron basic-tile__base--hoirzontal-alignment-center basic-tile__base--vertical-alignment-center">
      
    
    <div class="basic-tile__container">
        <a class="basic-tile__link" href="https://www.royalcaribbean.com/cruises/?dates_maxDate=04%252F30%252F2023&dates_minDate=01%252F01%252F2022&shipCode_OY=true&icid=ltmtwr_tctclp_ltm_hm_ban_3500" tabindex="0">
            <div class="basic-tile__background  basic-tile__background--gradient">
                
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ships/odyssey/assets/odyssey-of-the-seas-book-sea-day-vacation-sailing-super.jpg?$240x124$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ships/odyssey/assets/odyssey-of-the-seas-book-sea-day-vacation-sailing-super.jpg?$800x450$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ships/odyssey/assets/odyssey-of-the-seas-book-sea-day-vacation-sailing-super.jpg?$800x450$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ships/odyssey/assets/odyssey-of-the-seas-book-sea-day-vacation-sailing-super.jpg?$1440x810$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ships/odyssey/assets/odyssey-of-the-seas-book-sea-day-vacation-sailing-super.jpg?$1920x1080$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-tile__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" alt="Odyssey of the Seas Sunset Sailing" class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ships/odyssey/assets/odyssey-of-the-seas-book-sea-day-vacation-sailing-super.jpg?$240x124$"/>
            <figcaption class="lazy-loading-image__caption ">Odyssey of the Seas Sunset Sailing</figcaption>
        </figure>
    </rc-lazy-loading-image>

            </div>
            <rc-dynamic-price inline-template search="?dates_maxDate=04%252F30%252F2023&amp;dates_minDate=01%252F01%252F2022&amp;shipCode_OY=true&amp;icid=ltmtwr_tctclp_ltm_hm_ban_3500" service="https://www.royalcaribbean.com/ajax/cruises/price/lookup" timeout="5000" :globalization="globalization" :toggles="toggles">
                <div class="basic-tile__content">
                    <p><span class="detailsText">QUANTUM ULTRA CLASS SHIP</span></p>
<p><span class="heading3">ODYSSEY OF THE SEAS</span></p>
<p><span class="goldBtn">Book Now</span></p>

                </div>
            </rc-dynamic-price>
        </a>
    </div>

    </div>
  </rc-basic-tile>

</div>
<div class="basicTile parbase aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--tablet--6 aem-GridColumn--default--6 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0">

  
  

  <rc-basic-tile inline-template :breakpoint="breakpoint" :globalization="globalization">
    <div id="basicTile-983065681" rc-version="0.0.164" class="basic-tile__base basic-tile__base--aspect-ratio-jumbotron basic-tile__base--hoirzontal-alignment-center basic-tile__base--vertical-alignment-center">
      
    
    <div class="basic-tile__container">
        <a class="basic-tile__link" href="/cruises/?shipCode_WN=true&icid=dyssyf_tctclp_dys_hm_tile5_3501" tabindex="0">
            <div class="basic-tile__background  basic-tile__background--gradient">
                
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ships/wonder/assets/wonder-of-the-seas-sunset-promo-book-sea-day.jpg?$240x124$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ships/wonder/assets/wonder-of-the-seas-sunset-promo-book-sea-day.jpg?$800x450$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ships/wonder/assets/wonder-of-the-seas-sunset-promo-book-sea-day.jpg?$800x450$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ships/wonder/assets/wonder-of-the-seas-sunset-promo-book-sea-day.jpg?$1440x810$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ships/wonder/assets/wonder-of-the-seas-sunset-promo-book-sea-day.jpg?$1920x1080$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-tile__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" alt="wonder of the seas sunset promo book sea day" class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ships/wonder/assets/wonder-of-the-seas-sunset-promo-book-sea-day.jpg?$240x124$"/>
            <figcaption class="lazy-loading-image__caption ">wonder of the seas sunset promo book sea day</figcaption>
        </figure>
    </rc-lazy-loading-image>

            </div>
            <rc-dynamic-price inline-template search="?shipCode_WN=true" service="https://www.royalcaribbean.com/ajax/cruises/price/lookup" timeout="5000" :globalization="globalization" :toggles="toggles">
                <div class="basic-tile__content">
                    <p><span class="detailsText">OASIS CLASS SHIP</span></p>
<p><span class="heading3">WONDER OF THE SEAS</span></p>
<p><span class="goldBtn">Book Now</span></p>

                </div>
            </rc-dynamic-price>
        </a>
    </div>

    </div>
  </rc-basic-tile>

</div>

    
</div>
</div>
		</div>
	
	

</div>

    
</div>
</div>
		</div>
	
	

</div>
<div class="spacer parbase aem-GridColumn aem-GridColumn--default--12">

  
  <div id="spacerComponent-2064549774" rc-version="0.0.164" class="spacer__base spacer__base--vertical-medium">
    
  </div>

</div>
<div class="layoutContainer parbase aem-GridColumn aem-GridColumn--default--12">

	
	  
	
		<div class="layout-container__base layout-container__base--full-width ">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="text parbase aem-GridColumn aem-GridColumn--default--12">

<div id="text-1572581664" rc-version="0.0.164" class="text__base">
  <h2><span class="heading1"><span class="text-navy" style="letter-spacing: 0.0px;color: rgb(21,38,76);text-transform: uppercase;">TAKE ADVENTURE TO NEW HEIGHTS</span></span></h2>
<h3><span style="font-weight: normal;"><span class="p"><span class="text-darker-gray">Everyone deserves a vacation. You’ll find endless opportunities to make the most of every moment — like game-changing activities, world-class dining, show-stopping entertainment, and plenty of ways to unwind in the sun</span></span></span></h3>

</div></div>
<div class="mosaicCarousel basicCarousel aem-GridColumn aem-GridColumn--default--12">

  
  <rc-mosaic-carousel inline-template :breakpoint="breakpoint">
    <div id="mosaicCarousel-694782973" rc-version="0.0.152" class="basic-carousel__base basic-carousel__theme--light">
      
      <div class="basic-carousel__wrapper">
        <div v-show="showLeftArrow" class="basic-carousel__arrow basic-carousel__arrow--left" @click="slideLeft">
        </div>
        <div ref="carousel" class="mosaic-carousel__grid basic-carousel__scrollbar--hidden" @scroll="scroll">
          
            
            
            
            
            

            <div class="basic-carousel__item mosaic-carousel__item" style="grid-column-start: 1;
                     grid-column-end: 2;
                     grid-row-start: 1;
                     grid-row-end: 3;">
              
  
  
  
  <div class="basic-carousel-item__base mosaic-carousel-item__base basic-carousel-item__horizontal-alignment--center basic-carousel-item__vertical-alignment--center basic-carousel-item__overlay--none">
    
      <a class="basic-carousel-item__link" href="/caribbean-cruises?icid=mschpb_tctclp_msc_hm_mod_3569">
    
    <div class="basic-carousel-item__background basic-carousel-item__background--darken-filter" style="background-color: transparent;">
      
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/jamaica/waterfall-streams-botanical-garden-jamaica.jpg?$40x80$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/jamaica/waterfall-streams-botanical-garden-jamaica.jpg?$440x880$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/jamaica/waterfall-streams-botanical-garden-jamaica.jpg?$440x880$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/jamaica/waterfall-streams-botanical-garden-jamaica.jpg?$440x880$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/jamaica/waterfall-streams-botanical-garden-jamaica.jpg?$440x880$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-carousel-item__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" alt="Waterfall streams in a botanical garden., Jamaica" class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/jamaica/waterfall-streams-botanical-garden-jamaica.jpg?$40x80$"/>
            <figcaption class="lazy-loading-image__caption ">Waterfall streams in a botanical garden., Jamaica</figcaption>
        </figure>
    </rc-lazy-loading-image>

    </div>
    <div class="basic-carousel-item__content mosaic-carousel-item__content">
      <p><span class="heading1">CARIBBEAN</span></p>

    </div>
    
      </a>
    
  </div>

            </div>
          
            
            
            
            
            

            <div class="basic-carousel__item mosaic-carousel__item" style="grid-column-start: 2;
                     grid-column-end: 4;
                     grid-row-start: 1;
                     grid-row-end: 2;">
              
  
  
  
  <div class="basic-carousel-item__base mosaic-carousel-item__base basic-carousel-item__horizontal-alignment--center basic-carousel-item__vertical-alignment--center basic-carousel-item__overlay--none">
    
      <a class="basic-carousel-item__link" href="/alaska-cruises?icid=2023rp_tctclp_202_hm_tile5_3566">
    
    <div class="basic-carousel-item__background basic-carousel-item__background--darken-filter" style="background-color: transparent;">
      
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/alaska-glacier-cruises/alaska-glacier-bay-nationla-park-mountain-ice.jpg?$80x40$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/alaska-glacier-cruises/alaska-glacier-bay-nationla-park-mountain-ice.jpg?$640x320$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/alaska-glacier-cruises/alaska-glacier-bay-nationla-park-mountain-ice.jpg?$640x320$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/alaska-glacier-cruises/alaska-glacier-bay-nationla-park-mountain-ice.jpg?$640x320$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/alaska-glacier-cruises/alaska-glacier-bay-nationla-park-mountain-ice.jpg?$640x320$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-carousel-item__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" alt="National Park Mountain Glacier Bay, Alaska" class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/alaska-glacier-cruises/alaska-glacier-bay-nationla-park-mountain-ice.jpg?$80x40$"/>
            <figcaption class="lazy-loading-image__caption ">National Park Mountain Glacier Bay, Alaska</figcaption>
        </figure>
    </rc-lazy-loading-image>

    </div>
    <div class="basic-carousel-item__content mosaic-carousel-item__content">
      <p><span class="heading1">ALASKA</span></p>

    </div>
    
      </a>
    
  </div>

            </div>
          
            
            
            
            
            

            <div class="basic-carousel__item mosaic-carousel__item" style="grid-column-start: 2;
                     grid-column-end: 3;
                     grid-row-start: 2;
                     grid-row-end: 3;">
              
  
  
  
  <div class="basic-carousel-item__base mosaic-carousel-item__base basic-carousel-item__horizontal-alignment--center basic-carousel-item__vertical-alignment--center basic-carousel-item__overlay--none">
    
      <a class="basic-carousel-item__link" href="/bahamas-cruises?icid=mschpc_tctclp_msc_hm_mod_3568">
    
    <div class="basic-carousel-item__background basic-carousel-item__background--darken-filter" style="background-color: transparent;">
      
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/nassau-bahamas/nassau-bahamas-paradise-island-lighthouse.jpg?$40x40$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/nassau-bahamas/nassau-bahamas-paradise-island-lighthouse.jpg?$440x440$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/nassau-bahamas/nassau-bahamas-paradise-island-lighthouse.jpg?$440x440$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/nassau-bahamas/nassau-bahamas-paradise-island-lighthouse.jpg?$440x440$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/nassau-bahamas/nassau-bahamas-paradise-island-lighthouse.jpg?$440x440$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-carousel-item__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" alt="Paradise Island Lighthouse During Sunset, Nassau, Bahamas" class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/nassau-bahamas/nassau-bahamas-paradise-island-lighthouse.jpg?$40x40$"/>
            <figcaption class="lazy-loading-image__caption ">Paradise Island Lighthouse During Sunset, Nassau, Bahamas</figcaption>
        </figure>
    </rc-lazy-loading-image>

    </div>
    <div class="basic-carousel-item__content mosaic-carousel-item__content">
      <p><span class="heading1">BAHAMAS</span></p>

    </div>
    
      </a>
    
  </div>

            </div>
          
            
            
            
            
            

            <div class="basic-carousel__item mosaic-carousel__item" style="grid-column-start: 3;
                     grid-column-end: 4;
                     grid-row-start: 2;
                     grid-row-end: 3;">
              
  
  
  
  <div class="basic-carousel-item__base mosaic-carousel-item__base basic-carousel-item__horizontal-alignment--center basic-carousel-item__vertical-alignment--center basic-carousel-item__overlay--none">
    
      <a class="basic-carousel-item__link" href="/mexico-cruises?icid=mschpc_tctclp_msc_hm_mod_3570">
    
    <div class="basic-carousel-item__background basic-carousel-item__background--darken-filter" style="background-color: transparent;">
      
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/special-mkgt/deployment-hub/chichen-itza-ruins-in-yucatan-mexico.jpg?$40x40$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/special-mkgt/deployment-hub/chichen-itza-ruins-in-yucatan-mexico.jpg?$440x440$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/special-mkgt/deployment-hub/chichen-itza-ruins-in-yucatan-mexico.jpg?$440x440$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/special-mkgt/deployment-hub/chichen-itza-ruins-in-yucatan-mexico.jpg?$440x440$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/special-mkgt/deployment-hub/chichen-itza-ruins-in-yucatan-mexico.jpg?$440x440$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-carousel-item__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" alt="Chichen Itza Ruins Mexico" class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/special-mkgt/deployment-hub/chichen-itza-ruins-in-yucatan-mexico.jpg?$40x40$"/>
            <figcaption class="lazy-loading-image__caption ">Chichen Itza Ruins Mexico</figcaption>
        </figure>
    </rc-lazy-loading-image>

    </div>
    <div class="basic-carousel-item__content mosaic-carousel-item__content">
      <p><span class="heading1">MEXICO</span></p>

    </div>
    
      </a>
    
  </div>

            </div>
          
            
            
            
            
            

            <div class="basic-carousel__item mosaic-carousel__item" style="grid-column-start: 4;
                     grid-column-end: 6;
                     grid-row-start: 1;
                     grid-row-end: 2;">
              
  
  
  
  <div class="basic-carousel-item__base mosaic-carousel-item__base basic-carousel-item__horizontal-alignment--center basic-carousel-item__vertical-alignment--center basic-carousel-item__overlay--none">
    
      <a class="basic-carousel-item__link" href="/southern-caribbean-cruises?icid=mschpm_tctclp_msc_hm_mod_3571">
    
    <div class="basic-carousel-item__background basic-carousel-item__background--darken-filter" style="background-color: transparent;">
      
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/southern-caribbean/family-jumping-cliffs-ocean-aruba.jpg?$80x40$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/southern-caribbean/family-jumping-cliffs-ocean-aruba.jpg?$640x320$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/southern-caribbean/family-jumping-cliffs-ocean-aruba.jpg?$640x320$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/southern-caribbean/family-jumping-cliffs-ocean-aruba.jpg?$640x320$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/southern-caribbean/family-jumping-cliffs-ocean-aruba.jpg?$640x320$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-carousel-item__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" alt="Family Jumping Through Rocks, Oranjestad, Aruba" class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/ports-and-destinations/destinations/southern-caribbean/family-jumping-cliffs-ocean-aruba.jpg?$80x40$"/>
            <figcaption class="lazy-loading-image__caption ">Family Jumping Through Rocks, Oranjestad, Aruba</figcaption>
        </figure>
    </rc-lazy-loading-image>

    </div>
    <div class="basic-carousel-item__content mosaic-carousel-item__content">
      <p><span class="heading1">SOUTHERN CARIBBEAN </span></p>

    </div>
    
      </a>
    
  </div>

            </div>
          
            
            
            
            
            

            <div class="basic-carousel__item mosaic-carousel__item" style="grid-column-start: 4;
                     grid-column-end: 5;
                     grid-row-start: 2;
                     grid-row-end: 3;">
              
  
  
  
  <div class="basic-carousel-item__base mosaic-carousel-item__base basic-carousel-item__horizontal-alignment--center basic-carousel-item__vertical-alignment--center basic-carousel-item__overlay--none">
    
      <a class="basic-carousel-item__link" href="/alaska-whale-watching-and-wildlife?icid=mschps_tctclp_msc_hm_mod_3572">
    
    <div class="basic-carousel-item__background basic-carousel-item__background--darken-filter" style="background-color: transparent;">
      
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/icy-strait-point-alaska/alaska-icy-pointe-straight-whale-watching.jpg?$40x40$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/icy-strait-point-alaska/alaska-icy-pointe-straight-whale-watching.jpg?$440x440$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/icy-strait-point-alaska/alaska-icy-pointe-straight-whale-watching.jpg?$440x440$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/icy-strait-point-alaska/alaska-icy-pointe-straight-whale-watching.jpg?$440x440$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/icy-strait-point-alaska/alaska-icy-pointe-straight-whale-watching.jpg?$440x440$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-carousel-item__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" alt="Whale Watching, Icy Strait Point, Alaska" class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/icy-strait-point-alaska/alaska-icy-pointe-straight-whale-watching.jpg?$40x40$"/>
            <figcaption class="lazy-loading-image__caption ">Whale Watching, Icy Strait Point, Alaska </figcaption>
        </figure>
    </rc-lazy-loading-image>

    </div>
    <div class="basic-carousel-item__content mosaic-carousel-item__content">
      <p><span class="heading1">ALASKA WHALE WATCHING &amp; WILDLIFE</span></p>

    </div>
    
      </a>
    
  </div>

            </div>
          
            
            
            
            
            

            <div class="basic-carousel__item mosaic-carousel__item" style="grid-column-start: 5;
                     grid-column-end: 6;
                     grid-row-start: 2;
                     grid-row-end: 3;">
              
  
  
  
  <div class="basic-carousel-item__base mosaic-carousel-item__base basic-carousel-item__horizontal-alignment--center basic-carousel-item__vertical-alignment--center basic-carousel-item__overlay--none">
    
      <a class="basic-carousel-item__link" href="/european-cruises">
    
    <div class="basic-carousel-item__background " style="background-color: transparent;">
      
    <rc-lazy-loading-image inline-template :breakpoint="breakpoint" :replace-image="null" thumbnail-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/countries/ESP/homepage/may/Spain HomePage TilesArtboard 1.jpg?$40x40$" mobile-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/countries/ESP/homepage/may/Spain HomePage TilesArtboard 1.jpg?$440x440$" tablet-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/countries/ESP/homepage/may/Spain HomePage TilesArtboard 1.jpg?$440x440$" desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/countries/ESP/homepage/may/Spain HomePage TilesArtboard 1.jpg?$440x440$" large-desktop-rendition="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/countries/ESP/homepage/may/Spain HomePage TilesArtboard 1.jpg?$440x440$" @get-initial-image="function(data) { typeof getInitialImage !== 'undefined' &&  getInitialImage(data); }">
        <figure class="basic-carousel-item__background-image lazy-loading-image__base" :class="{ 'lazy-loading-image__base--loaded': loaded }" style="background-color: ;">
            <img ref="image" alt="Mediterranean, Royal Caribbean International" class="lazy-loading-image__item " src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/countries/ESP/homepage/may/Spain%20HomePage%20TilesArtboard%201.jpg?$40x40$"/>
            <figcaption class="lazy-loading-image__caption ">Spain HomePage TilesArtboard 1</figcaption>
        </figure>
    </rc-lazy-loading-image>

    </div>
    <div class="basic-carousel-item__content mosaic-carousel-item__content">
      <p><span class="headline"><span class="heading1">EUROPE</span></span></p>

    </div>
    
      </a>
    
  </div>

            </div>
          
        </div>
        <div v-show="showRightArrow" class="basic-carousel__arrow basic-carousel__arrow--right" @click="slideRight">
        </div>
      </div>
    </div>
  </rc-mosaic-carousel>
</div>
<div class="spacer parbase aem-GridColumn aem-GridColumn--default--12">

  
  <div id="spacerComponent-125198580" rc-version="0.0.164" class="spacer__base spacer__base--vertical-">
    
  </div>

</div>

    
</div>
</div>
		</div>
	
	

</div>

    
</div>
</div>
		</div>
	
	

</div>
<div class="layoutContainer parbase aem-GridColumn aem-GridColumn--default--12">

	
	  
	
		<div class="layout-container__base layout-container__base--full-width ">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="layoutContainer parbase aem-GridColumn aem-GridColumn--default--12">

	
	  
	
		<div id="visa-pencil-banner" class="layout-container__base layout-container__base--full-width ">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    
    
</div>
</div>
		</div>
	
	

</div>

    
</div>
</div>
		</div>
	
	

</div>
<div class="layoutContainer parbase aem-GridColumn aem-GridColumn--default--12">

	
	  
	
		<div class="layout-container__base layout-container__base--full-width ">
			<div class="layout-container__content">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 aem-Grid--largeDesktop--12 ">
    
    <div class="spacer parbase aem-GridColumn aem-GridColumn--default--12">

  
  <div id="spacerComponent-1473347684" rc-version="0.0.164" class="spacer__base spacer__base--vertical-medium">
    
  </div>

</div>
<div class="text parbase aem-GridColumn--offset--largeDesktop--0 aem-GridColumn aem-GridColumn--largeDesktop--none aem-GridColumn--default--12 aem-GridColumn--largeDesktop--12">

<div id="text-1858494404" rc-version="0.0.164" class="text__base">
  <h1 style="text-align: left;"><span class="text-navy"><span class="subHeading"><span style="text-align: center;font-weight: normal;">THE MOST EXCITING CRUISE DESTINATIONS<br />
</span></span> <span class="heading1"><span class="heading1" style="font-weight: normal;line-height: 100.0%;">AND AWARD-WINNING SHIPS </span></span></span></h1>
<p style="text-align: left;"><span class="text-darker-gray"><span class="p">Unlock some of the most incredible <a href="/cruise-destinations">travel destinations</a>. Get on island time and unwind on some of the best beaches in the world, venture deep into the rainforests, and snorkel the most vibrant reefs on a Caribbean or <a href="/bahamas-cruises">Bahamas cruise getaway</a> with the whole family.</span></span></p>
<p style="text-align: left;"><span class="text-darker-gray"><span class="p">Earn your wilderness badge as you cruise between the Alaska glaciers, pan for gold in prospecting towns, and trek across the rugged tundra on an <a href="/alaska-cruises">Alaska vacation</a>. And savor a burst of flavors throughout culture-rich ports in the <a href="/mediterranean-cruises">Mediterranean</a>, the British Isles, Scandinavia and beyond on an unforgettable <a href="/european-cruises">cruise through Europe</a>. No matter where in the world you choose to wander, cruises can take you deep into top-rated cruise ports and off-the-beaten-path gems, so you can experience each one like a local.</span></span></p>
<p style="text-align: left;"><span class="text-darker-gray"><span class="p">It all starts with the <a href="/cruise-ships">boldest cruise ships</a> at sea — and ours have won awards for everything from world class dining and spectacular entertainment, to record-setting onboard thrills and groundbreaking innovation. Whether you’re traveling solo or vacationing with the whole extended family, you’ll have all kinds of ahh-inducing <a href="/cruise-rooms">cruise rooms</a> to choose from, like affordable connecting staterooms that are perfect for groups, romantic rooms for couples craving rejuvenation and relaxation, and even a thrill-filled Ultimate Family Suite with a private game room and in-suite slide.</span></span></p>
<p style="text-align: left;"> </p>

</div></div>
<div class="spacer parbase aem-GridColumn aem-GridColumn--default--12">

  
  <div id="spacerComponent-1629592857" rc-version="0.0.164" class="spacer__base spacer__base--vertical-medium">
    
  </div>

</div>

    
</div>
</div>
		</div>
	
	

</div>

    
</div>
</div>
		</div>
	
	


        

    
    
    
        <rc-notification-banner settings="{&#34;active&#34;:true,&#34;path&#34;:[&#34;/*&#34;],&#34;markets&#34;:[],&#34;templates&#34;:[{&#34;type&#34;:&#34;COMPONENT&#34;,&#34;element&#34;:&#34;SIGN_UP_FORM&#34;,&#34;events&#34;:{&#34;init&#34;:{&#34;action&#34;:&#34;LOAD&#34;,&#34;delay&#34;:10},&#34;close&#34;:{&#34;action&#34;:&#34;CLOSE&#34;,&#34;delay&#34;:259200}},&#34;view&#34;:&#34;default&#34;}],&#34;default&#34;:{&#34;events&#34;:{&#34;init&#34;:{&#34;action&#34;:&#34;LOAD&#34;,&#34;delay&#34;:10},&#34;close&#34;:{&#34;action&#34;:&#34;CLOSE&#34;,&#34;delay&#34;:259200}},&#34;timeOff&#34;:10,&#34;emailEncryptionServiceUrl&#34;:&#34;https://www.royalcaribbean.com/utils/service/encrypt&#34;,&#34;emailDecryptionServiceUrl&#34;:&#34;https://www.royalcaribbean.com/utils/service/decrypt&#34;},&#34;countries&#34;:[&#34;BHS&#34;,&#34;ISR&#34;,&#34;CAN&#34;,&#34;PRI&#34;,&#34;USA&#34;],&#34;exclusions&#34;:[&#34;/booking&#34;,&#34;/reservation&#34;,&#34;/cruiseplanner&#34;,&#34;/account&#34;,&#34;/blog&#34;,&#34;/crown-anchor-society&#34;,&#34;/booked&#34;,&#34;/vaccination&#34;,&#34;/cruises/&#34;,&#34;/itinerary/&#34;,&#34;/cruise-search/&#34;]}" segments="{&#34;pseudoanonymousSegments&#34;:[&#34;123456&#34;,&#34;24308282&#34;],&#34;casinoSegments&#34;:[&#34;11235813&#34;]}" default-delay="10" time-off="10" data-attribute-salesforceURL="https://www.royalcaribbean.com/salesforce-campaigns-email-submit" api-key="8e25c069-4097-48a3-a22f-c691d2fa27eb" app-name="GDP-APP" url-authenticate="https://www.royalcaribbean.com/utils/service/authenticate" :globalization="globalization" email-decryption-url="https://www.royalcaribbean.com/utils/service/decrypt" email-encryption-url="https://www.royalcaribbean.com/utils/service/encrypt" :dictionary="{
                notificationBannerTitle: 'Sign up and receive $50 OFF your next sailing!',
                notificationBannerTitleSuccess: 'Thank you for signing up!',
                notificationBannerEnterEmail: 'Enter your email address',
                signupErrorEmail: 'Invalid email address',
                signupEmptyEmail: 'Missing email address',
                notificationBannerDescription: 'Plus, get access to exclusive discounts, promotions and special rates.',
                notificationBannerDescriptionSuccess: 'Your promo code has been sent to your inbox.',
                signupCTA: 'Sign up',
                notificationBannerPolicy: 'You can unsubscribe at any time. For more details about how we use your information, view our |Privacy Policy|. Email bonus applies to customers in the US, Puerto Rico, Canada and Israel only.',
                signupPlaceholder: 'email@email.com',
                partialIdentifiedPlaceholder: 'email@email.com',
                signupServiceError: 'Unable to process. Please try again later.',
                linkPrivacyPolicy: '/resources/privacy-policy',
                defaultImage: '/content/dam/royal/salesforce-project/images/water_slide.jpeg',
                termsAndConditions: 'For more details see: |Terms &amp; Conditions|',
                linkAdditionalOffers: 'You have additional offers available.',
                promotionExpires: 'Hurry, this offer expires today!',
                promotionDescription: 'You have an exclusive offer waiting for you:',
                partialIdentifiedImage: '/content/dam/royal/content/ship/grandeur-of-the-seas/overview/tile-pic/St-Lucia-Dry-Waterfall-Girl-overview-tile1.JPG',
                titlePartialIdentified: 'Your exclusive discounts are waiting.',
                descriptionPartialIdentified: 'Log in to get the best available rate and unlock your savings.',
                enterEmailPartialIdentified: 'Use your email or Crown &amp; Anchor number',
                partialIdentifiedCTA: 'Sign in',
                partialIdentifiedPolicy: 'For more details about how we use your information, view our |Privacy Policy|.',
                partialIdentifiedPolicyLink: '/resources/privacy-policy',
                errorEmailPartialIdentified: 'Invalid email address or Crown &amp; Anchor number',
                emptyEmailPartialIdentified: 'Missing email address or Crown &amp; Anchor number'
            }"/>
    


    </div>


        
	
	<!-- TODO: CREATE AND CALL JAVA METHOD IN PAGE HELPER CLASS, TO CHECK IF CURRENT USER HAS PERMISSIONS TO EDIT HEADER -->
	
	
	
	
		
		
	
	
	<div class="footer__wrapper">
		<div>

<footer id="rciFooter">
    <div class="footer__rcl">
        <div class="footer__rcl__row__wrapper">
            <div class="footer__rcl__dislcaimer">
                *Please see all applicable Terms &amp; Conditions for Promotions <a href="https://www.royalcaribbean.com/terms-and-conditions/promotions">here</a>.
            </div>
        <div class="footer__rcl__row footer__rcl__row__accolades">
            <div id="rciFooterAccolade-1" class="footer__rcl__row__accolades__item">
                <img title="2022 Best Cruise Overall Award Accolade Royal Caribbean" alt="2022 Best Cruise Overall Award Accolade Royal Caribbean" src="/content/dam/royal/resources/icons/accolades/best-overall-/2022-best-cruise-line-overall-travels-weekly-award-white.svg"/>
            </div>
        
            <div id="rciFooterAccolade-2" class="footer__rcl__row__accolades__item">
                <img title="2022 Best Cruise Line Best of the Caribbean Award Royal Caribbean" alt="2022 Best Cruise Line Best of the Caribbean Award Royal Caribbean" src="/content/dam/royal/resources/icons/accolades/caribbean-/2022-best-cruise-line-caribbean-travel-weekly-award-white.png"/>
            </div>
        
            <div id="rciFooterAccolade-3" class="footer__rcl__row__accolades__item">
                <img title="2022 Best Private Island Coco Cay Perfect Day Travel&#39;s  Weekly Award" alt="2022 Best Private Island Coco Cay Perfect Day Travel&#39;s  Weekly Award" src="/content/dam/royal/resources/icons/accolades/best-private-island/2022-best-private-island-perfect-day-at-coco-cay-travel-weekly-award-white.svg"/>
            </div>
        </div>
        <div class="footer__rcl__row footer__rcl__row__navigation">
            <div class="footer__rcl__row__navigation__cat">
                <input class="sb-accordion__input" type="checkbox" id="rciFooterGroupTitle-1-check"/>
                <label class="sb-accordion__title" for="rciFooterGroupTitle-1-check">
                        <div id="rciFooterGroupTitle-1" class="footer__rcl__row__navigation__cat__title">
                                Find a Cruise
                        </div>
                        <div class="sb-accordion__icon footer__rcl__row__navigation__cat__carrot">
                            <img alt="select" src="/content/dam/royal/resources/icons/caret-icon-white.svg"/>
                        </div>
                </label>
                <div class="sb-accordion__content footer__rcl__row__navigation__cat__links">
                    <ul>
                        
                            <li id="rciFooterGroup-1-1"><a alt="" aria-label="Last Minute Cruises" class="footer__rcl__row__navigation__cat__links__link" href="/cruise-deals/last-minute-cruises">Last Minute Cruises</a></li>
                        
                            <li id="rciFooterGroup-1-2"><a alt="" aria-label="Weekend Cruises" class="footer__rcl__row__navigation__cat__links__link" href="/plan-a-cruise/weekend-getaway-cruises">Weekend Cruises</a></li>
                        
                            <li id="rciFooterGroup-1-3"><a alt="" aria-label="Black Friday &amp; Cyber Monday" class="footer__rcl__row__navigation__cat__links__link" href="/cruise-deals/black-friday">Black Friday &amp; Cyber Monday</a></li>
                        
                            <li id="rciFooterGroup-1-4"><a alt="" aria-label="Holiday Cruises" class="footer__rcl__row__navigation__cat__links__link" href="/cruise-deals/holiday-cruises">Holiday Cruises</a></li>
                        
                            <li id="rciFooterGroup-1-5"><a alt="" aria-label="2023-2024 Cruises" class="footer__rcl__row__navigation__cat__links__link" href="/cruise-ships/cruise-schedule">2023-2024 Cruises</a></li>
                        
                            <li id="rciFooterGroup-1-6"><a alt="" aria-label="Largest Cruise Ships" class="footer__rcl__row__navigation__cat__links__link" href="/cruise-ships/largest-ships-oasis-class">Largest Cruise Ships</a></li>
                        
                            <li id="rciFooterGroup-1-7"><a alt="" aria-label="Family Vacations" class="footer__rcl__row__navigation__cat__links__link" href="/plan-a-cruise/family-cruises">Family Vacations</a></li>
                        
                            <li id="rciFooterGroup-1-8"><a alt="" aria-label="Royal Weddings" class="footer__rcl__row__navigation__cat__links__link" href="/plan-a-cruise/cruise-weddings">Royal Weddings</a></li>
                        
                            <li id="rciFooterGroup-1-9"><a alt="" aria-label="Themed Cruises" class="footer__rcl__row__navigation__cat__links__link" href="/plan-a-cruise/themed-cruises">Themed Cruises</a></li>
                        
                            <li id="rciFooterGroup-1-10"><a alt="" aria-label="Group Travel​" class="footer__rcl__row__navigation__cat__links__link" href="/plan-a-cruise/group-travel">Group Travel​</a></li>
                        
                            <li id="rciFooterGroup-1-11"><a alt="" aria-label="Accessibility Onboard​" class="footer__rcl__row__navigation__cat__links__link" href="/experience/accessible-cruising">Accessibility Onboard​</a></li>
                        
                            <li id="rciFooterGroup-1-12"><a alt="" aria-label="Cruise Tips and Tricks" class="footer__rcl__row__navigation__cat__links__link" href="/guides">Cruise Tips and Tricks</a></li>
                        
                            <li id="rciFooterGroup-1-13"><a alt="" aria-label="View Brochures" class="footer__rcl__row__navigation__cat__links__link" href="/plan-a-cruise/brochures">View Brochures</a></li>
                        
                            <li id="rciFooterGroup-1-14"><a alt="" aria-label="Meetings, Incentives &amp; Charters​" class="footer__rcl__row__navigation__cat__links__link" href="http://www.royalcaribbeanincentives.com/">Meetings, Incentives &amp; Charters​</a></li>
                        
                            <li id="rciFooterGroup-1-15"><a alt="" aria-label="Certified Vacation Planner" class="footer__rcl__row__navigation__cat__links__link" href="/plan-a-cruise/certified-vacation-planner">Certified Vacation Planner</a></li>
                        
                            <li id="rciFooterGroup-1-16"><a alt="" aria-label="Locate a Travel Advisor" class="footer__rcl__row__navigation__cat__links__link" href="https://www.royalcaribbean.com/customersupport/travelagentLocate.do">Locate a Travel Advisor</a></li>
                        
                            <li id="rciFooterGroup-1-17"><a alt="" aria-label="Royal Caribbean Blog" class="footer__rcl__row__navigation__cat__links__link" href="https://www.royalcaribbean.com/blog">Royal Caribbean Blog</a></li>
                        
                    </ul>
                </div>
            </div>
        
            <div class="footer__rcl__row__navigation__cat">
                <input class="sb-accordion__input" type="checkbox" id="rciFooterGroupTitle-2-check"/>
                <label class="sb-accordion__title" for="rciFooterGroupTitle-2-check">
                        <div id="rciFooterGroupTitle-2" class="footer__rcl__row__navigation__cat__title">
                                Destinations
                        </div>
                        <div class="sb-accordion__icon footer__rcl__row__navigation__cat__carrot">
                            <img alt="select" src="/content/dam/royal/resources/icons/caret-icon-white.svg"/>
                        </div>
                </label>
                <div class="sb-accordion__content footer__rcl__row__navigation__cat__links">
                    <ul>
                        
                            <li id="rciFooterGroup-2-1"><a alt="" aria-label="Perfect Day at CocoCay​" class="footer__rcl__row__navigation__cat__links__link" href="/cococay-cruises">Perfect Day at CocoCay​</a></li>
                        
                            <li id="rciFooterGroup-2-2"><a alt="" aria-label="Caribbean Cruises" class="footer__rcl__row__navigation__cat__links__link" href="/caribbean-cruises">Caribbean Cruises</a></li>
                        
                            <li id="rciFooterGroup-2-3"><a alt="" aria-label="Bahamas Cruises" class="footer__rcl__row__navigation__cat__links__link" href="/bahamas-cruises">Bahamas Cruises</a></li>
                        
                            <li id="rciFooterGroup-2-4"><a alt="" aria-label="Alaska Cruises" class="footer__rcl__row__navigation__cat__links__link" href="/alaska-cruises">Alaska Cruises</a></li>
                        
                            <li id="rciFooterGroup-2-5"><a alt="" aria-label="Mediterranean Cruises" class="footer__rcl__row__navigation__cat__links__link" href="/mediterranean-cruises">Mediterranean Cruises</a></li>
                        
                            <li id="rciFooterGroup-2-6"><a alt="" aria-label="European Cruises" class="footer__rcl__row__navigation__cat__links__link" href="/european-cruises">European Cruises</a></li>
                        
                            <li id="rciFooterGroup-2-7"><a alt="" aria-label="Hawaii Cruises" class="footer__rcl__row__navigation__cat__links__link" href="/hawaii-cruises">Hawaii Cruises</a></li>
                        
                            <li id="rciFooterGroup-2-8"><a alt="" aria-label="Greece &amp; Greek Isles" class="footer__rcl__row__navigation__cat__links__link" href="/greece-greek-isles-cruises">Greece &amp; Greek Isles</a></li>
                        
                            <li id="rciFooterGroup-2-9"><a alt="" aria-label="Mexico Cruises" class="footer__rcl__row__navigation__cat__links__link" href="/mexico-cruises">Mexico Cruises</a></li>
                        
                            <li id="rciFooterGroup-2-10"><a alt="" aria-label="Bermuda Cruises" class="footer__rcl__row__navigation__cat__links__link" href="/bermuda-cruises">Bermuda Cruises</a></li>
                        
                            <li id="rciFooterGroup-2-11"><a alt="" aria-label="New England Cruises" class="footer__rcl__row__navigation__cat__links__link" href="/new-england-cruises">New England Cruises</a></li>
                        
                            <li id="rciFooterGroup-2-12"><a alt="" aria-label="Italy Cruises​" class="footer__rcl__row__navigation__cat__links__link" href="/italy-cruises">Italy Cruises​</a></li>
                        
                            <li id="rciFooterGroup-2-13"><a alt="" aria-label="Baltic Cruises​" class="footer__rcl__row__navigation__cat__links__link" href="/baltic-cruises">Baltic Cruises​</a></li>
                        
                            <li id="rciFooterGroup-2-14"><a alt="" aria-label="Canada Cruises" class="footer__rcl__row__navigation__cat__links__link" href="/canada-cruises">Canada Cruises</a></li>
                        
                            <li id="rciFooterGroup-2-15"><a alt="" aria-label="Asia Cruises" class="footer__rcl__row__navigation__cat__links__link" href="/asia-cruises">Asia Cruises</a></li>
                        
                            <li id="rciFooterGroup-2-16"><a alt="" aria-label="Florida Cruises" class="footer__rcl__row__navigation__cat__links__link" href="/florida-cruises">Florida Cruises</a></li>
                        
                            <li id="rciFooterGroup-2-17"><a alt="" aria-label="Texas Cruises" class="footer__rcl__row__navigation__cat__links__link" href="/texas-cruises">Texas Cruises</a></li>
                        
                    </ul>
                </div>
            </div>
        
            <div class="footer__rcl__row__navigation__cat">
                <input class="sb-accordion__input" type="checkbox" id="rciFooterGroupTitle-3-check"/>
                <label class="sb-accordion__title" for="rciFooterGroupTitle-3-check">
                        <div id="rciFooterGroupTitle-3" class="footer__rcl__row__navigation__cat__title">
                                Popular Ports
                        </div>
                        <div class="sb-accordion__icon footer__rcl__row__navigation__cat__carrot">
                            <img alt="select" src="/content/dam/royal/resources/icons/caret-icon-white.svg"/>
                        </div>
                </label>
                <div class="sb-accordion__content footer__rcl__row__navigation__cat__links">
                    <ul>
                        
                            <li id="rciFooterGroup-3-1"><a alt="" aria-label="Miami, Florida" class="footer__rcl__row__navigation__cat__links__link" href="/cruise-from/miami-florida">Miami, Florida</a></li>
                        
                            <li id="rciFooterGroup-3-2"><a alt="" aria-label="Galveston, Texas" class="footer__rcl__row__navigation__cat__links__link" href="/cruise-from/galveston-texas">Galveston, Texas</a></li>
                        
                            <li id="rciFooterGroup-3-3"><a alt="" aria-label="New York, New York" class="footer__rcl__row__navigation__cat__links__link" href="/cruise-from/new-york-new-jersey">New York, New York</a></li>
                        
                            <li id="rciFooterGroup-3-4"><a alt="" aria-label="Baltimore, Maryland" class="footer__rcl__row__navigation__cat__links__link" href="/cruise-from/baltimore-maryland">Baltimore, Maryland</a></li>
                        
                            <li id="rciFooterGroup-3-5"><a alt="" aria-label="Orlando, Florida" class="footer__rcl__row__navigation__cat__links__link" href="/cruise-from/orlando-florida">Orlando, Florida</a></li>
                        
                            <li id="rciFooterGroup-3-6"><a alt="" aria-label="Tampa, Florida" class="footer__rcl__row__navigation__cat__links__link" href="/cruise-from/tampa-florida">Tampa, Florida</a></li>
                        
                            <li id="rciFooterGroup-3-7"><a alt="" aria-label="Fort Lauderdale, Florida" class="footer__rcl__row__navigation__cat__links__link" href="/cruise-from/fort-lauderdale-florida">Fort Lauderdale, Florida</a></li>
                        
                            <li id="rciFooterGroup-3-8"><a alt="" aria-label="New Orleans, Louisiana" class="footer__rcl__row__navigation__cat__links__link" href="/cruise-from/new-orleans-louisiana">New Orleans, Louisiana</a></li>
                        
                            <li id="rciFooterGroup-3-9"><a alt="" aria-label="San Juan, Puerto Rico" class="footer__rcl__row__navigation__cat__links__link" href="/cruise-from/san-juan-puerto-rico">San Juan, Puerto Rico</a></li>
                        
                            <li id="rciFooterGroup-3-10"><a alt="" aria-label="Boston, Massachusetts" class="footer__rcl__row__navigation__cat__links__link" href="/cruise-from/boston-massachusetts">Boston, Massachusetts</a></li>
                        
                            <li id="rciFooterGroup-3-11"><a alt="" aria-label="Los Angeles, California​" class="footer__rcl__row__navigation__cat__links__link" href="/cruise-from/los-angeles-california">Los Angeles, California​</a></li>
                        
                            <li id="rciFooterGroup-3-12"><a alt="" aria-label="Barcelona, Spain​" class="footer__rcl__row__navigation__cat__links__link" href="/cruise-from/barcelona-spain">Barcelona, Spain​</a></li>
                        
                            <li id="rciFooterGroup-3-13"><a alt="" aria-label="Singapore, Singapore​" class="footer__rcl__row__navigation__cat__links__link" href="/cruise-from/singapore">Singapore, Singapore​</a></li>
                        
                            <li id="rciFooterGroup-3-14"><a alt="" aria-label="Seattle, Washington" class="footer__rcl__row__navigation__cat__links__link" href="/cruise-from/seattle-washington">Seattle, Washington</a></li>
                        
                            <li id="rciFooterGroup-3-15"><a alt="" aria-label="Rome, Italy" class="footer__rcl__row__navigation__cat__links__link" href="/cruise-from/rome-italy">Rome, Italy</a></li>
                        
                    </ul>
                </div>
            </div>
        
            <div class="footer__rcl__row__navigation__cat">
                <input class="sb-accordion__input" type="checkbox" id="rciFooterGroupTitle-4-check"/>
                <label class="sb-accordion__title" for="rciFooterGroupTitle-4-check">
                        <div id="rciFooterGroupTitle-4" class="footer__rcl__row__navigation__cat__title">
                                Plan A Cruise
                        </div>
                        <div class="sb-accordion__icon footer__rcl__row__navigation__cat__carrot">
                            <img alt="select" src="/content/dam/royal/resources/icons/caret-icon-white.svg"/>
                        </div>
                </label>
                <div class="sb-accordion__content footer__rcl__row__navigation__cat__links">
                    <ul>
                        
                            <li id="rciFooterGroup-4-1"><a alt="" aria-label="Update Guest Information" class="footer__rcl__row__navigation__cat__links__link" href="/reservation/lookup">Update Guest Information</a></li>
                        
                            <li id="rciFooterGroup-4-2"><a alt="" aria-label="Make a Payment" class="footer__rcl__row__navigation__cat__links__link" href="/reservation/lookup">Make a Payment</a></li>
                        
                            <li id="rciFooterGroup-4-3"><a alt="" aria-label="Redeem Cruise Credit" class="footer__rcl__row__navigation__cat__links__link" href="/programs/redeem-future-cruise-credit">Redeem Cruise Credit</a></li>
                        
                            <li id="rciFooterGroup-4-4"><a alt="" aria-label="Cruise Planner" class="footer__rcl__row__navigation__cat__links__link" href="/booked">Cruise Planner</a></li>
                        
                            <li id="rciFooterGroup-4-5"><a alt="" aria-label="Book a Flight" class="footer__rcl__row__navigation__cat__links__link" href="/flights/bookFlights">Book a Flight</a></li>
                        
                            <li id="rciFooterGroup-4-6"><a alt="" aria-label="Book a Hotel" class="footer__rcl__row__navigation__cat__links__link" href="/programs/book-a-hotel">Book a Hotel</a></li>
                        
                            <li id="rciFooterGroup-4-7"><a alt="" aria-label="Crown &amp; Anchor Society" class="footer__rcl__row__navigation__cat__links__link" href="/crown-anchor-society">Crown &amp; Anchor Society</a></li>
                        
                            <li id="rciFooterGroup-4-8"><a alt="" aria-label="Contact Us " class="footer__rcl__row__navigation__cat__links__link" href="/resources/contact-us">Contact Us </a></li>
                        
                            <li id="rciFooterGroup-4-9"><a alt="" aria-label="Transportation " class="footer__rcl__row__navigation__cat__links__link" href="/plan-a-cruise/transportation">Transportation </a></li>
                        
                            <li id="rciFooterGroup-4-10"><a alt="" aria-label="Travel Protection" class="footer__rcl__row__navigation__cat__links__link" href="/plan-a-cruise/transportation#travelProtection">Travel Protection</a></li>
                        
                            <li id="rciFooterGroup-4-11"><a alt="" aria-label="Royal Gifts" class="footer__rcl__row__navigation__cat__links__link" href="https://www.royalcaribbean.com/royalgifts/">Royal Gifts</a></li>
                        
                            <li id="rciFooterGroup-4-12"><a alt="" aria-label="CruisingPower.com" class="footer__rcl__row__navigation__cat__links__link" href="https://secure.cruisingpower.com/">CruisingPower.com</a></li>
                        
                            <li id="rciFooterGroup-4-13"><a alt="" aria-label="Royal Caribbean App" class="footer__rcl__row__navigation__cat__links__link" href="/booked/royal-app">Royal Caribbean App</a></li>
                        
                            <li id="rciFooterGroup-4-14"><a alt="" aria-label="Cookie Information" class="footer__rcl__row__navigation__cat__links__link" href="/resources/cookie-information">Cookie Information</a></li>
                        
                            <li id="rciFooterGroup-4-15"><a alt="" aria-label="Royal Caribbean Visa Signature® Card " class="footer__rcl__row__navigation__cat__links__link" href="/plan-a-cruise/visa-signature-card">Royal Caribbean Visa Signature® Card </a></li>
                        
                            <li id="rciFooterGroup-4-16"><a alt="" aria-label="Do Not Sell My Personal Information" class="footer__rcl__row__navigation__cat__links__link" href="/resources/personal-information">Do Not Sell My Personal Information</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__rcl__row__social">
            <div class="footer__rcl__row__social__holder">
                <a id="rciFooterSocial-1" alt="" aria-label="Facebook" href="https://www.facebook.com/royalcaribbean">
                    <figure>
                        <figcaption>
                            Facebook
                        </figcaption>
                        <img title="Facebook" alt="Facebook" src="/content/dam/royal/resources/icons/social/facebook.svg"/>
                    </figure>
                </a>
            
                <a id="rciFooterSocial-2" alt="" aria-label="Twiter" href="http://www.twitter.com/royalcaribbean">
                    <figure>
                        <figcaption>
                            Twiter
                        </figcaption>
                        <img title="Twiter" alt="Twiter" src="/content/dam/royal/resources/icons/social/twiter.svg"/>
                    </figure>
                </a>
            
                <a id="rciFooterSocial-3" alt="" aria-label="Youtube" href="http://www.youtube.com/royalcaribbeanintl">
                    <figure>
                        <figcaption>
                            Youtube
                        </figcaption>
                        <img title="Youtube" alt="Youtube" src="/content/dam/royal/resources/icons/social/youtube.svg"/>
                    </figure>
                </a>
            
                <a id="rciFooterSocial-4" alt="" aria-label="Instagram" href="http://www.instagram.com/RoyalCaribbean">
                    <figure>
                        <figcaption>
                            Instagram
                        </figcaption>
                        <img title="Instagram" alt="Instagram" src="/content/dam/royal/resources/icons/social/instagram.svg"/>
                    </figure>
                </a>
            
                <a id="rciFooterSocial-5" alt="" href="https://www.tiktok.com/@royalcaribbean?lang=en">
                    <figure>
                        <figcaption>
                            
                        </figcaption>
                        <img src="/content/dam/royal/resources/icons/social/tiktok.svg"/>
                    </figure>
                </a>
            
                <a id="rciFooterSocial-6" alt="" aria-label="Pinterest" href="http://www.pinterest.com/RoyalCaribbean">
                    <figure>
                        <figcaption>
                            Pinterest
                        </figcaption>
                        <img title="Pinterest" alt="Pinterest" src="/content/dam/royal/resources/icons/social/pinterest.svg"/>
                    </figure>
                </a>
            </div>
        </div>
        <div id="rciFooterCopyright" class="footer__rcl__row footer__rcl__row__cr">
            &copy; 2023 Royal Caribbean International</div>
        </div>
        <div class="footer__rcl__row footer__rcl__row__gennav">
            <ul>
                
                    <li><a id="rciFooterMinimizedMenu-1" alt="" aria-label="Cruise Contract" href="https://www.royalcaribbean.com/content/dam/royal/resources/pdf/cruise-ticket-contract.pdf">Cruise Contract</a></li>
                
                    <li><a id="rciFooterMinimizedMenu-2" alt="" aria-label="About Us" href="/about-us">About Us</a></li>
                
                    <li><a id="rciFooterMinimizedMenu-3" alt="" aria-label="Privacy" href="/resources/privacy-policy">Privacy</a></li>
                
                    <li><a id="rciFooterMinimizedMenu-4" alt="" aria-label="Terms of Use" href="/terms-and-conditions/digital-terms-of-use-and-end-user-license-agreement">Terms of Use</a></li>
                
                    <li><a id="rciFooterMinimizedMenu-5" alt="" aria-label="Careers" href="http://www.rclcareers.com/">Careers</a></li>
                
                    <li><a id="rciFooterMinimizedMenu-6" alt="" aria-label="Modern Slavery Statement" href="https://www.rclinvestor.com/leadership-governance/corp-gov/modern-slavery-statement/">Modern Slavery Statement</a></li>
                
                    <li><a id="rciFooterMinimizedMenu-7" alt="" aria-label="Safety &amp; Security" href="/resources/safety-and-security">Safety &amp; Security</a></li>
                
                    <li><a id="rciFooterMinimizedMenu-8" alt="" aria-label="Bill of Rights" href="https://www.royalcaribbean.com/content/dam/royal/resources/pdf/passenger-bill-of-rights.pdf">Bill of Rights</a></li>
                
                    <li><a id="rciFooterMinimizedMenu-9" alt="" aria-label="Travel Updates" href="/cruise-ships/itinerary-updates">Travel Updates</a></li>
                
                    <li><a id="rciFooterMinimizedMenu-10" alt="" aria-label="Environment" href="https://sustainability.rclcorporate.com/">Environment</a></li>
                
                    <li><a id="rciFooterMinimizedMenu-11" alt="" aria-label="Press Room" href="http://www.royalcaribbeanpresscenter.com/">Press Room</a></li>
                
            </ul>
        </div>
        <div class="footer__brandlogos">
            <div class="footer__top-logo">
                <a href="https://www.royalcaribbeangroup.com/?icid=hprylc_wrnssn_hpr_hm_other_3668">
                    <figure>
                        <figcaption>
                            
                        </figcaption>
                        <img class="footer__logo-img footer__logo-img--top" src="/content/dam/royal/resources/icons/rcg-logo-vertical.svg"/>
                    </figure>
                </a>
            
                
            </div>
            <div class="footer__logos">
                <a href="/?icid=hprylc_wrnssn_hpr_hm_other_3662">
                    <figure>
                        <figcaption>
                            
                        </figcaption>
                        <img class="footer__logo-img" src="/content/dam/royal/resources/icons/royal-caribbean-logo-white.svg"/>
                    </figure>
                </a>
            
                <a href="https://www.celebritycruises.com/?icid=hprylc_wrnssn_hpr_hm_other_3663">
                    <figure>
                        <figcaption>
                            
                        </figcaption>
                        <img class="footer__logo-img" src="/content/dam/royal/resources/icons/celebrity-cruises-logo.svg"/>
                    </figure>
                </a>
            
                <a href="https://www.silversea.com/?icid=hpclbr_wrnssn_hpc_hm_other_3664">
                    <figure>
                        <figcaption>
                            
                        </figcaption>
                        <img class="footer__logo-img" src="/content/dam/royal/resources/icons/silversea-logo-white.svg"/>
                    </figure>
                </a>
            </div>
        </div>
    </div>
</footer>
</div>
	</div>

    </div>
    
    

<script>
	var enableToggleCruiseSearchService = 'true';    
	var showUserFavoritesFeature = 'true';    
	var showUserWatchlistFeature = 'true';    
</script>	  

<script>   
    sessionStorage.setItem('apolloAuthKey', 'cmNjbHVzZXI6XSJGYDledlBoeHpSS10uOw==');
    sessionStorage.setItem('apolloURI', 'https:\/\/www.royalcaribbean.com\/graph');
</script>
    
<div data-timestamp="Wed Feb 22 2023 14:09:38 GMT-0000 (UTC)"></div>


    <script src="/etc.clientlibs/clientlibs/granite/jquery.min.js?_=3.54.0"></script>
<script src="/etc.clientlibs/clientlibs/granite/utils.min.js?_=3.54.0"></script>
<script src="/etc.clientlibs/clientlibs/granite/jquery/granite.min.js?_=3.54.0"></script>
<script src="/etc.clientlibs/foundation/clientlibs/jquery.min.js?_=3.54.0"></script>
<script src="/etc.clientlibs/foundation/clientlibs/shared.min.js?_=3.54.0"></script>
<script src="/etc.clientlibs/cq/personalization/clientlib/underscore.min.js?_=3.54.0"></script>
<script src="/etc.clientlibs/cq/personalization/clientlib/personalization/kernel.min.js?_=3.54.0"></script>
<script type="text/javascript">
    $CQ(function() {
        CQ_Analytics.SegmentMgr.loadSegments("\/etc\/segmentation");

        
    });
</script>



    
    
<script type="text/javascript" src="/etc.clientlibs/rccl-core/clientlibs/dependencies.min.js?_=0.0.153"></script>


    
    
<script type="text/javascript" src="/etc/designs/royal/globalizationlib.min.js?_=3.54.0"></script>


    
    
<script type="text/javascript" src="/etc.clientlibs/rci-structure/clientlibs/base.min.js?_=3.54.0"></script>


    
    
<script type="text/javascript" src="/etc.clientlibs/rccl-core/clientlibs/main.min.js?_=0.0.153"></script>





    
    
<script type="text/javascript" src="/etc.clientlibs/rccl-commons/clientlibs/components.min.js?_=0.0.164"></script>


    
    
<script type="text/javascript" src="/etc.clientlibs/rccl-hero-components/clientlibs/components.min.js?_=0.0.146"></script>


    
    
<script type="text/javascript" src="/etc.clientlibs/rccl-cruise-search/clientlibs/components.min.js?_=0.0.18"></script>


    
    
<script type="text/javascript" src="/etc.clientlibs/rccl-carousels/clientlibs/components.min.js?_=0.0.152"></script>


    
    
<script type="text/javascript" src="/etc.clientlibs/rccl-forms/clientlibs/components.min.js?_=0.0.43"></script>





    
    
<script type="text/javascript" src="/etc.clientlibs/rccl-core/clientlibs/instance.min.js?_=0.0.153"></script>





    <script src="/content/dam/royal/javascript/temporary/reTargetGradient.js"></script>
<script src="/content/dam/royal/css/temporary/saleOpenIn.js"></script>








<script>
	var glitteryBits = [];
	for (var i = 0; i < 32; i++) {
		glitteryBits.push(0);
	}

	var glitteryVar = 0;
	for (var i = 0; i < 32; i++) {
		glitteryVar += glitteryBits[i] * Math.pow(2, i);
	}
	$glit.cookie('gp', glitteryVar, {"path": "/"});
</script>

<div id="personaControllerToggle" class="personaControllerToggle">&#x2297;</div>
<div id="personaController" class="personaController">
    <h2>My Personas</h2>
    <form id="personaForm" method="GET">
        <ul>
        	
        </ul>
    </form>
    <h3 style="text-align:right">code: <span id="codeDisplay">&#8709;</span></h3>
</div>

<script>
$glit(document).ready(function() {
	$glit(".gp0").show();
	paintPage();
	syncWidget();
	$glit("#personaForm").change(function(e) {
		var finalSum = computeCheckedFormBits();
		$glit("#codeDisplay").text(finalSum);
		window.location="#"+ ANCHOR_PREFIX + finalSum;
		e.preventDefault();
	});
	$glit(window).on("hashchange", function(e) {
		var anchorValue = getAnchor(ANCHOR_PREFIX);
		if(anchorValue != null) {
			if (anchorValue == ANCHOR_PREFIX) {
				$glit.cookie(ANCHOR_PREFIX, null, { path: '/' });
				$glit("#personaControllerToggle").toggle();
			} else {
				var finalSum = anchorValue.substring(ANCHOR_PREFIX.length);
				$glit("." + ANCHOR_PREFIX).hide();
				$glit.cookie(ANCHOR_PREFIX, finalSum, { expires: 365, path: '/'});
			}
			paintPage();
			syncWidget();
		}
	});
	$glit("#personaControllerToggle").click(function(e) {
		$glit("#personaController").toggle("slow");
	})
	var anchorValue = getAnchor(ANCHOR_PREFIX);
	if(anchorValue != null) {
		if (getAnchor(ANCHOR_PREFIX) == ANCHOR_PREFIX) {
			$glit("#personaControllerToggle").show();
		}
	}
});
</script>






<!-- TEALIUM -->

  <!-- Tealium Universal Data Object -->
  <script type="text/javascript">
    setTimeout(function() {
      // Set default active campaign
      var activeCampaigns = {
          ActivityExp: ['Default'],
          Retargeting: false,
          LastSearch: false
        },
        rcclCookie = JSON.parse(
          $glit.cookie().rcclGuestCookie ? $glit.cookie().rcclGuestCookie : '{}'
        );

      if (rcclCookie) {
        if (
          rcclCookie.itineraryUrl &&
          '' !== rcclCookie.itineraryUrl &&
          !rcclCookie.dismissedRetaget
        ) {
          activeCampaigns.Retargeting = true;
        }

        if (rcclCookie.searchUrl && '' !== rcclCookie.searchUrl) {
          var searchURL = rcclCookie.searchUrl,
            searchRegEx = /^.*\/cruises\/?\?.+$/;

          if (searchRegEx.test(searchURL)) {
            activeCampaigns.LastSearch = true;
          }
        }
      }

      if (
        CQ_Analytics &&
        CQ_Analytics.CampaignMgr &&
        CQ_Analytics.CampaignMgr.data
      ) {
        var activityName = CQ_Analytics.CampaignMgr.data['campaign/name'],
          experienceName =
            CQ_Analytics.CampaignMgr.data['campaign/recipe/name'];

        if (
          activityName &&
          '' !== activityName &&
          (experienceName && '' !== experienceName)
        ) {
          activeCampaigns.ActivityExp = [activityName + ':' + experienceName];
        }
      }
      // Set utag view callback log
      function _pageTracked(data) {
        console.log(
          '[Analytics] page: ' +
            data.pageName +
            (data.activeCampaigns
              ? ', experience: ' +
                data.activeCampaigns.ActivityExp[0] +
                ', retargeting: ' +
                (data.activeCampaigns.Retargeting ? 'active' : 'inactive') +
                ', last search: ' +
                (data.activeCampaigns.LastSearch ? 'active' : 'inactive')
              : '')
        );
      }

      if (typeof utag !== 'undefined' && window.utag.view) {
        utag_data = window.utag_data || {};
        // Update Tealium Universal Data Object
        utag_data = Object.assign({}, utag_data, {
          pageName: 'home',
          siteSection: 'home',
          siteType: 'desktop',
          country: 'USA',
          language: 'en',
          loginStatus: 'anonymous',
          scReferrer: document.referrer,
          activeCampaigns: activeCampaigns,
          promoDashboard: window.rcclPromotionsSummary,
        });
        // Dispatch utag view
        window.utag.view(utag_data, _pageTracked(utag_data));
      }
    }, 1500);

	// Disable utag default view
	window.utag_cfg_ovrd = { noview: true };
  </script>



  

  
    <!-- GLOBALIZATION - TEALIUM ASYNC -->
    <!-- Loading script asynchronously -->
<script type="text/javascript">
if (0 <= window.location.href.indexOf('/booking/') || 0 <= window.location.href.indexOf('/cruises/itinerary/')) {
     var utag_data = {};
     window.utag_cfg_ovrd = {noview : true};
}
try {
    (function(a,b,c,d){
    a='https://tags.tiqcdn.com/utag/rccl/gdp/prod/utag.js';
    b=document;c='script';d=b.createElement(c);d.src=a;d.type='text/java'+c;d.async=true;
    a=b.getElementsByTagName(c)[0];a.parentNode.insertBefore(d,a);
    })();
} catch(e) {}
</script>

<!-- OneTrust Cookies Consent Notice start for www.royalcaribbean.com -->
<script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" data-document-language="true" type="text/javascript" charset="UTF-8" data-domain-script="9553c29f-dac9-4391-93be-d8cec16c6054"></script>
<script type="text/javascript">
var oneTrustBannerDisplay= 0;
function OptanonWrapper() {  
  if(oneTrustBannerDisplay=== 1){
      utag.link({'oneTrustBanner' : true}); 
      window.utag.view(utag_data);
   }
 oneTrustBannerDisplay= oneTrustBannerDisplay+1;
}
</script>
<style> #optanon-popup-bg{
    z-index:9999 !important
}</style>
<!-- OneTrust Cookies Consent Notice end for www.royalcaribbean.com -->
  


<script type="text/javascript">
    if (typeof(Storage) !== 'undefined') {
        sessionStorage.removeItem('tilesPlusPriceArray');
        sessionStorage.removeItem('heroPriceArray');
        sessionStorage.removeItem('carouselPriceArray');
    }
</script>

    <script type="text/javascript">
  function _getCookie() {
    if (document.cookie && '' !== document.cookie) {
      return document.cookie.split('; ').reduce(function (prev, current) {
        var [name, value] = current.split('=');
        prev[name] = value;
        return prev;
      }, {});
    }
    return null;
  }

  function _getCookieByKey(cookie, key) {
    if (cookie && cookie[key]) {
      return decodeURIComponent(cookie[key]);
    }
    return null;
  }

  function _includes(items, string) {
    for (var i = 0; i < items.length; i++) {
      if (string.includes(items[i])) {
        return true;
      }
    }
    return false;
  }

  function _isReferrerBookedPage() {
    return window.location.search.includes('r=booked');
  }

  function _isBooked(bookingStatus) {
    return bookingStatus &&
           ('Booked' === bookingStatus ||
            'CourtesyHold' === bookingStatus);
  }

  function _redirectWithReferrer(){
    var referreredUrl = document.referrer;
    var referreredQueries = referreredUrl.indexOf('?') > -1 ? referreredUrl.split('?').pop() : null;
    localStorage.setItem('scReferrer', referreredUrl);
    var connector = bookedPagePath.indexOf('?') >-1 ? '&' : '?';
    window.location.href = referreredQueries ? bookedPagePath + connector + referreredQueries : bookedPagePath;
  }

  function _setTimeout(value) {
    var defaultTimeout = 50;
    if (value) {
      return parseInt(value);
    } else {
      console.warn('Booked Page Redirect : Missing Booked page timeout. Set the timeout to default.');
      return defaultTimeout;
    }
  }

  try {
    getLaunchDarklyToggle('enable-booked-guest-redirect').then(function(data){
      if(data.value){
    var cookie = _getCookie();
    var rcclGuestCookie = JSON.parse(_getCookieByKey(cookie, 'rcclGuestCookie'));
    var isValidSailDate = true;
      if (rcclGuestCookie && _isBooked(rcclGuestCookie.bookingStatus) &&
          rcclGuestCookie.sailDate) {
        var currentDate = new Date();
        var sailDate = new Date(new Date(rcclGuestCookie.sailDate).getTime() + (currentDate.getTimezoneOffset() * 60 * 1000) - (72 * 60 * 60 * 1000));
        if (sailDate.getTime() <= currentDate.getTime()) {
          rcclGuestCookie.bookingStatus = null;
          cookie.rcclGuestCookie = encodeURIComponent(JSON.stringify(rcclGuestCookie));
          document.cookie = "rcclGuestCookie= ; expires=Fri, 31 Dec 1999 23:59:59 GMT;";
          document.cookie = "rcclGuestCookie=" + cookie.rcclGuestCookie + "; domain=" + window.location.hostname.replace(/www|secure/g,'');
          isValidSailDate = false;
        }
      }
      if (isValidSailDate && !_isReferrerBookedPage()) {
        if (bookedPagePath && bookedPageSegments) {
          if ('edit' !== _getCookieByKey(cookie, 'wcmmode')) {
            if (rcclGuestCookie && _isBooked(rcclGuestCookie.bookingStatus)) {
              _redirectWithReferrer();
            } else {
              var ammscCookie = _getCookieByKey(cookie, 'aam_sc');
              var timeout = _setTimeout(bookedPageTimeout);
              var interval = setInterval(function() {
                if (document.body !== null) {
                  if (ammscCookie) {
                    clearInterval(interval);
                    if (_includes(bookedPageSegments, ammscCookie)) {
                      _redirectWithReferrer();
                    }
                  } else {
                    timeout--;
                    ammscCookie = _getCookieByKey(_getCookie(), 'aam_sc');
                    if (0 === timeout) {
                      clearInterval(interval);
                    }
                  }
                }
              }, 1);
            }
          }
        } else {
          throw (new Error('Booked Page Redirect : Missing Booked page path and/or segments'));
        }
      }
    }
  })
} catch(e) {
    console.error(e);
  }
</script>
</body>
</html>

