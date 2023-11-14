@extends('layouts.default')
<style>

  th {
    background-color: #85d854;
    color: white;
    padding: 5px 40px;
    text-align: left;

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
  li{
    color:red;
    font-weight:bold;
  }

.label-required{
    background-color:red;
    padding:5px;
    border-radius:5px;
    font-size:13px;
    margin-left:9px;
  }
</style>
@section('title', 'タスクを登録')

@section('content')
@if (count($errors) > 0)
<!-- <p>入力に問題があります</p> -->
<ul>
  @foreach ($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
@endif
<div class="button">
    <a href="/">一覧に戻る</a>
</div> 
<form action="/add" method="post">
  <table>
  @csrf
    <tr>
      <th>登録者名<span class="label-required">必須</span></th>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <th>内容<span class="label-required">必須</span></th>
      <td><input type="text" name="detail"></td>
    </tr>
    <tr>
      <th>期限<span class="label-required">必須</span></th>
      <td><input type="date" name="deadline"></td>
    </tr>
    <tr>
      <th>備考</th>
      <td><input type="text" name="remark"></td>
    </tr>
    <tr>
      <th></th>
      <td><button>登録</button></td>
    </tr>
  </table>
</form>

@endsection