{students}
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
{/students}