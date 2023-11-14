@extends('layouts.default')
<style>
 th {
    background-color: #85d854;
    color: white;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td{
    background-color: #e3f7df;
  }
  td {
    padding: 25px 40px;
    background-color: #f9f9f9;
    text-align: center;
  }
  button {
    padding: 10px 20px;
    background-color: #85d854;
    border: none;
    color: white;
    font-weight: bold;
    font-size:15px;
    cursor:pointer
  }
  button:hover{
    background-color: #55c500;
}
  .button{
    background-color: #85d854;
    padding: 5px 10px;
    display:inline-block;
    font-weight:bold;
    cursor:pointer;
    margin:0 0 20px 3px;
    /* width:100px; */


  }
  .button a{
    color: white;
    text-decoration:none;

  }
  .button:hover{
    background-color: #55c500;
}
p{
  color:red;
  font-weight:bold;
}
</style>
@section('title', 'タスクを削除')

@section('content')
<p>以下の内容を削除します</p>
<div class="button">
    <a href="/">一覧に戻る</a>
</div>
<table>
    <tr>
      <th>ID</th>
      <td>{{$task->id}}</td>
    </tr>
    <tr>
      <th>登録者名</th>
      <td>{{$task->name}}</td>
    </tr>
    <tr>
      <th>内容</th>
      <td>{{$task->detail}}</td>
    </tr>
    <tr>
      <th>期限</th>
      <td>{{$task->deadline}}</td>
    </tr>
    <tr>
      <th>備考</th>
      <td>{{$task->remark}}</td>
    </tr>
    <tr>
      <th></th>
      <td>
        <form action="/delete?id={{$task->id}}" method="POST">
            @csrf
            <button>削除</button>
        </form>
    </td>
    </tr>
</table>

@endsection