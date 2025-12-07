<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor Académico</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            line-height: 1.6;
        }
        nav {
            background-color: #f8f9fa;
            padding: 10px;
            margin-bottom: 20px;
        }
        nav a {
            color: #333;
            text-decoration: none;
            margin-right: 15px;
        }
        nav a:hover {
            color: #007bff;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 4px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .profesor-info, .info-card {
            flex: 1;
            background-color: #fff;
            padding: 15px;
            border-radius: 4px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .profesor-actions, .actions {
            display: flex;
            gap: 10px;
            align-items: center;
        }
        form {
            margin: 20px 0;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        .form-control {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        .form-control:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 0 2px rgba(0,123,255,0.25);
        }
        .btn {
            background-color: #007bff;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .btn-danger {
            background-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        .success {
            color: #28a745;
            padding: 10px;
            background-color: #d4edda;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .error {
            color: #dc3545;
            padding: 10px;
            background-color: #f8d7da;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .info-card p {
            margin: 10px 0;
        }
        .info-card strong {
            color: #333;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('estudiantes.index') }}">Alumnos</a> |
        <a href="{{ route('profesores.index') }}">Profesores</a>
    </nav>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')
</body>
</html>
