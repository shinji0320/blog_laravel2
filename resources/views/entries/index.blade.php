<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
</head>
<body>
  <hi>Blog</hi>

  <ul>
  @foreach ($entries as $entry)
    <li>
      <a href="{{ action("EntriesController@view", $entry->id) }}">
        {{ $entry->title }}
      </a>
    </li>
  @endforeach
  </ul>
</body>
</html>