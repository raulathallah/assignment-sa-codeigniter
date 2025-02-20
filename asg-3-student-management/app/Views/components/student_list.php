<table class="table">
  <thead>
    <td>NIM</td>
    <td>Nama</td>
    <td>Semester</td>
    <td>GPA</td>
    <td>Program</td>
    <td>Courses</td>
    <td>Action</td>
  </thead>
  {mahasiswa}
    <tr>
      <td>{nim}</td>
      <td>{nama}</td>
      <td>{semester}</td>
      <td>{gpa}</td>
      <td>{program}</td>
      <td>
        <ul>
          {courses}
            <li>{courseName}</li>
          {/courses}
        </ul>
      </td>
      <td>
        <a href="/mahasiswa/detail/{nim}">Detail</a>
        <a href="/mahasiswa/edit/{nim}">Edit</a>
        <a href="/mahasiswa/delete/{nim}">Delete</a>
      </td>
    </tr>
  {/mahasiswa}
</table>