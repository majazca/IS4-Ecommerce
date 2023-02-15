<!-- weather widget start -->
<div id="m-booked-bl-simple-41399" style="
    margin-top: 10px;
    margin-left: 50px;">
    <div class="booked-wzs-160-110 weather-customize" style="background-color:#137AE9;width:212px;" id="width2">
        <div class="booked-wzs-160-110_in">
            <div class="booked-wzs-160-data">
                <div class="booked-wzs-160-left-img wrz-01"></div>
                <div class="booked-wzs-160-right">
                    <div class="booked-wzs-day-deck">
                        <div class="booked-wzs-day-val">
                            <div class="booked-wzs-day-number"><span class="plus">+</span>36</div>
                            <div class="booked-wzs-day-dergee">
                                <div class="booked-wzs-day-dergee-val">&deg;</div>
                                <div class="booked-wzs-day-dergee-name">C</div>
                            </div>
                        </div>
                        <div class="booked-wzs-day">
                            <div class="booked-wzs-day-d"><span class="plus">+</span>38&deg;</div>
                            <div class="booked-wzs-day-n"><span class="plus">+</span>23&deg;</div>
                        </div>
                    </div>
                    <div class="booked-wzs-160-info">
                        <div class="booked-wzs-160-city">Asunción</div>
                        <div class="booked-wzs-160-date">Sábado, 11</div>
                    </div>
                </div>
            </div>
            <div class="booked-wzs-center"><span class="booked-wzs-bottom-l"> Previsión para 7 días</span></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var css_file = document.createElement("link");
    var widgetUrl = location.href;
    css_file.setAttribute("rel", "stylesheet");
    css_file.setAttribute("type", "text/css");
    css_file.setAttribute("href", 'https://s.bookcdn.com/css/w/booked-wzs-widget-160.css?v=0.0.1');
    document.getElementsByTagName("head")[0].appendChild(css_file);

    function setWidgetData_41399(data) {
        if (typeof(data) != 'undefined' && data.results.length > 0) {
            for (var i = 0; i < data.results.length; ++i) {
                var objMainBlock = document.getElementById('m-booked-bl-simple-41399');
                if (objMainBlock !== null) {
                    var copyBlock = document.getElementById('m-bookew-weather-copy-' + data.results[i].widget_type);
                    objMainBlock.innerHTML = data.results[i].html_code;
                    if (copyBlock !== null) objMainBlock.appendChild(copyBlock);
                }
            }
        } else {
            alert('data=undefined||data.results is empty');
        }
    }
    var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=18968;type=1;scode=33428;ltid=3458;domid=582;anc_id=75975;countday=undefined;cmetric=1;wlangID=4;color=137AE9;wwidth=212;header_color=ffffff;text_color=333333;link_color=08488D;border_form=1;footer_color=ffffff;footer_text_color=333333;transparent=0;v=0.0.1";
    widgetSrc += ';ref=' + widgetUrl;
    widgetSrc += ';rand_id=41399';
    var weatherBookedScript = document.createElement("script");
    weatherBookedScript.setAttribute("type", "text/javascript");
    weatherBookedScript.src = widgetSrc;
    document.body.appendChild(weatherBookedScript)
</script>
<!-- weather widget end -->