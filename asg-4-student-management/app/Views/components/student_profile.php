<div>
  <h3>Detail Mahasiswa</h3>

  <div class="d-flex flex-column gap-1">
    <span>{!academic_status_cell!}</span>
    <span>{student_id} - {name}</span>
    <span>{study_program}</span>
    <span>Semester {current_semester}</span>
  </div>

  <div class="mt-4">
    <h5>Grades</h5>
    {!latest_grades_cell!}
  </div>


</div>