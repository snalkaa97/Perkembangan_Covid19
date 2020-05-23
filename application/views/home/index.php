<!-- START PAGE CONTENT-->
<div class="container">
    <h3>Perkembangan Covid 19 Di Indonesia</h3>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Peta</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>

                    </div>
                </div>
                <div class="ibox-body">
                    <div id="mapid" style="height: 400px;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-8">
            <div class="ibox bg-primary color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong"><?= $indo[0]['positif'] ?></h2>
                    <div class="m-b-5">Total Positif</div><i class="fa fa-frown-o widget-stat-icon"></i>
                    <div><i class="fa fa-level-up m-r-5"></i><small></small></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-8">
            <div class="ibox bg-success color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong"><?= $indo[0]['sembuh'] ?></h2>
                    <div class="m-b-5">Total Sembuh</div><i class="fa fa-smile-o widget-stat-icon"></i>
                    <div><i class="fa fa-level-up m-r-5"></i><small></small></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-8">
            <div class="ibox bg-danger color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong"><?= $indo[0]['meninggal'] ?></h2>
                    <div class="m-b-5">TOTAL Meninggal</div>
                    <div><i class="fa fa-level-up m-r-5"></i><small></small></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-8">
            <div class="ibox bg-warning color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong"><?= $indo[0]['dirawat'] ?></h2>
                    <div class="m-b-5">TOTAL Sembuh</div>
                    <div><i class="fa fa-level-up m-r-5"></i><small></small></div>
                </div>
            </div>
        </div>
        <!--  <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-danger color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">108</h2>
                                <div class="m-b-5">NEW USERS</div><i class="ti-user widget-stat-icon"></i>
                                <div><i class="fa fa-level-down m-r-5"></i><small>-12% Lower</small></div>
                            </div>
                        </div>
                    </div> -->
    </div>

    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Data Perkembangan Perprovinsi</div>
            <div class="ibox-tools">
                <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item">option 1</a>
                    <a class="dropdown-item">option 2</a>
                </div>
            </div>
        </div>
        <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Provinsi</th>
                        <th>Positif</th>
                        <th>Sembuh</th>
                        <th>Meninggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($prov as $key) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $key['attributes']['Provinsi'] ?></td>
                            <td><?= number_format($key['attributes']['Kasus_Posi']) ?></td>
                            <td><?= number_format($key['attributes']['Kasus_Semb']) ?></td>
                            <td><?= number_format($key['attributes']['Kasus_Meni']) ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>


    <script type="text/javascript">
        var mymap = L.map('mapid').setView([-1.52184, 120.603580], 5);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {

            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',

        }).addTo(mymap);


        <?php foreach ($lokasi['features'] as $key => $value) { ?>
            L.marker([<?= $value['geometry']['y'] ?>, <?= $value['geometry']['x'] ?>]).addTo(mymap)
                .bindPopup("Provinsi : <?= $value['attributes']['Provinsi'] ?><br>" +
                    "Positif : <?= $value['attributes']['Kasus_Posi'] ?><br>" +
                    "Sembuh : <?= $value['attributes']['Kasus_Semb'] ?><br>" +
                    "Meningga; : <?= $value['attributes']['Kasus_Meni'] ?><br>").openPopup();
        <?php } ?>
    </script>

    <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
    </script>