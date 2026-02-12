<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Contacto</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #667eea, #764ba2, #ff758c);
        }

        .card {
            width: 100%;
            max-width: 450px;
            padding: 40px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            border: 1px solid rgba(255,255,255,0.3);
            color: white;
        }

        .card h2 {
            text-align: center;
            margin-bottom: 10px;
            font-size: 28px;
        }

        .card p {
            text-align: center;
            font-size: 14px;
            margin-bottom: 25px;
            opacity: 0.9;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
        }

        input, textarea {
            width: 100%;
            padding: 12px 15px;
            border-radius: 12px;
            border: none;
            outline: none;
            font-size: 14px;
            background: rgba(255,255,255,0.25);
            color: white;
            transition: 0.3s ease;
        }

        input::placeholder,
        textarea::placeholder {
            color: rgba(255,255,255,0.7);
        }

        input:focus,
        textarea:focus {
            background: rgba(255,255,255,0.35);
            box-shadow: 0 0 0 2px white;
        }

        textarea {
            resize: none;
            height: 100px;
        }

        .btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 12px;
            background: white;
            color: #764ba2;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .btn:hover {
            background: #f1f1f1;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .note {
            margin-top: 15px;
            font-size: 12px;
            text-align: center;
            opacity: 0.8;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>📩 Contáctanos</h2>
        <p>Este formulario es solo visual (no envía datos).</p>
    
        <form action= "/store" method="GET">
            <div class="form-group">
                <label>Email</label>
                <input name="email" type="email" placeholder="ejemplo@correo.com">
            </div>

            <div class="form-group">
                <label>Mensaje</label>
                <textarea name="message" placeholder="Mensaje"></textarea>
            </div>

            <button type="submit" class="btn">Enviar Mensaje</button>

            <div class="note">
                Diseño demostrativo sin funcionalidad en backend.
            </div>
        </form>
    </div>

</body>
</html>
