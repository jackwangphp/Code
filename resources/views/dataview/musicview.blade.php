<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>音乐可视化</title>
    <style>
        body {
            background-color: #94a37d;
        }
    </style>
</head>
<body>

<div class="controls" width="100%">
    <audio id="audio" controls style="width: 100%">
        <source src="{{ asset('assets/music/zilong.mp3') }}" type="audio/mpeg">
        您的浏览器不支持 audio 元素。
    </audio>
</div>
<div class="forsvg"></div>
<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
<script>
    var audioCtx = new (window.AudioContext || window.webkitAudioContext)();
    var audioElement = document.getElementById('audio');
    var audioSrc = audioCtx.createMediaElementSource(audioElement);
    var analyser = audioCtx.createAnalyser();

    audioSrc.connect(analyser);
    audioSrc.connect(audioCtx.destination);

    var frequencyData = new Uint8Array(24);
    console.log(frequencyData);
    var nodes = [{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{}];
    var edges = [
        { source : 0 , target: 1 } ,{ source : 0 , target: 2 } ,
        { source : 0 , target: 3 } ,{ source : 0 , target: 4 } ,
        { source : 0 , target: 5 } ,{ source : 0 , target: 6 } ,
        { source : 0 , target: 7 } ,{ source : 0 , target: 8 } ,
        { source : 0 , target: 9 } ,{ source : 0 , target: 10 } ,
        { source : 0 , target: 11 } ,{ source : 0 , target: 12 } ,
        { source : 0 , target: 13 } ,{ source : 0 , target: 14 } ,
        { source : 0 , target: 15 } ,{ source : 0 , target: 16 } ,
        { source : 0 , target: 17 } ,{ source : 0 , target: 18 } ,
        { source : 0 , target: 19 } ,{ source : 0 , target: 20 } ,
        { source : 0 , target: 21 } ,{ source : 0 , target: 22 } ,
        { source : 0 , target: 23 } ,{ source : 0 , target: 24 }
    ];

    var w=window.innerWidth
        || document.documentElement.clientWidth
        || document.body.clientWidth;
    var h=window.innerHeight
        || document.documentElement.clientHeight
        || document.body.clientHeight;

    var svg = d3.select('.forsvg').append('svg').attr('height',h).attr('width',w);
    //D3力导向布局
    var force = d3.layout.force()
        .nodes(nodes)
        .links(edges)
        .size([w,h])
        .linkDistance(10)
        .charge(-200)
        .start();

    var rlinear,clinear,flinear,llinear;

    //添加线
    var svg_edges = svg.selectAll("line")
        .data(edges)
        .enter()
        .append("line")
        .style("stroke","#94a37d")
        .style("stroke-width",1);
    //添加节点
    var svg_nodes = svg.selectAll("circle")
        .data(nodes)
        .enter()
        .append("circle")
        .attr("r",20)
        .call(force.drag);	//使得节点能够拖动

    force.on("tick", function(){	//对于每一个时间间隔

        //更新连线坐标
        svg_edges.attr("x1",function(d){ return d.source.x; })
            .attr("y1",function(d){ return d.source.y; })
            .attr("x2",function(d){ return d.target.x; })
            .attr("y2",function(d){ return d.target.y; });

        //更新节点坐标
        svg_nodes.attr("cx",function(d){ return d.x; })
            .attr("cy",function(d){ return d.y; });
    });

    function renderChart() {
        requestAnimationFrame(renderChart);

        // Copy frequency data to frequencyData array.
        analyser.getByteFrequencyData(frequencyData);
        rlinear = d3.scale.linear()
            .domain([d3.min(frequencyData), d3.max(frequencyData)])
            .range([2, 20]);
        clinear = d3.scale.linear()
            .domain([d3.min(frequencyData), d3.max(frequencyData)])
            .range([123, 80]);
        flinear = d3.scale.linear()
            .domain([d3.min(frequencyData), d3.max(frequencyData)])
            .range([-400, -600]);
        llinear = d3.scale.linear()
            .domain([d3.min(frequencyData), d3.max(frequencyData)])
            .range([300, 50]);
        // Update d3 chart with new data.
        svg_nodes.attr('r', function(d,i) {
            if(i>0){
                return rlinear(frequencyData[i-1]);
            }else{
                return d3.mean(frequencyData);
            }
        })
            .attr("style", function(d,i) {
                if(i>0){
                    return "fill: rgb("+(Math.round(clinear(frequencyData[i-1]))-30)+", "+(Math.round(clinear(frequencyData[i-1]))+20)+", "+Math.round(clinear(frequencyData[i-1]))+");";
                }else{
                    return 'fill: rgb(57, 102, '+Math.round(clinear(d3.mean(frequencyData)))+')';
                }
            });

        force.linkDistance(llinear(d3.mean(frequencyData)))
            .charge(flinear(d3.mean(frequencyData)))
            .start();
    }

    // Run the loop
    renderChart();
</script>
</body>
</html>