<template>
<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Course Management</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create Course</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Course Name</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Course Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputDescription1">Description</label>
                                        <textarea class="form-control" rows="3" id="exampleInputDescription" placeholder="Description"></textarea>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success btn-block">Create</button>
                                    </div>                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputDescription2">Learning Outcomes</label>
                                        <textarea class="form-control" rows="3" id="exampleInputDescription2" placeholder="Learning Outcome"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelect">Status</label>
                                        <select class="custom-select rounded-0" id="exampleSelect">
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Minimum Recommended: 540p x 480p</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>                               
                                
                            </div>
                            <!-- /.card-body -->
                            
                        </form>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Available Courses</h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Course Name</th>
                            <th>Description</th>
                            <th>Learning Outcomes</th>
                            <th>Status</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>183</td>
                            <td>Grade 10</td>
                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                            <td>Active</td>
                            <td>Delete / Update</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
</template>