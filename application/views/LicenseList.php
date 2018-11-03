<div class="main-body">
        <div class="page-wrapper">

            <div class="page-header">
                <div class="page-header-title">
                    <h4>Licenses</h4>
                    <span>Masterlist of Licenses</span>
                </div>
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="<?php echo base_url(); ?>dashboard">
                                <i class="icofont icofont-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Licenses</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">

                            <div class="card-header">
                                <button class="btn btn-inverse btn-outline-inverse"><i class="icofont icofont-ui-add"></i>Add</button>
                                <button class="btn btn-inverse btn-outline-inverse"><i class="icofont icofont-edit"></i>Edit</button>
                                <button class="btn btn-danger btn-outline-danger"><i class="icofont icofont-ui-delete"></i>Delete</button>
                                                                                                                        
                                <!-- <h5>Scroll - Vertical, Dynamic Height</h5> -->
                                <div class="card-header-right">
                                    <!-- <input type="checkbox" class="js-single" checked /> -->
                                    <button class="btn btn-info btn-outline-info"><i class="icofont icofont-upload"></i>Upload</button>  
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <table id="scr-vtr-dynamic" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Certificate ID</th>
                                                <th>Certificate Date Issue</th>
                                                <th>Certificate Number Expiration</th>
                                                <th>Certificate Expiration</th>
                                                 <th>Skill Acquired </th>
                                                 <th>Rating  </th>
                                                 <th>Training Period </th>
                                                 <th>Modified By </th>
                                                 <th>Modified At </th>
                                                 <th>Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        if ($license->num_rows() > 0) {
                                            foreach ($license->result() as $row) { ?>
                                            <tr>
                                                <td>
                                                    <div class="checkbox-fade fade-in-primary">
                                                    <label>
                                                    <input type="checkbox" id="checkbox" name="Language" value="HTML">
                                                    <span class="cr">
                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                    </span>
                                                    <span></span>
                                                    </label>
                                                    </div>
                                                </td>
                                                <td><?php echo $row->certificateId; ?></td>
                                                <td><?php echo $row->certificateDateIssued; ?></td>
                                                 <td><?php echo $row->certificateNoExpiration; ?></td>
                                                  <td><?php echo $row->certificateExpiration; ?></td>
                                                   <td><?php echo $row->skillsAcquired; ?></td>
                                                    <td><?php echo $row->rating; ?></td>
                                                     <td><?php echo $row->trainingPeriod; ?></td>
                                                <td><?php echo $row->modifiedById?></td>
                                                <td><?php echo $row->modifiedAt?></td>
                                                <td>
                                                    <?php 
                                                    if ($row->isActive == '1') {
                                                        echo '<label class="label label-primary">Active</label>';
                                                    }
                                                    else {
                                                        echo '<label class="label label-danger">Inactive</label>';
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php
                                            }
                                        }
                                        ?>


                                  
                                        </tbody>
                                        <tfoot>
                                           
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


    <style type="text/css">
        .card-header-right {
            background-color: transparent !important;
            padding: 15px 20px !important;
        }
    </style>