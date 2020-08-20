@extends('user/app')
@section('bg-img', asset('user/img/qns.jpg'))
@section('title', 'ManurerLift')
@section('sub-title', 'Weather')
@section('main-content')
<!-- Main Content -->
  <div class="container">
    <div class="row">
      
      <div class="col-lg-8 col-md-10 mx-auto">
      	<!-- weather widget start -->
      	<div id="m-booked-weather-bl250-62071"> 
      		<div class="booked-wzs-250-175 weather-customize" style="background-color:#137AE9;width:500px;" id="width1"> 
      			<div class="booked-wzs-250-175_in"> 
      				<div class="booked-wzs-250-175-data"> 
      					<div class="booked-wzs-250-175-left-img wrz-18"> 
      						<a target="_blank" href="https://www.booked.net/"> 
      							<img src="//s.bookcdn.com/images/letter/logo.gif" alt="Booked.net" />
      						</a> 
      					</div> 
      					<div class="booked-wzs-250-175-right"> 
      						<div class="booked-wzs-day-deck"> 
      							<div class="booked-wzs-day-val"> 
      								<div class="booked-wzs-day-number">
      									<span class="plus">+</span>28</div> 
      									<div class="booked-wzs-day-dergee"> 
      										<div class="booked-wzs-day-dergee-val">&deg;</div> 
      										<div class="booked-wzs-day-dergee-name">C</div> 
      									</div> </div> <div class="booked-wzs-day"> 
      										<div class="booked-wzs-day-d">H: <span class="plus">+</span>28&deg;</div> 
      										<div class="booked-wzs-day-n">L: <span class="plus">+</span>27&deg;</div> 
      									</div> 
      								</div> 
      								<div class="booked-wzs-250-175-info"> 
      									<div class="booked-wzs-250-175-city">Sylhet 
      									</div> 
      									<div class="booked-wzs-250-175-date">Saturday, 20 June</div> 
      									<div class="booked-wzs-left"> 
      										<span class="booked-wzs-bottom-l">See 7-Day Forecast</span> </div> 
      									</div> 
      								</div> 
      							</div> 
      							<a target="_blank" href="https://www.booked.net/weather/sylhet-58041"> <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250"> <tr> <td>Sun</td> <td>Mon</td> <td>Tue</td> <td>Wed</td> <td>Thu</td> <td>Fri</td> </tr> <tr> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>33&deg;</td> <td class="week-day-val"><span class="plus">+</span>32&deg;</td> <td class="week-day-val"><span class="plus">+</span>30&deg;</td> <td class="week-day-val"><span class="plus">+</span>27&deg;</td> <td class="week-day-val"><span class="plus">+</span>26&deg;</td> <td class="week-day-val"><span class="plus">+</span>28&deg;</td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>26&deg;</td> <td class="week-day-val"><span class="plus">+</span>26&deg;</td> <td class="week-day-val"><span class="plus">+</span>26&deg;</td> <td class="week-day-val"><span class="plus">+</span>25&deg;</td> <td class="week-day-val"><span class="plus">+</span>24&deg;</td> <td class="week-day-val"><span class="plus">+</span>24&deg;</td> </tr> </table> </a> </div></div> </div><script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-62071'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/weather/info?action=get_weather_info&ver=6&cityID=58041&type=3&scode=124&ltid=3457&domid=w209&anc_id=30436&cmetric=1&wlangID=1&color=137AE9&wwidth=160&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script><!-- weather widget end -->
      </div>
      
      
    </div>
  </div>


  <hr>
@endsection