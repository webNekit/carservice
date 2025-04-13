<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Накладная #{{ $client->id }}</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        .section { margin-bottom: 20px; }
        h1 { text-align: center; }
    </style>
</head>
<body>
    <h1>Накладная</h1>

    <div class="section">
        <strong>Клиент:</strong> {{ $client->full_name }}<br>
        <strong>Сотрудник:</strong> {{ $user->name }}<br>
    </div>

    <div class="section">
        <strong>Автомобиль:</strong> {{ $car->brand->name }} {{ $car->model->name }} ({{ $car->vin }})<br>
    </div>

    <div class="section">
        <strong>Услуга:</strong> {{ $service->name }}<br>
        <strong>Стоимость:</strong> {{ $cost }} руб.<br>
        <strong>Итоговая стоимость:</strong> {{ $finalCost }} руб.<br>
        <strong>Дата сдачи:</strong> {{ $completionDate ? \Carbon\Carbon::parse($completionDate)->format('d.m.Y') : '' }}
    </div>

    <div class="section">
        <strong>Примечание:</strong><br>
        <p>{{ $note }}</p>
    </div>
</body>
</html>
