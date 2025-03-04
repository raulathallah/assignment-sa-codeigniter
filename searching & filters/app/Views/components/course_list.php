<table class="table">
  <thead>
    <td>ID</td>
    <td>Course Name</td>
    <td>Credits</td>
    <td>Semester</td>

    <td>Action</td>
  </thead>

  {courses}
  <tr>
    <td>{code}</td>
    <td>{name}</td>
    <td>{credits}</td>
    <td>{semester}</td>
    <!-- 
      <td>{created_at}</td>
      <td>{updated_at}</td>
    -->

    <td>
      <a href="/course/detail/{id}">Detail</a>
      <a href="/course/edit/{id}">Edit</a>
      <a href="/course/delete/{id}">Delete</a>
    </td>
  </tr>
  {/courses}
</table>