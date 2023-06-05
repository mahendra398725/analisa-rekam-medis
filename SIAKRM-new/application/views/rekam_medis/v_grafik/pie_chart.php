    <section class="section">
      <div class="row">

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kelengkapan</h5>

              <!-- Pie Chart -->
              <div id="pieChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#pieChart")).setOption({
                    title: {
                      text: 'Kelengkapan Berkas',
                      subtext: '',
                      left: 'center'
                    },
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      orient: 'vertical',
                      left: 'left'
                    },
                    series: [{
                      name: 'Jumlah Data',
                      type: 'pie',
                      radius: '70%',
                      data: [{
                          value: <?= $l; ?>,
                          name: 'Lengkap'
                        },
                        {
                          value: <?= $tl; ?>,
                          name: 'Tidak Lengkap'
                        }
                      ],
                      emphasis: {
                        itemStyle: {
                          shadowBlur: 10,
                          shadowOffsetX: 0,
                          shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                      }
                    }]
                  });
                });
              </script>
              <!-- End Pie Chart -->    
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Per Poli</h5>

              <!-- Vertical Bar Chart -->
              <div id="verticalBarChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#verticalBarChart")).setOption({
                    tooltip: {
                      trigger: 'axis',
                      axisPointer: {
                        type: 'shadow'
                      }
                    },
                    legend: {},
                    grid: {
                      left: '3%',
                      right: '4%',
                      bottom: '3%',
                      containLabel: true
                    },
                    xAxis: {
                      type: 'value',
                      boundaryGap: [0, 0.01]
                    },
                    yAxis: {
                      type: 'category',
                      data: [
                        <?php
                          foreach ($poli as $key => $value) {
                            echo "'".$value->nama_poli."',";
                          }
                        ?>
                      ]
                    },
                    series: [{
                        type: 'bar',
                        data: [<?= $p1; ?>, <?= $p2; ?>, <?= $p3; ?>, <?= $p4; ?>]
                      }
                    ]
                  });
                });
              </script>
              <!-- End Vertical Bar Chart -->

            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bar Chart</h5>

              <!-- Bar Chart -->
              <div id="barChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#barChart"), {
                    series: [{
                      // data: [<?= $rm1; ?>, <?= $rm2; ?>, <?= $rm3; ?>, <?= $rm4; ?>, <?= $rm5; ?>, <?= $rm6; ?>, <?= $rm7; ?>, <?= $rm8; ?>, <?= $rm9; ?>, <?= $rm10; ?>, <?= $rm11; ?>, <?= $rm12; ?>, <?= $rm13; ?>, <?= $rm14; ?>, <?= $rm15; ?>, <?= $rm16; ?>, <?= $rm17; ?>, <?= $rm18; ?>, <?= $rm19; ?>, <?= $rm20; ?>, <?= $rm21; ?>]
                    }],
                    chart: {
                      type: 'bar',
                      height: 350
                    },
                    plotOptions: {
                      bar: {
                        borderRadius: 4,
                        horizontal: true,
                      }
                    },
                    dataLabels: {
                      enabled: false
                    },
                    xaxis: {
                      categories: ['Nama', 'No. RM', 'No. BPJS', 'No. KTP', 'Jenis Kelamin', 'Tgl Lahir', 'Umur',
                        'Alamat', 'Pekerjaan', 'Keluhan', 'Nama', 'No. RM', 'No. BPJS', 'No. KTP', 'Jenis Kelamin', 'Tgl Lahir', 'Umur', 'Alamat', 'Pekerjaan', 'Keluhan'
                      ],
                    }
                  }).render();
                });
              </script>
              <!-- End Bar Chart -->

            </div>
          </div>
        </div>

      </div>
    </section>