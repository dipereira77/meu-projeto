<!DOCTYPE html>
<html>
<head>
    <title>Calculadora ETEC</title>
</head>
<body>
    <h2>Calculadora do Prof. Diógenes</h2>

    <form action="/calcular" method="POST">
        @csrf <input type="number" name="n1" placeholder="Número 1" required>
        
        <select name="operacao">
            <option value="soma">+</option>
            <option value="sub">-</option>
            <option value="mult">*</option>
            <option value="div">/</option>
        </select>
        
        <input type="number" name="n2" placeholder="Número 2" required>
        
        <button type="submit">Calcular</button>
    </form>

    @isset($resultado)
        <hr>
        <h3>Resultado: {{ $resultado }}</h3>
    @endisset
</body>
</html>