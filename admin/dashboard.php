<?php
require_once('layout.php')
?>

<main>
  <div class="container">
    <div class="card">
      <div class="center card-title HeadingBackground ">
        <span class="Card-titleHeading"> Dashboard</span>
      </div>
    </div>

  </div>

  <div class="CustomContainer">
    <div class="card z-depth-3">
      <div class="card-content">
        <div class="row">
          <div class="col s12">
            <ul class="tabs">
              <li class="tab col s3"><a class="active" href="#Vendors">Vendors</a></li>
              <li class="tab col s3"><a href="#VendorTypes">Vendor Types</a></li>
              <li class="tab col s3"><a href="#Users">Users</a></li>
            </ul>
          </div>
          <div id="Vendors" class="col s12">
            <ul class="collapsible NoShadow">
              <li>
                <div class="collapsible-header"><i class="material-icons">person</i>Vendor Name</div>
                <div class="collapsible-body">
                  <div class="card-title">
                    <h5>Company Name</h5>
                  </div>
                  <div class="card-content">
                    <div class="row">
                      <form class="col s12">
                        <div class="row">
                          <div class="input-field col s6">
                            <input id="Name" type="text" name="Name" value="" class="validate">
                            <label for="Name">Name</label>
                          </div>
                          <div class="input-field col s6">
                          <select>
                              <option value="" disabled selected>Select City</option>
                              <option value="1">Photography</option>
                              <option value="2">Event Management</option>
                              <option value="3">Venue</option>
                            </select>
                            <label>Category</label>
                           
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col s6">
                            <input autocomplete="off" id="Email" name="Email" type="email" class="validate">
                            <label for="Email">Email</label>
                          </div>
                          <div class="input-field col s6">
                            <input id="Contact" autocomplete="off" name="Contant" type="number" class="validate">
                            <label for="Contact">Phone</label>
                          </div>


                        </div>
                        <div class="row">
                          <div class="input-field col s6">
                            <input id="CompanyAddress" type="text" class="validate">
                            <label for="CompanyAddress">Company Address</label>
                          </div>

                          <div class="input-field col s6">
                            <select>
                              <option value="" disabled selected>Select City</option>
                              <option value="1">Karachi</option>
                              <option value="2">Islamabad</option>
                              <option value="3">Quetta</option>
                            </select>
                            <label>City</label>
                          </div>
                        </div>
                        <div class="row">
                          <button class="btn btn-small waves-effect right">Edit <i class="material-icons right">edit</i></button>
                          <button class="btn btn-small waves-effect right CtaBtn CtaBtn">Submit<i class="material-icons right">send</i></button>
                          
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">person</i>Vendor Name</div>
                <div class="collapsible-body">
                  <div class="card-title">
                    <h5>Company Name</h5>
                  </div>
                  <div class="card-content">
                    <div class="row">
                      <form class="col s12">
                        <div class="row">
                          <div class="input-field col s6">
                            <input id="Name" type="text" name="Name" value="" class="validate">
                            <label for="Name">Name</label>
                          </div>
                          <div class="input-field col s6">
                          <select>
                              <option value="" disabled selected>Select City</option>
                              <option value="1">Photography</option>
                              <option value="2">Event Management</option>
                              <option value="3">Venue</option>
                            </select>
                            <label>Category</label>
                           
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col s6">
                            <input autocomplete="off" id="Email" name="Email" type="email" class="validate">
                            <label for="Email">Email</label>
                          </div>
                          <div class="input-field col s6">
                            <input id="Contact" autocomplete="off" name="Contant" type="number" class="validate">
                            <label for="Contact">Phone</label>
                          </div>


                        </div>
                        <div class="row">
                          <div class="input-field col s6">
                            <input id="CompanyAddress" type="text" class="validate">
                            <label for="CompanyAddress">Company Address</label>
                          </div>

                          <div class="input-field col s6">
                            <select>
                              <option value="" disabled selected>Select City</option>
                              <option value="1">Karachi</option>
                              <option value="2">Islamabad</option>
                              <option value="3">Quetta</option>
                            </select>
                            <label>City</label>
                          </div>
                        </div>
                        <div class="row">
                          <button class="btn btn-small waves-effect right">Edit <i class="material-icons right">edit</i></button>
                          <button class="btn btn-small waves-effect right CtaBtn CtaBtn">Submit<i class="material-icons right">send</i></button>
                          
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">person</i>Vendor Name</div>
                <div class="collapsible-body">
                  <div class="card-title">
                    <h5>Company Name</h5>
                  </div>
                  <div class="card-content">
                    <div class="row">
                      <form class="col s12">
                        <div class="row">
                          <div class="input-field col s6">
                            <input id="Name" type="text" name="Name" value="" class="validate">
                            <label for="Name">Name</label>
                          </div>
                          <div class="input-field col s6">
                          <select>
                              <option value="" disabled selected>Select City</option>
                              <option value="1">Photography</option>
                              <option value="2">Event Management</option>
                              <option value="3">Venue</option>
                            </select>
                            <label>Category</label>
                           
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col s6">
                            <input autocomplete="off" id="Email" name="Email" type="email" class="validate">
                            <label for="Email">Email</label>
                          </div>
                          <div class="input-field col s6">
                            <input id="Contact" autocomplete="off" name="Contant" type="number" class="validate">
                            <label for="Contact">Phone</label>
                          </div>


                        </div>
                        <div class="row">
                          <div class="input-field col s6">
                            <input id="CompanyAddress" type="text" class="validate">
                            <label for="CompanyAddress">Company Address</label>
                          </div>

                          <div class="input-field col s6">
                            <select>
                              <option value="" disabled selected>Select City</option>
                              <option value="1">Karachi</option>
                              <option value="2">Islamabad</option>
                              <option value="3">Quetta</option>
                            </select>
                            <label>City</label>
                          </div>
                        </div>
                        <div class="row">
                          <button class="btn btn-small waves-effect right">Edit <i class="material-icons right">edit</i></button>
                          <button class="btn btn-small waves-effect right CtaBtn CtaBtn">Submit<i class="material-icons right">send</i></button>
                          
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </li>

            </ul>
          </div>
          <div id="VendorTypes" class="col s12">Test 1</div>
          <div id="Users" class="col s12">
            <ul class="collapsible NoShadow">
              <li>
                <div class="collapsible-header"><i class="material-icons">person</i>User Name</div>
                <div class="collapsible-body">
                
                  <div class="card-content">
                    <div class="row">
                      <form class="col s12">
                        <div class="row">
                          <div class="input-field col s6">
                            <input id="Name" type="text" name="Name" value="" class="validate">
                            <label for="Name">Name</label>
                          </div>
                          <div class="input-field col s6">
                            <input autocomplete="off" id="Email" name="Email" type="email" class="validate">
                            <label for="Email">Email</label>
                          </div>
                        </div>

                        <div class="row">
                          
                          <div class="input-field col s6">
                            <input id="Contact" autocomplete="off" name="Contant" type="number" class="validate">
                            <label for="Contact">Phone</label>
                          </div>
                          <div class="input-field col s6">
                            <input id="UserAddress" type="text" class="validate">
                            <label for="UserAddress">User Address</label>
                          </div>

                        </div>
                        <div class="row">
                          

                          <div class="input-field col s6">
                            <select>
                              <option value="" disabled selected>Select City</option>
                              <option value="1">Karachi</option>
                              <option value="2">Islamabad</option>
                              <option value="3">Quetta</option>
                            </select>
                            <label>City</label>
                          </div>
                        </div>
                        <div class="row">
                          <button class="btn btn-small waves-effect right">Edit <i class="material-icons right">edit</i></button>
                          <button class="btn btn-small waves-effect right CtaBtn CtaBtn">Submit<i class="material-icons right">send</i></button>
                          
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">person</i>Vendor Name</div>
                <div class="collapsible-body">
                  <div class="card-title">
                    <h5>Company Name</h5>
                  </div>
                  <div class="card-content">
                    <div class="row">
                      <form class="col s12">
                        <div class="row">
                          <div class="input-field col s6">
                            <input id="Name" type="text" name="Name" value="" class="validate">
                            <label for="Name">Name</label>
                          </div>
                          <div class="input-field col s6">
                          <select>
                              <option value="" disabled selected>Select City</option>
                              <option value="1">Photography</option>
                              <option value="2">Event Management</option>
                              <option value="3">Venue</option>
                            </select>
                            <label>Category</label>
                           
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col s6">
                            <input autocomplete="off" id="Email" name="Email" type="email" class="validate">
                            <label for="Email">Email</label>
                          </div>
                          <div class="input-field col s6">
                            <input id="Contact" autocomplete="off" name="Contant" type="number" class="validate">
                            <label for="Contact">Phone</label>
                          </div>


                        </div>
                        <div class="row">
                          <div class="input-field col s6">
                            <input id="CompanyAddress" type="text" class="validate">
                            <label for="CompanyAddress">Company Address</label>
                          </div>

                          <div class="input-field col s6">
                            <select>
                              <option value="" disabled selected>Select City</option>
                              <option value="1">Karachi</option>
                              <option value="2">Islamabad</option>
                              <option value="3">Quetta</option>
                            </select>
                            <label>City</label>
                          </div>
                        </div>
                        <div class="row">
                          <button class="btn btn-small waves-effect right">Edit <i class="material-icons right">edit</i></button>
                          <button class="btn btn-small waves-effect right CtaBtn">Submit<i class="material-icons right">send</i></button>
                          
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">person</i>Vendor Name</div>
                <div class="collapsible-body">
                  <div class="card-title">
                    <h5>Company Name</h5>
                  </div>
                  <div class="card-content">
                    <div class="row">
                      <form class="col s12">
                        <div class="row">
                          <div class="input-field col s6">
                            <input id="Name" type="text" name="Name" value="" class="validate">
                            <label for="Name">Name</label>
                          </div>
                          <div class="input-field col s6">
                          <select>
                              <option value="" disabled selected>Select City</option>
                              <option value="1">Photography</option>
                              <option value="2">Event Management</option>
                              <option value="3">Venue</option>
                            </select>
                            <label>Category</label>
                           
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col s6">
                            <input autocomplete="off" id="Email" name="Email" type="email" class="validate">
                            <label for="Email">Email</label>
                          </div>
                          <div class="input-field col s6">
                            <input id="Contact" autocomplete="off" name="Contant" type="number" class="validate">
                            <label for="Contact">Phone</label>
                          </div>


                        </div>
                        <div class="row">
                          <div class="input-field col s6">
                            <input id="CompanyAddress" type="text" class="validate">
                            <label for="CompanyAddress">Company Address</label>
                          </div>

                          <div class="input-field col s6">
                            <select>
                              <option value="" disabled selected>Select City</option>
                              <option value="1">Karachi</option>
                              <option value="2">Islamabad</option>
                              <option value="3">Quetta</option>
                            </select>
                            <label>City</label>
                          </div>
                        </div>
                        <div class="row">
                          <button class="btn btn-small waves-effect right">Edit <i class="material-icons right">edit</i></button>
                          <button class="btn btn-small waves-effect right CtaBtn CtaBtn">Submit<i class="material-icons right">send</i></button>
                          
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="fixed-action-btn">
      <a class="btn-floating btn-large ">
        <i class="large material-icons">add</i>
      </a>
      <ul>
        <li><a href="#VendorModal" class="btn-floating tooltipped modal-trigger" data-tooltip="Add new Vendor" data-position="left"><i class="material-icons">person</i></a></li>
        <li><a href="#CategoryModal" class="btn-floating tooltipped modal-trigger" data-tooltip="Add new Category" data-position="left"><i class="material-icons">dns</i></a></li>
      </ul>
    </div>


    <!-- ADD VENDOR MODAL -->
    <div id="VendorModal" class="modal bottom-sheet">
      <div class="container">
      <div class="card">
        <div class="card-title center HeadingBackground">
          <h4 class="InnerHeadingTitle">Add New Vendor</h4>

        </div> 
      </div>
      </div>
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

<!-- ADD CATEGORY MODAL -->
<div id="CategoryModal" class="modal bottom-sheet">
<div class="container">
      <div class="card">
        <div class="card-title center HeadingBackground">
          <h4 class="InnerHeadingTitle">Add Category</h4>

        </div> 
      </div>
      </div>
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
  </div>
</main>