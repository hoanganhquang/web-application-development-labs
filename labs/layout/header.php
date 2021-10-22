<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hoàng Anh Quang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />

  <style>
    .upload-box {
      font-size: 15px;
      background: white;
      border-radius: 10px;
      box-shadow: 5px 5px 10px black;
      width: 100%;
      outline: none;
    }

    ::-webkit-file-upload-button {
      color: white;
      background: #206a5d;
      padding: 7px;
      border: none;
      border-radius: 10px;
      box-shadow: 1px 0 1px #6b4559;
    }

    ::-webkit-file-upload-button:hover {
      cursor: pointer;
      background: #438a5e;
    }

    .btnsub {
      background: #206A5D;
      color: white;
      border-radius: 5px;
      border-style: none;
      padding: 5px;
    }

    .btnsub:hover {
      background: gray;
      color: black
    }

    tbody td {
      font-weight: 400;
    }

    .milkbranch a,
    .customers a {
      text-decoration: none;
      color: #F00C31;
    }

    .del-btn {
      border-style: none;
      background: white;
      color: #F00C31;
    }

    .content {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .content .card-body {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .content img {
      width: 286px;
      height: 215px;
    }

    .card-body .head {
      margin-bottom: 30px;
    }

    #pagination {
      float: right;
      margin-bottom: 30px;
    }

    #pagination a {
      color: black;
      float: left;
      padding: 8px 16px;
      text-decoration: none;
      transition: background-color .3s;
    }

    #pagination a.active {
      background-color: dodgerblue;
      color: white;
    }

    #pagination a:hover:not(.active) {
      background-color: #ddd;
    }

    .container-details {
      display: flex;
      justify-content: center;
    }

    .home {
      position: absolute;
      top: 15px;
      left: 30px;
      font-size: 20px;
    }

    .customers img {
      width: 30px;
    }
  </style>

</head>

<body>

  <a href="/labs" class="home">Home</a>