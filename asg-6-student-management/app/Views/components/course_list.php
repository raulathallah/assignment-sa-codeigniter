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
    <a class="btn btn-outline-primary" href="/course/detail/{id}">Detail</a>
    <a class="btn btn-outline-warning" href="/course/edit/{id}">Edit</a>
    <a class="btn btn-outline-danger" href="/course/delete/{id}">Delete</a>
  </td>
</tr>
{/courses}