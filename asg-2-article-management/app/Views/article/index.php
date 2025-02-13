<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $web_title ?></title>
    <style>
      table,tr,td{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 12px;
      }
      button{
        cursor: pointer;
      }
    </style>
</head>
<body>
    <h3><?= $title ?></h3>
    <a href="/articles/new"><button>Add New Article</button></a>
    <hr>
    
    <div style="display: flex; flex-wrap: wrap; gap: 10px;">
      <?php foreach($articles as $row): ?>
        <a href="" style="color: black; text-decoration: none;">
          <div style="border: 1px solid black; padding: 20px;">
            <h3 style="margin: 0;"><?= $row->title;?></h3>
            <p style="text-align: justify;"><?= $row->content;?></p>
            <div style="display: flex; gap: 10px">
              <a href="/articles/show/<?= $row->id;?>/<?= $row->title;?>"">
                <button style="color: white; background-color: gray; padding: 5px;">Detail</button>
              </a>
              <a href="/articles/edit/<?= $row->id;?>/<?= $row->title;?>">
                <button style="color: white; background-color: blue; padding: 5px;">Edit</button>
              </a> 
             
              <form action="/articles/remove/<?= $row->id;?>" method="post" style="display: grid;width: fit-content; gap: 5px">
                <?= csrf_field() ?>
                <input type="hidden" name="_method" value="DELETE">
                <button style="color: white; background-color: red; padding: 5px;">Delete</button>
              </form>
                
            </div>
            
          </div>
        </a>
      <?php endforeach; ?>
    </div>
   
  </table>

</body>
</html>