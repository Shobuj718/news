var $border_color="#eee",$grid_color="#eee",$default_black="#666";$(function(){var a,b,c=[];c.push([[1700,1],[3400,2],[2300,3],[4500,4],[6300,5]]),c.push([[1300,1],[1200,2],[2900,3],[2300,4],[4500,5]]),c.push([[800,1],[1900,2],[1200,3],[2100,4],[3800,5]]),a=[{label:"Foursquare",data:c[1]},{label:"Twitter",data:c[0]},{label:"Google plus",data:c[2]}],b={xaxis:{},legend:{position:"se"},grid:{hoverable:!0,clickable:!1,borderWidth:1,tickColor:"#E5E5E5",borderColor:"#E5E5E5"},shadowSize:0,bars:{horizontal:!0,show:!0,barWidth:20736e4,barWidth:.2,fill:!0,lineWidth:1,order:!0,lineWidth:0,fillColor:{colors:[{opacity:1},{opacity:1}]}},tooltip:!0,tooltipOpts:{content:"%s: %x"},colors:["#e77338","#5e83bf","#ffd65f","#91c46b"]};var d=$("#horizontal-chart");d.length&&$.plot(d,a,b)});