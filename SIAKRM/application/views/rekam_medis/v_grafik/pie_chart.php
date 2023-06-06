    <section class="section">
      <div class="row">

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Grafik Kelengkapan</h5>

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
              <h5 class="card-title">Grafik Per Poli</h5>

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
              <h5 class="card-title">Grafik Per Item</h5>
              <!-- Bar Chart -->
              <div id="barChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#barChart"), {
                    series: [{
                      data: [
                        <?= $rm1->Jumlah; ?>,
                        <?= $rm2->Jumlah; ?>,
                        <?= $rm3->Jumlah; ?>,
                        <?= $rm4->Jumlah; ?>,
                        <?= $rm5->Jumlah; ?>,
                        <?= $rm6->Jumlah; ?>,
                        <?= $rm7->Jumlah; ?>,
                        <?= $rm8->Jumlah; ?>,
                        <?= $rm9->Jumlah; ?>,
                        <?= $rm10->Jumlah; ?>,
                        <?= $rm11->Jumlah; ?>,
                        <?= $rm12->Jumlah; ?>,
                        <?= $rm13->Jumlah; ?>,
                        <?= $rm14->Jumlah; ?>,
                        <?= $rm15->Jumlah; ?>,
                        <?= $rm16->Jumlah; ?>,
                        <?= $rm17->Jumlah; ?>,
                        <?= $rm18->Jumlah; ?>,
                        <?= $rm19->Jumlah; ?>,
                        <?= $rm20->Jumlah; ?>
                        ]
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
                        'Alamat', 'Pekerjaan', 'Keluhan', 'Terapi', 'Tensi', 'Nadi', 'Suhu', 'Pernapasan', 'Tinggi', 'Berat', 'Lingkar Perut', 'Diagnosa', 'Tindakan'
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