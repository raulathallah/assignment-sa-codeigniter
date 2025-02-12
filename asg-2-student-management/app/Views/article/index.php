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
    <a href="/article/new"><button>Add New Article</button></a>
    <hr>
    
    <div style="display: flex; flex-wrap: wrap; gap: 10px;">
      <?php foreach($articles as $row): ?>
        <a href="<?= url_to('article_detail', $row->id, $row->title); ?>" style="color: black; text-decoration: none;">
          <div style="border: 1px solid black; padding: 20px;">
            <h3 style="margin: 0;"><?= $row->title;?></h3>
            <p style="text-align: justify;"><?= $row->content;?></p>
            <div style="display: flex; gap: 10px">
              <a href="<?= url_to('article_detail', $row->id, $row->title); ?>">
                <button style="color: white; background-color: gray; padding: 5px;">Detail</button>
              </a>
              <a href="<?= url_to('article_edit', $row->id, $row->title); ?>">
                <button style="color: white; background-color: blue; padding: 5px;">Edit</button>
              </a>
              <a href="article/delete/<?= $row->id;?>">
                <button style="color: white; background-color: red; padding: 5px;">Delete</button>
              </a>
            </div>
            
          </div>
        </a>
      <?php endforeach; ?>
    </div>
   
  </table>

</body>
</html>