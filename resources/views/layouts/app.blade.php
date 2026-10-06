<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Business Dashboard')</title>
    <style>
        :root {
            --bg: #f3f6fb;
            --card: #ffffff;
            --primary: #1d4ed8;
            --primary-dark: #1e3a8a;
            --success: #16a34a;
            --warning: #f59e0b;
            --danger: #dc2626;
            --text: #172033;
            --muted: #56657a;
            --line: #dfe7f5;
        }

        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: var(--bg);
            color: var(--text);
        }

        .topbar {
            background: linear-gradient(135deg, var(--primary-dark), var(--primary));
            color: white;
            padding: 16px 24px;
            box-shadow: 0 6px 18px rgba(29, 78, 216, 0.18);
        }

        .nav {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .brand {
            font-size: 1.2rem;
            font-weight: 700;
            letter-spacing: 0.04em;
        }

        .nav-links {
            display: flex;
            gap: 18px;
            flex-wrap: wrap;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            opacity: 0.9;
        }

        .nav-links a:hover {
            opacity: 1;
        }

        .container {
            max-width: 1200px;
            margin: 28px auto;
            padding: 0 20px 40px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            margin-bottom: 22px;
        }

        .page-header h1 {
            margin: 0;
            font-size: 2rem;
        }

        .page-header p {
            margin: 8px 0 0;
            color: var(--muted);
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 18px;
            border-radius: 10px;
            border: 1px solid transparent;
            background: var(--primary);
            color: white;
            text-decoration: none;
            font-weight: 600;
            cursor: pointer;
        }

        .button.secondary {
            background: #e2e8f0;
            color: var(--text);
            border-color: var(--line);
        }

        .button.danger {
            background: var(--danger);
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-bottom: 24px;
        }

        .card {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.03);
            padding: 20px;
        }

        .stat-label {
            color: var(--muted);
            font-size: 0.9rem;
            margin-bottom: 8px;
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            margin: 0;
        }

        .table-wrap {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 16px;
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 14px 18px;
            border-bottom: 1px solid var(--line);
            text-align: left;
            vertical-align: top;
        }

        th {
            background: #f8fafc;
            color: var(--muted);
            font-size: 0.8rem;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        .actions {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .badge {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 999px;
            font-size: 0.76rem;
            font-weight: 700;
            background: #dbeafe;
            color: var(--primary-dark);
        }

        .badge.success {
            background: #dcfce7;
            color: #166534;
        }

        .badge.warning {
            background: #fef3c7;
            color: #92400e;
        }

        .badge.danger {
            background: #fee2e2;
            color: #991b1b;
        }

        .alert {
            border-radius: 10px;
            padding: 12px 14px;
            margin-bottom: 18px;
            border: 1px solid transparent;
        }

        .alert.success {
            background: #ecfdf5;
            border-color: #bbf7d0;
            color: #166534;
        }

        form {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 24px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--text);
        }

        input, select, textarea {
            width: 100%;
            padding: 11px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 10px;
            font-size: 1rem;
            background: white;
        }

        textarea {
            min-height: 110px;
            resize: vertical;
        }

        .form-actions {
            display: flex;
            gap: 12px;
            margin-top: 22px;
            flex-wrap: wrap;
        }

        .muted {
            color: var(--muted);
        }

        @media (max-width: 700px) {
            .page-header {
                align-items: flex-start;
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <header class="topbar">
        <nav class="nav">
            <div class="brand">Baugbog Operations</div>
            <div class="nav-links">
                <a href="{{ route('dashboard') }}">Dashboard</a>
                <a href="{{ route('employees.index') }}">Employees</a>
                <a href="{{ route('inventory.index') }}">Inventory</a>
                <a href="{{ route('orders.index') }}">Orders</a>
            </div>
        </nav>
    </header>

    <main class="container">
        @yield('content')
    </main>
</body>
</html>
