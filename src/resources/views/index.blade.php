@extends('layouts.default')
<style>
  th {
    background-color: #85d854;
    /* background-color: #55c500; */
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

  .button{
    background-color: #85d854;
    padding: 5px 10px;
    display:inline-block;
    font-weight:bold;
    margin:0 0 20px 0;
    cursor:pointer

  }
  .button a{
    color: white;
    text-decoration:none;

  }
  .button:hover{
    background-color: #55c500;
}

</style>
@section('title', 'ToDoリスト')

@section('content')
<div class="button">
    <a href="/add">タスクを登録</a>
</div>    
<table>
  <tr>
    <th>ID</th>
    <th>登録者名</th>
    <th>内容</th>
    <th>期限</th>
    <th>備考</th>
    <th></th>
    <th></th>

  </tr>
  @foreach ($tasks as $task)
  <tr>
    <td>{{$task->id}}</td>
    <td>{{$task->name}}</td>
    <td>{{$task->detail}}</td>
    <td>{{$task->deadline}}</td>
    <td>{{$task->remark}}</td>
    <td>  
        <div class="button">
            <a href="/edit?id={{$task->id}}">編集</a>
        </div> 
    </td>
    <td>  
        <div class="button">
            <a href="/delete?id={{$task->id}}">削除</a>
        </div> 
    </td>
  </tr>

  @endforeach
</table>
@endsection