<div>
  <h3>Detail Mahasiswa</h3>

  <div class="d-flex flex-column gap-1">
    <span>{!academic_status_cell!}</span>
    <span>{nim} - {nama}</span>
    <span>{program}</span>
    <span>Semester {semester}</span>
  </div>

  <div>
    <h5>Grades</h5>
    {!latest_grades_cell!}
  </div>
 

</div>