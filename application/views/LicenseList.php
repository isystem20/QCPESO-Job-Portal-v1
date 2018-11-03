    <div class="main-body">
        <div class="page-wrapper">

            <div class="page-header">
                <div class="page-header-title">
                    <h4>User Accounts Masterlist Maintenance</h4>
                    <span>Masterlist of System Users and Login Credentials</span>
                </div>
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="<?php echo base_url(); ?>dashboard">
                                <i class="icofont icofont-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">User Masterlist</a>
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
                                <button class="btn btn-warning btn-outline-warning"><i class="icofont icofont-edit"></i>Security Access</button>                                                                                        
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
                                                <th>Last Name</th>
                                                <th>First Name</th>
                                                <th>Department</th>
                                                <th>Line Manager</th>
                                                <th>Access Level</th>
                                                <th>Last Login</th>
                                            </tr>
                                        </thead>
                                        <tbody>
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
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>Tiger Nixon</td>
                                            </tr>


                                        </tbody>
                                       
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