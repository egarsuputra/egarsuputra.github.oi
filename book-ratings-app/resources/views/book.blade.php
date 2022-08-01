<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <style>
    body {
      font-family: "Calibri";
    }

    .row {
      width: 70%;
      margin: auto;
    }

    table {
      border-collapse: collapse;
    }

    th, td {
      padding: 2px 5px;
    }
  </style>
  <div class="row">
    <table border="1">
      <thead>
        <tr>
          <th>No</th>
          <th>Book Name</th>
          <th>Category Name</th>
          <th>Author Name</th>
          <th>Average Rating</th>
          <th>Voter</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($books as $book)
        <tr>
          <td>{{ $loop->iteration }}</td>    
          <td>{{ $book->book_name }}</td>   
          <td>{{ $book->category->category}}</td> 
          <td>{{ $book->author->author}}</td> 
          <td>{{ round( $book->rating->avg('rate') )}}</td>
          <td>{{ $book->rating->count() }}</td>
        </tr>
        @endforeach
  
      </tbody>
    </table>
  </div>
</body>
</html>