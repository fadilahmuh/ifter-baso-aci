var route = $("#stat").data("url");
$.ajax({
    type: "GET",
    url: route,
    dataType: "json",
    success: function (response) {        
        if (response[0] == false) {
            $( "#row-table" ).remove();
        } else {
            run(response[0]);
        }
    },
    error: function (xhr, ajaxOptions, thrownError) {
        console.log(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
    },
});

function run(dd) {
    var ctx = document.getElementById("myChart2").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Pemasukan", "Pengeluaran"],
            datasets: [
                {
                    label: "Rp",
                    data: dd,
                    borderWidth: 2,
                    backgroundColor: ["#63ed7a", "#ffa426"],
                    borderWidth: 2.5,
                    pointBackgroundColor: "#ffffff",
                    pointRadius: 4,
                },
            ],
        },
        options: {
            legend: {
                display: false,
            },
            scales: {
                yAxes: [
                    {
                        gridLines: {
                            drawBorder: false,
                            color: "#f2f2f2",
                        },
                        ticks: {
                            beginAtZero: true,
                        },
                    },
                ],
                xAxes: [
                    {
                        ticks: {
                            display: false,
                        },
                        gridLines: {
                            display: false,
                        },
                    },
                ],
            },
        },
    });
}
