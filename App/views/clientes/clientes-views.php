<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Clientes</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>App/assets/css/style.css">
</head>

<body>
    <div class="dashboard-container">
        <!-- Barra lateral de menú -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Sistema</h2>
            </div>
            <nav class="menu">
                <a href="#" class="menu-item">Inicio</a>
                <a href="<?= BASE_URL ?>App?v=categories" class="menu-item">Gestión de Categorías</a>
                <a href="<?= BASE_URL ?>App?v=products" class="menu-item">Gestión de Productos</a>
                <a href="<?= BASE_URL ?>App?v=clients" class="menu-item">Gestión de Clientes</a>
                <a href="#" class="menu-item">Reportes</a>
                <a href="#" class="menu-item">Configuración</a>
            </nav>
        </aside>

        <!-- Contenido principal -->
        <div class="main-content">
            <!-- Barra de navegación superior -->
            <header class="topbar">
                <h1 class="system-name">Nombre del Sistema</h1>
                <button class="logout-button" onclick="logout()">Cerrar Sesión</button>
            </header>

            <!-- Vista principal del sistema -->
            <div class="content-view">
                <h2>Gestión de Clientes</h2>
                <p>Gestión y administración de clientes</p>
            </div>

            <!-- Formulario y tabla de clientes -->
            <section class="content-body">
                <!-- Formulario de clientes -->
                <div class="form-container">
                    <form action="">
                        <div class="form-group">
                            <label for="txtnombre">Nombre</label>
                            <input type="text" name="txtnombre" id="txtnombre" placeholder="Ingrese el nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="txtapellido">Apellido</label>
                            <input type="text" name="txtapellido" id="txtapellido" placeholder="Ingrese el apellido" required>
                        </div>
                        <div class="form-group">
                            <label for="txtDNI">DNI</label>
                            <input type="number" name="txtDNI" id="txtDNI" placeholder="Ingrese Numero de DNI" required>
                        </div>
                        <div class="form-group">
                            <label for="txtnacionalidad">Nacionalidad</label>
                            <input type="text" name="txtnacionalidad" id="txtnacionalidad" placeholder="Ingrese nacionalidad" required>
                        </div>
                        <div class="form-group">
                            <label for="txtfechaNacimiento">Fecha de Nacimiento</label>
                            <input type="date" name="txtfechaNacimiento" id="txtfechaNacimiento" required>
                        </div>
                        <div class="form-group">
                            <label for="txttelefono">Número de Teléfono</label>
                            <input type="tel" name="txttelefono" id="txttelefono" placeholder="Ingrese el número de teléfono" required>
                        </div>
                        <div class="form-group">
                            <label for="txtcorreo">Correo</label>
                            <input type="email" name="txtcorreo" id="txtcorreo" placeholder="Ingrese el correo electrónico" required>
                        </div>
                        <div class="form-actions">
                            <button type="reset" class="btn btn-secondary">Limpiar</button>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </form>
                </div>

                <!-- Tabla de clientes -->
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>DNI</th>
                                <th>Nacionalidad</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Teléfono</th>
                                <th>Correo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Datos de clientes  -->
                            <tr>
                                <td>01</td>
                                <td>Mateo</td>
                                <td>Huaman</td>
                                <td>34232312</td>
                                <td>Peruana</td>
                                <td>1999-11-07</td>
                                <td>934123456</td>
                                <td>mateohuaman@gmail.com</td>
                                <td>
                                
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
    <script>
        let base_url = "<?= BASE_URL ?>";
    </script>
    <script src="<?= BASE_URL ?>App/assets/js/js main.js"></script>

</body>

</html>