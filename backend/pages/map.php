<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
 <title>JQVMap - World Map</title>
 <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
 <link href="../vendor/jqvmap/dist/jqvmap.css" media="screen" rel="stylesheet" type="text/css"/>

</head>
<body>
 <div id="vmap" style="width: 600px; height: 400px;"></div>
 
 <!-- jQuery -->
 <script src="../vendor/jquery/jquery.min.js"></script>

 <script type="text/javascript" src="../vendor/jqvmap/dist/jquery.vmap.js"></script>
 <script type="text/javascript" src="../vendor/jqvmap/dist/maps/jquery.vmap.world.js" charset="utf-8"></script>
 <script type="text/javascript" src="../vendor/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>

<script type="text/javascript">
$(document).ready(function(){
 $('#vmap').vectorMap({ map: 'world_en', backgroundColor: '#eee', color: '#ffffff',
   hoverOpacity: 0.7, selectedColor: '#666666', enableZoom: true, showTooltip: true,
   scaleColors: ['#C8EEFF', '#006491'], values: sample_data, normalizeFunction: 'polynomial' });
});
</script>
</body>
</html>
