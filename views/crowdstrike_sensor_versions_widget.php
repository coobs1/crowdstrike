<div class="col-md-6">

    <div class="panel panel-default" id="crowdstrike-sensor-versions-widget">

        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-crosshairs"></i>
            <span data-i18n="crowdstrike.sensor-versions-widget"></span>
            <list-link data-url="/show/listing/crowdstrike/crowdstrike"></list-link>
            </h3>

        </div>

    <div class="panel body">
        <svg style="width:100%"></svg>

    </div>

    </div>

</div>

<script>
$(document).on('appReady', function(e, lang) {

    var conf = {
        url: appUrl + '/module/crowdstrike/get_crowdstrike_sensor_version_stats',
        widget: 'crowdstrike-sensor-versions-widget',
        elementClickCallback: function(e){
            var label = mr.integerToVersion(e.data.label);
            window.location.href = appUrl + '/show/listing/crowdstrike/crowdstrike#' + label;
        },
        labelModifier: function(label){
            return mr.integerToVersion(label)
        }
    };

    mr.addGraph(conf);

});
</script>
