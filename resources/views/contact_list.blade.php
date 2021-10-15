
@extends('home')
@section('contentss')
<section id="basic-datatable">
  <div class="row">


    <div class="col-12">
      <div class="card">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
          <div class="card-header border-bottom p-1">
            <div class="head-label">
              <h6 class="mb-0">
              DataTable with Buttons</h6>
            </div>
            <div class="dt-action-buttons text-end">
              <div class="dt-buttons d-inline-flex"> 
                <button class="dt-button buttons-collection btn btn-success dropdown-toggle me-2" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="true" id="export_to_mail_chimp">
                  <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share font-small-4 me-50">
                  <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                  <polyline points="16 6 12 2 8 6"></polyline>
                  <line x1="12" y1="2" x2="12" y2="15"></line>
                </svg>export to mailchimp</span>
              </button> 
              <button class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="modal" data-bs-target="#modals-slide-in"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus me-50 font-small-4"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>Add New Contact</span></button> </div></div></div><div class="d-flex justify-content-between align-items-center mx-0 row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select"><option value="7">7</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="75">75</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><table class="datatables-basic table dataTable no-footer dtr-column" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1036px;">
          <thead>
            <tr role="row">     
                <th>S.no</th>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Pin Code</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
          </thead>
        <tbody id="result">
          <?php $count = 0; ?>
        @foreach($contact_list as $value)
        <?php $count++; ?>
          <tr class="odd">
              <td>{{$count}}</td>
              <td>{{$value->email}}</td>
              <td>{{$value->first_name}}</td>
              <td>{{$value->last_name}}</td>           
              <td>{{$value->phone_number}}</td>
              <td>{{$value->pin_code}}</td>
              <td>{{$value->address}}</td>
              <td>
              <button type="reset" class="btn btn-warning me-1 waves-effect waves-float waves-light" onclick="edit({{$value->id}})">Edit</button>
              <button type="reset" class="btn btn-danger me-1 waves-effect waves-float waves-light" onclick="contact_delete({{$value->id}})">Delete</button>
              </td>
          </tr>
        @endforeach  
        </tbody>
          </table><div class="d-flex justify-content-between mx-0 row"><div class="col-sm-12 col-md-6"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-12 col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">&nbsp;</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">&nbsp;</a></li></ul></div></div></div></div>
      </div>
    </div>
</div>
  <!-- Modal to add new record -->
  <div class="modal modal-slide-in fade" id="modals-slide-in">
    <div class="modal-dialog sidebar-sm">
      <form class="add-new-record modal-content pt-0" id="contact_form">
      {{csrf_field()}}
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
        <div class="modal-header mb-1">
          <h5 class="modal-title" id="exampleModalLabel">New Contact</h5>
        </div>
        <div class="modal-body flex-grow-1">
          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-fullname">Email</label>
            <input type="text" name="email" class="form-control dt-full-name" placeholder="Enter Email" required>
          </div>

          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-fullname">First Name</label>
            <input type="text" name="first_name" class="form-control dt-full-name" placeholder="Enter First Name" required>
          </div>

          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-fullname">Last Name</label>
            <input type="text" name="last_name" class="form-control dt-full-name" placeholder="Enter Last Name" required>
          </div>

          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-post">Phone Number</label>
            <input type="text" name="phone_number" id="basic-icon-default-post" class="form-control dt-post" placeholder="Enter Phone Number" required>
          </div>

          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-post">Pin Code</label>
            <input type="text" name="pin_code" id="basic-icon-default-post" class="form-control dt-post" placeholder="Enter Pin Code" required>
          </div>


          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-post">Address</label>
            <input type="text" name="address" id="basic-icon-default-post" class="form-control dt-post" placeholder="Enter Address" required>
          </div>
        
          <button type="submit" class="btn btn-primary data-submit me-1 waves-effect waves-float waves-light">Submit</button>
          <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>



  <!-- // edit contact form -->
  <div class="modal modal-slide-in fade" id="edit-contact-form">
    <div class="modal-dialog sidebar-sm">
      <form class="add-new-record modal-content pt-0" id="update_contact_form">
      {{csrf_field()}}
      <input type="hidden" name="id" id="id">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
        <div class="modal-header mb-1">
          <h5 class="modal-title" id="exampleModalLabel">Edit Contact</h5>
        </div>
        <div class="modal-body flex-grow-1">
          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-fullname">Email</label>
            <input type="text" name="email" id="email" class="form-control dt-full-name" placeholder="Enter Email" required>
          </div>

          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-fullname">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control dt-full-name" placeholder="Enter First Name" required>
          </div>

          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-fullname">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control dt-full-name" placeholder="Enter Last Name" required>
          </div>

          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-post">Phone Number</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control dt-post" placeholder="Enter Phone Number" required>
          </div>

          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-post">Pin Code</label>
            <input type="text" name="pin_code" id="pin_code" class="form-control dt-post" placeholder="Enter Pin Code" required>
          </div>


          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-post">Address</label>
            <input type="text" name="address" id="address" class="form-control dt-post" placeholder="Enter Address" required>
          </div>
        
          <button type="submit" class="btn btn-primary data-submit me-1 waves-effect waves-float waves-light">Submit</button>
          <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
  
</section>

