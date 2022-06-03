<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$in_search}}</title>
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
  <!-- Main Template CSS File -->
  <link rel="stylesheet" href="../css/app.css">
  <!-- style -->
  <style>
    .content {
      height: 100%;
    }

    .content::before {
      content: "";
      position: fixed;
      width: 300%;
      height: 100%;
      background-color: #0075ff;
      left: 50%;
      top: 50%;
      transform: translateX(-50%) skew(0, -10deg);
      border-radius: 50%;
      z-index: -1;
      animation: waving 5s ease-in-out infinite alternate;
      /* width: 50px;
    height: 50px;
    border-radius: 50%; */
    }

    @keyframes waving {
      from {
        transform: translateX(-50%) skew(0, -10deg);
      }

      to {
        transform: translateX(-30%) skew(10deg, 0);
      }
    }

    .card {
      width: 300px;
      padding: 20px;
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 0 10px #ddd inset;
    }
  </style>
</head>

<body>
  <div class=content>
    <div class="card">
      <h1>Your input was received as</h1>
      <table>
        <tr>
          <th>ID</th>
          <th>Timestamps</th>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
        </tr>
      </table>
      {{$in_search}}

      @foreach ($row as $key => $value)
      @if ($value == $in_search)
      @foreach ($row as $key => $value)
    </div>
  </div>
</body>

</html>