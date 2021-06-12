<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>
</head>
<body>
<h2>BOOK LIST</h2>
<a href="{{route('exportbuku')}}" class="btn btn-success">Export</a></div>
<table>
  <tr>
  <th>ID</th>
    <th>Judul</th>
    <th>Tahun Terbit</th>
    
  </tr>
  @foreach($buku as $item)
    <tr>
    <td>{{$item->id}}</td>
    <td>{{$item->judul}}</td>
    <td>{{$item->tahun_terbit}}</td>
    
    
    </tr>
  @endforeach
</table>



</body>
</html>