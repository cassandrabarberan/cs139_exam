<!-- Modal -->
<div class="modal fade" id="add_subject" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Subject</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="functions/add_sub.php" method="post">
                <div class="modal-body">

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="id"  placeholder="">
                        <label for="floatingInput">Subject ID</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="subject_code"  placeholder="">
                        <label for="floatingInput">Subject Code</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="course_id"  placeholder="">
                        <label for="floatingInput">Course ID</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="course_description"  placeholder="">
                        <label for="floatingInput">Course Description</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="total_units"  placeholder="">
                        <label for="floatingInput">Total Units</label>
                    </div>

                    <div class="form-floating mb-3">
                        <select class="form-select" id="with_lab_component"  aria-label="Floating label select example">
                            <option selected>None</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <label for="with_lab">With Lab Component</label>
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="add_subject_course" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>