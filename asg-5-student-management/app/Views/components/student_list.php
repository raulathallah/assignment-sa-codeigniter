<table class="table">
  <thead>
    <td>NIM</td>
    <td>Name</td>
    <td>Study Program</td>
    <td>GPA</td>
    <td>Current Semester</td>
    <!--  <td>Academic Status</td> -->
    <td>Entry Year</td>



    <td>Action</td>
  </thead>
  {mahasiswa}
  <tr>
    <td>{student_id}</td>
    <td>{name}</td>
    <td>{study_program}</td>
    <td>{gpa}</td>
    <td>{current_semester}</td>
    <td>{entry_year}</td>

    <!--  
     <td>{academic_status}</td>
      <td>
        <ul>
          {courses}
            <li>{courseName}</li>
          {/courses}
        </ul>
      </td>
    -->

    <td>
      <a href="/mahasiswa/detail/{id}">Detail</a>
      <a href="/mahasiswa/edit/{id}">Edit</a>
      <a href="/mahasiswa/delete/{id}">Delete</a>
    </td>
  </tr>
  {/mahasiswa}
</table>