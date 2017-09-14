<?php
//~ http://api.worldweatheronline.com/free/v1/marine.ashx?key=xxxxxxxxxxxxxxxxx&q=45,-2&format=xml

//Minimum request
//Can be longtitude/latitude. If long/lat are 2 elements, they will be assembled.
$loc_array= Array($instance['latitude'],$instance['longtitude']);		//data validated in foreach.
$api_key="f458a8a8fa233c57737a3b128e02f";		//should be embedded in your code, so no data validation necessary, otherwise if(strlen($api_key)!=24)

$loc_safe=Array();
foreach($loc_array as $loc){
	$loc_safe[]= urlencode($loc);
}
$loc_string=implode(",", $loc_safe);

//To add more conditions to the query, just lengthen the url string
$basicurl=sprintf('http://api.worldweatheronline.com/free/v2/weather.ashx?key=%s&q=%s&format=xml&key=6261e7b96a9d4df29f195216172006',
	$api_key, $loc_string);

$xml_response = file_get_contents($basicurl);
$xml = simplexml_load_string($xml_response);

$weathertypes = array (
  395 => __('Rain / thunder', 'kalundborghavn'),
  392 => __('Rain Rain / thunder', 'kalundborghavn'),
  389 => __('Rain / thunder', 'kalundborghavn'),
  386 => __('Rain Rain / thunder', 'kalundborghavn'),
  377 => __('hail', 'kalundborghavn'),
  374 => __('Light hailstorms', 'kalundborghavn'),
  371 => __('snow', 'kalundborghavn'),
  368 => __('Light snow showers', 'kalundborghavn'),
  365 => __('Moderate snow showers', 'kalundborghavn'),
  362 => __('Light sleet', 'kalundborghavn'),
  359 => __('Torrential rain', 'kalundborghavn'),
  356 => __('Heavy rain', 'kalundborghavn'),
  353 => __('Cloudy', 'kalundborghavn'),
  350 => __('hail', 'kalundborghavn'),
  338 => __('snow', 'kalundborghavn'),
  335 => __('Partially snow', 'kalundborghavn'),
  332 => __('Moderate snow', 'kalundborghavn'),
  329 => __('Partial snow', 'kalundborghavn'),
  326 => __('Light snow', 'kalundborghavn'),
  323 => __('Partial snow', 'kalundborghavn'),
  320 => __('Vastly sleet', 'kalundborghavn'),
  317 => __('Light sleet', 'kalundborghavn'),
  314 => __('Frost and rain', 'kalundborghavn'),
  311 => __('Let frot and rain', 'kalundborghavn'),
  308 => __('Torrential rain', 'kalundborghavn'),
  305 => __('rain at times,', 'kalundborghavn'),
  302 => __('Moderate rain', 'kalundborghavn'),
  299 => __('Modarat patchy rain', 'kalundborghavn'),
  296 => __('Light rain', 'kalundborghavn'),
  293 => __('Cold patchy rain', 'kalundborghavn'),
  284 => __('Cold Rain', 'kalundborghavn'),
  281 => __('Cold Rain', 'kalundborghavn'),
  266 => __('Light rain,', 'kalundborghavn'),
  263 => __('Partially rain', 'kalundborghavn'),
  260 => __('Frost / Fog', 'kalundborghavn'),
  248 => __('Foggy', 'kalundborghavn'),
  230 => __('snowstorm', 'kalundborghavn'),
  227 => __('Windy snow', 'kalundborghavn'),
  200 => __('thunder nearby,', 'kalundborghavn') ,
  185 => __('Patchy freezing drizzle nearby', 'kalundborghavn'),
  182 => __('Partial sleet nearby', 'kalundborghavn'),
  179 => __('Partial snow near', 'kalundborghavn'),
  176 => __('Partial rain nearby', 'kalundborghavn'),
  143 => __('Misty', 'kalundborghavn'),
  122 => __('Cloudy', 'kalundborghavn'),
  119 => __('Skyfuldt', 'kalundborghavn'),
  116 => __('Clear', 'kalundborghavn'),
  113 => __('Sunshine', 'kalundborghavn')
);
$rain = array (
  359 => __('Torrential rain', 'kalundborghavn'),
  356 => __('Heavy rain', 'kalundborghavn'),
  353 => __('Sprinkles', 'kalundborghavn'),
  308 => __('Torrential rain', 'kalundborghavn'),
  305 => __('rain at times,', 'kalundborghavn'),
  302 => __('Moderate rain', 'kalundborghavn'),
  299 => __('Modarat patchy rain', 'kalundborghavn'),
  296 => __('Light rain', 'kalundborghavn'),
  293 => __('Cold patchy rain', 'kalundborghavn'),
  284 => __('Cold rain', 'kalundborghavn'),
  281 => __('Cold rain', 'kalundborghavn'),
  266 => __('Light rain', 'kalundborghavn'),
  263 => __('Partially rain', 'kalundborghavn'),
  176 => __('Partial rain nearby', 'kalundborghavn'),
);
$overcast = array (
  143 => __('Misty', 'kalundborghavn'),
  122 => __('Cloudy', 'kalundborghavn'),
  119 => __('Skyfuldt', 'kalundborghavn'),
  116 => __('Clear', 'kalundborghavn'),
  248 => __('Misty', 'kalundborghavn'),
);
$thunder = array (
  395 => __('Rain / thunder', 'kalundborghavn'),
  392 => __('Rain Rain / thunder', 'kalundborghavn'),
  389 => __('Rain / thunder', 'kalundborghavn'),
  386 => __('Rain Rain / thunder', 'kalundborghavn'),
  200 => __('thunder nearby,', 'kalundborghavn'),
);
$clear = array (
  113 => __('Sunshine', 'kalundborghavn')
);
$snow = array (
  377 => __('hail', 'kalundborghavn'),
  374 => __('Light hailstorms', 'kalundborghavn'),
  371 => __('snow', 'kalundborghavn'),
  368 => __('Light snow showers', 'kalundborghavn'),
  365 => __('Moderate snow showers', 'kalundborghavn'),
  362 => __('Light sleet', 'kalundborghavn'),
  350 => __('hail', 'kalundborghavn'),
  338 => __('snow', 'kalundborghavn'),
  335 => __('Partially snow', 'kalundborghavn'),
  332 => __('Moderate snow', 'kalundborghavn'),
  329 => __('Partial snow', 'kalundborghavn'),
  326 => __('Light snow', 'kalundborghavn'),
  323 => __('Partial snow', 'kalundborghavn'),
  320 => __('Vastly sleet', 'kalundborghavn'),
  317 => __('Light sleet', 'kalundborghavn'),
  314 => __('Frost and rain', 'kalundborghavn'),
  311 => __('Easy frost and rain', 'kalundborghavn'),
);

