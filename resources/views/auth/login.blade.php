<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  {{-- IMPORT CSS --}}
  <link rel="stylesheet" href="{{ asset('Css/sesi.css') }}">

    {{-- IMPORT BOOTSTRAP CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    {{-- IMPORT BOOTSTRAP ICON --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    {{-- IMPORT FONT --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <style>
    img {
      width: 800px;
      height: 710px;
      float: left;
      margin-right: 10px;
    }

    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      display: flex;
      background-color: #f0f0f0;
      border: 1px solid #ccc;
      border-radius: 8px;
      overflow: hidden;
      max-width: 100%;
    }

    .form {
      flex: 1;
      padding: 20px;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      width: 100%;
      /* Set form width to 100% */
      max-width: 400px;
      /* You can adjust the maximum width as needed */
      margin: 0 auto;
      /* Center the form */
    }

    img {
      max-width: 90%;
      height: auto;
    }

    h1 {
      text-align: center;
      font-size: 24px;
      margin-bottom: 20px;
    }

    .mb-3,
    .mb-4 {
      margin-bottom: 20px;
    }

    .btn-primary {
      background-color: #FF6347;
      /* Orange color */
      color: #fff;
      border: none;
      padding: 10px 0;
      /* Adjust padding for the button */
      font-size: 20px;
      /* Increase font size for the button */
      border-radius: 10px;
      /* Rounded corners for the button */
    }

    .btn-primary:hover {
      background-color: #FF6347;
      /* Darker shade of orange on hover */
    }

    .d-flex.align-items-center {
      justify-content: center;
    }

    .text-danger {
      color: red;
      /* Red color for error messages */
    }

    .text-primary {
      color: #007bff;
      /* Primary color for links */
    }

    a.text-primary:hover {
      text-decoration: underline;
      /* Underline the link on hover */
    }
  </style>
  <img src="{{ asset('img/loginregister.png') }}" alt="">

  {{-- <form action="/proseslogin" method="POST"> --}}
  @csrf
  {{-- FORM LOGIN --}}
  <aside>
    <div class="container" style="display: flex; justify-content: flex-end;">
      <div class="right">
        <form action="/Login" method="POST">
          @csrf
          <div class="form-floating mb-3">
            <input name="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
              id="floatingInput" placeholder="">
            <label for="floatingInput" class="{{ $errors->has('email') ? 'text-danger' : '' }}"><i
                class="bi bi-envelope me-2 {{ $errors->has('email') ? 'text-danger' : '' }}"></i> Email address</label>
            @if ($errors->has('email'))
              <div class="form-text" id="validasi">{{ $errors->first('email') }}</div>
            @endif
          </div>
          <div class="form-floating mb-2">
            <input name="password" type="password"
              class="form-control  {{ $errors->has('password') ? ' is-invalid' : '' }}" id="floatingPassword"
              placeholder="">
            <label for="floatingPassword" class="{{ $errors->has('email') ? 'text-danger' : '' }}"><i
                class="bi bi-key me-2 {{ $errors->has('email') ? 'text-danger' : '' }}"></i> Password</label>
            @if ($errors->has('password'))
              <div class="form-text" id="validasi">{{ $errors->first('password') }}</div>
            @endif
          </div>
          <div class="forget-password row">
            <div class="col-md-3 col-sm-3 col-3">
              <hr>
            </div>
            <div class="col-md-6 col-sm-6 col-6 text-center text-forget-password">
              <a href="/ForgetPassword" class="text-decoration-none" style="color: blue; font-size: 13px">Forgot
                Password?</a>
            </div>
            <div class="col-md-3 col-sm-3 col-3">
              <hr>
            </div>
          </div>
          <div class="d-grid mt-3">
            <button type="submit" class="btn">Sign In</button>
          </div>
        </form>
      </div>
    </div>
  </aside>
  </div>
  </div>

  </form>
  <style>
    .text-danger {
      color: red;
      /* Warna teks untuk pesan kesalahan */
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
