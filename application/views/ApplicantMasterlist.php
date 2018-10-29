<div class="main-body">
    <div class="page-wrapper">

        <div class="page-header">
            <div class="page-header-title">
                <h4>Applicant Masterlist</h4>
                <span>Masterlist of all active Applicants</span>
            </div>
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="dashboard">
                            <i class="icofont icofont-home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Applicant Masterlist</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="page-body">

            <div class="card">
                <div class="card-header">

                    <h5>Decription</h5>

        
                    <span>This is the Masterlist of all active Applicants  
</span>
                    <div class="card-header-right">
                        <i class="icofont icofont-rounded-down"></i>
                        <i class="icofont icofont-refresh"></i>
                        <i class="icofont icofont-close-circled"></i>
                    </div>
                </div>
                <div class="card-block">
                    <div class="table-responsive dt-responsive">
                        <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                            <thead>

                                      <tr>
                                        <th>Name</th>
                                        <th>Contact No.</th>
                                        <th>Email Address</th>
                                        <th>Preferred preferredJobsobs</th>
                                        <th>Educational Attainment</th>
                                        <th>Active</th>
                                    </tr>
                            </thead>
                            <tbody>
                            <?php
                                if ($applicants->num_rows() > 0 ) {
                                    foreach ($applicants->result() as $row) { ?>
                                <tr>

                                    <td><?php echo $row->firstName.' '.$row->lastName; ?></td>
                                    <td><?php echo $row->mobileNum; ?></td>
                                    <td><?php echo $row->emailAddress; ?></td>
                                    <td><?php echo $row->preferredJobs; ?></td>
                                    <td><?php echo $row->lastSchoolLevel; ?></td>
                                    <td>
                                        <?php 
                                        if ($row->isActive == '1' ) {
                                            echo '<label class="label
                                                label-success">Active</label>';
                                        }
                                        else {
                                            echo '<label class="label
                                                label-default">Inactive</label>';
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                               
                           
                        </table>
                    </div>
                </div>
            </div>


                              
        </div>
    </div>
</div>