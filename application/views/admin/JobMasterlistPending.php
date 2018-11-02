    <div class="main-body">
        <div class="page-wrapper">

            <div class="page-header">
                <div class="page-header-title">
                    <h4>Pending Job List</h4>
                    <span>List of All Available Jobs</span>
                </div>
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="<?php echo base_url(); ?>dashboard">
                                <i class="icofont icofont-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Job List</a>
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
                                                <th>Job Name</th>
                                                <th>Category</th>
                                                <th>Requirements</th>
                                                <th>Company</th>
                                                <th>Location</th>
                                                <th>Remarks</th>
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
                                                <td>Software Engineer</td>
                                                <td>Local</td>
                                                <td>[BSIT Graduate]</td>
                                                <td>IBM</td>
                                                <td>Techno Hub QC</td>
                                                <td></td>
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