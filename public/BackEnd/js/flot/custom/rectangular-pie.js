$(function(){var a,b;a=[{label:"Apples",data:Math.floor(100*Math.random()+150)},{label:"Oranges",data:Math.floor(100*Math.random()+390)},{label:"Pinaples",data:Math.floor(100*Math.random()+530)},{label:"Grapes",data:Math.floor(100*Math.random()+90)},{label:"Bananas",data:Math.floor(100*Math.random()+320)}],b={series:{pie:{show:!0,radius:500,stroke:{width:0}}},shadowSize:0,legend:{position:"se"},tooltip:!0,tooltipOpts:{content:"%s: %y"},grid:{hoverable:!0,clickable:!1,borderWidth:1,tickColor:"#E5E5E5",borderColor:"#E5E5E5"},shadowSize:0,colors:["#e77338","#5e83bf","#ffd65f","#91c46b","#46b4bf"]};var c=$("#rectangular-pie");c.length&&$.plot(c,a,b)});