function hexToRGB(r, t) {
    var a = parseInt(r.slice(1, 3), 16),
        e = parseInt(r.slice(3, 5), 16),
        o = parseInt(r.slice(5, 7), 16);
    return t ? "rgba(" + a + ", " + e + ", " + o + ", " + t + ")" : "rgb(" + a + ", " + e + ", " + o + ")"
}! function(d) {
    "use strict";

    function r() {
        this.$body = d("body"), this.charts = []
    }
    r.prototype.respChart = function(t, a, e, o) {
        var n = Chart.controllers.line.prototype.draw;
        Chart.controllers.line.prototype.draw = function() {
            n.apply(this, arguments);
            var r = this.chart.ctx,
                t = r.stroke;
            r.stroke = function() {
                r.save(), r.shadowColor = "rgba(0,0,0,0.01)", r.shadowBlur = 20, r.shadowOffsetX = 0, r.shadowOffsetY = 5, t.apply(this, arguments), r.restore()
            }
        };
        var s = Chart.controllers.doughnut.prototype.draw;
        Chart.controllers.doughnut.prototype.draw = function() {
            s.apply(this, arguments);
            var r = this.chart.ctx,
                t = r.fill;
            r.fill = function() {
                r.save(), r.shadowColor = "rgba(0,0,0,0.03)", r.shadowBlur = 4, r.shadowOffsetX = 0, r.shadowOffsetY = 3, t.apply(this, arguments), r.restore()
            }
        };
        var l = Chart.controllers.bar.prototype.draw;
        Chart.controllers.bar.prototype.draw = function() {
            l.apply(this, arguments);
            var r = this.chart.ctx,
                t = r.fill;
            r.fill = function() {
                r.save(), r.shadowColor = "rgba(0,0,0,0.01)", r.shadowBlur = 20, r.shadowOffsetX = 4, r.shadowOffsetY = 5, t.apply(this, arguments), r.restore()
            }
        }, Chart.defaults.color = "#8391a2", Chart.defaults.scale.grid.color = "#8391a2";
        var i = t.get(0).getContext("2d"),
            c = d(t).parent();
        return function() {
            var r;
            switch (t.attr("width", d(c).width()), a) {
                case "Line":
                    r = new Chart(i, {
                        type: "line",
                        data: e,
                        options: o
                    });
                    break;
                case "Doughnut":
                    r = new Chart(i, {
                        type: "doughnut",
                        data: e,
                        options: o
                    });
                    break;
                case "Pie":
                    r = new Chart(i, {
                        type: "pie",
                        data: e,
                        options: o
                    });
                    break;
                case "Bar":
                    r = new Chart(i, {
                        type: "bar",
                        data: e,
                        options: o
                    });
                    break;
                case "Radar":
                    r = new Chart(i, {
                        type: "radar",
                        data: e,
                        options: o
                    });
                    break;
                case "PolarArea":
                    r = new Chart(i, {
                        data: e,
                        type: "polarArea",
                        options: o
                    })
            }
            return r
        }()
    }, r.prototype.initCharts = function() {

        var keys = JSON.parse(document.currentScript.getAttribute('keys'));
        var values = JSON.parse(document.currentScript.getAttribute('values'));

        var r, t, a, e, o, n, s, l = [];
            // i = ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"];

        var n = (o = d("#bar-chart-example").data("colors")) ? o.split(",") : i.concat(),
            t = document.getElementById("bar-chart-example").getContext("2d").createLinearGradient(0, 500, 0, 150);
        t.addColorStop(0, n[0]);
        t.addColorStop(1, n[1]);
        
        // Define your colors for the bars
        var i = [
            "#727cf5", "#0acf97", "#fa5c7c", "#ffbc00", // colors for first bars
            "#f58bfa"  // different color for the last bar
        ];
        return 0 < d("#bar-chart-example").length && (n = (o = d("#bar-chart-example").data("colors")) ? o.split(",") : i.concat(), (t = document.getElementById("bar-chart-example").getContext("2d").createLinearGradient(0, 500, 0, 150)).addColorStop(0, n[0]), t.addColorStop(1, n[1]), a = {
            labels: keys,
            datasets: [{
                label: "Sales",
                backgroundColor:  function (context) {
                    var index = context.dataIndex;
                    // Change the color for the last item
                    return index === a.labels.length - 1 ? "#f58bfa" : t;
                },
                borderColor: t,
                hoverBackgroundColor: function (context) {
                    var index = context.dataIndex;
                    // Change the color for the last item
                    return index === a.labels.length - 1 ? "#f58bfa" : t;
                },
                hoverBorderColor: t,
                data: values
            }]
        }, l.push(this.respChart(d("#bar-chart-example"), "Bar", a, {
            maintainAspectRatio: !1,
            barPercentage: .7,
            categoryPercentage: .4,
            plugins: {
                legend: {
                    display: !1
                }
            },
            scales: {
                y: {
                    grid: {
                        display: !1,
                        color: "rgba(0,0,0,0.05)",
                        offset: !0
                    },
                    stacked: !1,
                    ticks: {
                        stepSize: 20
                    }
                },
                x: {
                    dataset: {},
                    stacked: !1,
                    grid: {
                        color: "rgba(0,0,0,0.01)"
                    }
                }
            }
        }))), l
    }, r.prototype.init = function() {
        var t = this;
        Chart.defaults.font.family = '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif', t.charts = this.initCharts(), d(window).on("resizeEnd", function(r) {
            d.each(t.charts, function(r, t) {
                try {
                    t.destroy()
                } catch (r) {}
            }), t.charts = t.initCharts()
        }), d(window).resize(function() {
            this.resizeTO && clearTimeout(this.resizeTO), this.resizeTO = setTimeout(function() {
                d(this).trigger("resizeEnd")
            }, 500)
        })
    }, d.ChartJs = new r, d.ChartJs.Constructor = r
}(window.jQuery),
function() {
    "use strict";
    window.jQuery.ChartJs.init()
}();