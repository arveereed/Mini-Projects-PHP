<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CRUD</title>
  </head>
  <body>
    <div class="container">
      <header class='d-flex justify-content-between my-4'>
        <h1>Add new Book</h1>
        <div>
          <a href="#" class='btn btn-primary'>Back</a>
        </div>
      </header>

      <form action="inc/add_book.inc.php" method="post">
        <div class="form-element my-4">
          <input type="text" class="form-control" name='title' placeholder="Book Title: ">
        </div>
        <div class="form-element my-4">
          <input type="text" class="form-control" name='author' placeholder="Author Name: ">
        </div>
        <div class="form-element my-4">
          <select name="type" class="form-control">
            <option value="">Select Book Type</option>
            <option value="adventure">Adventure</option>
            <option value="fantasy">Fantasy</option>
            <option value="scifi">Sci-Fi</option>
            <option value="horror">Horror</option>
          </select>
        </div>
        <div class="form-element my-4">
          <input type="text" class="form-control" name="description" placeholder='Book Description:'>
        </div>
        <div class="form-element">
          <button class="btn btn-success">Add Book</button>
        </div>
      </form>
    </div>
  </body>
</html>