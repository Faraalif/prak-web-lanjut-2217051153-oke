<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stylish Form</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background-color: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        label {
            font-size: 14px;
            color: #666;
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus {
            border-color: #f5576c;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #f5576c;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #d94556;
        }

        button:active {
            background-color: #bf3d4a;
        }

        @media (max-width: 480px) {
            .form-container {
                padding: 30px;
            }
            h2 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Form</h2>
        <form action="{{route('user.store')}}" method="POST">
            @csrf
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" placeholder="Masukan nama anda">
            <label for="kelas">Kelas</label>
            <input type="text" name="kelas" id="kelas" placeholder="Masukan kelas anda">
            <label for="npm">NPM</label>
            <input type="text" name="npm" id="npm" placeholder="Masukan NPM anda">
            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>