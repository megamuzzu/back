<main id="main" class="main">

    <div class="pagetitle">
      <h1>Lead Data</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin">Home</a></li>
          <li class="breadcrumb-item active"><a href="<?php echo base_url()?>admin/leadaus">Leads List</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

              <div class="col-md-12">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                  <?php echo $this->session->flashdata('error'); ?> 
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>

              <!-- General Form Elements -->
              <form role="form" action="<?php echo base_url() ?>admin/leadaus/update" method="post" role="form" enctype="multipart/form-data">

                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="hidden" name="id" value="<?php echo $edit_data->id;?>"/>
                    <input type="date" name="date_at" class="form-control" value="<?php echo $edit_data->date_at;?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Customer Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="customer_name" class="form-control" value="<?php echo $edit_data->customer_name;?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Phone Number</label>
                  <div class="col-sm-10">
                    <input type="number" name="phone" class="form-control" value="<?php echo $edit_data->phone;?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" value="<?php echo $edit_data->email;?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Amount</label>
                  <div class="col-sm-10">
                    <input type="text" name="amount" class="form-control" value="<?php echo $edit_data->amount;?>">
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Issue</label>
                  <div class="col-sm-10">
                    <textarea class="tinymce-editor" name="issue"><?php echo $edit_data->issue;?></textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Plan</label>
                  <div class="col-sm-10">
                    <input type="text" name="plan" class="form-control" value="<?php echo $edit_data->plan;?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Agent</label>
                  <div class="col-sm-10">
                    <input type="text" name="agent" class="form-control" value="<?php echo $edit_data->agent;?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Remote Tool</label>
                  <div class="col-sm-10">
                    <input type="text" name="remote_tool" class="form-control" value="<?php echo $edit_data->remote_tool;?>">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Remote Id</label>
                  <div class="col-sm-10">
                    <input type="text" name="remote_id" class="form-control" value="<?php echo $edit_data->remote_id;?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Remote Password</label>
                  <div class="col-sm-10">
                    <input type="text" name="remote_password" class="form-control" value="<?php echo $edit_data->remote_password;?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Special Comments</label>
                  <div class="col-sm-10">
                    <textarea class="tinymce-editor" name="special_comments"><?php echo $edit_data->special_comments;?></textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Status</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="status" aria-label="Default select example">
                      <option selected value="<?php echo $edit_data->status;?>">Open this select menu</option>
                      <option value="1">Active</option>
                      <option value="2">Inactive</option>
                    </select>
                  </div>
                </div>
 

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->