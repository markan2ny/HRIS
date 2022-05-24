<div class="modal fade" id="emp_form">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fa-solid fa-circle-info"></i> EMPLOYEE FORM</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            {{-- PERSONAL INFORMATION --}}
                            <div class="card">
                                <div class="card-header bg-secondary">
                                    <span>PERSONAL INFORMATION</span>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>FIRSTNAME</small>
                                                <input type="text" class="form-control form-control-border"
                                                    placeholder="Enter Firstname">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>LASTNAME</small>
                                                <input type="text" class="form-control form-control-border"
                                                    placeholder="Enter Lastname">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>MIDDLE INITIAL</small>
                                                <input type="text" class="form-control form-control-border"
                                                    placeholder="Enter M.I">
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>BIRTH PLACE</small>
                                                <input type="text" class="form-control form-control-border"
                                                    placeholder="Enter Birth Place">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>Religion</small>
                                                <input type="text" class="form-control form-control-border"
                                                    placeholder="Enter Religion">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>BIRTH DATE</small>
                                                <input type="date" class="form-control form-control-border">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>GENDER</small>
                                                <select class="custom-select form-control-border">
                                                    <option selected disabled>Select Gender</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>CIVIL STATUS</small>
                                                <select class="custom-select form-control-border">
                                                    <option selected disabled>Select Status</option>
                                                    <option>Single</option>
                                                    <option>Married</option>
                                                    <option>Widower</option>
                                                    <option>Seperated</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>CITIZENSHIP</small>
                                                <select class="custom-select form-control-border">
                                                    <option selected disabled>Select Gender</option>
                                                    <option>Filipino</option>
                                                    <option>America</option>
                                                    <option>China</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>STREET</small>
                                                <input type="text" class="form-control form-control-border"
                                                    placeholder="Enter Street">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>BARANGAY</small>
                                                <input type="text" class="form-control form-control-border"
                                                    placeholder="Enter Barangay">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>CITY / TOWN</small>
                                                <input type="text" class="form-control form-control-border"
                                                    placeholder="Enter City / Town">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <small>PRESENT ADDRESS</small>
                                                <input type="text" class="form-control form-control-border"
                                                    placeholder="Enter Present Address">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>MOBILE NO.</small>
                                                <input type="text" class="form-control form-control-border"
                                                    placeholder="Enter Mobile No.">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>TELEPHONE NO.</small>
                                                <input type="text" class="form-control form-control-border"
                                                    placeholder="Enter Telephone No.">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- END PERSONAL INFORMATION --}}
                        </div>

                        {{-- EMPLOYMENT STATUS --}}
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header bg-secondary">
                                    <span>OTHER INFORMATION</span>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>EMP. ID</small>
                                                <input type="text" class="form-control form-control-border"
                                                    placeholder="Emp. ID" readonly>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>BIO ID</small>
                                                <input type="text" class="form-control form-control-border"
                                                    placeholder="Enter BIO ID">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>CONTROL #</small>
                                                <input type="text" class="form-control form-control-border"
                                                    placeholder="Enter Control No.">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>GPRO #</small>
                                                <input type="text" class="form-control form-control-border"
                                                    placeholder="Enter Gpro No.">
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>EMPLOYMENT STATUS</small>
                                                <select class="custom-select form-control-border">
                                                    <option selected disabled>Select Status</option>
                                                    <option>Probationary</option>
                                                    <option>Regular</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>COMPANY</small>
                                                <select class="custom-select form-control-border">
                                                    <option selected disabled>Select Company</option>
                                                    <option>Aven</option>
                                                    <option>SDLM</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>MODE</small>
                                                <select class="custom-select form-control-border">
                                                    <option selected disabled>Select Mode</option>
                                                    <option>Monthly</option>
                                                    <option>Weekly</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>BRANCH</small>
                                                <select class="custom-select form-control-border">
                                                    <option selected disabled>Select Branch</option>
                                                    <option>Aven</option>
                                                    <option>San Rafael</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>Status</small>
                                                <select class="custom-select form-control-border">
                                                    <option selected disabled>Select Status</option>
                                                    <option>Active</option>
                                                    <option>Resigned</option>
                                                    <option>Terminated</option>
                                                    <option>AWOL</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>CLUSTER</small>
                                                <select class="custom-select form-control-border">
                                                    <option selected disabled>Select Cluster</option>
                                                    <option>Head Office</option>
                                                    <option>San Rafael</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>DATE APPLIED</small>
                                                <input type="date" class="form-control form-control-border">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>DEPARTMENT</small>
                                                <select class="custom-select form-control-border">
                                                    <option selected disabled>Select Department</option>
                                                    <option>IT</option>
                                                    <option>Accounting</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>DATE HIRED</small>
                                                <input type="date" class="form-control form-control-border">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>POSITION</small>
                                                <select class="custom-select form-control-border">
                                                    <option selected disabled>Select Position</option>
                                                    <option>IT</option>
                                                    <option>Accounting</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>DATE REGULAR</small>
                                                <input type="date" class="form-control form-control-border">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <small>DTR MODE</small>
                                                <select class="custom-select form-control-border">
                                                    <option selected disabled>Select Mode</option>
                                                    <option>Punching</option>
                                                    <option>Non Punching</option>
                                                    <option>Punching / Exclude Late</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- END EMPLOYMENT STATUS --}}
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>