$weathercode = intval($xml->current_condition->weatherCode);

$weatherdescription = $weathertypes[$weathercode];

if(in_array($weatherdescription, $regn) ) {
  $weathericon = get_template_directory_uri() . "/widgets/weather-widget/weathericons/rainy.svg";
}

if(in_array($weatherdescription, $overcast) ) {
  $weathericon = get_template_directory_uri() . "/widgets/weather-widget/weathericons/overcast.svg";
}

if(in_array($weatherdescription, $thunder) ) {
  $weathericon = get_template_directory_uri() . "/widgets/weather-widget/weathericons/thunder.svg";
}

if(in_array($weatherdescription, $clear) ) {
  $weathericon = get_template_directory_uri() . "/widgets/weather-widget/weathericons/clear.svg";
}

if(in_array($weatherdescription, $snow) ) {
  $weathericon = get_template_directory_uri() . "/widgets/weather-widget/weathericons/snow.svg";
}

$windspeed = $xml->current_condition->windspeedKmph;
$windspeed = number_format($windspeed*0.2778, 1);

$temp = $xml->current_condition->temp_C;
$FeelsLike = $xml->current_condition->FeelsLikeC;

$visibility = $xml->current_condition->visibility;

$winddir = $xml->current_condition->winddirDegree;
$winddir16 = $xml->current_condition->winddir16Point;


// print "<pre>";
// print_r($xml);
// print "</pre>";
?>
<div class="weather-container" data-lat="<?php echo $instance['latitude']; ?>" data-long="<?php echo $instance['longtitude']; ?>">
	<main role="main">

	  <!-- Weather -->
	  <section class="weather">

	    <div class="weather_item weather-type">
	      <img src="<?php echo $weathericon; ?>" alt="" />

	      <h4><?php echo $weatherdescription; ?></h4>
	    </div>

	    <div class="weather_item temperature">
	      <h3><?php echo $temp; ?>°</h3>
	      <h4><?php _e('Temperature', 'kalundborghavn'); ?></h4>

	    </div>

	    <div class="weather_item visibility">
	      <h3><?php echo $visibility; ?></h3>
	      <h5>km</h5>
	      <h4><?php _e('Visibility', 'kalundborghavn'); ?></h4>
	    </div>

	    <div class="weather_item windspeed">
	      <h3><?php echo $windspeed; ?></h3>
	      <h5>m/s</h5>
	      <h4><?php _e('Windspeed', 'kalundborghavn'); ?></h4>
	    </div>

	    <div class="weather_item winddirection">
	      <h3><?php echo $winddir; ?>°</h3>
	      <h5><?php echo $winddir16; ?></h5>
	      <h4><?php _e('Winddirection', 'kalundborghavn'); ?></h4>
	    </div>

	  </section>
	  <!-- /weather -->

	</main>
</div>
