<div class="container">

<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <?php echo anchor('kriteria/add','<button class="btn btn-info btn-sm" aria-hidden="true"> Tambah Data</button>',"title='Tambah Data'");?>
                        <br>
                        <br>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Perkara</th>
                                            <th>Tanggal Putus TK1</th>
                                            <th>Pembanding</th>
                                            <th>Tanggal Banding</th>
                                            <th>Nama Pembanding</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                       $i = $this->uri->segment('3') + 1;
                                       foreach ($data->result() as $row) {?>
                                       <tr>
                                           <td><?php echo $i++ ?></td>
                                           <td><?= $row->nomor_perkara_pn ?></td>
                                           <td><?= $row->putusan_pn ?></td>
                                           <td><?= $row->pihak_pembanding ?></td>
                                           <td><?= $row->permohonan_banding ?></td>
                                           <td><?= $row->pemohon_banding ?></td>
                                           <td> <div class="btn-group">
                                                    <a href="<?php echo base_URL()?>data/cetak/<?php echo $row->perkara_id?>" class="btn btn-warning btn-sm"  title="Cetak Register">Cetak</a>
                                                </div></td>
                                            <!-- <td>
                                                <div class="btn-group">
                                                    <a href="<?php echo base_URL()?>kriteria/edit/<?php?>" class="btn btn-warning btn-sm"  title="Edit kriteria">Edit</a>

                                                    <a href="<?php echo base_URL()?>kriteria/delete/<?php?>" class="btn btn-danger btn-sm" title="Hapus Data" onclick="return confirm('Anda Yakin Menghapus Data ini ..?')">Del</a>			
                                                </div>
                                            </td> -->
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <?php
                                    echo $paging;
                                ?>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <!-- /.col-lg-6 -->
            </div>

