    @extends('layouts.adminmaster')
    @section('content')
    <!-- <div class="container">
        
        <!-- <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <!-- <div class="card">
                    <div class="card-header">
                        <h3 class="float-start">Wellcome to Dashboard</h3>
                        <a href="/admin-logout" class="float-end btn btn-primary">Logout</a>
                    </div>
                    <div class="card-body">
                       <!-- <table class="table tble-striped table-bordered">
                           <thead>
                               <tr>
                                   <th>Roll</th>
                                   <th>Phone</th>
                                   <th>Action</th>
                               </tr>
                           </thead>
                           <tbody>
                               @foreach($students as $stu)
                               <tr>
                                   <td>{{$stu->roll}}</td>
                                   <td>{{$stu->phone}}</td>
                                   <td>
                                       <a href="#" class="btn btn-primary">view</a>
                                       <a href="#" class="btn btn-primary">Edit</a>
                                   </td>
                               </tr>
                               @endforeach
                           </tbody>
                       </table> 
                    </div>
                    <div class="card-footer">
                        <h3>Geeta Technical HUB</h3>
                    </div>
                </div> 
            </div>
        </div> 
    </div> -->
    @include('includes.adminsidebar')
    <div class="main-content p-3">
        <div class="row">
            <div class="col-md-3">
                <a href="/students_view" style="text-decoration:none;" class="card card-custom">
                    <div class="card-body text-center shadow-lg">
                        <h4>All Student</h4>
                        <h3>1245</h3>
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <div class="card card-custom">
                    <div class="card-body text-center shadow-lg">
                        <h4>Drive Skill Assessments</h4>
                        <h3>1245</h3>
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-custom">
                    <div class="card-body text-center shadow-lg" data-bs-toggle="modal" data-bs-target="#password-reset">
                        <h4>Password Check</h4>
                        <h3>1245</h3>
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-custom">
                    <div class="card-body text-center shadow-lg" data-bs-toggle="modal" data-bs-target="#students_data_upload">
                        <h4>Student Details Uploads</h4>
                        <h3>1245</h3>
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-custom">
                    <div class="card-body text-center shadow-lg" data-bs-toggle="modal" data-bs-target="#crt_attendance_file">
                        <h4>CRT Attendance Uploads</h4>
                        <h3>1245</h3>
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="container">
        <!-- Password reset form start -->
        <div class="modal" id="password-reset">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Password Reset</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="/action_page.php">
                            <div class="mb-3 mt-3">
                                <label for="roll" class="form-label">ROLL NUMBER</label>
                                <input type="text" class="form-control" placeholder="Enter roll" name="roll">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Password reset form end -->
      <!-- Student Details Upload start -->
      <div class="modal" id="students_data_upload">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Student Details Upload</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="/action_page.php">
                            <div class="mb-3 mt-3">
                                <label for="roll" class="form-label">Student Details Upload</label>
                                <input type="file" name="file" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Student Details Upload end -->

      <!-- CRT Attendance file upload start -->
      <div class="modal" id="crt_attendance_file">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">CRT Attendance Upload</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="/action_page.php">
                            <div class="mb-3 mt-3">
                                <label for="roll" class="form-label">CRT Attendance File</label>
                                <input type="file" name="file" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- CRT Attendance file upload end -->
    </section>
    @stop
