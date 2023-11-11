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
</style>
@section('title', 'タスクを編集')

@section('content')
<div class="button">
    <a href="/">一覧に戻る</a>
</div> 
<form action="/edit" method="POST">
  <table>
    @csrf
    <tr>
      <th>
        ID
      </th>
      <td>
        <input type="text" name="id" value="{{$form->id}}">
      </td>
    </tr>
    <tr>
      <th>
        登録者名
      </th>
      <td>
        <input type="text" name="name" value="{{$form->name}}">
      </td>
    </tr>
    <tr>
      <th>
        内容
      </th>
      <td>
        <input type="text" name="detail" value="{{$form->detail}}">
      </td>
    </tr>
    <tr>
      <th>
        期限
      </th>
      <td>
        <input type="date" name="deadline" value="{{$form->deadline}}">
      </td>
    </tr>
    <tr>
      <th>
        備考
      </th>
      <td>
        <input type="text" name="remark" value="{{$form->remark}}">
      </td>
    </tr>
    <tr>
      <th></th>
      <td>
        <button>確定</button>
      </td>
    </tr>
  </table>
</form>
@endsection