<!-- <div class="modal fade" id="edit_contact_form" tabindex="-1" style="display: block; padding-left: 0px;" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
          <h1 class="mb-1">Edit User Information</h1>
          <p>Updating user details will receive a privacy audit.</p>
        </div>
        <form id="editUserForm" class="row gy-1 pt-75" onsubmit="return false" novalidate="novalidate">
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserFirstName">First Name</label>
            <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="John" value="Gertrude" data-msg="Please enter your first name">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserLastName">Last Name</label>
            <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="Doe" value="Barton" data-msg="Please enter your last name">
          </div>
          <div class="col-12">
            <label class="form-label" for="modalEditUserName">Username</label>
            <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control" value="gertrude.dev" placeholder="john.doe.007">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserEmail">Billing Email:</label>
            <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" value="gertrude@gmail.com" placeholder="example@domain.com">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserStatus">Status</label>
            <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select" aria-label="Default select example">
              <option selected="">Status</option>
              <option value="1">Active</option>
              <option value="2">Inactive</option>
              <option value="3">Suspended</option>
            </select>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditTaxID">Tax ID</label>
            <input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="Tax-8894" value="Tax-8894">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserPhone">Contact</label>
            <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" placeholder="+1 (609) 933-44-22" value="+1 (609) 933-44-22">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserLanguage">Language</label>
            <div class="position-relative"><select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select select2-hidden-accessible" multiple="" data-select2-id="modalEditUserLanguage" tabindex="-1" aria-hidden="true">
              <option value="english">English</option>
              <option value="spanish">Spanish</option>
              <option value="french">French</option>
              <option value="german">German</option>
              <option value="dutch">Dutch</option>
              <option value="hebrew">Hebrew</option>
              <option value="sanskrit">Sanskrit</option>
              <option value="hindi">Hindi</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="32" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserCountry">Country</label>
            <div class="position-relative"><select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select select2-hidden-accessible" data-select2-id="modalEditUserCountry" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="34">Select Value</option>
              <option value="Australia">Australia</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Belarus">Belarus</option>
              <option value="Brazil">Brazil</option>
              <option value="Canada">Canada</option>
              <option value="China">China</option>
              <option value="France">France</option>
              <option value="Germany">Germany</option>
              <option value="India">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Israel">Israel</option>
              <option value="Italy">Italy</option>
              <option value="Japan">Japan</option>
              <option value="Korea">Korea, Republic of</option>
              <option value="Mexico">Mexico</option>
              <option value="Philippines">Philippines</option>
              <option value="Russia">Russian Federation</option>
              <option value="South Africa">South Africa</option>
              <option value="Thailand">Thailand</option>
              <option value="Turkey">Turkey</option>
              <option value="Ukraine">Ukraine</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="33" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-modalEditUserCountry-container"><span class="select2-selection__rendered" id="select2-modalEditUserCountry-container" role="textbox" aria-readonly="true" title="Select Value">Select Value</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <div class="col-12">
            <div class="d-flex align-items-center mt-1">
              <div class="form-check form-switch form-check-primary">
                <input type="checkbox" class="form-check-input" id="customSwitch10" checked="">
                <label class="form-check-label" for="customSwitch10">
                  <span class="switch-icon-left"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                  <span class="switch-icon-right"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
                </label>
              </div>
              <label class="form-check-label fw-bolder" for="customSwitch10">Use as a billing address?</label>
            </div>
          </div>
          <div class="col-12 text-center mt-2 pt-50">
            <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
            <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal" aria-label="Close">
              Discard
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> -->


<script>

  $("#contact_form").submit(function(e){
    e.preventDefault();
    var url = "<?php echo url('/') ?>/add-contact";
    $.ajax({
      type:"post",
      url:"<?php echo url('/') ?>/add-contact",
      data: new FormData(this),
      contentType:false,
      cache:false,
      processData: false,
      success: function ( data ) {
            alert( data );
            $('#contact_form')[0].reset();
            view_contact_list()
            
        }
    })
  });

  function view_contact_list(){
    $.ajax({
      type:"GET",
      url:"<?php echo url('/') ?>/get-contact-list",
      data: {},
      success: function ( data ) {
          $("#result").html(data);
        }
    })
  }

  function edit(id){
    // alert(id);
    
    $.ajax({
      type:"GET",
      url:"<?php echo url('/') ?>/edit-contact-list",
      data: {id:id},
      success: function ( data ) {
        var obj = JSON.parse(data);
        $("#id").val(obj.id);
        $("#email").val(obj.email);
        $("#first_name").val(obj.first_name);
        $("#last_name").val(obj.last_name);
        $("#phone_number").val(obj.phone_number);
        $("#pin_code").val(obj.pin_code);
        $("#address").val(obj.address);
        $("#edit-contact-form").modal("show");
        }
    })
  }

  function contact_delete(id){
    $.ajax({
      type:"GET",
      url:"<?php echo url('/') ?>/delete-contact-list",
      data: {id:id},
      success: function ( data ) {
        alert(data);
        view_contact_list()
      }
    })
  }

  $("#update_contact_form").submit(function(e){
    e.preventDefault();
    var url = "<?php echo url('/') ?>/update-contact-form";
    $.ajax({
      type:"post",
      url:url,
      data: new FormData(this),
      contentType:false,
      cache:false,
      processData: false,
      success: function ( data ) {
            alert( data );
            view_contact_list()
        }
    })
  });

  $("#export_to_mail_chimp").click(function(){
    $("#export_to_mail_chimp").html('Processing......')
    $('#export_to_mail_chimp').prop('disabled', true);
    $.ajax({
      type:"GET",
      url:"<?php echo url('/') ?>/export-to-mail-chimp",
      data: {},
      success: function ( data ) {
        alert(data)
        $("#export_to_mail_chimp").html('export to mailchimp');
        $('#export_to_mail_chimp').prop('disabled', false);
      }
    })
  })
 
</script>
@endsection