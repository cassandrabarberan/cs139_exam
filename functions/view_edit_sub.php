<div class="modal fade" id="edit_sub<?php echo $row['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Farmer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="functions/edit_sub.php?id=<?php echo $row['id']; ?>" method="post">
        <div class="modal-body">


            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="subject_code" name="subject_code" value="<?php echo $row['lastname']; ?>" >
              <label for="floatingInput">Last Name</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="course_id" name="course_id" value="<?php echo $row['firstname']; ?>" >
              <label for="floatingInput">First Name</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="course_description" name="course_description" value="<?php echo $row['middlename']; ?>" >
              <label for="floatingInput">Middle Name</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="total_units" name="total_units" value="<?php echo $row['total_units']; ?>" >
              <label for="floatingInput">total units</label>
            </div>

            <div class="form-floating mb-3">
              <select class="form-select" id="with_lab_component" name="with_lab_component" aria-label="Floating label select example" value="<?php echo $row['with_lab_component']; ?>">
                <option <?php if ($row['with_lab_component'] == "None") {echo "selected";} ?>>None</option>
                <option value='Female' <?php if ($row['with_lab_component'] == "YES") {echo "selected";} ?>>YES</option>
                <option value='Male' <?php if ($row['with_lab_component'] == "NO") {echo "selected";} ?>>NO</option>
              </select>
              <label for="floatingSelect">with_lab_component</label>
            </div>


            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="edit_sub" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>